<?php

/**
 * Som Energia theme plugin
 *
 * @package SomEnergia Theme
 */
elgg_register_event_handler('init', 'system', 'somenergia_theme_init');

function somenergia_theme_init() {

	elgg_register_event_handler('pagesetup', 'system', 'somenergia_theme_pagesetup', 1000);

	// theme specific CSS
	elgg_extend_view('elgg.css', 'somenergia-theme/css');

	elgg_unextend_view('page/elements/header', 'search/header');
	elgg_extend_view('page/elements/sidebar', 'search/header', 0);


	elgg_register_plugin_hook_handler('head', 'page', 'somenergia_theme_setup_head');

	// non-members do not get visible links to RSS feeds
	if (!elgg_is_logged_in()) {
		elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');
	}
        
        // Show fork me on github
        elgg_register_menu_item('footer', \ElggMenuItem::factory(array(
		'name' => 'forkmegithub',
		'text' => "<span class=\"fa fa-github\"></span> Fork me on Github", // TODO: Translate
		'href' => 'https://github.com/Som-Energia/plataforma',
		'title' => 'Fork me on Github',
		'section' => 'meta',
	)));

}

/**
 * Rearrange menu items
 */
function somenergia_theme_pagesetup() {

    if (elgg_is_logged_in()) {

        elgg_register_menu_item('topbar', array(
            'name' => 'account',
            'text' => elgg_echo('account'),
            'href' => "#",
            'priority' => 100,
            'section' => 'alt',
            'link_class' => 'elgg-topbar-dropdown',
        ));

        if (elgg_is_active_plugin('dashboard')) {
            $item = elgg_unregister_menu_item('topbar', 'dashboard');
            if ($item) {
                $item->setText(elgg_echo('dashboard'));
                $item->setSection('default');
                elgg_register_menu_item('site', $item);
            }
        }

        $item = elgg_get_menu_item('topbar', 'usersettings');
        if ($item) {
            $item->setParentName('account');
            $item->setText(elgg_echo('settings'));
            $item->setPriority(103);
        }

        $item = elgg_get_menu_item('topbar', 'logout');
        if ($item) {
            $item->setParentName('account');
            $item->setText(elgg_echo('logout'));
            $item->setPriority(104);
        }

        $item = elgg_get_menu_item('topbar', 'administration');
        if ($item) {
            $item->setParentName('account');
            $item->setText(elgg_echo('admin'));
            $item->setPriority(101);
        }

        if (elgg_is_active_plugin('site_notifications')) {
            $item = elgg_get_menu_item('topbar', 'site_notifications');
            if ($item) {
                $item->setParentName('account');
                $item->setText(elgg_echo('site_notifications:topbar'));
                $item->setPriority(102);
            }
        }

        if (elgg_is_active_plugin('reportedcontent')) {
            $item = elgg_unregister_menu_item('footer', 'report_this');
            if ($item) {
                $item->setText(elgg_view_icon('report-this'));
                $item->setPriority(500);
                $item->setSection('default');
                elgg_register_menu_item('extras', $item);
            }
        }
    }
}

/**
 * Register items for the html head
 *
 * @param string $hook Hook name ('head')
 * @param string $type Hook type ('page')
 * @param array  $data Array of items for head
 * @return array
 */
function somenergia_theme_setup_head($hook, $type, $data) {
    $data['metas']['viewport'] = array(
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
    );

    $data['links']['apple-touch-icon'] = array(
        'rel' => 'apple-touch-icon',
        'href' => elgg_get_simplecache_url('somenergia-theme/favicon-128.png'),
    );

    $data['links']['icon-ico'] = array(
        'rel' => 'icon',
        'href' => elgg_get_simplecache_url('somenergia-theme/favicon.ico'),
    );
    $data['links']['icon-16'] = array(
        'rel' => 'icon',
        'sizes' => '16x16',
        'type' => 'image/png',
        'href' => elgg_get_simplecache_url('somenergia-theme/favicon-16.png'),
    );
    $data['links']['icon-32'] = array(
        'rel' => 'icon',
        'sizes' => '32x32',
        'type' => 'image/png',
        'href' => elgg_get_simplecache_url('somenergia-theme/favicon-32.png'),
    );
    $data['links']['icon-64'] = array(
        'rel' => 'icon',
        'sizes' => '64x64',
        'type' => 'image/png',
        'href' => elgg_get_simplecache_url('somenergia-theme/favicon-64.png'),
    );
    $data['links']['icon-128'] = array(
        'rel' => 'icon',
        'sizes' => '128x128',
        'type' => 'image/png',
        'href' => elgg_get_simplecache_url('somenergia-theme/favicon-128.png'),
    );

    return $data;
}
