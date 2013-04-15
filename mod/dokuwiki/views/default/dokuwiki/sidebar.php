<?php

$group = elgg_get_page_owner_entity();
if ($group->dokuwiki_enable  == 'yes' && $group->dokuwiki_frontsidebar_enable  == 'yes') {
	set_input("inline_sidebar", true);
	set_input("inline_page", false);
	dokuwiki_page_handler(array($group->guid));
 }

?>
