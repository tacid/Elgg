<?php
/**
 * Anypage
 */

elgg_register_event_handler('init', 'system', 'anypage_init');

/**
 * Anypage init
 */
function anypage_init() {
	elgg_register_admin_menu_item('configure', 'anypage', 'appearance');
	// fix for selecting the right section in admin area
	elgg_register_plugin_hook_handler('prepare', 'menu:page', 'anypage_init_fix_admin_menu');

	$actions = dirname(__FILE__) . '/actions/anypage';

	elgg_register_action('anypage/save', "$actions/save.php", 'admin');
	elgg_register_action('anypage/delete', "$actions/delete.php", 'admin');

	elgg_extend_view('js/elgg', 'anypage/js');
	elgg_extend_view('css/admin', 'anypage/admin_css');

	elgg_register_plugin_hook_handler('route', 'all', 'anypage_router');
	elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'anypage_walled_garden_public_pages');
}

/**
 * Select the right menu entry for admin section
 *
 * @param type $hook
 * @param type $type
 * @param type $value
 * @param type $params
 * @return null
 */
function anypage_init_fix_admin_menu($hook, $type, $value, $params) {
	if (!(elgg_in_context('admin') && elgg_in_context('anypage'))) {
		return null;
	}

	if (isset($value['configure'])) {
		foreach ($value['configure'] as $item) {
			if ($item->getName() == 'appearance') {
				foreach($item->getChildren() as $child) {
					if ($child->getName() == 'appearance:anypage') {
						$item->setSelected();
						$child->setSelected();
						break;
					}
				}
				break;
			}
		}
	}
}

/**
 * Route to the correct page if defined. Allows a fallthrough to the 404 error page otherwise.
 *
 * @param $hook
 * @param $type
 * @param $value
 * @param $params
 */
function anypage_router($hook, $type, $value, $params) {
	$handler = elgg_extract('handler', $value);
	$pages = elgg_extract('segments', $value, array());
	array_unshift($pages, $handler);
	$path = AnyPage::normalizePath(implode('/', $pages));

	$page = AnyPage::getAnyPageEntityFromPath($path);
	if (!$page) {
		return;
	}

	if ($page->requiresLogin()) {
		gatekeeper();
	}

	if ($page->usesView()) {
		// route to view
		echo elgg_view($page->getView());
		exit;
	} else {
		// display entity
		$content = elgg_view_entity($page);
		$body = elgg_view_layout('one_column', array('content' => $content));
		echo elgg_view_page($page->title, $body);
		exit;
	}
}

/**
 * Prepare form variables for page edit form.
 *
 * @param mixed $page
 * @return array
 */
function anypage_prepare_form_vars($page = null) {
	$values = array(
		'title' => '',
		'page_path' => '',
		'description' => '',
		'use_view' => false,
		'visible_through_walled_garden' => false,
		'requires_login' => false,
		'guid' => null,
		'entity' => $page,
	);

	if ($page) {
		foreach (array_keys($values) as $field) {
			if (isset($page->$field)) {
				$values[$field] = $page->$field;
			}
		}
	}

	if (elgg_is_sticky_form('anypage')) {
		$sticky_values = elgg_get_sticky_values('anypage');
		foreach ($sticky_values as $key => $value) {
			$values[$key] = $value;
		}
	}

	elgg_clear_sticky_form('anypage');

	return $values;
}

/**
 * Registers pages visible through walled garden with public pages
 *
 * @param type $hook
 * @param type $type
 * @param type $value
 * @param type $params
 * @return type
 */
function anypage_walled_garden_public_pages($hook, $type, $value, $params) {
	$paths_tmp = AnyPage::getPathsVisibleThroughWalledGarden();
	$paths_tmp = array_map('preg_quote', $paths_tmp);
	// the return value expect no leading slash. blarg

	$paths = array();
	foreach ($paths_tmp as $path) {
		$paths[] = ltrim($path, '/');
	}

	$value = array_merge($value, $paths);
	return $value;
}