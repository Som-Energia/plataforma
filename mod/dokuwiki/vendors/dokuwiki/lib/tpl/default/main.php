<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();


$sidebar_inline = get_input("inline_sidebar");
$page_inline = get_input("inline_page");

if (empty($sidebar_inline)) {
ob_start();
include(dirname(__FILE__).'/main_index.php');
$content = ob_get_clean();
}

if (empty($page_inline)) {
// include functions that provide sidebar functionality
@require_once(dirname(__FILE__).'/tplfn_sidebar.php');
ob_start();
include(dirname(__FILE__).'/sidebar.php');
$sidebar = ob_get_clean();
}

if (empty($sidebar_inline) && empty($page_inline)) {

	elgg_push_breadcrumb(elgg_echo('dokuwiki'), 'dokuwiki/all');
	elgg_push_breadcrumb(sprintf(elgg_echo('dokuwiki:wikifrom'), elgg_get_page_owner_entity()->name));
	
	$title = sprintf(elgg_echo('dokuwiki:wikifrom'), elgg_get_page_owner_entity()->name);

	$sidebar = elgg_view_module('aside', elgg_echo('dokuwiki:sidebar'), $sidebar);

	$body = elgg_view_layout('content', array(
		'filter' => '',
		'content' => $content,
		'title' => $title,
		'sidebar' => $sidebar,
	));
	
	echo elgg_view_page($title, $body);
}
else {
	$all_link = elgg_get_site_url().'dokuwiki/'.elgg_get_page_owner_guid();
	$all_text = elgg_echo('link:view:all');
	$all_link = "<a href=\"$all_link\">$all_text</a>";

	echo elgg_view('groups/profile/module', array(
		'title' => $content ? elgg_echo('dokuwiki:group') : elgg_echo('dokuwiki:sidebar'),
		'content' => $content . $sidebar,
		'all_link' => $all_link,
	));
}


//echo $content;

?>
