<?php
/**
 * Post a reply to discussion topic
 *
 */

gatekeeper();

elgg_load_library('elgg:threads');

// Get input
$text = get_input('group_topic_post');
$entity_guid = (int) get_input('entity_guid');
$reply = (bool) get_input('reply', false);

// reply cannot be empty
if (empty($text)) {
	register_error(elgg_echo('grouppost:nopost'));
	forward(REFERER);
}

$topic = threads_top($entity_guid);
$topic_guid = $topic->guid;
if (!$topic) {
	register_error(elgg_echo('grouppost:nopost'));
	forward(REFERER);
}

$user = get_loggedin_user();

$group = $topic->getContainerEntity();
if (!$group->canWriteToContainer($user)) {
	register_error(elgg_echo('groups:notmember'));
	forward(REFERER);
}

// if editing a reply, make sure it's valid
if (!$reply) {
	$entity = get_entity($entity_guid);
	if (!$entity || !$entity->canEdit()) {
		register_error(elgg_echo('groups:notowner'));
		forward(REFERER);
	}

	$entity->description = $text;
	if (!$entity->save()) {
		system_message(elgg_echo('groups:forumpost:error'));
		forward(REFERER);
	}
	system_message(elgg_echo('groups:forumpost:edited'));
} else {
	$reply_guid = threads_reply($entity_guid, $text);
	if(!$reply_guid){
		system_message(elgg_echo('groupspost:failure'));
		forward(REFERER);
	}

	add_to_river('river/annotation/group_topic_post/reply', 'reply', $user->guid, $topic->guid, "", 0, $reply_guid);
	system_message(elgg_echo('groupspost:success'));
}

forward(REFERER);
