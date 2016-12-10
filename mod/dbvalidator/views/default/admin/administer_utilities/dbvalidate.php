<?php
/**
 * Admin section for database cleaner
 */

elgg_load_js('dbvalidate');

echo '<p class="elgg-content-thin">';
echo elgg_echo('dbvalidate:instructions');
echo '</p>';

echo elgg_view('output/url', array(
	'text' => elgg_echo('dbvalidate:validate'),
	'href' => 'action/dbvalidate/validate',
	'is_action' => true,
	'is_trusted' => true,
	'class' => 'elgg-button elgg-button-submit',
	'id' => 'dbv-validate',
)) . "<br><br>";

echo elgg_view('output/url', array(
	'text' => elgg_echo('dbvalidate:repair'),
	'href' => 'action/dbvalidate/repair',
	'is_action' => true,
	'is_trusted' => true,
	'class' => 'elgg-button elgg-button-submit',
	'id' => 'dbv-repair',
));

echo elgg_view('graphics/ajax_loader', array(
	'id' => 'dbv-ajax-spinner',
	'class' => 'elgg-content-thin',
));
?>

<div id="dbv-results" class="mtl">
</div>
