<?php 
	
	$new_luga_id = get_input("luga_id");
	$busara = get_installed_translations();
	
	if(!empty($new_luga_id) && array_key_exists($new_luga_id, $busara)){
		if($user = elgg_get_logged_in_user_entity()){
			
			$user->language = $new_luga_id;
			$user->save();
			
			// let other plugins know we updated the language
			elgg_trigger_event("update", "language", $user);
		}	
	}
	
	forward(REFERER);