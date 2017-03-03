<?php
/**
 * Elgg demo custom index page plugin
 * 
 */

elgg_register_event_handler('init', 'system', 'somenergia_index_init');

function somenergia_index_init() {
	// Extend system CSS with our own styles
	elgg_extend_view('css/elgg', 'somenergia_index/css');
        
        // Replace the default index page
	elgg_register_page_handler('', 'somenergia_index');
}

function somenergia_index() {
	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}
	return true;
}
