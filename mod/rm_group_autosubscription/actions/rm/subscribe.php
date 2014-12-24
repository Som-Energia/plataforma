<?php

admin_gatekeeper();

$groups = elgg_get_entities( array(
    'types' => 'group',
    'limit' => 0
));

foreach ( $groups as $group ) {

    $topics = elgg_get_entities( array(
	'container_guids' => $group->get( 'guid' ),
	'types' => 'object',
	'subtypes' => 'groupforumtopic'	    
    ));

    $members = $group->getMembers( 0 );

    foreach ( $members as $user ) {

	add_entity_relationship( $user->get( 'guid' ), 'notifyemail', $group->get( 'guid' ) );

	foreach ( $topics as $topic )
	    if ( ! comment_tracker_is_subscribed( $user, $topic ) )
		comment_tracker_subscribe( $user->get( 'guid' ), $topic->get( 'guid' ) );

    }

}

system_message( 'S\'ha subscrit a tots els membres als debats' );
forward( 'admin' );
    