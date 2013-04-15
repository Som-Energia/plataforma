<?php
	$entity = $vars['entity'];
	$owner_guid = $entity->container_guid;
	$owner = get_entity($owner_guid);
	
	$icon = elgg_view_entity_icon($owner, 'tiny');

	if ($owner) {
		$directory = elgg_get_data_path()."wikis/".$owner_guid."/pages";
		$filecount = count(glob("" . $directory . "/*"));
		$list_body = "<h3><a href='".$entity->getURL()."'>".sprintf(elgg_echo('dokuwiki:wikifrom'),$owner->name)."</a></h3>";
		$list_body .= sprintf(elgg_echo("dokuwiki:pages"), $filecount);
		echo elgg_view_image_block($icon, $list_body);
	}
	else {
		// shouldn't show wikis from groups you can't see :-P
		echo elgg_view_image_block("", "");
	}
?>
