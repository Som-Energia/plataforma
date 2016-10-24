<?php

	if(($group = elgg_get_page_owner_entity()) && ($group instanceof ElggGroup)){
		if($group->isPublicMembership()){
			$status = elgg_echo("groups:open");
			$id = "group_tools_status_open";
		} else {
			$status = elgg_echo("groups:closed");
			$id = "group_tools_status_closed";
		}
		$page_owner = elgg_get_page_owner_entity();
		if ($page_owner->getGUID()=="175519"){
						elgg_register_menu_item('page', array(
							'name' => 'docs',
							'text' => elgg_echo('group_tools:menu:docs'),
							'href' => "https://drive.google.com/drive/folders/0B69kf2S7gdgDbEJISmtFY25RWnM",
							'target'=>"_blank",
						));

					}

					
		
		$status = ucfirst($status);
		
		?>
		<script type="text/javascript">
			$('div.elgg-owner-block div.elgg-image-block').append("<div id='<?php echo $id; ?>'><?php echo $status;?></div>");
		</script>
		<?php 
	}