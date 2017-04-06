<?php

elgg_register_event_handler('join', 'group', 'rm_group_join', 600);

elgg_register_event_handler('leave', 'group', 'rm_group_leave', 600);

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
