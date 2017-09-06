<?php
/**
 * Número de replicas en debates a mostrar
 */
$list_length_options = [
    -1 => "Sin limite",
];
$list_length_options += array_combine(range(10, 200, 10), range(10, 200, 10));

echo elgg_view_input('select', [
    'label' => "Número de replicas en debates a mostrar",
    'name' => 'params[somenergia_theme_replies_list_length]',
    'value' => $vars['entity']->somenergia_theme_replies_list_length,
    'options_values' => $list_length_options,
]);
