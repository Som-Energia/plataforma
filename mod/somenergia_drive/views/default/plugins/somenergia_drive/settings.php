<?php
/**
 * somenergia_drive settings
 */

$instructions = elgg_echo('somenergia_drive:settings:instructions', array(elgg_get_site_url()));

$entity = elgg_get_config('entity');

$id_folder_string = elgg_echo('somenergia_drive:id_folder');
$id_folder_view = elgg_view('input/text', array(
	'name' => 'params[id_folder]',
	'value' => $entity->id_folder,
	'class' => 'elgg-input-thin',
));

$id_guid_string = elgg_echo('somenergia_drive:id_groupid');
$id_guid_view = elgg_view('input/text', array(
    'name' => 'params[id_groupid]',
    'value' => $entity->id_groupid,
    'class' => 'elgg-input-thin',
));


$view_drive_string = elgg_echo('somenergia_drive:view_drive');
	$view_drive_view = elgg_view('input/dropdown', array(
		'name' => 'params[type_view]',
		'options_values' => array(
			'list' => elgg_echo('option:list'),
			'grid' => elgg_echo('option:grid'),
		),
		'value' => $entity->type_view ? $entity->type_view : 'grid',
	));
	$view_drive = "<div>$view_drive_string $view_drive_view</div>";



$settings = <<<__HTML
<div class="elgg-content-thin mtm"><p>$instructions</p></div>
<div><label>$id_folder_string</label><br /> $id_folder_view</div>
<div><label>$id_guid_string</label><br /> $id_guid_view</div>
$view_drive
__HTML;

echo $settings;