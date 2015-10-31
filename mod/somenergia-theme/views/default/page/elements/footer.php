<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));


echo '<div class="mts clearfloat float-alt">';
echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "<p>Powered by Elgg</p>",
	'class' => '',
	'is_trusted' => true,
));
echo elgg_view('output/url', array(
	'href' => 'https://github.com/Som-Energia/plataforma',
	'text' => "<p>Fork me on Github</p>",
	'class' => '',
	'is_trusted' => true,
));
echo '</div>';
