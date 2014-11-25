<?php
elgg_register_event_handler( 'init', 'system', 'somenergia_theme_init' );

function somenergia_theme_init() {
    elgg_unregister_menu_item( 'topbar', 'elgg_logo' );
}