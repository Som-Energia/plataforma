<?php echo elgg_view('elements/forms.css'); ?>
/* <style> /**/

.friends-picker-navigation-l {
	background: url("<?= elgg_get_simplecache_url("friendspicker.png"); ?>") no-repeat left top;
}
.friends-picker-navigation-r {
	background: url("<?= elgg_get_simplecache_url("friendspicker.png"); ?>") no-repeat -60px top;
}
.friends-picker-navigation-l:hover {
	background: url("<?= elgg_get_simplecache_url("friendspicker.png"); ?>") no-repeat left -44px;
}
.friends-picker-navigation-r:hover {
	background: url("<?= elgg_get_simplecache_url("friendspicker.png"); ?>") no-repeat -60px -44px;
}