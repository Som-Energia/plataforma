<?php

elgg_register_event_handler('create', 'object', 'rm_as_event');

elgg_register_event_handler('join', 'group', 'rm_group_join', 600);

elgg_register_event_handler('leave', 'group', 'rm_group_leave', 600);

function rm_as_event($event, $type, $reply) {

    $topic = (int) get_input('entity_guid');

    if ($reply->getSubType() == 'topicreply') {

        $user = elgg_get_logged_in_user_entity();
        $topic = get_entity($topic);
        list( $group ) = elgg_get_entities(array('guids' => $reply->getContainerGUID()));
        $members = $group->getMembers(0);

        foreach ($members as $member) {
            if ($user->guid != $member->guid) {
                $guids[] = $member->guid;
            }
        }

        $params = array(
            'object' => NULL,
            'action' => 'create',
            'summary' => NULL,
        );

        $message = $user->name . "added a new reply to " . $topic->title . " in  " . $group->name . "; " . $reply->description . " View and reply to the discussion: " . $topic->getURL();

        notify_user($guids, $group->guid, elgg_echo('rm_group_autosubscription:email:reply'), $message, $params);
    }

    return true;
}

/**
 * Suscribe user in all groupforumtopics in the group when join
 * @param type $event
 * @param type $type
 * @param type $params
 */
function rm_group_join($event, $type, $params) {
    $user = elgg_extract('user', $params);
    $group = elgg_extract('group', $params);
    
    $rm_topics = elgg_get_entities(array(
        'container_guids' => $group->guid,
        'types' => 'object',
        'subtypes' => 'groupforumtopic'
    ));
       
    if (!empty($rm_topics)) {
        foreach ($rm_topics as $topic) {
            comment_tracker_subscribe($user->guid, $topic->guid);
        }
    }
}


/**
 * Unsuscribe user in all groupforumtopics in the group when leave
 * @param type $event
 * @param type $type
 * @param type $params
 */
function rm_group_leave($event, $type, $params) {
    $user = elgg_extract('user', $params);
    $group = elgg_extract('group', $params);
    
    $rm_topics = elgg_get_entities(array(
        'container_guids' => $group->guid,
        'types' => 'object',
        'subtypes' => 'groupforumtopic'
    ));
       
    if (!empty($rm_topics)) {
        foreach ($rm_topics as $topic) {
            if (comment_tracker_is_subscribed($user->guid, $topic->guid)) {
                comment_tracker_unsubscribe($user->guid, $topic->guid);
            }
        }
    }
}
