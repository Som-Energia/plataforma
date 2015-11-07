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


//echo '<div class="mts clearfloat float-alt">';
echo '<div class="elgg-menu elgg-menu-footer elgg-menu-hz elgg-menu-footer-default">';
echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "<p>Powered by Elgg</p>",
	'class' => 'elgg-menu-footer',
	'is_trusted' => true,
));
echo elgg_view('output/url', array(
	'href' => 'https://github.com/Som-Energia/plataforma',
	'text' => "<p><span class=\"fa fa-github\"></span> Fork me on Github</p>",
	'class' => 'elgg-menu-footer',
	'is_trusted' => true,
));
echo '</div>';
