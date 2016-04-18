<?php



$export_title = elgg_echo('export_users_csv:report');
$export = '<p>' . elgg_echo('export_users_csv:description') .'</p>';
$params = array(
	'text' => elgg_echo('export_users_csv:download'),
	'href' => 'action/export_users_csv/download',
	'class' => 'elgg-button elgg-button-submit',
	'is_action' => true,
	'is_trusted' => true,
);
$export .= '<p>' . elgg_view('output/url', $params) . '</p>';

echo elgg_get_logged_in_user_entity();

echo elgg_view_module('inline',$export_title, $export, array('class' => 'elgg-form-settings'));