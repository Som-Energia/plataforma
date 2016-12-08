<?php
/*
 * Embeds an edit link for the annotation
 */

elgg_load_library("elgg:threads");

$entity = elgg_extract('entity', $vars);
$topic = threads_top($entity->guid);

$owner = get_entity($entity->owner_guid);
if (!$entity || !$owner) {
	return true;
}
$icon = elgg_view_entity_icon($owner, 'tiny');
$owner_link = "<a href=\"{$owner->getURL()}\">$owner->name</a>";

$menu = elgg_view_menu('reply', array(
	'entity' => $entity,
	'sort_by' => 'priority',
	'class' => 'elgg-menu-entity elgg-menu-hz',
));

$text = elgg_view("output/longtext", array("value" => $entity->description));

$friendlytime = elgg_view_friendly_time($entity->time_created);

$replies = elgg_view('discussion/replies', array('entity' => $entity));

$body = <<<HTML
<div class="mbn">
	$menu
	$owner_link
	<span class="elgg-subtext">
		$friendlytime
	</span>
	$text
</div>
HTML;

echo elgg_view_image_block($icon, $body);

$user = elgg_get_logged_in_user_entity()->guid;
$group = $topic->getContainerEntity();

if (get_input('guid') == $entity->guid && get_input('box')) {

	$box = false;

	if ($entity->canEdit() && get_input('box') == "edit") {
		$box = 'edit';
	} elseif ($entity->canAnnotate() && get_input('box') == "reply") {
		$box = 'reply';
	}

	if ($box) {
		$form = elgg_view_form('discussion/reply/save', array(), array_merge(array(
					'entity' => $entity,
					'reply' => $box == 'reply',
				), $vars)
			);
		echo "<div class=\"mvl replies\" id=\"$box-topicreply-$entity->guid\">$form</div>";
	}
} elseif ($entity->canAnnotate() && $topic->status != 'closed') {
	if ($group->canWriteToContainer($user)) {
		echo elgg_view('output/url', array(
			'text' => elgg_echo('reply'),
			'href' => current_page_url() . "?box=reply&guid=$entity->guid",
			'class' => 'elgg-button elgg-button-submit mtm',
		));
	}
}

echo $replies;
