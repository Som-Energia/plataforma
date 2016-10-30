<?php
/**
 * This is an example of how a local.php coul look like.
 * Simply copy the options you want to change from dokuwiki.php
 * to this file and change them.
 *
 * When using the installer, a correct local.php file be generated for
 * you automatically.
 */

$conf['title']       = 'Elgg Wiki';        //what to show in the title
$conf['basedir']     = '';                //absolute dir from serveroot - blank for autodetection
$conf['baseurl']     = '';                //URL to server including protocol - blank for autodetect
$conf['savedir']     = DOKU_ELGGDATA;          //where to store all the files

$conf['useacl']      = 1;                //Use Access Control Lists to restrict access?
$conf['disableactions'] = 'login,logout';            //comma separated list of actions to disable

$conf['updatecheck'] = 0;                //automatically check for new releases?

// get language from elgg directly
$conf['lang']        = get_current_language();

$conf['superuser']   = '@root';

$conf['license']     = 'cc-by-sa';     //see conf/license.php

$conf['pluginmanager'] = 0;

$conf['plugin']['indexmenu']['skip_file']="/(sidebar)/i";

//$conf['superuser']   = 'joe';

/**
 * The following options are usefull, if you use a MySQL
 * database as autentication backend. Have a look into
 * mysql.conf.php too and adjust the options to match
 * your database installation.
 */
$conf['authtype']   = 'elgg';
//require_once ("mysql.conf.php");


