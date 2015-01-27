<?php

function comment_tracker_entity_menu($hook, $type, $return, $params) {
	if (elgg_is_logged_in()
			&& (elgg_get_logged_in_user_guid() != $params['entity']->owner_guid)
			&& !elgg_in_context('widget')
			&& elgg_instanceof($params['entity'], 'object')
		) {
		
        $subscription_subtypes = comment_tracker_get_entity_subtypes();
		
		if (in_array($params['entity']->getSubtype(), $subscription_subtypes)) {
		  $text = '<span data-guid="' . $params['entity']->guid . '">';
		  if (comment_tracker_is_subscribed(elgg_get_logged_in_user_entity(), $params['entity'])) {
				$text .= elgg_echo('comment:unsubscribe');
		  } else {
			  $text .= elgg_echo('comment:subscribe');
		  }
		  $text .= '</span>';
		
		  $item = new ElggMenuItem('comment_tracker', $text, '#');
		  $item->setTooltip(elgg_echo('comment:subscribe:tooltip'));
		  $item->setLinkClass("comment-tracker-toggle");
		  $item->setPriority(150);
		
		  $return[] = $item;
		}
	}
	
	return $return;
}

/*
 * called on the notification settings save action
 * save our settings
 */
function comment_tracker_savesettings($hook, $type, $return, $params) {
    
    $guid = get_input('guid');
    $user = get_user($guid);
    
    if (!elgg_instanceof($user, 'user')) {
        return $return;
    }
    
	global $NOTIFICATION_HANDLERS;
	foreach($NOTIFICATION_HANDLERS as $method => $foo) {
		$subscriptions[$method] = get_input($method.'commentsubscriptions');
		
		if (!empty($subscriptions[$method])) {
			remove_entity_relationship($user->guid, 'block_comment_notify'.$method, elgg_get_site_entity()->guid);
		} else {
			add_entity_relationship($user->guid, 'block_comment_notify'.$method, elgg_get_site_entity()->guid);
		}
	}
    
    // save autosubscribe settings
    $autosubscribe = get_input('comment_tracker_autosubscribe');
    elgg_set_plugin_user_setting('comment_tracker_autosubscribe', $autosubscribe, $user->guid, 'comment_tracker');
}