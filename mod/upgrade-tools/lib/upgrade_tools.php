<?php

/**
 * Process upgrades for the videolist plugin
 */
function upgrade_module_run($module) {
	$path = elgg_get_plugins_path() . "$module/upgrades/";
	$files = elgg_get_upgrade_files($path);
	foreach ($files as $file) {
		include "$path{$file}";
	}
}

function upgrade_change_subtype($entity, $subtype) {
	$dbprefix = elgg_get_config('dbprefix');
	$subtype_id = add_subtype('object', $subtype);
	update_data("UPDATE {$dbprefix}entities set subtype=$subtype_id WHERE guid=$entity->guid");
	return true;
}

function upgrade_update_river($id, $view, $object_guid, $annotation_id) {
	$dbprefix = elgg_get_config('dbprefix');
	update_data("UPDATE {$dbprefix}river set view='$view', object_guid=$object_guid, annotation_id=$annotation_id WHERE id=$id");
	return true;
}
