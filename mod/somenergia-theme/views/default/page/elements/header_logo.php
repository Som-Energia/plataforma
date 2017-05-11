<?php
/**
 * Elgg header logo
 */
$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<div class="som-header">
    <a class="som-header-site" href="<?php echo $site_url; ?>">
        <img src="<?php echo elgg_get_simplecache_url("somenergia-theme/logo.png"); ?>" alt="<?php echo $site->name; ?>" />
    </a>
    <div class="som-header-description">
        <span class="som-header-tag"><?php echo $site->name; ?></span>
        <h3 class="som-header-slogan"><?php echo elgg_echo('somenergia:theme:slogan'); ?></h3>
    </div>
</div>
