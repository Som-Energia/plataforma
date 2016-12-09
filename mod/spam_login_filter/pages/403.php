<?php

/**
 * The spam detection rules have said you're not allowed on this page,
 * lets inform the user
 *
 */

// build page elements
$title_text = elgg_echo("spam_login_filter:403");

$content = elgg_view("spam_login_filter/403", array("ip" => $ip));

// build page
$page_data = elgg_view_layout("one_column", array(
	"title" => $title_text,
	"content" => $content
));

// draw page
echo elgg_view_page($title_text, $page_data);
