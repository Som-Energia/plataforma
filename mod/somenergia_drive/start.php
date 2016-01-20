<?php

/**
 *  google drive plugin
 *
 * @package google_drive
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Kevin Jardine <kevin@radagast.biz>
 * @copyright Radagast Solutions 2008-2011
 * @link http://radagast.biz/
 */


elgg_register_event_handler('init','system','somenergia_drive_init');

function somenergia_drive_init() {
    
    // Register URL handler
    // Register a page haºndler, so we can have nice URLs
    elgg_register_page_handler('somenergia_drive', 'somenergia_drive_page_handler');
        
    //menu 
    $item = new ElggMenuItem('somenergia_drive', elgg_echo('item:object:somenergia_drive'), 'somenergia_drive/drive');
    elgg_register_menu_item('site', $item);

}

function somenergia_drive_url($entity) { 
	$friendly_title = elgg_get_friendly_title($entity->title);
	return "somenergia_drive/view/{$entity->guid}/$friendly_title";
    }
    
function somenergia_drive_page_handler($page) {
    $base_dir = elgg_get_plugins_path() . 'somenergia_drive';
    include "$base_dir/drive.php";
    return true; 
}
