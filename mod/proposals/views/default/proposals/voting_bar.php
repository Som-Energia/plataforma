<?php

$votes = elgg_extract('votes', $vars);

echo '<div class="voting-bar">';

foreach ($votes as $vote_type => $result) {
	$total = array_sum($votes);
	if ($total) {
		$percent = $result / $total * 100;
	}
	else {
		$percent = 0;
	}
	echo elgg_view('output/url', array(
		'title' => $result,
		'class' => "votes-bar-$vote_type",
		'style' => "width: $percent%",
	));
}

echo "</div>";
