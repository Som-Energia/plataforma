<?php
        /**
         * Elgg Metatags generator plugin
         * This plugin make the metatags for content.
         *
         * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
         * @author Gerard Kanters
         * Website: https://www.centillien.com
         */

	global $my_page_entity;
	if($vars["full_view"]) {
	        $my_page_entity = $vars["entity"];
	}
