<?php
/**
 * Reply river view
 */
$object = $vars['item']->getObjectEntity();
// Trick: Annotation id contains the reply guid.
$reply = get_entity($vars['item']->annotation_id);
$excerpt = elgg_get_excerpt($reply->description);

$responses = '';
if (elgg_is_logged_in() && $object->canAnnotate(0, 'group_topic_post') && $reply) {
	// inline comment form
	$form_vars = array('id' => "groups-reply-{$reply->getGUID()}", 'class' => 'hidden');
	$body_vars = array('entity' => $reply, 'reply' => true, 'inline' => true);
	$responses = elgg_view_form('discussion/reply/save', $form_vars, $body_vars);
}

echo elgg_view('river/item', array(
	'item' => $vars['item'],
	'message' => $excerpt,
	'responses' => $responses,
));
