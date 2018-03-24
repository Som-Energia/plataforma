<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://caijingzhi.com
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/
 
    function contentinsert_init()
    {
	// Extend the footer view to show Ads.
	elgg_extend_view('page/elements/footer', 'contentinsert/footbanner', '1');

	// Extend the sidebar view to show Ads on the top
	elgg_extend_view('page/elements/sidebar', 'contentinsert/sidebannertop', '1');
	
	// Extend the sidebar view to show Ads on the bottom
	elgg_extend_view('page/elements/sidebar', 'contentinsert/sidebanner', '501');

	// Extend the content header view to show Ads
	elgg_extend_view('page/elements/header','contentinsert/topbanner');
    }
 
	elgg_register_event_handler('init','system','contentinsert_init');
 
?>