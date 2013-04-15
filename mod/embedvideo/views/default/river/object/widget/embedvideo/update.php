<?php
if (function_exists('add_to_river')) {
	$performed_by = get_entity($vars['item']->subject_guid);
	$widget       = get_entity($vars['item']->object_guid);

	$url = "<a href=\"{$performed_by->getURL()}\">{$performed_by->name}</a>";
	$string = sprintf(elgg_echo("embedvideo:river:updated"), $url);
	if (isset($widget->videotitle)) {
		$string .= ': ' . $widget->videotitle;
	}

	echo $string;
} else {
	// Elgg 1.2 code could be put here, but it will be double echoed due to bug
	// in elgg core so we will keep it out
	/*
    $statement = $vars['statement'];
    $performed_by = $statement->getSubject();
  
    $url = "<a href=\"{$performed_by->getURL()}\">{$performed_by->name}</a>";
    $string = sprintf(elgg_echo("embedvideo:river:updated"),$url);

    echo $string;
	*/
}
