<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
?>

<a href="<?php echo elgg_get_site_url(); ?>">
    <img src="<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/logo.png" alt="<?php echo $site->name; ?>" />
</a>
<div class="elgg-heading-description">
    <span class="tag">Plataforma</span>
    <h3><?php echo elgg_echo( 'somenergia:theme:slogan' ); ?></h3>
</div>