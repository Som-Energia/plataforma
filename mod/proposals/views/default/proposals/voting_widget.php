<?php

elgg_load_library('elgg:proposals');

$entity = elgg_extract('entity', $vars, FALSE);

$votes = proposals_get_votes($entity);
$member_count = $entity->getContainerEntity()->getMembers(0, 0, true);	

$status = proposals_get_status_from_votes($votes, $member_count);
$points = proposals_get_points_from_votes($votes);

$user_vote = current(elgg_get_annotations(array(
	'guid' => $entity->guid,
	'annotation_name' => 'votes',
	'annotation_owner_guid' => elgg_get_logged_in_user_guid(),
)));

$button_names = array('yes', 'no', 'block', 'abstain');
$buttons = array();
foreach($button_names as $button) {
	$buttons[$button] = elgg_view('output/url', array(
		'text' => elgg_echo("proposals:votes:$button"),
		'title' => elgg_echo("proposals:votes:$button:descripition"),
		'rel' => 'popup',
		'href' => "#votes-proposal-$entity->guid-$button",
		'class' => 'elgg-button elgg-button-action' . 
				(($button == $user_vote->value) ? ' elgg-state-disabled' : ''),
	)) .
	elgg_view('output/voting_popup', array(
		'id' => "votes-proposal-$entity->guid-$button",
		'value' => elgg_view_form('proposals/vote', array(), array('guid' => $entity->guid, 'vote' => $button)),
	));
}

$votes_bar = elgg_view('proposals/voting_bar', array(
	'votes' => $votes,
));

$total_label = elgg_echo("proposals:votes:total");
$total_percent = array_sum($votes) / $member_count * 100 . '%';
$total_link = elgg_view('output/url', array(	
	'text' => elgg_echo('proposals:votes:total:value', array($total_percent, array_sum($votes), $member_count)),
	'rel' => 'popup',
	'href' => "#votes-proposal-$entity->guid-total",
));
$total_link .= elgg_view('output/voting_popup', array(
	'id' => "votes-proposal-$entity->guid-total",
	'value' => elgg_view('proposals/voting_results', array('entity' => $entity)),
));

$status_label = elgg_echo("proposals:votes:status");
$status_text = elgg_echo("proposals:votes:$status");

echo <<<HTML
<div class="votes-points votes-status-$status">
	$points
</div>
$votes_bar
<div class="votes-controls">
	{$buttons['yes']}
	{$buttons['no']}
	{$buttons['block']}
	{$buttons['abstain']}
</div>
<div class="votes-info">
	<div><label>$total_label</label> $total_link</div>
	<div><label>$status_label</label> $status_text</div>
</div>
HTML;
