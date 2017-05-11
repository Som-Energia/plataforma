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
    $dbprefix = elgg_get_config('dbprefix');

    if (!elgg_is_active_plugin('group_operators')) {
        upgrade_old_group_operators();
    }
    
    /* Fix old mods class subtypes */
    update_old_mods_subtypes();
    
    /* Update euskera users translation from eu to eu_es*/
    update_old_euskera_translation($dbprefix);
}

function update_old_euskera_translation($dbprefix) {
    $euskeraUsers = count(get_data("SELECT guid, language FROM {$dbprefix}users_entity WHERE language = 'eu'"));
    if ($euskeraUsers > 0) {
        error_log('- Upgrading euskera users language: ' . $euskeraUsers);
        if (!update_data("UPDATE {$dbprefix}users_entity SET language = 'eu_es' WHERE language = 'eu'")) {
            error_log('Error upgrading euskera users language');
        }
    }  
}

function update_old_mods_subtypes() {
    if (!elgg_is_active_plugin('crud')) {
        update_subtype('object', 'decision');
        update_subtype('object', 'proposal');
    }

    if (!elgg_is_active_plugin('assemblies')) {
        update_subtype('object', 'assembly');
    }

    if (!elgg_is_active_plugin('questions')) {
        update_subtype('object', 'answer');
        update_subtype('object', 'question');
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
