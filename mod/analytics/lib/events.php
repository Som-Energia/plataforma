<?php

	function analytics_event_tracker($event, $object_type, $object){
		if(!empty($object) && $object instanceof ElggEntity){
			if(elgg_get_plugin_setting("trackEvents", "analytics") == "yes"){
				switch($object->type){
					case "object":
						analytics_track_event($object->getSubtype(), $event, $object->title);
						break;
					case "group":
						analytics_track_event($object->type, $event, $object->name);
						break;
					case "user":
						analytics_track_event($object->type, $event, $object->name);
						break;
				}
			}
		}
	}