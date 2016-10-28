<?php

function proposals_get_votes($entity) {
	
	$annotations = elgg_get_annotations(array(
		'guid' => $entity->guid,
		'annotation_name' => 'votes',
	));

	$votes = array();
	
	foreach(array("yes", "no", "block", "abstain") as $name) {
		$votes[$name] = 0;
	}
	
	foreach($annotations as $annotation) {
		if (!isset($votes[$annotation->value])) {
			$votes[$annotation->value] = 0;
		}
		$votes[$annotation->value] += 1;
	}
	return $votes;
}

function proposals_get_points_from_votes($votes) {
	$points = $votes["yes"] - ($votes["no"] + $votes["block"]);
	if ($points > 0) {
		$points = "+".$points;
	}
	return $points;
}

function proposals_get_status_from_votes($votes, $member_count) {
	$status = "no_consensus";
	$total_votes = array_sum($votes);
	
	if ($votes["block"]) {
		$status = "blocked";
	} elseif ($total_votes < $member_count/2) {
		$status = "new";
	} elseif ($votes["no"] >= $member_count / 2) {
		$status = "no_consensus";
	} elseif (($votes["yes"] > $votes["no"]+($member_count-$total_votes))) {
		$status = "consensus";
	}
	return $status;
}