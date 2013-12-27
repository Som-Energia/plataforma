<?php
if (!elgg_get_plugin_setting('api_key', 'akismet')) {
	elgg_add_admin_notice('akismet_key', "You need to fill in your API key for Akismet before it can start working!");
}