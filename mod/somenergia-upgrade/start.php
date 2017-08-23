<?php

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

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
    $dataroot = elgg_get_config('dataroot');
    $path = elgg_get_config('path');
    $filesystem = new Filesystem();

    if (!elgg_is_active_plugin('group_operators')) {
        upgrade_old_group_operators();
    }

    /* Fix old mods class subtypes */
    update_old_mods_subtypes();

    /* Update euskera users translation from eu to eu_es */
    update_old_euskera_translation($dbprefix);

    create_simple_cache_link($filesystem, $path, $dataroot);

    create_ckeditor_assets_folder($filesystem, $dataroot);
    
    upgrade_remove_comment_tracker_relations();

    error_log('==> Cleaning old objects in the database');
    upgrade_delete_entities_by_subtype('question');
    upgrade_delete_entities_by_subtype('assembly');
    upgrade_delete_entities_by_subtype('proposal');
    upgrade_delete_entities_by_subtype('decision');
    upgrade_delete_entities_by_subtype('event_calendar');
    
    upgrade_clean_old_dokuwiky($filesystem, $dataroot);
  
    upgrade_create_translations_folder($filesystem, $dataroot);

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

function create_simple_cache_link($filesystem, $path, $dataroot) {
    try {
        $filesystem->symlink($dataroot . 'views_simplecache', $path . 'cache');
    } catch (IOExceptionInterface $e) {
        error_log("An error occurred while creating simple cache link at " . $e->getPath());
    }
}

/**
 * Create ckeditor assets folder in data path
 * @param type $fs
 * @param type $dataroot
 */
function create_ckeditor_assets_folder($fs, $dataroot) {
    $assets = $dataroot . 'ckeditor/assets';
    if (!$fs->exists($assets)) {
        try {
            $fs->mkdir($assets);
            error_log('==> Creating ckeditor assets folder');
        } catch (IOExceptionInterface $e) {
            error_log("- !!!!! An error occurred while creating ckeditor assets folder at " . $e->getPath());
        }
    }
}

/**
 * Delete entities by subtype
 * @param type $subtype
 */
function upgrade_delete_entities_by_subtype($subtype) {
    $entities = elgg_get_entities(["type" => "object", 'subtype' => $subtype, "limit" => 0]);
    if ($entities) {
        error_log("- Deleting $subtype entities");
        foreach ($entities as $entity) {
            upgrade_delete_entity($entity);
        }
    }
}

/**
 * Delete entity
 * @param type $entity
 */
function upgrade_delete_entity($entity) {
    $guid = $entity->guid;
    if ($entity->delete()) {
        error_log('-- Entity deleted: ' . $guid);
    } else {
        error_log('-- !!!! Fail deleting entity: ' . $guid);
    }
}

/**
 * Delete old dokuwiki mod data
 * @param type $filesystem
 * @param type $dataroot
 */
function upgrade_clean_old_dokuwiky($filesystem, $dataroot) {
    error_log('==> Clean old dokuwiky');
    $wiki_folder = $dataroot . 'wiki';
    if ($filesystem->exists($wiki_folder)) {
        try {
            $filesystem->remove($wiki_folder);
            error_log('- Wiki folder in data path removed');
        } catch (IOExceptionInterface $e) {
            error_log("- !!!! Fail deleting Wiki folder in data path at " . $e->getPath());
        }
    }
    $wikis_folder = $dataroot . 'wikis';
    if ($filesystem->exists($wikis_folder)) {
        try {
            $filesystem->remove($wikis_folder);
            error_log('- Wikis folder in data path removed');
        } catch (IOExceptionInterface $e) {
            error_log("- !!!! Fail deleting Wikis folder in data path at " . $e->getPath());
        }
    }
    upgrade_delete_entities_by_subtype('dokuwiki');
}

/**
 * Copy translations folder
 * @param type $fs
 * @param type $dataroot
 */
function upgrade_create_translations_folder($fs, $dataroot) {
    $folder = $dataroot . 'translation_editor';
    if (!$fs->exists($folder)) {
        error_log("==> Creating translations editor folder");
        $folderToClone = elgg_get_plugins_path() . 'somenergia-upgrade/translation_editor';
        try {
            $fs->mirror($folderToClone, $folder);
            $fs->chown($folder, 'www-data');
        } catch (IOException $ex) {
            error_log("- !!!!!! Error cloning translations editor folder " . $e->getPath());
        }
    }
}

/**
 * Remove old comment tracker relation ship
 */
function upgrade_remove_comment_tracker_relations() {
    if (!elgg_is_active_plugin('comment_tracker')) {
        error_log('==> Remove old Comment Tracker relations');
        $subscribed = elgg_get_entities_from_relationship(array("relationship" => "comment_subscribe", "limit" => 0, 'inverse_relationship' => true));
        error_log('- Subscribed ' . count($subscribed));
        upgrade_remove_relations($subscribed, "comment_subscribe");
        $unsubscribed = elgg_get_entities_from_relationship(array("relationship" => "comment_tracker_unsubscribed", "limit" => 0, 'inverse_relationship' => true));
        error_log('- Unsubscribed ' . count($unsubscribed));
        upgrade_remove_relations($unsubscribed, "comment_tracker_unsubscribed");
    }

}

/**
 * Remove entity relations
 * @param type $entities
 * @param type $relationship
 */
function upgrade_remove_relations($entities, $relationship) {
    if ($entities && $relationship && $relationship != '') {
        foreach ($entities as $entity) {
            if(!remove_entity_relationships($entity->guid, $relationship)) {
                error_log('- !!!!!! Fail removing entity ' . $entity->guid . ' ' . $relationship . ' relations');
            }
        }
    }  
}
