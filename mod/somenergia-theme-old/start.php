<?php

elgg_register_event_handler('init', 'system', 'somenergia_theme_init');

function somenergia_theme_init() {
    elgg_log('Som Energia theme init', 'INFO');
    
    elgg_unregister_menu_item('topbar', 'elgg_logo');

    //Icono plugin custom_index_widgets
    elgg_unextend_view('page/elements/footer', 'custom_index_widgets/footerlinks');

    /** JAVASCRIPT */
    //elgg_unregister_js('jquery');
    //$jquery = 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js';
    //elgg_register_js('jquery', $jquery);
    //elgg_load_js('jquery');

    /** CSS */
    elgg_register_css('somenergia_font_roboto', '//fonts.googleapis.com/css?family=Roboto:400,900,300,100,500');
    elgg_load_css('somenergia_font_roboto');
    elgg_register_css('somenergia_font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    elgg_load_css('somenergia_font_awesome');

    //elgg_register_css( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    //elgg_load_css( 'bootstrap_css' );
}
