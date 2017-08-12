<?php

echo '<div>';
echo 'Url Guia de introducción Castellano: ';
echo '<br>';
echo elgg_view('input/text', array(
    'name' => 'params[somenergia_customization_guide_spanish]',
    'value' => $vars['entity']->somenergia_customization_guide_spanish,
    'class' => 'elgg-input-natural',
));
echo '<br>';
echo 'Url Guia de introducción Catalán: ';
echo '<br>';
echo elgg_view('input/text', array(
    'name' => 'params[somenergia_customization_guide_catalan]',
    'value' => $vars['entity']->somenergia_customization_guide_spanish,
    'class' => 'elgg-input-natural',
));
echo '</div>';
