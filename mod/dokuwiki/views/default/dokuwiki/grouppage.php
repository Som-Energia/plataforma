<?php

$group = elgg_get_page_owner_entity();
if ($group->dokuwiki_enable  == 'yes' && $group->dokuwiki_frontpage_enable  == 'yes') {
	set_input("inline_page", true);
	dokuwiki_page_handler(array($group->guid));
}

?>
