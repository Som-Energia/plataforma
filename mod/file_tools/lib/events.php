<?php

	function file_tools_object_handler($event, $type, $object) {
		
		if(!empty($object) && elgg_instanceof($object, "object", "file")) {
			$folder_guid = (int) get_input("folder_guid", 0);

			if(!empty($folder_guid)) {
				if($folder = get_entity($folder_guid)) {
					if(!elgg_instanceof($folder, "object", FILE_TOOLS_SUBTYPE)) {
						unset($folder_guid);
					}
				} else {
					unset($folder_guid);
				}
			}

			// remove old relationships
			remove_entity_relationships($object->getGUID(), FILE_TOOLS_RELATIONSHIP, true);
				
			if(!empty($folder_guid)) {
				add_entity_relationship($folder_guid, FILE_TOOLS_RELATIONSHIP, $object->getGUID());
			}
		}
	}
	
	function file_tools_object_handler_delete($event, $type, $object)
	{
		if(!empty($object) && elgg_instanceof($object, "object", FILE_TOOLS_SUBTYPE)) {
			// find subfolders
			$options = array(
				"type" => "object",
				"subtype" => FILE_TOOLS_SUBTYPE,
				"owner_guid" => $object->getOwnerGUID(),
				"limit" => false,
				"metadata_name" => "parent_guid",
				"metadata_value" => $object->getGUID()
			);

			if($subfolders = elgg_get_entities_from_metadata($options)) {
				// delete subfolders
				foreach($subfolders as $subfolder) {
					$subfolder->delete();
				}
			}

			// should we remove files?
			if(get_input("files") == "yes") {
				// find file in this folder
				$options = array(
					"type" => "object",
					"subtype" => "file",
					"container_guid" => $object->getContainerGUID(),
					"limit" => false,
					"relationship" => FILE_TOOLS_RELATIONSHIP,
					"relationship_guid" => $object->getGUID()
				);
					
				if($files = elgg_get_entities_from_relationship($options)) {
					// delete files in folder
					foreach($files as $file) {
						$file->delete();
					}
				}
			}
		}
	}