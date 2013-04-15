<?php
/**
 * render time based text
 * 
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Robin Gareus <robin@gareus.org>
 */

if(!defined('DOKU_INC')) define('DOKU_INC',realpath(dirname(__FILE__).'/../../').'/');
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'syntax.php');
require_once(DOKU_INC.'inc/search.php');
require_once(DOKU_INC.'inc/JpegMeta.php');

class syntax_plugin_tbt extends DokuWiki_Syntax_Plugin {
    /**
     * return some info
     */
    function getInfo(){
        return array(
            'author' => 'Robin Gareus',
            'email'  => 'robin@gareus.org',
            'date'   => '2008-12-28',
            'name'   => 'tbt',
            'desc'   => 'render time based text.',
            'url'    => 'http://mir.dnsalias.com/wiki/tbt',
        );
    }

    function getType(){ return 'substition'; }
    function getPType(){ return 'block'; }
    function getSort(){ return 301; }

    /**
     * Connect pattern to lexer
     */
    function connectTo($mode) {
        $this->Lexer->addSpecialPattern('\{\{tbt>[^}]*\}\}',$mode,'plugin_tbt');
    }


    /**
     * Handle the match
     */
    function handle($match, $state, $pos, &$handler){
        $data = array();

        if (!strncasecmp($match,"{{tbt>",6) ) {
                $match = substr($match,6,-2); 
        }
        $data['tbt'] = $match;
        return $data;
    }

    /**
     * Create output
     */
    function render($mode, &$renderer, $data) {
        global $myfckinguniqid;
        if (empty($myfckinguniqid))$myfckinguniqid=1;
        else $myfckinguniqid++;
        $uid=$myfckinguniqid;

        if($mode == 'xhtml'){
              $renderer->doc .= '<span onclick="tbt_'.$uid.'.startTyping(\'textDestination_'.$uid.'\', TimeBasedText_'.$uid.');" class="toc_close tbtbutton">Restart</span><br/><br/>'."\n";
              $renderer->doc .= '<div id="textDestination_'.$uid.'" class="tbtdest"> </div>';
              $renderer->doc .= '<script language="JavaScript"><!--'."\n";
              $renderer->doc .= 'var TimeBasedText_'.$uid.'='.$data['tbt'].";\n\n";
              $renderer->doc .= 'var tbt_'.$uid.' = new TBT();'."\n";
              $renderer->doc .= 'tbt_'.$uid.'.setRowCarriageReturn(1);'."\n";
              $renderer->doc .= 'tbt_'.$uid.'.setXhtml(1);'."\n";
              $renderer->doc .= 'tbt_'.$uid.'.startTyping("textDestination_'.$uid.'", TimeBasedText_'.$uid.');'."\n";
              $renderer->doc .= '//--></script>'."\n";
              return true;
	      }
        return false;
    }
}
//Setup VIM: ex: et sw=2 ts=2 enc=utf-8 :
