<?php

	global $CONFIG;

	$old_context = elgg_get_context();

	$page_owner_guid 	= elgg_get_page_owner_guid();
	$page_owner 		= elgg_get_page_owner_entity();
	$folder_guid 		= (int) get_input("folder_guid", 0);
	$draw_page 			= get_input("draw_page", true);

	$sort_by 			= get_input('sort_by');
	$direction 			= get_input('direction');
	
	if(empty($sort_by)){
		$sort_value = 'e.time_created';
		if($page_owner instanceof ElggGroup && !empty($page_owner->file_tools_sort)){
			$sort_value = $page_owner->file_tools_sort;
		} elseif($site_sort_default = elgg_get_plugin_setting("sort", "file_tools")){
			$sort_value = $site_sort_default;
		}
		
		$sort_by = $sort_value;
	} 
	
	if(empty($direction)){
		$sort_direction_value = 'asc';
		if($page_owner instanceof ElggGroup && !empty($page_owner->file_tools_sort_direction)){
			$sort_direction_value = $page_owner->file_tools_sort_direction;
		} elseif($site_sort_direction_default = elgg_get_plugin_setting("sort_direction", "file_tools")){
			$sort_direction_value = $site_sort_direction_default;
		}
		
		$direction = $sort_direction_value;
	}
	
	if(!empty($page_owner) && (($page_owner instanceof ElggUser) || ($page_owner instanceof ElggGroup))) {
		group_gatekeeper();

		$wheres = array();
		$wheres[] = "NOT EXISTS (
					SELECT 1 FROM {$CONFIG->dbprefix}entity_relationships r 
					WHERE r.guid_two = e.guid AND
					r.relationship = '" . FILE_TOOLS_RELATIONSHIP . "')";

		$files_options = array(
				"type" => "object",
				"subtype" => "file",
				"limit" => false,
				"container_guid" => $page_owner_guid
			);

		$files_options["joins"][] = "JOIN {$CONFIG->dbprefix}objects_entity oe on oe.guid = e.guid";

		if($sort_by == 'simpletype') {
			$files_options["order_by_metadata"] = array('name' => 'mimetype', 'direction' => $direction);
		} else {
			$files_options["order_by"] = $sort_by . ' ' . $direction;
		}

		$folder = false;
		if($folder_guid !== false) {
			if($folder_guid == 0) {
				$files_options["wheres"] = $wheres;
				
				$files = elgg_get_entities($files_options);	
			} else {
				$folder = get_entity($folder_guid);

				$files_options["relationship"] = FILE_TOOLS_RELATIONSHIP;
				$files_options["relationship_guid"] = $folder_guid;
				$files_options["inverse_relationship"] = false;
				
				$files = elgg_get_entities_from_relationship($files_options);	
			}	
		}

		if(!$draw_page) {
			echo elgg_view("file_tools/list/files", array("folder" => $folder, "files" => $files, 'sort_by' => $sort_by, 'direction' => $direction));
		} else {
			// build breadcrumb
			elgg_push_breadcrumb(elgg_echo('file'), "file/all");
			elgg_push_breadcrumb($page_owner->name);
			
			// register title button to add a new file
			elgg_register_title_button();
			
			// get data for tree
			$folders = file_tools_get_folders($page_owner_guid);

			// build page elements
			$title_text = elgg_echo("file:user", array($page_owner->name));
			
			$body = "<div id='file_tools_list_files_container'>" . elgg_view("graphics/ajax_loader", array("hidden" => false)) . "</div>";
			
			// make sidebar
			$sidebar = elgg_view("file_tools/list/tree", array("folder" => $folder, "folders" => $folders));
			$sidebar .= elgg_view("file_tools/sidebar/sort_options");
			$sidebar .= elgg_view("file_tools/sidebar/info");
			
			// build page params
			$params = array(
				'title' => $title_text,
				'content' => $body, 
				'sidebar' => $sidebar
			);
			
			if(elgg_instanceof($page_owner, "user")){
				$params["filter_context"] = "mine";
			} else {
				$params["filter"] = false;
			}
			
			echo elgg_view_page($title_text, elgg_view_layout("content", $params));
		}
	} else {
		forward();
	}