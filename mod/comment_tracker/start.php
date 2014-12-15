<?php
/**
 * Initialise comment tracker plugin
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version 1.0
 * @author Akhilesh @ Cubet Technologies
 * 
 * @ 1.8 upgrade by Matt Beckett
 */
define(COMMENT_TRACKER_RELATIONSHIP, 'comment_subscribe');
define(COMMENT_TRACKER_UNSUBSCRIBE_RELATIONSHIP, 'comment_tracker_unsubscribed');

require_once 'lib/hooks.php';
require_once 'lib/events.php';
require_once 'lib/functions.php';

// Initialise comment tracker plugin
function comment_tracker_init() {
	
	$plugin_settings = elgg_get_plugin_from_id('comment_tracker');
	elgg_set_config('allow_comment_notification', 'yes');
	elgg_set_config('email_content_type', 'text');
    
    if (elgg_is_logged_in()) {
        elgg_extend_view('page/elements/comments', "comment_tracker/manage_subscription", 400);
        elgg_extend_view('discussion/replies', "comment_tracker/manage_subscription", 400);
    }
	
	if (!empty($plugin_settings->allow_comment_notification)) {
		elgg_set_config('allow_comment_notification', $plugin_settings->allow_comment_notification);
	}

	if (!empty($plugin_settings->email_content_type)) {
		elgg_set_config('email_content_type', $plugin_settings->email_content_type);
	}

	// Extend views
	elgg_extend_view('css/elgg', 'comment_tracker/css');
	elgg_extend_view('js/elgg', 'comment_tracker/js', 1000);
	elgg_extend_view('notifications/subscriptions/forminternals', 'comment_tracker/settings');
	
	// Register actions
	elgg_register_action("comment_tracker/subscribe", elgg_get_plugins_path() . "comment_tracker/actions/subscribe.php");

	// plugin hooks
	// save our settings
	elgg_register_plugin_hook_handler('action', 'notificationsettings/save', 'comment_tracker_savesettings');
	// add our subscription links
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'comment_tracker_entity_menu');

	// register events
	elgg_register_event_handler('create', 'annotation','comment_tracker_notifications');

	// set up our pages
	elgg_register_page_handler('comment_tracker', 'comment_tracker_page_handler');

	// fix typo in settings (from 1.7 version)
	run_function_once('comment_tracker_update_20121025a');
}

function comment_tracker_page_handler($page) {
	gatekeeper();
	$user = get_user_by_username($page[1]);
	
	if (!$user || !$user->canEdit()) {
		return false;
	}
	
	elgg_set_context('settings');
	
	// display subscribed items
	$content = elgg_list_entities_from_relationship(array(
		'relationship_guid' => $user->guid,
		'relationship' => COMMENT_TRACKER_RELATIONSHIP,
		'full_view' => false,
		'order_by' => 'r.time_created DESC'
	));
	
	if (!$content) {
		$content = elgg_echo('comment:subscriptions:none');
	}
	
	elgg_push_breadcrumb(elgg_echo('settings'), elgg_get_site_url() . 'settings/user/' . $user->username);
	elgg_push_breadcrumb(elgg_echo('notifications'), elgg_get_site_url() . 'notifications/personal/' . $user->username);
	elgg_push_breadcrumb(elgg_echo('comment:subscriptions'));
	
	$title = elgg_echo('comment:subscriptions');
	
	$body = elgg_view_layout('content', array(
		'title' => $title,
		'content' => $content,
		'filter' => false
	));
	
	echo elgg_view_page($title, $body);
}

// Register event handlers
elgg_register_event_handler('init','system','comment_tracker_init');