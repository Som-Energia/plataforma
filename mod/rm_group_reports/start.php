<?php

//function rm_as_event( $event, $type, $reply ) {
//    
//    $topic = (int) get_input('entity_guid');
//    
//    if ( $reply->getSubType() == 'topicreply' ) {
//    
//	$user	       = elgg_get_logged_in_user_entity();
//	$topic	       = get_entity( $topic );
//	list( $group ) = elgg_get_entities( array( 'guids' => $reply->getContainerGUID() ) );
//	$members       = $group->getMembers( 0 );
//	
//	foreach ( $members as $member )
//	    if ( $user->get( 'guid' ) != $member->get( 'guid' ) )
//		$guids[] = $member->get( 'guid' );
//	    
//	    
//	notify_user( $guids, $group->get( 'guid' ), 'New group reply post', <<<MESSAGE
//{$user->get( 'name' )} added a new reply to "{$topic->get( 'title' )}" in {$group->get( 'name' )}:
//
//{$reply->description}
//
//View and reply to the discussion:
//{$topic->getURL()}
//MESSAGE
//	);
//
//    }
//    
//    return true;
//    
//}
//
//function rm_group_reports_menu( $hook, $type, $returnvalue, $params ) {
//    
//    $item = new ElggMenuItem( 'statistics:group_reports', 'Grupos', elgg_get_site_url() . 'action/rm/subscribe' );
//    $item->setSection( 'administer' );
//    $item->setContext( 'admin' );
//    $item->setParentName( 'statistics' );
//    $returnvalue[] = $item;
//    
//    return $returnvalue;
//    
//}

//cantidad de usuarios registrados, discusiones creadas, items creados y fechas de última actualización


function rm_group_reports_init() {
    
    // Register item menu.
    elgg_register_admin_menu_item( 'administer', 'groups', 'statistics' );
    
//    $plugin_path = elgg_get_plugins_path() . 'rm_autosubscription/actions';
//    
//    //{{{ Actions
//    
//    elgg_unregister_action( 'groups/join' );
//    elgg_register_action( 'groups/join', $plugin_path . '/groups/membership/join.php' );
//    
//    elgg_unregister_action( 'discussion/save' );
//    elgg_register_action( 'discussion/save', $plugin_path . '/discussion/save.php' );
//    
//    elgg_register_action( 'rm/subscribe', $plugin_path . '/rm/subscribe.php' );
//    
//    
//    //}}}
//    
//    //{{{ Events
//    
//    elgg_register_event_handler( 'create', 'object', 'rm_as_event' );
//    
//    //}}}
//    
//    //{{{ Menú
//    
//    elgg_register_plugin_hook_handler( 'register', 'menu:page', 'rm_group_reports_menu' );
    
//    elgg_register_page_handler( array( 'admin', 'statistics', 'groups' ), function() { 
//        echo 'enlapágina';
//    } );
//    http://localhost/freelance/davidromani/somenergia/admin//server
    
//    
//    //}}}
    
}
 
elgg_register_event_handler( 'init', 'system', 'rm_group_reports_init' );
    