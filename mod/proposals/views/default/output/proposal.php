<?php

$entity = get_entity($vars['value']);

echo elgg_view('output/url', array(
	'href' => $entity->getURL(),
	'text' => $entity->title,
));