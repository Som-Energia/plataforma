<?php

namespace Spam\LoginFilter;

$pages = elgg_get_plugin_setting('protected_pages', PLUGIN_ID);

if (!$pages) {
	elgg_set_plugin_setting('protected_pages', 'register', PLUGIN_ID);
}