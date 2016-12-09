<?php

namespace Spam\LoginFilter;

require_once __DIR__ . '/lib/hooks.php';
require_once __DIR__ . '/lib/events.php';
require_once __DIR__ . '/lib/functions.php';

const PLUGIN_ID = 'spam_login_filter';
const UPGRADE_VERSION = 20141130;

elgg_register_event_handler('init', 'system', __NAMESPACE__ . '\\init');

function init() {

	// register hooks
	elgg_register_plugin_hook_handler("action", "register", __NAMESPACE__ . "\\verify_action_hook", 999);
	elgg_register_plugin_hook_handler('cron', 'daily', __NAMESPACE__ . '\\daily_cron');
	elgg_register_plugin_hook_handler('route', 'all', __NAMESPACE__ . '\\filter_router');
	elgg_register_plugin_hook_handler('register', 'menu:user_hover', __NAMESPACE__ . '\\user_hover_menu', 1000);
	elgg_register_plugin_hook_handler('register', 'user', __NAMESPACE__ . '\\register_user');

	// register events
	// recored ip addresses for users on creation and each time they log in
	elgg_register_event_handler('login:before', 'user', __NAMESPACE__ . '\\login_event');
	elgg_register_event_handler('create', 'user', __NAMESPACE__ . '\\create_user_event');
	elgg_register_event_handler('upgrade', 'system', __NAMESPACE__ . '\\upgrades');

	elgg_register_admin_menu_item('administer', 'manageip', 'administer_utilities');
	
	
	// register actions
	elgg_register_action('spam_login_filter/delete_ip', __DIR__ . "/actions/delete_ip.php", 'admin');
	elgg_register_action("spam_login_filter/delete", __DIR__ . "/actions/delete_and_report.php", "admin");
	
	elgg_register_library(__NAMESPACE__ . '\\upgrades', __DIR__ . '/lib/upgrades.php');
}
