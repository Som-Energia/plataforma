<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

admin_gatekeeper();
set_time_limit(0);

$options = array(
        'type' => 'user',
        'limit' => 0,
);
$MIGRATED = 0;

function copyr($source, $dest)
{
    // recursive function to copy
    // all subdirectories and contents:
    if(is_dir($source)) {
        $dir_handle=opendir($source);
        $sourcefolder = basename($source);
	if (!file_exists($dest."/".$sourcefolder))
            mkdir($dest."/".$sourcefolder, 0700, true);
        while($file=readdir($dir_handle)){
            if($file!="." && $file!=".."){
                if(is_dir($source."/".$file)){
                    copyr($source."/".$file, $dest."/".$sourcefolder);
                } else {
		    if (!file_exists($dest."/$sourcefolder/".$file)) {
                    	copy($source."/".$file, $dest."/$sourcefolder/".$file);
		    }
                }
            }
        }
        closedir($dir_handle);
    } else {
        // can also handle simple copy commands
	if (!file_exists($dest)) {
	  error_log("copy $source $dest");
          copy($source, $dest);
	}
    }
}

function profile_2012100501($user) {
	global $CONFIG;
	$data_root = $CONFIG->dataroot;
	$join_date = $user->getTimeCreated();

	date_default_timezone_set('UTC');
	$user_path_utc = date('Y/m/d/', $join_date) . $user->guid;
	$user_path_utc = "$data_root$user_path_utc";

	date_default_timezone_set('Europe/Berlin');
	$user_path = date('Y/m/d/', $join_date) . $user->guid;
	$user_path = "$data_root$user_path";
	$user_path2 = date('Y/m/d', $join_date);
	$user_path2 = "$data_root$user_path2";
	if ($user_path == $user_path_utc) {
		return true;
	}

	// error_log("check $user_path_utc");
	if (file_exists($user_path_utc)) {
		if (!file_exists($user_path)) {
			mkdir($user_path, 0700, true);
		}
		error_log("merge files: $user_path_utc, $user_path");
		copyr($user_path_utc, $user_path2);
	}
	return true;
}

$previous_access = elgg_set_ignore_access(true);
$batch = new ElggBatch('elgg_get_entities', $options, "profile_2012100501", 100);
elgg_set_ignore_access($previous_access);

if ($batch->callbackResult) {
	error_log("Elgg user files merge upgrade (201210050) succeeded");
} else {
	error_log("Elgg user files merge upgrade (201210050) failed");
}


?>
