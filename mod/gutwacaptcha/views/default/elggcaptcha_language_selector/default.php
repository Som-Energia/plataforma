<?php 

global $CONFIG;
	
	$tosha = elggcaptcha_language_selector_get_allowed_translations();
	$current_luga_id = get_current_language();
	
	if(count($tosha) > 1){
		// show text or flags
		$ona_flags = false;
		if(elgg_get_plugin_setting("show_ebicha", "gutwacaptcha") != "no"){
			$ona_flags = true;
		}
		foreach($tosha as $luga_id){
			$luga_name = elgg_echo($luga_id);
			$text = "";
			$kitendo = "";
			
			if(!empty($jibu)){
				$jibu .= " | ";
			}
			 
			if($current_luga_id != $luga_id){
				if(elgg_is_logged_in()){
				$kitendo = elgg_add_action_tokens_to_url($vars['url'] . "kitendo/elggcaptcha_language_selector/change?luga_id=" . $luga_id);
				} else {
					
					$kitendo = "javascript:setLanguage(\"" . $luga_id . "\");";
				}				
			} 
			
			if($ona_flags){
				
				$flag_file = "mod/gutwacaptcha/_graphics/flags/" . $luga_id . ".gif";
				
				if(file_exists($CONFIG->path . $flag_file)){
					$text = "<img src='" . $vars["url"] . $flag_file . "' alt='" . $luga_name . "' title='" . $luga_name . "'>";
				}
			}
			
			if(empty($text)){
				$text = $luga_id;
			}
			
			if(!empty($kitendo)){
				$jibu .= "<a href='" . $kitendo . "' title='" . $luga_name . "'>" . $text . "</a>";
			} else {
				$jibu .= $text;	
			}				
		}
		
		$jibu = "<div class='gutwacaptcha_selector'>" . $jibu . "</div>";

		if(!elgg_is_logged_in()){
?>
		<script type="text/javascript">
			function setLanguage(luga_id){
				setCookie("client_luga", luga_id, 30);
				document.location.href = document.location.href;			
			}
			function setCookie(c_name,value,expiredays){
				var exdate = new Date();
				exdate.setDate(exdate.getDate() + expiredays);
				document.cookie = c_name + "=" + escape(value) + ";Path=/" + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString());
			}
		</script>
<?php 	
		}
	}
	
	echo $jibu;