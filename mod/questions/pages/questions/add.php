<?php
/**
 * Add question page
 *
 * @package Questions
 */

$title = elgg_echo('questions:add');

elgg_push_breadcrumb($title);

$content = elgg_view_form('object/question/save');

$body = elgg_view_layout('content', array(
	'title' => $title,
	'content' => $content,
	'filter' => ''
));

echo elgg_view_page($title, $body);