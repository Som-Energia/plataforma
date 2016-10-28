<?php
$vote = get_input('vote');
$guid = get_input('guid');
$comment = get_input('vote_comment');

$entity = get_entity($guid);
$user = elgg_get_logged_in_user_entity();

if (!$entity->canAnnotate(0, 'votes')) {
	register_error(elgg_echo('proposals:votes:cannot'));
	forward(REFERER);
}

if ($vote == 'block' && $comment == '') {
	register_error(elgg_echo('proposals:votes:mandatoryfield'));
	forward(REFERER);
}

$options = array(
	'guid' => (int)$guid,
	'annotation_name' => 'votes',
	'annotation_owner_guid' => $user->guid
);

$annotations = elgg_get_annotations($options);
   
if ($comment) {
	$comment = create_annotation($guid,
		'vote_comments',
		$comment,
		"",
		$user->guid,
		$entity->access_id
	);
}

if (is_array($annotations) && count($annotations)) {
	$annotation = $annotations[0];
	$id = $annotation->id;
	update_annotation($id,
		'votes',
		$vote,
		"",
		$user->guid,
		$entity->access_id
	);
	system_message(elgg_echo("proposals:vote:update", array($vote)));
} else {
	$annotation = create_annotation(
		$guid,
		'votes',
		$vote,
		"",
		$user->guid,
		$entity->access_id
	);
	system_message(elgg_echo("proposals:vote:create", array($vote)));
}

forward(REFERER);
