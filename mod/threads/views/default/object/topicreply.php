<?php
/*
 * Embeds an edit link for the annotation
 */

$entity = elgg_extract('entity', $vars);

$owner = get_entity($entity->owner_guid);
if (!$entity || !$owner) {
	return true;
}
$icon = elgg_view_entity_icon($owner, 'tiny');
$owner_link = "<a href=\"{$owner->getURL()}\">$owner->name</a>";

$menu = elgg_view_menu('reply', array(
	'entity' => $entity,
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz right elgg-menu-annotation',
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

elgg_load_js('jquery.plugins.parsequery');
elgg_load_js('elgg.threads');

if ($entity->canEdit()) {
	$form = elgg_view_form('discussion/reply/save', array(), array_merge(array(
			'entity' => $entity,
			'reply' => false
		), $vars)
	);
	$hidden = "hidden";
	
	if(get_input('box') == "edit" && get_input('guid') == $entity->guid){
		$hidden = "";
	}

	echo "<div class=\"$hidden mbm replies\" id=\"edit-topicreply-$entity->guid\">$form</div>";
}

if ($entity->canAnnotate()) {
	$form = elgg_view_form('discussion/reply/save', array(), array_merge(array(
			'entity' => $entity,
			'reply' => true
		), $vars)
	);
	$hidden = "hidden";
	
	if(get_input('box') == "reply" && get_input('guid') == $entity->guid){
		$hidden = "";
	}

	echo "<div class=\"$hidden mbm replies\" id=\"reply-topicreply-$entity->guid\">$form</div>";
}

echo $replies;
