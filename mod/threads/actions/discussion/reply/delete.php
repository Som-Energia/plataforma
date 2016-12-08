<?php
/**
 * Delete discussion reply
 */

$entity_guid = (int) get_input('entity_guid');

$reply = get_entity($entity_guid);
if (!$reply || $reply->getSubtype() != 'topicreply') {
	register_error(elgg_echo('discussion:reply:error:notdeleted'));
	forward(REFERER);
}

if (!$reply->canEdit()) {
	register_error(elgg_echo('discussion:error:permissions'));
	forward(REFERER);
}

$result = $reply->delete();
if ($result) {
	system_message(elgg_echo('discussion:reply:deleted'));
} else {
	register_error(elgg_echo('discussion:reply:error:notdeleted'));
}

forward(REFERER);
