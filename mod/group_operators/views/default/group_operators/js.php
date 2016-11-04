<?php
?>

$(function() {
	var $button = $('.elgg-button-delete').filter('[href*="/action/groups/delete"]');
	if ($button) {
		$button.toggle(
			elgg.page_owner &&
			elgg.page_owner.owner_guid == elgg.get_logged_in_user_guid() ||
			elgg.is_admin_logged_in()
		);
	}
});