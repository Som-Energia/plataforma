<?php

function rm_group_default_fields_init() {

    // tidypics
    if (elgg_is_active_plugin('tidypics')) {
        // Enable group photo albums module
        remove_group_tool_option('photos');
        add_group_tool_option('photos', elgg_echo('tidypics:enablephotos'), false);

        // Enable group photos module
        remove_group_tool_option('tp_images');
        add_group_tool_option('tp_images', elgg_echo('tidypics:enable_group_images'), false);
    }

    // blog
    if (elgg_is_active_plugin('blog')) {
        // Habilitar blog del grupo
        remove_group_tool_option('blog');
        add_group_tool_option('blog', elgg_echo('blog:enableblog'), false);
    }

    // bookmarks
    if (elgg_is_active_plugin('bookmarks')) {
        // Habilitar marcadores de grupos
        remove_group_tool_option('bookmarks');
        add_group_tool_option('bookmarks', elgg_echo('bookmarks:enablebookmarks'), false);
    }

    // pages
    if (elgg_is_active_plugin('pages')) {

        // Habilitar páginas del grupo
        remove_group_tool_option('pages');
        add_group_tool_option('pages', elgg_echo('groups:enablepages'), false);
    }

    // event_calendar
    if (elgg_is_active_plugin('event_calendar')) {

        // Permitir calendario de eventos de grupo
        remove_group_tool_option('event_calendar');
        add_group_tool_option('event_calendar', elgg_echo('event_calendar:enable_event_calendar'), false);
    }

    // file_tools
    if (elgg_is_active_plugin('file_tools')) {

        // Permitir la gestión de carpetas por los miembros
        remove_group_tool_option('file_tools_structure_management');
        add_group_tool_option('file_tools_structure_management', elgg_echo('file_tools:group_tool_option:structure_management'), false);
    }
}

elgg_register_event_handler('init', 'system', 'rm_group_default_fields_init');
