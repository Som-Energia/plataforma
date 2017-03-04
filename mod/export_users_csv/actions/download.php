<?php

/**
 * Elgg diagnostics
 *
 * @package export_csv
 */
#$output = elgg_echo('export_csv:header', array(date('r'), elgg_get_logged_in_user_entity()->name));
$output = elgg_trigger_plugin_hook('export_users_csv:users', 'system', "getUsers");

#echo $output;
#$params = get_input("params");

header("Cache-Control: public");
header("Content-Description: File Transfer");
header('Content-disposition: attachment; filename=users.csv');
header('Content-Type: text/csv; charset=utf-8');
#header('Content-Length: ' . strlen($output));
echo "name,email,language \n";

foreach ($output as $e) {
    # code...
    foreach ($e as $key => $value) {
        # code...
        if ($key == "name") {
            echo $value . ",";
        }
        if ($key == "email") {
            echo $value . ",";
        }
        if ($key == "language") {
            echo $value . "\n";
        }

        #echo $key."\n";
    }
}




#echo array2csv(options) ;
exit;





