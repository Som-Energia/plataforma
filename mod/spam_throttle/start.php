<?php

include_once 'lib/functions.php';

function spam_throttle_init(){
	
	elgg_register_event_handler('create', 'object', 'spam_throttle_check');
	elgg_register_event_handler('create', 'annotation', 'spam_throttle_check');
	
	elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'spam_throttle_hover_menu', 1000);
	
	//register action to save our plugin settings
	elgg_register_action("spam_throttle/settings/save", elgg_get_plugins_path() . "spam_throttle/actions/spam_throttle_settings.php", 'admin');
	elgg_register_action("spam_throttle/unsuspend", elgg_get_plugins_path() . "spam_throttle/actions/unsuspend.php", 'admin');
	
	if (elgg_is_admin_logged_in()) {
	  run_function_once('spam_throttle_20130224');
	}
}


// converts exempt list to metadata based approach
function spam_throttle_20130224() {
  $exempt = unserialize(elgg_get_plugin_setting('exempt', 'spam_throttle'));
  
  if (is_array($exempt)) {
	foreach ($exempt as $guid) {
	  $user = get_user($guid);
	  
	  if ($user) {
		$user->spam_throttle_exempt = 1;
	  }
	}
  }
}

elgg_register_event_handler('init', 'system', 'spam_throttle_init');