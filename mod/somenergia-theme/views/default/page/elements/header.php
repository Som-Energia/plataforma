<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */
?>

<div class="elgg-heading-site">

    <div class="elgg-inner">

        <?php echo elgg_view('page/elements/header_logo', $vars); ?>
        <?php echo elgg_view('core/account/login_dropdown'); ?>

    </div>

</div>

<div class="elgg-heading-menu">
    
    <div class="elgg-inner">
    
        <?php echo elgg_view_menu('site'); ?>
        
    </div>
    
</div>