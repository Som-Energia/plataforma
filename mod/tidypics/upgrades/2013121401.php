<?php

// prevent timeout when script is running (thanks to Matt Beckett for suggesting)
set_time_limit(0);

// Ignore access to make sure all items get updated
$ia = elgg_set_ignore_access(true);

elgg_register_plugin_hook_handler('permissions_check', 'all', 'elgg_override_permissions');
elgg_register_plugin_hook_handler('container_permissions_check', 'all', 'elgg_override_permissions');

// Make sure that entries for disabled entities also get upgraded
$access_status = access_get_show_hidden_status();
access_show_hidden_entities(true);

$db_prefix = elgg_get_config('dbprefix');
$tidypics_batch_subtype_id = get_subtype_id('object', 'tidypics_batch');
$tidypics_album_subtype_id = get_subtype_id('object', 'album');

// Begin of Update PART 1/4:
// Get river entries for comments added to Tidypics batches
// and update these entries together with the comment annotations
// to point to the image (if only 1 image was uploaded) or album
$batch = new ElggBatch('elgg_get_river', array(
	'type' => 'object',
	'subtype' => 'tidypics_batch',
	'action_type' => 'comment',
	'limit' => false
));

foreach ($batch as $river_entry) {
	// Get the batch entity
	$tidypics_batch = get_entity($river_entry->object_guid);

	// Get images related to this batch
	$images = elgg_get_entities_from_relationship(array(
		'relationship' => 'belongs_to_batch',
		'relationship_guid' => $tidypics_batch->getGUID(),
		'inverse_relationship' => true,
		'type' => 'object',
		'subtype' => 'image',
		'limit' => false
	));

	// for more than a single image uploaded in the batch move the comment to the album
	if (count($images) > 1) {
		$album = get_entity($tidypics_batch->container_guid);

		// fix river entry
		$query = "
				UPDATE {$db_prefix}river
				SET subtype = 'album',
					view = 'river/annotation/comment/album',
					access_id = {$album->access_id},
					object_guid = {$album->guid}
				WHERE id = {$river_entry->id}
		";
		update_data($query);

		// and fix annotation
		$query = "
				UPDATE {$db_prefix}annotations
				SET entity_guid = {$album->guid},
					access_id = {$album->access_id}
				WHERE id = {$river_entry->annotation_id}
		";
		update_data($query);
	// for a batch with only a single image uploaded move the comment to this image
	} else {
		// fix river entry
		$query = "
				UPDATE {$db_prefix}river
				SET subtype = 'image',
					view = 'river/annotation/comment/image',
					access_id = {$images[0]->access_id},
					object_guid = {$images[0]->guid}
				WHERE id = {$river_entry->id}
		";
		update_data($query);

		// and fix annotation
		$query = "
				UPDATE {$db_prefix}annotations
				SET entity_guid = {$images[0]->guid},
					access_id = {$images[0]->access_id}
				WHERE id = {$river_entry->annotation_id}
		";
		update_data($query);
	}
}
// End of Update Part 1/4

// Begin of Update PART 2/4:
// Get comment annotations added to Tidypics batches with a Tidypics 1.8.1betaXX version
// and update these entries together with their river entries to be assigned
// to the image (if only 1 image was uploaded) or album
$batch = new ElggBatch('elgg_get_annotations', array(
	'annotation_name' => 'generic_comment',
	'joins' => array("JOIN {$db_prefix}entities te ON te.guid = n_table.entity_guid"),
	'wheres' => array("te.subtype = $tidypics_batch_subtype_id"),
	'limit' => false
));

foreach ($batch as $annotation_entry) {

	// Get the batch entity
	$tidypics_batch = get_entity($annotation_entry->entity_guid);

	// Get images related to this batch
	$images = elgg_get_entities_from_relationship(array(
		'relationship' => 'belongs_to_batch',
		'relationship_guid' => $tidypics_batch->getGUID(),
		'inverse_relationship' => true,
		'type' => 'object',
		'subtype' => 'image',
		'limit' => false
	));

	// for more than a single image uploaded in the batch move the comment to the album
	if (count($images) > 1) {
		$album = get_entity($tidypics_batch->container_guid);

		// fix river entry
		$query = "
				UPDATE {$db_prefix}river
				SET subtype = 'album',
					view = 'river/annotation/comment/album',
					access_id = {$album->access_id},
					object_guid = {$album->guid}
				WHERE annotation_id = {$annotation_entry->id}
		";
		update_data($query);

		// and fix annotation
		$query = "
				UPDATE {$db_prefix}annotations
				SET entity_guid = {$album->guid},
					access_id = {$album->access_id}
				WHERE id = {$annotation_entry->id}
		";
		update_data($query);
	// for a batch with only a single image uploaded move the comment to this image
	} else {
		// fix river entry
		$query = "
				UPDATE {$db_prefix}river
				SET subtype = 'image',
					view = 'river/annotation/comment/image',
					access_id = {$images[0]->access_id},
					object_guid = {$images[0]->guid}
				WHERE annotation_id = {$annotation_entry->id}
		";
		update_data($query);

		// and fix annotation
		$query = "
				UPDATE {$db_prefix}annotations
				SET entity_guid = {$images[0]->guid},
					access_id = {$images[0]->access_id}
				WHERE id = {$annotation_entry->id}
		";
		update_data($query);
	}
}
// End of Update PART 2/4

// Begin of Update PART 3/4:
// Check for album comments without a river entry and delete them (for each comment made on the activity page
// on an image upload a second comment annotation was created with Tidypics 1.8.1betaXX that showed up on the
// corresponding album page while the first comment annotation was only visible below the river entry on the 
// activity page. This second comment annotation is now no longer necessary and should be removed to avoid
// comments appearing twice on album pages)
// ATTENTION: this part of the upgrade script will remove ALL album comment annotations that don't a corresponding
// river entry. If you removed the river entries by any means or prevented them from getting created in the first
// place you might not want this part of the upgrade to be executed. Then you should comment out part 3 of the upgrade
// But you will most likely end with double comments on album pages then.
$batch = new ElggBatch('elgg_get_annotations', array(
	'annotation_name' => 'generic_comment',
	'joins' => array("JOIN {$db_prefix}entities te ON te.guid = n_table.entity_guid"),
	'wheres' => array("te.subtype = $tidypics_album_subtype_id"),
	'limit' => false
));
// now collect the ids of the duplicate comment annotations that should be deleted
$album_comment_entry_id = array();
foreach ($batch as $album_comment) {
	$river_entry_count = elgg_get_river(array(
		'type' => 'object',
		'subtype' => 'album',
		'action_type' => 'comment',
		'annotation_id' => $album_comment->id,
		'count' => true
	));
	
	if($river_entry_count < 1) {
		$album_comment_entry_id[] = $album_comment->id;
	}
}

// and finally delete the rows in the annotations table if there have been any duplicate comment annotations found
if ($album_comment_entry_id) {
	$album_comment_entry_id = implode(', ', $album_comment_entry_id);
	$del_comment_annotations_query = "DELETE FROM {$db_prefix}annotations
							WHERE id IN ($album_comment_entry_id)";
	delete_data($del_comment_annotations_query);
	unset($album_comment_entry_id);
}
// End of Update Part 3/4

// Begin of Update Part 4/4
// Update likes made to Tidypics batches and assign them either to the image uploaded (if only one) or the album
$batch = new ElggBatch('elgg_get_annotations', array(
	'annotation_name' => 'likes',
	'joins' => array("JOIN {$db_prefix}entities te ON te.guid = n_table.entity_guid"),
	'wheres' => array("te.subtype = $tidypics_batch_subtype_id"),
	'limit' => false
));
// collect the ids of like annotations that would be duplicates after assinging them to images or albums
$like_annotation_ids = array();
foreach ($batch as $like_entry) {
	// Get the batch entity
	$tidypics_batch = get_entity($like_entry->entity_guid);

	// Get images related to this batch
	$images = elgg_get_entities_from_relationship(array(
		'relationship' => 'belongs_to_batch',
		'relationship_guid' => $tidypics_batch->getGUID(),
		'inverse_relationship' => true,
		'type' => 'object',
		'subtype' => 'image',
		'limit' => false
	));

	// move the like to the album if more than a single image was uploaded in this batch
	if (count($images) > 1) {
		$album = get_entity($tidypics_batch->container_guid);
		// in case the same user who liked the Tidypics batch entry on the activity already
		// liked the album delete the annotation to prevent double likes
		if (elgg_annotation_exists($album->guid, 'likes', $like_entry->owner_guid)) {
			$like_annotation_ids[] = $like_entry->id; // deleting follows later
		} else {
			// fix annotation
			$query = "
					UPDATE {$db_prefix}annotations
					SET entity_guid = {$album->guid},
						access_id = {$album->access_id}
					WHERE id = {$like_entry->id}
			";
			update_data($query);
		}
	// move the like to the image if only a single image was uploaded in the batch
	} else {
		// in case the same user who liked the Tidypics batch entry on the activity already
		// liked the image delete the annotation to prevent double likes
		if (elgg_annotation_exists($images[0]->guid, 'likes', $like_entry->owner_guid)) {
			$like_annotation_ids[] = $like_entry->id; // deleting follows later
		} else {
			// fix annotation
			$query = "
					UPDATE {$db_prefix}annotations
					SET entity_guid = {$images[0]->guid},
						access_id = {$images[0]->access_id}
					WHERE id = {$like_entry->id}
			";
			update_data($query);
		}
	}
}

// and finally delete the rows in the annotations table if there have been any duplicate likes found
if ($like_annotation_ids) {
	$like_annotation_ids = implode(', ', $like_annotation_ids);
	$del_like_annotations_query = "DELETE FROM {$db_prefix}annotations
							WHERE id IN ($like_annotation_ids)";
	delete_data($del_like_annotations_query);
	unset($like_annotation_ids);
}
// End of Update Part 4/4

elgg_set_ignore_access($ia);
access_show_hidden_entities($access_status);
