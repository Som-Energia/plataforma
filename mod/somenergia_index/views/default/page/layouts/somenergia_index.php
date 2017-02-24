<?php
/**
 * Elgg custom index layout
 * 
 * You can edit the layout of this page with your own layout and style. 
 * Whatever you put in this view will appear on the front page of your site.
 * 
 */
$mod_params = array('class' => 'elgg-module-highlight');
?>

<div class="custom-index elgg-main elgg-grid clearfix">
    <div class="elgg-col elgg-col-2of2">
        <div class="elgg-inner pvm prl">
            <?php
            $intro = elgg_view('somenergia_index/intro');
            echo elgg_view_module('featured', elgg_echo("somenergia_index:hello"), $intro, $mod_params);
            ?>
        </div>
    </div>
    <div class="elgg-col elgg-col-2of3">
        <div class="elgg-inner pvm prl">
            <?php
            echo elgg_view_module('featured', elgg_echo("somenergia_index:activity"), $vars['activity'], $mod_params);
            ?>
        </div>
    </div>
    <div class="elgg-col elgg-col-1of3">
        <div class="elgg-inner pvm prl">
            <?php
            echo elgg_view_module('featured', elgg_echo("somenergia_index:members"), $vars['members'], $mod_params);
            ?>
        </div>
    </div>
    <div class="elgg-col elgg-col-1of3">
        <div class="elgg-inner pvm prl">
            <?php
            echo elgg_view_module('featured', elgg_echo("somenergia_index:groups"), $vars['groups'], $mod_params);
            ?>
        </div>
    </div>
    <div class="elgg-col elgg-col-1of2">
        <div class="elgg-inner pvm prl">
            <?php
            echo elgg_view("index/lefthandside");
            ?>
        </div>
    </div>
    <div class="elgg-col elgg-col-1of2">
        <div class="elgg-inner pvm">
            <?php
            echo elgg_view("index/righthandside");
            ?>
        </div>
    </div>
</div>
