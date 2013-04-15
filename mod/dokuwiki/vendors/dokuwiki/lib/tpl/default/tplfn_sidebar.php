<?php 
/*
 * Provide navigation sidebar functionality to Dokuwiki Templates
 *
 * This is not currently part of the official Dokuwiki release
 *
 * @link   http://wiki.jalakai.co.uk/dokuwiki/doku.php?id=tutorials:dev:navigation_sidebar
 * @author Christopher Smith <chris@jalakai.co.uk>
 */

// sidebar configuration settings
tpl_loadConfig();

// determine the sidebar class
$sidebar_class = "sidebar sidebar_".tpl_getConf('layout').'_'.tpl_getConf('orientation');

// recursive function to establish best sidebar file to be used
function getSidebarFN($ns, $file) {

  // check for wiki page = $ns:$file (or $file where no namespace)
  $nsFile = ($ns) ? "$ns:$file" : $file;
  if (file_exists(wikiFN($nsFile)) && auth_quickaclcheck($nsFile)) return $nsFile;
  
// remove deepest namespace level and call function recursively
  
  // no namespace left, exit with no file found  
  if (!$ns) return '';
  
  $i = strrpos($ns, ":");
  $ns = ($i) ? substr($ns, 0, $i) : false;  
  return getSidebarFN($ns, $file);
}

// print a sidebar edit button - if appropriate
function tpl_sidebar_editbtn() {
    global $ID, $conf, $lang;

  // check sidebar configuration
    if (!tpl_getConf('showeditbtn') || !tpl_getConf('page')) return;
  
  // check sidebar page exists
  $fileSidebar = getSidebarFN(getNS($ID), tpl_getConf('page'));
  if (!$fileSidebar) return;
  
  // check user has edit permission for the sidebar page
  if (auth_quickaclcheck($fileSidebar) < AUTH_EDIT) return;
  
?>
    <div class="secedit">
      <form class="button" method="post" action="<?php echo wl($fileSidebar,'do=edit'); ?>" onsubmit="return svchk()">
        <input type="hidden" name="do" value="edit" />
        <input type="hidden" name="rev" value="" />
        <input type="hidden" name="id" value="<?php echo $fileSidebar; ?>" />
        <input type="submit" value="<?php echo $lang['btn_sidebaredit']; ?>" class="button" />
      </form>
    </div>
<?php
}

// display the sidebar
function tpl_sidebar_content() {
  global $ID, $REV, $ACT, $conf;
  
  // save globals
  $saveID = $ID;
  $saveREV = $REV;
  $saveACT = $ACT;

  // discover file to be displayed in navigation sidebar  
  $fileSidebar = '';
  
  if (tpl_getConf('page')) {
    $fileSidebar = getSidebarFN(getNS($ID), tpl_getConf('page'));
  }

  // determine what to display
  if ($fileSidebar) {
    $ID = $fileSidebar;
    $REV = '';
    $ACT = 'show';
#    print p_wiki_xhtml($fileSidebar,'',false);
    tpl_content();
  }
  else {
#    global $IDX;
#    html_index($IDX);
#    $ID = getNS($ID);
    $REV = '';
    $ACT = 'index';
    
    tpl_content();
  }
    
  // restore globals
  $ID = $saveID;
  $REV = $saveREV;
  $ACT = $saveACT;
}
