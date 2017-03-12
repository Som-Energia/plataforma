<?php

elgg_register_event_handler('init', 'system', 'somenergia_upgrade_init');

elgg_register_event_handler('upgrade', 'system', 'somenergia_upgrade_launch');

function somenergia_upgrade_init() {
    
}

/**
 * Launch Som Energia upgrades 
 */
function somenergia_upgrade_launch() {
    error_log('=> Upgrading launched by Som Energia upgrade plugin');

    if (!elgg_is_active_plugin('group_operators')) {
        upgrade_old_group_operators();
    }

    if (!elgg_is_active_plugin('threads')) {
        upgrade_old_threads_topicreply();
    }

}

/**
 * Change old group operators to new group admin
 */
function upgrade_old_group_operators() {
    $groupsWithOperators = elgg_get_entities_from_relationship(array("relationship" => "operator", "limit" => 0));
    if ($groupsWithOperators) {
        error_log('- Upgrading groups with old group operators: ' . count($groupsWithOperators));
        foreach ($groupsWithOperators as $group) {
            $group_id = $group->getGUID();
            error_log('-- Group detected with operators:  ' . $group_id . ' ' . $group->getURL());
            upgrade_group_operators_group($group_id);
        }
    }
}

function upgrade_group_operators_group($group_id) {
    $groupOperators = elgg_get_entities_from_relationship(array("relationship" => "operator", "inverse_relationship" => true, "relationship_guid" => $group_id, "limit" => 0));
    foreach ($groupOperators as $operator) {
        $operator_id = $operator->getGUID();
        error_log('--- Old group operator:  ' . $operator_id . ' ' . $operator->getURL());
        upgrade_group_operators_user($group_id, $operator_id);
    }
}

function upgrade_group_operators_user($group_id, $operator_id) {
    if (check_entity_relationship($operator_id, 'operator', $group_id)) {
        if (remove_entity_relationship($operator_id, 'operator', $group_id)) {
            error_log('--- Operator removed');
            if (!check_entity_relationship($operator_id, 'group_admin', $group_id)) {
                if (add_entity_relationship($operator_id, 'group_admin', $group_id)) {
                    error_log('--- Operator ' . $operator_id . ' is now group_admin ' . $group_id);
                } else {
                    error_log('Fail upgrading operator');
                }
            }
        } else {
            error_log('Fail upgrading operator');
        }
    }
}

function upgrade_old_threads_topicreply() {
    $replies = elgg_get_entities(array('type' => 'object', 'subtype' => 'topicreply', 'limit' => 0));
    if (count($replies) > 0) {
        error_log('- Upgrading old threads topiceply: ' . count($replies));
        foreach ($replies as $reply) {
            remove_old_thread_reply_title($reply);
            change_old_thread_reply_container($reply);
            force_object_remove_relation($reply->guid, 'parent');
            force_object_remove_relation($reply->guid, 'top');
        }
        if (!force_object_subtype_change('topicreply', 'discussion_reply')) {
            error_log("Fail upgrading old threads topiceply");
        }
    }
}

function change_old_thread_reply_container($reply) {
    $topRelations = elgg_get_entities_from_relationship(array("relationship" => "top", "relationship_guid" => $reply->guid, 'limit' => 0));
    foreach ($topRelations as $top) {
        if ($reply->container_guid != $top->guid) {
            force_object_container_change($reply->guid, $top->guid);
        }
    }
}

function force_object_remove_relation($object_guid_param, $relation_param) {
    $object_guid = sanitize_string($object_guid_param);
    $relation = sanitize_string($relation_param);
    $dbprefix = elgg_get_config('dbprefix');
    $query = "DELETE FROM {$dbprefix}entity_relationships WHERE guid_one='$object_guid' AND relationship='$relation'";
    if (!update_data($query)) {
        error_log('Fail remove object:  ' . $object_guid . ' relation: ' . $relation);
    }
}

function force_object_container_change($from_object_guid_param, $to_container_guid_param) {
    $object_guid = sanitize_string($from_object_guid_param);
    $to_container_guid = sanitize_string($to_container_guid_param);
    $dbprefix = elgg_get_config('dbprefix');
    $query = "UPDATE {$dbprefix}entities SET container_guid='$to_container_guid' WHERE guid='$object_guid'";
    if (!update_data($query)) {
        error_log('Fail container guid change:  ' . $object_guid . ' to container: ' . $to_container_guid);
    }
}

function remove_old_thread_reply_title($reply) {
    if ($reply->title != NULL) {
        $reply->title = NULL;
        if (!$reply->save()) {
            error_log('Error on remove old reply title: ' . $reply->guid);
        }
    }
}

/**
 * Forcefully changes the subtype of all objects with a given subtype
 *
 * @param string $from_subtype_param Current subtype alias
 * @param string $to_subtype_param   Future subtype alias
 * @return boolean
 */
function force_object_subtype_change($from_subtype_param, $to_subtype_param) {
    $from_subtype = sanitize_string($from_subtype_param);
    $to_subtype = sanitize_string($to_subtype_param);

    $from_subtype_id = add_subtype('object', $from_subtype);
    $to_subtype_id = add_subtype('object', $to_subtype);

    $dbprefix = elgg_get_config('dbprefix');

    $query = "UPDATE {$dbprefix}entities SET subtype=$to_subtype_id WHERE subtype='$from_subtype_id'";
    if (update_data($query)) {
        $query_river = "UPDATE {$dbprefix}river SET subtype='$to_subtype'WHERE subtype='$from_subtype'";
        $result_river = update_data($query_river);
        if (!$result_river) {
            error_log("Fail updating river");
        }
        error_log("Update subtype and class references in system log table.");
        $to_class = get_subtype_class('object', $to_subtype);
        if (!$to_class) {
            $to_class = 'ElggObject';
        }

        $query_log = "UPDATE {$dbprefix}system_log SET object_subtype='$to_subtype',object_class='$to_class' WHERE object_subtype='$from_subtype'";
        $result_log = update_data($query_log);
        if (!$result_log) {
            error_log("Fail updating system log");
        }

        return ($result_river && $result_log);
    }

    return false;
}
