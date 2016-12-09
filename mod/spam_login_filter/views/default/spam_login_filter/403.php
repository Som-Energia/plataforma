<?php

$ip = elgg_extract("ip", $vars);

$text = elgg_echo("spam_login_filter:403:description", array($ip));

echo elgg_view("output/longtext", array("value" => $text));