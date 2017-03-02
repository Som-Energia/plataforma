<?php

function somenergia_customization_init() {
    
}

function somenergia_customization_pagesetup() {
    
    $page_owner = elgg_get_page_owner_entity();
    if ((elgg_in_context("groups") || elgg_in_context('discussion')) && ($page_owner instanceof ElggGroup) && $page_owner->getGUID() == "175519") {
        elgg_register_menu_item('page', array(
            'name' => 'docs',
            'text' => elgg_echo('group_tools:menu:docs'),
            'href' => "https://drive.google.com/drive/folders/0B69kf2S7gdgDbEJISmtFY25RWnM",
            'priority' => 300,
        ));
    }
}

elgg_register_event_handler('init', 'system', 'somenergia_customization_init');
elgg_register_event_handler('pagesetup', 'system', 'somenergia_customization_pagesetup', 650);
