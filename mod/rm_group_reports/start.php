<?php

function rm_group_reports_init() {
    
    if ( elgg_in_context( 'admin' ) && get_input( 'page' ) === 'statistics/groups' ) {  
        $plugin_path = basename( elgg_get_plugins_path() );
        $plugin_folder = basename(__DIR__);
        $url_plugin = elgg_get_site_url() . implode( '/', array( $plugin_path, $plugin_folder ) );
        elgg_register_js( 'sorttable', $url_plugin . '/views/default/js/sorttable.js' );
        elgg_load_js( 'sorttable' );
    }
    // Register item menu.
    elgg_register_admin_menu_item( 'administer', 'groups', 'statistics' );
    
}
 
elgg_register_event_handler( 'init', 'system', 'rm_group_reports_init' );