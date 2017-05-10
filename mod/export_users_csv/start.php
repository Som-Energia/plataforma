<?php

elgg_register_event_handler('init', 'system', 'export_csv_init');

elgg_register_plugin_hook_handler("export_users_csv:users", "system", "getUsers");



#print_r(getUsers());

function getUsers() {
    $dbprefix = elgg_get_config("dbprefix");
    $query = "SELECT * ";
    $query .= "from " . $dbprefix . "users_entity";
    $data = get_data($query);



    return $data;


    #return elgg_get_entities(array('types'=>'user'));
}

function export_csv_init() {


    // extend JS
    //elgg_extend_view("js/admin", "js/csv_exporter/admin");
    elgg_register_admin_menu_item("administer", "export", "users");

    // register plugin hooks
    //elgg_register_plugin_hook_handler("get_exportable_values", "export_csv", "csv_exporter_get_exportable_values_hook");
    //elgg_register_plugin_hook_handler("export_value", "export_csv", "csv_exporter_export_value_hook");
    // register actions
    //
	$file = elgg_get_plugins_path() . "export_users_csv/actions/download.php";
    elgg_register_action("export_users_csv/download", $file, 'admin');
}
