<?php

	elgg_push_breadcrumb(elgg_echo('dokuwiki'));
	$offset = (int)get_input('offset', 0);
	$title = elgg_echo("dokuwiki:title");
	$content = elgg_list_entities(array('subtype'=>'dokuwiki', 'offset'=>$offset, 'types'=>'object','full_view'=>false));
	$body = elgg_view_layout('content', array(
		'content' => $content,
		'title' => $title,
		'filter' => '',
	));

	// Finally draw the page
	echo elgg_view_page($title, $body);


?>
