<?php
/**
 * DokuWiki mainscript
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Andreas Gohr <andi@splitbrain.org>
 */

//  xdebug_start_profiling();

if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
global $ACT;
global $conf;

if (isset($_SERVER['HTTP_X_DOKUWIKI_DO'])){
    $ACT = trim(strtolower($_SERVER['HTTP_X_DOKUWIKI_DO']));
} elseif (!empty($IDX)) {
    $ACT = 'index';
} elseif (get_input('do')) {
    $ACT = get_input('do');
} else {
    $ACT = 'show';
}

global $QUERY;
global $ID;
global $NS;
global $REV;
global $IDX;
global $DATE;
global $RANGE;
global $HIGH;
global $TEXT;
global $PRE;
global $SUF;
global $SUM;
global $REV;
global $INFO;
global $JSINFO;


require_once(DOKU_INC.'inc/init.php');
require_once(DOKU_INC.'inc/common.php');
require_once(DOKU_INC.'inc/events.php');
require_once(DOKU_INC.'inc/pageutils.php');
require_once(DOKU_INC.'inc/html.php');
require_once(DOKU_INC.'inc/auth.php');
require_once(DOKU_INC.'inc/actions.php');

//import variables
$QUERY = trim(get_input('id'));
$ID    = getID();
$NS    = getNS($ID);
$REV   = get_input('rev');
$IDX   = get_input('idx');
$DATE  = get_input('date');
$RANGE = get_input('lines');
$HIGH  = get_input('s');
if(empty($HIGH)) $HIGH = getGoogleQuery();

$TEXT  = cleanText($_POST['wikitext']);
$PRE   = cleanText($_POST['prefix']);
$SUF   = cleanText($_POST['suffix']);
$SUM   = get_input('summary');

//sanitize revision
$REV = preg_replace('/[^0-9]/','',$REV);

//make infos about the selected page available
$INFO = pageinfo();

//export minimal infos to JS, plugins can add more
$JSINFO['id']        = $ID;
$JSINFO['namespace'] = (string) $INFO['namespace'];


// handle debugging
if($conf['allowdebug'] && $ACT == 'debug'){
    html_debug();
    exit;
}

//send 404 for missing pages if configured or ID has special meaning to bots
if(!$INFO['exists'] &&
  ($conf['send404'] || preg_match('/^(robots\.txt|sitemap\.xml(\.gz)?|favicon\.ico|crossdomain\.xml)$/',$ID)) &&
  ($ACT == 'show' || substr($ACT,0,7) == 'export_') ){
    header('HTTP/1.0 404 Not Found');
}

//prepare breadcrumbs (initialize a static var)
if ($conf['breadcrumbs']) breadcrumbs();

// check upstream
checkUpdateMessages();

$tmp = array(); // No event data
trigger_event('DOKUWIKI_STARTED',$tmp);

//close session
session_write_close();

//do the work
act_dispatch($ACT);

$tmp = array(); // No event data
trigger_event('DOKUWIKI_DONE', $tmp);

//  xdebug_dump_function_profile(1);
?>
