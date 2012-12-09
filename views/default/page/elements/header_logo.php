<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>"><span style="font-size: x-large; font-style: normal;">Рабочая площадка клуба</span> 
		<?php echo $site_name; ?>
	</a>
</h1>
