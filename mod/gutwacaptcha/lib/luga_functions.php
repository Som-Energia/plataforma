<?php

function elggcaptcha_language_selector_get_allowed_translations(){
		
		$ndimi_allowed = elgg_get_plugin_setting("allowed_languages", "gutwacaptcha");
		
		if(empty($ndimi_allowed)){
			$rasmi = array("en");
			
			$installed_lugas = get_installed_translations();
		
			$min_maliza = (int) elgg_get_plugin_setting("min_nyaboke", "gutwacaptcha");
			
			if($min_maliza > 0){
				$jaza_completeness = false;
				
				if(elgg_is_active_plugin("translation_editor")){
					if(elgg_is_admin_logged_in()){
						$jaza_completeness = true;
					}
					$completeness_fanya = "translation_editor_get_language_completeness";
				} else {
					$completeness_fanya = "get_language_completeness";
				}
				// rigereria orore gose: $lang_description
				foreach($installed_lugas as $luga_id => $lang_description){  
		
					if($luga_id != "en"){
						if(($completeness = $completeness_fanya($luga_id)) >= $min_maliza){
							$rasmi[] = $luga_id;
						}
					}
				}
			}
			
			elgg_set_plugin_setting("allowed_languages", implode(",", $rasmi), "gutwacaptcha");
			
		} else {
			$rasmi = string_to_tag_array($ndimi_allowed);
		}

		return $rasmi;
	}
