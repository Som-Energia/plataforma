<?php
/**
 * Manage subscribe in comment tracker plugin
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version 1.0
 * @author Akhilesh @ Cubet Technologies
 * 
 * updated/improved by Matt Beckett
 */
$subscribe = get_input('subscribe', true);
$entity_guid = get_input('guid');
$user_guid = get_input('user');

$user = get_user($user_guid);
$entity = get_entity($entity_guid);

if (!$user || !$user->canEdit()) {
	register_error(elgg_echo('comment:subscribe:failed'));
	return;
}

if (!empty($entity_guid) && $entity) {
	if ($subscribe) {
		if (comment_tracker_subscribe($user->guid, $entity_guid)) {
			system_message(elgg_echo('comment:subscribe:success'));
		} else {
			register_error(elgg_echo('comment:subscribe:failed'));
		}
	} else {
		if (comment_tracker_unsubscribe($user->guid, $entity_guid)) {
			system_message(elgg_echo('comment:unsubscribe:success'));
		} else {
			register_error(elgg_echo('comment:unsubscribe:failed'));
		}
	}
} else {
	register_error(elgg_echo('comment:subscribe:entity:not:access'));
}