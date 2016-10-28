<?php
/**
 * View for decision object
 *
 * @package Proposals
 *
 * @uses $vars['entity']    The decision object
 * @uses $vars['full_view'] Whether to display the full view
 */

if ($vars['full_view']) {
	$title = elgg_echo('proposals:decision');
	echo "<h3>$title</h3>";
}

echo elgg_view('crud/object', $vars);
