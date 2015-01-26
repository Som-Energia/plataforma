<?php

$groups = elgg_get_entities( array(
    'type' => 'group',
    'limit' => 0,
) );

$tables = array();

foreach( $groups as $group ) {
 
    list( $activity ) = elgg_get_entities( array(
        'container_guids' => $group->get( 'guid' ),
        'limit' => 1,
    ) );
    
    if ( is_object( $activity ) )
        $table[ $activity->get( 'time_created' ) ] = $group;
    else
        $table[ $group->get( 'time_created' ) ] = $group;
    
}

ksort( $table );

//echo '<div><a href="?view=xls" class="elgg-button elgg-button-action">Descargar Excel</a></div>';

echo '<table class="sortable elgg-table-alt">';

echo <<<THEAD
    <thead style="background-color: #eee;">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Miembros</th>
            <th>Creado</th>
            <th>Última actividad</th>
            <th></td>
        </tr>
    </thead>
THEAD;

echo '<tbody>';

foreach( $table as $activity => $row ) {
    
    echo '<tr>';
    
    echo '<td>' . $row->get( 'guid' ) . '</td>';
    echo '<td><a href="' . $row->getURL() . '" target="_blank">' . $row->get( 'name' ) . '</a></td>';
    echo '<td><a href="' . elgg_get_config( 'url' ) . 'groups/members/' . $row->get( 'guid' ) . '" target="_blank">' . $row->getMembers( 0, 0, true ) . '</a></td>';
    echo '<td sorttable_customkey="' . $row->get( 'time_created' ) . '">' . date( 'd/m/Y H:i', $row->get( 'time_created' ) ) . '</td>';
    
    if ( $activity != $row->get( 'time_created' ) )
        echo '<td sorttable_customkey="' . $activity . '">' . date( 'd/m/Y H:i', $activity ) . '</td>';
    else
        echo '<td sorttable_customkey="' . $row->get( 'time_created' ) . '">&#8212;</td>';
    
    echo '<td>';
    echo elgg_view('output/confirmlink', array(
        'text' => elgg_echo('groups:delete'),
        'href' => 'action/groups/delete?guid=' . $row->getGUID(),
        'confirm' => elgg_echo('groups:deletewarning'),
    ));
    echo '</td>';
    
    echo '<tr>';
    
}

echo '</tbody>';

echo '</table>';