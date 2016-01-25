<?php

/**
 *  Event calendar plugin
 *
 * @package event_calendar
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Kevin Jardine <kevin@radagast.biz>
 * @copyright Radagast Solutions 2008-2011
 * @link http://radagast.biz/
 */


elgg_register_event_handler('init','system','somenergia_calendar_init');

function somenergia_calendar_init() {
    
    // Register URL handler
    //elgg_register_entity_url_handler('object', 'somenergia_calendar','somenergia_calendar_url');
    // Register a page handler, so we can have nice URLs
    elgg_register_page_handler('somenergia_calendar', 'somenergia_calendar_page_handler');
        
    //menu 
    $item = new ElggMenuItem('somenergia_calendar', elgg_echo('item:object:somenergia_calendar'), 'somenergia_calendar/calendar');
    elgg_register_menu_item('site', $item);
    
    //CSS
    elgg_extend_view('css/elgg', 'somenergia_calendar/css');
    
}

function somenergia_calendar_url($entity) { 
	$friendly_title = elgg_get_friendly_title($entity->title);
	return "somenergia_calendar/view/{$entity->guid}/$friendly_title";
    }
    
function somenergia_calendar_page_handler($page) {
    $base_dir = elgg_get_plugins_path() . 'somenergia_calendar';
    include "$base_dir/calendar.php";
    return true; 
}
