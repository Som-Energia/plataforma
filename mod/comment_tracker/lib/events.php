<?php

// annotation event handler function to manage comment notifications
function comment_tracker_notifications($event, $type, $annotation) {
	if ($type == 'annotation' && elgg_is_logged_in()) {
		if ($annotation->name == "generic_comment" || $annotation->name == "group_topic_post") {
			if (elgg_get_config('allow_comment_notification') == 'yes') {
					comment_tracker_notify($annotation, elgg_get_logged_in_user_entity());
                    
                    // subscribe the commenter to the thread if they haven't specifically unsubscribed
                    $user = get_user($annotation->owner_guid);
                    $entity = get_entity($annotation->entity_guid);
                    
                    $autosubscribe = elgg_get_plugin_user_setting('comment_tracker_autosubscribe', $user->guid, 'comment_tracker');
                    
                    if (!comment_tracker_is_unsubscribed($user, $entity) && $autosubscribe != 'no') {
                        // don't subscribe the owner of the entity
                        if ($entity->owner_guid != $user->guid) {
                            comment_tracker_subscribe($user->guid, $entity->guid);
                        }
                    }
			}
		}
	}
	return TRUE;
}