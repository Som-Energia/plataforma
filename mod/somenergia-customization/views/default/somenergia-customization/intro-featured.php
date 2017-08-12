<?php
$first_paragraf_urls[0] = '<a href="' . elgg_get_site_url() . 'groups/profile/1117/bienvenida">' . elgg_echo("somenergia_index:group_welcome") . '</a>';
$first_paragraf_urls[1] = '<a href="' . elgg_get_site_url() . 'groups/profile/64/grupo-sobre-la-plataforma">' . elgg_echo("somenergia_index:group_platform") . '</a>';
$second_paragraf_urls[0] = '<a target="_blank" href="' . elgg_get_plugin_setting('somenergia_customization_guide_spanish', 'somenergia-customization') . '">' . elgg_echo("somenergia_index:castillian") . '</a>';
$second_paragraf_urls[1] = '<a target="_blank" href="' . elgg_get_plugin_setting('somenergia_customization_guide_spanish', 'somenergia-customization') . '">' . elgg_echo("somenergia_index:catalan") . '</a>';
?>
<p><?php echo elgg_echo("somenergia_index:intro_first", $first_paragraf_urls); ?></p>
<p><?php echo elgg_echo("somenergia_index:intro_second", $second_paragraf_urls); ?></p>