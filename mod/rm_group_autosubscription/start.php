<?php

function rm_as_event($event, $type, $reply) {

    $topic = (int) get_input('entity_guid');

    if ($reply->getSubType() == 'topicreply') {

        $user = elgg_get_logged_in_user_entity();
        $topic = get_entity($topic);
        list( $group ) = elgg_get_entities(array('guids' => $reply->getContainerGUID()));
        $members = $group->getMembers(0);

        foreach ($members as $member) {
            if ($user->get('guid') != $member->get('guid')) {
                $guids[] = $member->get('guid');
            }
        }

        $params = array(
            'object' => NULL,
            'action' => 'create',
            'summary' => NULL,
        );

        $message = <<<MESSAGE
{$user->get('name')} added a new reply to "{$topic->get('title')}" in {$group->get('name')}:
{$reply->description}
View and reply to the discussion:
{$topic->getURL()}
MESSAGE;

        notify_user($guids, $group->get('guid'), elgg_echo('rm_group_autosubscription:email:reply'), $message, $params);
    }

    return true;
}

function rm_as_adminSubmenu($hook, $type, $returnvalue, $params) {

    $item = new ElggMenuItem('subscribeAll', elgg_echo('rm_group_autosubscription:admin:button'), elgg_add_action_tokens_to_url(elgg_get_site_url() . 'action/rm/subscribe'));
    $item->setSection('notifications');
    $item->setContext('admin');
    $returnvalue[] = $item;

    return $returnvalue;
}

function rm_as_init() {

    $plugin_path = elgg_get_plugins_path() . 'rm_group_autosubscription/actions';

    //{{{ Actions

    elgg_unregister_action('groups/join');
    elgg_register_action('groups/join', $plugin_path . '/groups/membership/join.php');

    elgg_unregister_action('discussion/save');
    elgg_register_action('discussion/save', $plugin_path . '/discussion/save.php');

    elgg_register_action('rm/subscribe', $plugin_path . '/rm/subscribe.php');


    //}}}
    //{{{ Events

    elgg_register_event_handler('create', 'object', 'rm_as_event');

    //}}}
    //{{{ Menú

    elgg_register_plugin_hook_handler('register', 'menu:page', 'rm_as_adminSubmenu');

    //}}}
}

elgg_register_event_handler('init', 'system', 'rm_as_init');
