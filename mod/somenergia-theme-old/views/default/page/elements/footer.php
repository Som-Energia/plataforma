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

echo '<div class="elgg-menu elgg-menu-footer elgg-menu-hz elgg-menu-footer-default">';
echo elgg_view('output/url', array(
	'href' => 'https://github.com/Som-Energia/plataforma',
	'text' => "<span class=\"fa fa-github\"></span> Fork me on Github",
	'class' => 'elgg-menu-footer-item',
	'is_trusted' => true,
));

echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "Powered by Elgg",
	'class' => 'elgg-menu-footer-item',
	'is_trusted' => true,
));

echo '</div>';
