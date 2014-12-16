<?php

admin_gatekeeper();
elgg_set_context('admin');

elgg_register_library( 'PHPExcel', elgg_get_plugins_path() . 'rm_group_reports/vendors/PHPExcel/PHPExcel.php' );

header( 'Content-type: application/vnd.ms-excel' );
header( "Content-Disposition: attachment; filename=groups-reports.xls" );

$result = $groups = elgg_get_entities( array(
    'type' => 'group',
    'limit' => 0,
) );

elgg_load_library( 'PHPExcel' );

$excel = new PHPExcel();

$excelSheet = $excel->setActiveSheetIndex(0);

$excelSheet->setCellValue( 'A1', utf8_encode( html_entity_decode( elgg_echo( 'rm_group_reports:id' ), ENT_QUOTES | ENT_HTML5 ) ) );
$excelSheet->setCellValue( 'B1', utf8_encode( html_entity_decode( elgg_echo( 'rm_group_reports:name' ), ENT_QUOTES | ENT_HTML5 ) ) );
$excelSheet->setCellValue( 'C1', utf8_encode( html_entity_decode( elgg_echo( 'rm_group_reports:members' ), ENT_QUOTES | ENT_HTML5 ) ) );
$excelSheet->setCellValue( 'D1', utf8_encode( html_entity_decode( elgg_echo( 'rm_group_reports:time_created' ), ENT_QUOTES | ENT_HTML5 ) ) );
$excelSheet->setCellValue( 'E1', utf8_encode( html_entity_decode( elgg_echo( 'rm_group_reports:activity' ), ENT_QUOTES | ENT_HTML5 ) ) );
$excelSheet->setCellValue( 'F1', utf8_encode( html_entity_decode( elgg_echo( 'rm_group_reports:url' ), ENT_QUOTES | ENT_HTML5 ) ) );

foreach ( $result as $num => $object ) {
    
    $csv[] = utf8_decode( $object->get( 'guid' ) );
    $csv[] = utf8_decode( $object->get( 'name' ) );
    $csv[] = utf8_decode( $object->getMembers( 0, 0, true ) );
    $csv[] = date( 'd/m/Y', $object->get( 'time_created' ) );
    
    $db_prefix = elgg_get_config('dbprefix');
    
    list( $activity ) = elgg_get_river( array(
	'limit'         => 1,
	'pagination'    => false,
	'joins'         => array("JOIN {$db_prefix}entities e1 ON e1.guid = rv.object_guid"),
	'wheres'        => array("(e1.container_guid = $object->guid)"),
    ) );
       
    if ( ! empty( $activity ) ) {
        
        $activity = $activity->getObjectEntity();
        $csv[] = date( 'd/m/Y H:i', $activity->get( 'time_created' ) );
        
    } else {
        
        $csv[] = '';
        
    }
    
    $csv[] = $object->getURL();
    
    foreach( $csv as $key => $data )
	$excelSheet->setCellValue( chr( 65 + $key ) . ( $num + 2 ), utf8_encode( $data ) );
  
    unset( $csv, $metadata, $groups, $group );
    
}

$excelSave = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$excelSave->save( 'php://output' );