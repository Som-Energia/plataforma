<?php
elgg_register_event_handler('init', 'system', 'bright_theme_init');

function bright_theme_init() {
  elgg_unregister_menu_item('topbar', 'elgg_logo');
}
?>
