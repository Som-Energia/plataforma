<?php

function rm_group_reports_init() {
    
    // Register item menu.
    elgg_register_admin_menu_item( 'administer', 'groups', 'statistics' );
    
}
 
elgg_register_event_handler( 'init', 'system', 'rm_group_reports_init' );
    