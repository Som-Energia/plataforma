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

echo '<div class="elgg-menu elgg-menu-footer elgg-menu-hz">';

echo '<a target="_blank" href="http://www.germinadorsocial.com"><img style="margin-top:30px;padding-bottom:30px" src="https://dl.dropboxusercontent.com/u/175272/germinador_social_plataforma.jpg" alt="Germinador Social Banner"/></a>';

echo '</div>';
