<?php
/**
 * Simplepie feed reader widget settings
 */

// set default value
if (!isset($vars['entity']->num_items)) {
	$vars['entity']->num_items = 10;
}

if (!isset($vars['entity']->excerpt)) {
	$vars['entity']->excerpt = false;
}

if (!isset($vars['entity']->post_date)) {
	$vars['entity']->post_date = false;
}

$url_label = elgg_echo("simplepie:feed_url");
$url_textbox = elgg_view('input/text', array(
	'name' => 'params[feed_url]',
	'value' => $vars['entity']->feed_url,
	'onclick' => 'this.select();',
));

$num_items_label = elgg_echo('simplepie:num_items');
$num_items_select = elgg_view('input/dropdown', array(
	'name' => 'params[num_items]',
	'value' => $vars['entity']->num_items,
	'options' => array(3, 5, 8, 10, 12, 15, 20),
));

$excerpt_label = elgg_echo('simplepie:excerpt');
$excerpt_checkbox = elgg_view('input/checkbox', array(
	'name' => 'params[excerpt]',
	'value' => true,
	'checked' => $vars['entity']->excerpt ? 'checked' : '',
));

$post_date_label = elgg_echo('simplepie:post_date');
$post_date_checkbox = elgg_view('input/checkbox', array(
	'name' => 'params[post_date]',
	'value' => true,
	'checked' => $vars['entity']->post_date ? 'checked' : '',
));

echo <<<HTML
<div>
	$url_label
	$url_textbox
</div>
<div>
	$num_items_label
	$num_items_select
</div>
<div>
	$excerpt_checkbox $excerpt_label
</div>
<div>
	$post_date_checkbox $post_date_label
</div>
HTML;
