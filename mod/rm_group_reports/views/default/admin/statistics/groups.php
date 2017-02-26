<?php

$groups = elgg_get_entities(array(
    'type' => 'group',
    'limit' => 0,
        ));

$tables = array();

foreach ($groups as $group) {

    list( $activity ) = elgg_get_entities(array(
        //'container_guids' => $group->get( 'guid' ),
        'container_guids' => $group->guid,
        'limit' => 1,
            ));

    if (is_object($activity)) {
        $table[$activity->time_created] = $group;
    } else {
        $table[$group->time_created] = $group;
    }
}

ksort($table);

//echo '<div><a href="?view=xls" class="elgg-button elgg-button-action">Descargar Excel</a></div>';

echo '<table class="sortable elgg-table-alt">';

echo <<<THEAD
    <thead style="background-color: #eee;">
        <tr style="cursor: pointer;">
            <th style="padding: 10px 0">ID</th>
            <th style="padding: 10px 0">Nombre</th>
            <th style="padding: 10px 0">Miembros</th>
            <th style="padding: 10px 0">Creado</th>
            <th style="padding: 10px 0">Última actividad</th>
            <th style="padding: 10px 0"></td>
        </tr>
    </thead>
THEAD;

echo '<tbody>';

foreach ($table as $activity => $row) {

    echo '<tr>';

    echo '<td style="padding: 10px 0">' . $row->guid . '</td>';
    echo '<td style="padding: 10px 0"><a href="' . $row->getURL() . '" target="_blank">' . $row->name . '</a></td>';
    echo '<td style="padding: 10px 0"><a href="' . elgg_get_config('url') . 'groups/members/' . $row->guid . '" target="_blank">' . $row->getMembers(array('count' => true)) . '</a></td>';
    echo '<td style="padding: 10px 0" sorttable_customkey="' . $row->time_created . '">' . date('d/m/Y H:i', $row->time_created) . '</td>';

    if ($activity != $row->time_created) {
        echo '<td style="padding: 10px 0" sorttable_customkey="' . $activity . '">' . date('d/m/Y H:i', $activity) . '</td>';
    } else {
        echo '<td style="padding: 10px 0" sorttable_customkey="' . $row->time_created . '">&#8212;</td>';
    }

    echo '<td style="padding: 10px 0">';
    echo elgg_view('output/confirmlink', array(
        'text' => elgg_echo('groups:delete'),
        'href' => 'action/groups/delete?guid=' . $row->getGUID(),
        'confirm' => elgg_echo('groups:deletewarning'),
        'class' => array('elgg-button', 'elgg-button-action'),
    ));
    echo '</td>';

    echo '<tr>';
}

echo '</tbody>';

echo '</table>';
