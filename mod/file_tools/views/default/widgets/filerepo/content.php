<script type="text/javascript">
	$(document).ready(function () {
	
		$('a.show_file_desc').click(function () {
			$(this.parentNode).children("[class=filerepo_listview_desc]").slideToggle("fast");
			return false;
		});
	
	}); /* end document ready function */
</script>
<?php

    //the page owner
	$owner = $vars['entity']->owner_guid;
	
	//the number of files to display
	$number = (int) $vars['entity']->num_display;
	if (!$number) {
		$number = 4;
	}
	
	//get the layout view which is set by the user in the edit panel
	$get_view = (int) $vars['entity']->gallery_list;
	if (!$get_view || $get_view == 1) {
	    $view = "list";
    } else{
        $view = "gallery";
    }

	//get the user's files
	if($vars['entity']->featured_only !== "yes"){
	    $options = array(
	      'types' => array('object'),
	      'subtypes' => array('file'),
	      'owner_guids' => array($vars['entity']->owner_guid),
	      'limit' => $number,
	      'offset' => 0
	    );
	    
	    $files = elgg_get_entities($options);
	} else {
		$options = array(
					"type" => "object",
					"subtype" => 'file',
					"owner_guid" => $owner,
					"limit" => $number,
					"metadata_name_value_pairs" => array('name' => 'show_in_widget', 'value' => '0', 'operand' => '>')
		);
		$files = elgg_get_entities_from_metadata($options);
	}
	
	//if there are some files, go get them
	if ($files) {
    	echo "<div id=\"filerepo_widget_layout\">";
        
        if($view == "gallery"){
        	echo "<div class=\"filerepo_widget_galleryview\">";
        	
            //display in gallery mode
            foreach($files as $f){
            	
                $mime = $f->mimetype;
                echo "<a href=\"{$f->getURL()}\">" . elgg_view("icon/object/file", array("entity" => $f)) . "</a>";
            				
            }
            
            echo "</div>";
        } else {
        	//display in list mode
			foreach($files as $f){
            	echo elgg_view_entity($f);
          	}
        }
        	
        //get a link to the users files
        $users_file_url = $vars['url'] . "file/owner/" . get_user($f->owner_guid)->username;
        	
        echo "<div class=\"filerepo_widget_singleitem_more\"><a href=\"{$users_file_url}\">" . elgg_echo('file:more') . "</a></div>";
        echo "</div>";
	} else {
		echo "<div class=\"contentWrapper\">" . elgg_echo("file:none") . "</div>";
	}
