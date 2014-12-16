<?php

$groups = elgg_get_entities( array(
    'type' => 'group',
    'limit' => 0,
) );

echo '<div><a href="?view=xls" class="elgg-button elgg-button-action">Descargar Excel</a></div>';

echo '<table class="elgg-table-alt">';

echo <<<THEAD
    <thead style="background-color: #eee;">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Miembros</td>
            <td>Creado</td>
            <td>Última actividad</td>
        </tr>
    </thead>
THEAD;

echo '<tbody>';

foreach( $groups as $group ) {
    
    echo '<tr>';
    
    echo '<td>' . $group->get( 'guid' ) . '</td>';
    echo '<td><a href="' . $group->getURL() . '" target="_blank">' . $group->get( 'name' ) . '</a></td>';
    echo '<td><a href="' . elgg_get_config( 'url' ) . 'groups/members/' . $group->get( 'guid' ) . '" target="_blank">' . $group->getMembers( 0, 0, true ) . '</a></td>';
    echo '<td>' . date( 'd/m/Y H:i', $group->get( 'time_created' ) ) . '</td>';
    
    $db_prefix = elgg_get_config('dbprefix');
    
    list( $activity ) = elgg_get_river( array(
	'limit'         => 1,
	'pagination'    => false,
	'joins'         => array("JOIN {$db_prefix}entities e1 ON e1.guid = rv.object_guid"),
	'wheres'        => array("(e1.container_guid = $group->guid)"),
    ) );
       
    if ( ! empty( $activity ) ) {
        
        $activity = $activity->getObjectEntity();
        echo '<td><a href="' . elgg_get_config( 'url' ) . 'groups/activity/' . $group->get( 'guid' ) . '" target="_blank">' . date( 'd/m/Y H:i', $activity->get( 'time_created' ) ) . '</a></td>';
        
    } else {
        
        echo "<td>&#8212;</td>";
        
    }
    
    echo '<tr>';
    
}

echo '</tbody>';

echo '</table>';