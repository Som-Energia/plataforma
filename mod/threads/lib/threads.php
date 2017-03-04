<?php

function threads_top($entity_guid){
	$entity = get_entity($entity_guid);
	if(elgg_instanceof($entity, 'object', 'topicreply')) {
		$top = current(threads_get_all_replies($entity_guid, array(
			'inverse_relationship' => false,
			'limit' => 1,
		)));
		return $top;
	} elseif (elgg_instanceof($entity, 'object', 'groupforumtopic')) {
		return $entity;
	}
	return false;
}

function threads_parent($entity_guid){
	$entity = get_entity($entity_guid);
	if(elgg_instanceof($entity, 'object', 'topicreply')) {
		$parent = current(threads_get_replies($entity_guid, array(
			'inverse_relationship' => false,
			'limit' => 1
		)));
		return $parent;
	}
	return false;
}

function threads_get_replies($entity_guid, $options = array()){
	$options['relationship_guid'] = $entity_guid;
	$defaults = array(
		'relationship' => 'parent',
		'inverse_relationship' => true,
		'order_by' => 'e.time_created asc'
	);
	$options = array_merge($defaults, $options);
	return elgg_get_entities_from_relationship($options);
}

function threads_get_replies_count($entity_guid){
	return threads_get_replies($entity_guid, array('count' => true));
}

function threads_get_all_replies($entity_guid, $options = array()){
	$options['relationship_guid'] = $entity_guid;
	$defaults = array(
		'relationship' => 'top',
		'inverse_relationship' => true,
		'order_by' => 'e.time_created asc'
	);
	$options = array_merge($defaults, $options);
	return elgg_get_entities_from_relationship($options);
}

function threads_get_all_replies_count($entity_guid){
	return threads_get_all_replies($entity_guid, array('count' => true));
}

function threads_has_replies($entity_guid){
	return threads_get_all_replies_count($entity_guid) > 0;
}

function threads_list_replies($entity_guid, $options = array()){
	$options['relationship_guid'] = $entity_guid;
	$entity = get_entity($entity_guid);
	if (elgg_instanceof($entity, 'object', 'groupforumtopic')) {
		$options['pagination'] = true;
		$options['limit'] = 10;
	} else {
		$options['pagination'] = false;
		$options['limit'] = 0;
	}
	$options['offset'] = (int) get_input('offset', 0);

	$replies = threads_get_replies($entity_guid, $options);
	$options['count'] = threads_get_replies($entity_guid, array_merge($options, array(
		'count' => true,
	)));
	return elgg_view_entity_list($replies, $options);
}

function threads_get_last_topic_reply($topic_guid) {
	return current(threads_get_all_replies($topic_guid, array(
		'limit' => 1,
		'order_by' => 'e.time_created desc'
	)));
}

function threads_create($guid, $params){
	if (empty($guid)) {
		$topic = new ElggObject();
		$topic->subtype = 'groupforumtopic';
	} else {
		// load original file object
		$topic = new ElggObject($guid);
		if (!$topic || !$topic->canEdit()) {
			register_error(elgg_echo('discussion:topic:notfound'));
			forward(REFERER);
		}
	}

	// save parameters
	foreach($params as $key => $value) {
		$topic->$key = $value;
	}

	return $topic->save();
}

function threads_reply($parent_guid, $text, $title="", $params = null){
	
	$topic = threads_top($parent_guid);
	$topic_guid = $topic->guid;

	// add the reply to the forum topic
	$reply = new ElggObject();
	$reply->subtype = 'topicreply';
	$reply->title = $title ? $title : "Re:" . $topic->title;
	$reply->description = $text;
	$reply->access_id = $topic->access_id;
	$reply->container_guid = $topic->container_guid;

	// save parameters
	if ($params) {
		foreach($params as $key => $value) {
			$reply->$key = $value;
		}
	}

	if($reply->save()){
		$reply->addRelationship($parent_guid, 'parent');
		$reply->addRelationship($topic_guid, 'top');
		return $reply->save();
	} else{
		return false;
	}
}
