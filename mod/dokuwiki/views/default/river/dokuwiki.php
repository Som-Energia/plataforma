<?php
	// 'action_type'=>$action_type, 'subject_guid'=>$subject_guid, 'object_guid' =>$object_guid, 'item'=>$res
	$user = get_entity($vars['item']->subject_guid);
	$wiki = get_entity($vars['item']->object_guid);
	$parts = explode("/", $vars['item']->action_type);
	$id = $wiki->container_guid;
	$namespace = "<a href='".$wiki->getURL()."?id=".$parts[2]."'>".$parts[2]."</a>";
	if ($wiki_owner = get_entity($wiki->container_guid))
		$wikifrom = sprintf(elgg_echo("dokuwiki:wikifrom"), $wiki_owner->name);
	else
		$wikifrom = elgg_echo("dokuwiki:sitewiki");
	if ($wiki)
	$wikiname = "<a href='".$wiki->getURL()."'>".$wikifrom."</a>";
	if ($user)
	$user_node = "<a href='".$user->getURL()."'>" . $user->name . "</a>";
	echo sprintf(elgg_echo("dokuwiki:river:modified"), $user_node, $namespace, $wikiname);
?>
