<?php

$settings = get_input('settings');
$exempt = get_input('members');

// save settings
foreach($settings as $name => $value){
	if($name != "consequence"){
		(int)$value;
		if(empty($value) || spam_throttle_posint($value)){
			elgg_set_plugin_setting($name, $value, 'spam_throttle');
		}
		else{
			// set error for individual fields
			$error = TRUE;
			register_error(sprintf(elgg_echo('spam_throttle:settings:notint'), $name));
		}
	}
}

foreach($settings['consequence'] as $type => $consequence){
	elgg_set_plugin_setting($type.'_consequence', $consequence, 'spam_throttle');
}

// save exemptions
if(is_array($exempt)){
	foreach ($exempt as $guid) {
	  $user = get_user($guid);
	  
	  if ($user) {
		$user->spam_throttle_exempt = 1;
		$user->save();
	  }
	}
}

if(!$error){
	// set success message
	system_message(elgg_echo('spam_throttle:settings:success'));
}

forward(REFERER);