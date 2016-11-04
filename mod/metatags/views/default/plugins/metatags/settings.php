<?php
        /**
         * Elgg metatags plugin
         *
         * @author Gerard Kanters
         * @copyright Centillien 2013
         */

        $noyes_options = array(
                "no" => elgg_echo("option:no"),
                "yes" => elgg_echo("option:yes")
        );
	
	$mainpage_title = elgg_get_plugin_setting("mainpage_title","metatags");
	$mainpage_description = elgg_get_plugin_setting("mainpage_description","metatags");
	$mainpage_image = elgg_get_plugin_setting("mainpage_image","metatags");
	$mainpage_keywords = elgg_get_plugin_setting("mainpage_keywords","metatags");

	if(empty($mainpage_title)) {
		$mainpage_title = elgg_get_site_entity()->name ." - Social Network";
	}

	if(empty($mainpage_description)) {
		$mainpage_description = elgg_get_site_entity()->name ." is a social network for people with interest in ....";
	}

        if(empty($mainpage_keywords)) {
	        $mainpage_keywords = "social network,join,register,members,". elgg_get_site_entity()->name;
        }


	$cloudflare  = $vars['entity']->cloudflare;

        echo elgg_echo('metatags:cloudflare');
        echo '<br>';
        echo elgg_view("input/dropdown", array("name" => "params[cloudflare]", "value" => $cloudflare, "options_values" => $noyes_options));
        echo '<br><br>';
	echo elgg_echo('metatags:mainpage:title');
	echo elgg_view('input/text', array('name'=>'params[mainpage_title]', 'value'=>$mainpage_title));
        echo '<br><br>';
        echo elgg_echo('metatags:mainpage:description');
        echo elgg_view('input/text', array('name'=>'params[mainpage_description]', 'value'=>$mainpage_description));
        echo '<br><br>';
        echo elgg_echo('metatags:mainpage:keywords');
        echo elgg_view('input/text', array('name'=>'params[mainpage_keywords]', 'value'=>$mainpage_keywords));
	echo '<br><br>';
        echo elgg_echo('metatags:mainpage:image');
        echo elgg_view('input/text', array('name'=>'params[mainpage_image]', 'value'=>$mainpage_image));

