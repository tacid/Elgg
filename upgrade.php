<?php
/**
 * Elgg upgrade script.
 *
 * This script triggers any necessary upgrades. If the site has been upgraded
 * to the most recent version of the code, no upgrades are run and the caches
 * are flushed. If you would prefer that this script is not accessible to others
 * after an upgrade, you can delete it. Future versions of Elgg will include a
 * new version of the script. Deleting the script is not a requirement and
 * leaving it behind does not affect the security of the site.
 *
 * @package Elgg.Core
 * @subpackage Upgrade
 */

function upgrade_lock() {
	global $CONFIG, $DB_QUERY_CACHE;
	
	$is_locked = count(get_data("show tables like '{$CONFIG->dbprefix}locked'"));
	
	// Invalidate query cache
	if ($DB_QUERY_CACHE) {
		$DB_QUERY_CACHE->clear();
		elgg_log("Query cache invalidated", 'NOTICE');
	}
	
	if (!$is_locked) {
		// lock it
		insert_data("create table {$CONFIG->dbprefix}locked (id INT)");
		error_log('Upgrade continue running');
		return true;
	}
	
	error_log('Upgrade is locked');
	return false;
}

function upgrade_unlock() {
	global $CONFIG;
	delete_data("drop table {$CONFIG->dbprefix}locked");
	error_log('Upgrade unlocks itself');
}


// we want to know if an error occurs
ini_set('display_errors', 1);

define('UPGRADING', 'upgrading');
require_once(dirname(__FILE__) . "/engine/start.php");

if (get_input('upgrade') == 'upgrade') {
	
	// prevent someone from running the upgrade script in parallel (see #4643)
	if (!upgrade_lock()) {
		forward();
	}
	
	// disable the system log for upgrades to avoid exceptions when the schema changes.
	elgg_unregister_event_handler('log', 'systemlog', 'system_log_default_logger');
	elgg_unregister_event_handler('all', 'all', 'system_log_listener');
	
	if (elgg_get_unprocessed_upgrades()) {
		version_upgrade();
	}

	// turn off time limit so plugins that have upgrade scripts aren't interrupted
	set_time_limit(0);
	elgg_trigger_event('upgrade', 'system', null);
	elgg_invalidate_simplecache();
	elgg_reset_system_cache();
	
	// critical region has past
	upgrade_unlock();
	
} else {
	// if upgrading from < 1.8.0, check for the core view 'welcome' and bail if it's found.
	// see http://trac.elgg.org/ticket/3064
	// we're not checking the view itself because it's likely themes will override this view.
	// we're only concerned with core files.
	$welcome = dirname(__FILE__) . '/views/default/welcome.php';
	if (file_exists($welcome)) {
		elgg_set_viewtype('failsafe');
		// can't have pretty messages because we don't know the state of the views.
		$content = elgg_echo('upgrade:unable_to_upgrade_info');
		$title = elgg_echo('upgrade:unable_to_upgrade');
		
		echo elgg_view_page($title, $content);
		exit;
	}

	echo elgg_view_page(elgg_echo('upgrading'), '', 'upgrade');
	exit;
}

forward();
