<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//0B3CsItFj_3zadEMwOUp1b1BoZkk <iframe src="https://www.google.com/drive/embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=73q91crmmthkfqi1jgtj02flks%40group.drive.google.com&amp;color=%23333333&amp;ctz=Europe%2FMadrid" style=" border-width:0 " scrolling="no" frameborder="0" height="600" width="100%"></iframe>

$title = elgg_echo('item:object:somenergia_drive');

$setting = elgg_get_plugin_setting('id_folder', 'somenergia_drive');
$view = elgg_get_plugin_setting('type_view', 'somenergia_drive');

$content = '<iframe src="https://drive.google.com/embeddedfolderview?id='. $setting.'#'. $view .'" width="600" height="600" frameborder="0"></iframe>';


$body = elgg_view_layout('content', array(
	'filter_context' => 'all',
	'content' => $content,
	'title' => $title,
));

echo elgg_view_page($title, $body);

