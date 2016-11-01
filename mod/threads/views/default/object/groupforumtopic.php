<?php
/**
 * Forum topic entity view
 *
 * @package ElggGroups
 * @override mod/groups/views/default/object/groupforumtopic.php
*/

elgg_load_library('elgg:threads');

$full = elgg_extract('full_view', $vars, FALSE);
$topic = elgg_extract('entity', $vars, FALSE);

if (!$topic) {
	return true;
}

$poster = $topic->getOwnerEntity();
$group = $topic->getContainerEntity();
$excerpt = elgg_get_excerpt($topic->description);

$poster_icon = elgg_view_entity_icon($poster, 'tiny');
$poster_link = elgg_view('output/url', array(
	'href' => $poster->getURL(),
	'text' => $poster->name,
	'is_trusted' => true,
));
$poster_text = elgg_echo('groups:started', array($poster_link));

$tags = elgg_view('output/tags', array('tags' => $topic->tags));
$date = elgg_view_friendly_time($topic->time_created);

$replies_link = '';
$num_replies = threads_get_all_replies_count($topic->guid);
if ($num_replies != 0) {
	$last_reply = threads_get_last_topic_reply($topic->guid);
	$last_poster = $last_reply->getOwnerEntity();
	$last_poster_link = elgg_view('output/url', array(
		'href' => $last_poster->getURL(),
		'text' => $last_poster->name,
		'is_trusted' => true,
	));
	$reply_time = elgg_view_friendly_time($last_reply->time_created);
	$reply_text = elgg_echo('groups:updated', array($last_poster_link, $reply_time));

	$replies_link = elgg_view('output/url', array(
		'href' => $topic->getURL() . '#group-replies',
		'text' => elgg_echo('group:replies') . " ($num_replies)",
		'is_trusted' => true,
	));
}

$metadata = elgg_view_menu('entity', array(
	'entity' => $vars['entity'],
	'handler' => 'discussion',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

// do not show the metadata and controls in widget view
if (elgg_in_context('widgets')) {
	$metadata = '';
}

if ($full) {
	$subtitle = "$poster_text $date $replies_link";

	$params = array(
		'entity' => $topic,
		'title' => false,
		'metadata' => $metadata,
		'subtitle' => $subtitle,
		'tags' => $tags,
	);
	$params = $params + $vars;
	$list_body = elgg_view('object/elements/summary', $params);

	$info = elgg_view_image_block($poster_icon, $list_body);

	$body = elgg_view('output/longtext', array(
		'value' => $topic->description,
		'class' => 'clearfix',
	));

	echo <<<HTML
<div class="elgg-content">
	$info
	$body
</div>
HTML;

} else {
	// brief view
	$subtitle = "$poster_text $date $replies_link <span class=\"groups-latest-reply\">$reply_text</span>";

	$params = array(
		'entity' => $topic,
		'metadata' => $metadata,
		'subtitle' => $subtitle,
		'tags' => $tags,
		'content' => $excerpt,
	);
	$params = $params + $vars;
	$list_body = elgg_view('object/elements/summary', $params);

	echo elgg_view_image_block($poster_icon, $list_body);
}

$user = elgg_get_logged_in_user_entity()->guid;
$group = $topic->getContainerEntity();

if ($full && $topic->canAnnotate()) {
	if(get_input('box') == "reply" && get_input('guid') == $topic->guid){
		$form = elgg_view_form('discussion/reply/save', array(), array_merge(array(
				'entity' => $topic,
				'reply' => true,
			), $vars)
		);
		echo "<div class=\"$hidden mvl replies\" id=\"reply-topicreply-$topic->guid\">$form</div>";
	} elseif($topic->status != 'closed') {
		if ($group->canWriteToContainer($user)) {
			echo elgg_view('output/url', array(
				'text' => elgg_echo('reply'),
				'href' => current_page_url() . "?box=reply&guid=$topic->guid",
				'class' => 'elgg-button elgg-button-submit mtm',
			));
		}
	}
}
