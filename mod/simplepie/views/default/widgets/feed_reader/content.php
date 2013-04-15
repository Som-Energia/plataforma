<?php
/**
 * View a feed in a widget
 */

elgg_load_library('simplepie');

$allowed_tags = '<a><p><br><b><i><em><del><pre><strong><ul><ol><li><img>';
$feed_url = $vars['entity']->feed_url;
if ($feed_url) {

	// get widget settings
	$excerpt   = $vars['entity']->excerpt;
	$num_items = $vars['entity']->num_items;
	$post_date = $vars['entity']->post_date;
	
	$cache_location = elgg_get_data_path() . '/simplepie_cache/';
	if (!file_exists($cache_location)) {
		mkdir($cache_location, 0777);
	}
	
	$feed = new SimplePie($feed_url, $cache_location);
	
	// doubles timeout if going through a proxy
	//$feed->set_timeout(20);
		
	// only display errors to profile owner
	$num_posts_in_feed = $feed->get_item_quantity();
	if (!$num_posts_in_feed) {
		if (elgg_get_logged_in_user_guid() == elgg_get_page_owner_guid()) {
			echo '<p>' . elgg_echo('simplepie:notfind') . '</p>';
		}
	}

	// don't display more feed items than user requested
	if ($num_items > $num_posts_in_feed) {
		$num_items = $num_posts_in_feed;
	}
	
	$feed_link = elgg_view('output/url', array(
		'href' => $feed->get_permalink(),
		'text' => $feed->get_title(),
	));

	// need to center
	echo "<h2 class=\"simplepie-heading\">$feed_link</h2>";
	echo '<ul class="simplepie-list">';
	foreach ($feed->get_items(0, $num_items) as $item) {
		$item_link = elgg_view('output/url', array(
			'href' => $item->get_permalink(),
			'text' => $item->get_title(),
		));

		if ($excerpt) {
			$text = strip_tags($item->get_description(true), $allowed_tags);
			$excerpt = $text;
		}

		if ($post_date) {
			$item_date_label = elgg_echo('simplepie:postedon');
			$item_date = $item->get_date('j F Y | g:i a');
			$post_date = "$item_date_label $item_date";
		}

		echo <<<HTML
<li class="mbm">
	<h4 class="mbs">$item_link</h4>
	<div class="mbs clearfix">$excerpt</div>
	<p class="elgg-subtext">$post_date</p>
</li>
HTML;

	}
	echo "</ul>";

} else {
	// display message only to owner
	if (elgg_get_logged_in_user_guid() == elgg_get_page_owner_guid()) {
		echo '<p>' . elgg_echo('simplepie:notset') . '</p>';
	}
}
