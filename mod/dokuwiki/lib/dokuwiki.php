<?php

function current_dokuwiki_entity($create = true) {
	$page_owner = elgg_get_page_owner_guid();
	$user = elgg_get_logged_in_user_entity();
	//error_log($page_owner->guid);
	//error_log($user->guid);
	if (!$page_owner)
		$page_owner = 0;
	$entities = elgg_get_entities(array('types' => 'object', 'subtypes' => 'dokuwiki', 'limit' => 1, 'owner_guid' => $page_owner));
	if ($entities) {
		$doku = $entities[0];
		return $doku;
	}
	elseif ($user && $create) {
		elgg_set_ignore_access(true);
		$newdoku = new ElggObject();
		$newdoku->access_id = ACCESS_PUBLIC;
		$newdoku->owner_guid = $page_owner;
		$newdoku->subtype = 'dokuwiki';
		$newdoku->container_guid = $page_owner;
		$newdoku->save();
		$acl = array();
			$acl[] = "# acl.auth.php";
			$acl[] = '# <?php exit()?\>';
			$acl[] = "*               @ALL        0";
			$acl[] = "*               @user        1";
			$acl[] = "*               @member        8";
			$acl[] = "*               @admin        16";
			$acl[] = "*               @root        255";
		$newdoku->wiki_acl = implode("\n", $acl)."\n";
		elgg_set_ignore_access(false);
		return $newdoku;
	}
}

function dokuwiki_recurse_copy($src,$dst) {
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
	if (( $file != '.' ) && ( $file != '..' )) {
		if ( is_dir($src . '/' . $file) ) {
		dokuwiki_recurse_copy($src . '/' . $file,$dst . '/' . $file);
		}
		else {
		copy($src . '/' . $file,$dst . '/' . $file);
		}
	}
	}
	closedir($dir);
} 

function dokuwiki_create_datafolder($path) {
	if (is_dir($path)) // if it exists must be already created
		return;
	mkdir($path, 0700, true);
	$orig = elgg_get_plugins_path().'dokuwiki/vendors/dokuwiki/data';
	dokuwiki_recurse_copy($orig, $path);
	
}
	
?>
