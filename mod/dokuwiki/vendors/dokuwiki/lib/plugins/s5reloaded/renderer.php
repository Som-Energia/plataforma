<?php
/**
 * Renderer for XHTML output
 *
 * @author Harry Fuecks <hfuecks@gmail.com>
 * @author Andreas Gohr <andi@splitbrain.org>
 */
// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

// we inherit from the XHTML renderer instead directly of the base renderer
require_once DOKU_INC.'inc/parser/xhtml.php';

/**
 * The Renderer
 */
class renderer_plugin_s5reloaded extends Doku_Renderer_xhtml {
    var $slideopen = false;
    var $notesopen = false;
    var $base='';
    var $tpl='';

    /**
     * the format we produce
     */
    function getFormat(){
        // this should be 's5' usally, but we inherit from the xhtml renderer
        // and produce XHTML as well, so we can gain magically compatibility
        // by saying we're the 'xhtml' renderer here.
        return 'xhtml';
    }


    /**
     * Initialize the rendering
     */
    function document_start() {
        global $ID;

        // call the parent
        parent::document_start();

        // store the content type headers in metadata
        $headers = array(
            'Content-Type' => 'text/html; charset=utf-8'
        );
        p_set_metadata($ID,array('format' => array('s5reloaded' => $headers) ));
        $this->base = DOKU_MEDIA.'lib/plugins/s5reloaded/ui/';
/*        $this->tpl  = $this->getConf('template'); */
        $this->tpl  = isset($_GET['s5theme'])?$_GET['s5theme']:$this->getConf('template');
    }

    /**
     * Print the header of the page
     *
     * Gets called when the very first H1 header is discovered. It includes
     * all the S5 CSS and JavaScript magic
     */
    function s5reloaded_init($title){
        global $conf;
        global $lang;
        global $INFO;
        global $ID;

        //throw away any previous content
        $this->doc = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.$conf['lang'].'"
 lang="'.$conf['lang'].'" dir="'.$lang['direction'].'">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>'.hsc($title).'</title>
<!-- metadata -->
<meta name="generator" content="S5" />
<meta name="version" content="S5 1.3" />
<meta name="author" content="Eric A. Meyer" />
<meta name="company" content="Complex Spiral Consulting" />
<!-- meta extensions -->
<meta name="subject" content="S5 1.3beta7" />
<meta name="creator" content="Christian Effenberger" />
<meta name="contributor" content="youcan[64]netzgesta[46]de" />
<meta name="publisher" content="s5.netzgesta.de" />
<meta name="description" content="S5 1.3 is a very flexible and lightweight slide show system available for anyone to use (including transitions and scalable fonts and images)" />
<meta name="keywords" content="S5, slide show, projection-mode, powerpoint-like, scala-like, keynote-like, incremental display, scalable fonts, scalable images, transitions, notes, osf, xoxo, css, javascript, xhtml, public domain" />
<!-- configuration parameters -->
<meta name="defaultView" content="slideshow" />
<meta name="controlVis" content="hidden" />
<meta name="tranSitions" content="true" />
<meta name="fadeDuration" content="500" />
<meta name="incrDuration" content="250" />
<!-- configuration autoplay extension -->
<meta name="autoMatic" content="false" />
<meta name="playLoop" content="true" />
<meta name="playDelay" content="10" />
<!-- configuration audio extension -->
<meta name="audioSupport" content="true" />
<meta name="audioVolume" content="100" />
<meta name="audioError" content="true" />
<!-- configuration audio debug -->
<meta name="audioDebug" content="false" />
<!-- style sheet links -->
<link rel="stylesheet" href="'.$this->base.$this->tpl.'/slides.css" type="text/css" media="projection" id="slideProj" />
<link rel="stylesheet" href="'.$this->base.$this->tpl.'/outline.css" type="text/css" media="screen" id="outlineStyle" />
<link rel="stylesheet" href="'.$this->base.$this->tpl.'/print.css" type="text/css" media="print" id="slidePrint" />
<link rel="stylesheet" href="'.$this->base.$this->tpl.'/opera.css" type="text/css" media="projection" id="operaFix" />
<link rel="stylesheet" href="'.$this->base.$this->tpl.'/wrap.css" type="text/css" />

<style type="text/css" media="all">
.imgcon {width: 100%; margin: 0 auto; padding: 0; text-align: center;}
#anim {width: 33%; height: 320px; position: relative;}
#anim img {position: absolute; top: 0px; left: 0px;}
.logo {margin: 0.2em 0 0 0.15em; padding: 0;}
.clock {margin: 0.1em 0.2em; padding: 0; position: absolute; top: 0em; right: 0em;}
.red {color: #C02;}
</style>

<!-- S5 JS -->
<script src="'.$this->base.$this->tpl.'/slides.js" type="text/javascript"></script>

<!-- prototype + scriptaculous -->
<script src="'.$this->base.'effects_support/prototype.js" type="text/javascript"></script>
<script src="'.$this->base.'effects_support/scriptaculous.js" type="text/javascript"></script>

<!-- Presentaculous JS -->
<script src="'.$this->base.'effects_support/presentacular.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" src="'.$this->base.'../../asciimath/asciimathml148r.js" ></script>


</head>
<body>

<div class="layout">
<div id="controls"><!-- DO NOT EDIT --></div>
<div id="currentSlide"><!-- DO NOT EDIT --></div>
<div id="header">
<div class="scale" id="logo" style="background:url('.page_owner_entity()->getIcon('small').') no-repeat;"><!-- DO NOT EDIT --></div>
</div>
<div id="footer">
<h1>'.$title.'</h1>
<h2>'.hsc($conf['title']).' &#8226; '.strftime($conf['dformat'],$INFO['lastmod']).'</h2>
<div class="scale" id="logo_bottom"><!-- DO NOT EDIT --></div>
</div>
</div>
<div class="presentation">
';
    }

    /**
     * Closes the document
     */
    function document_end(){
        // we don't care for footnotes and toc
        // but cleanup is nice
        $this->doc = preg_replace('#<p>\s*</p>#','',$this->doc);

        if($this->slideopen){
            $this->doc .= '</div>'.DOKU_LF; //close previous slide
        }
        if($this->notesopen){
            $this->doc .= '</div>'.DOKU_LF; //close notes
            $this->notesopen = false;
        }
        $this->doc .= '</div>
                       </body>
                       </html>';
    }

    /**
     * This is what creates new slides
     *
     * A new slide is started for each H2 header
     */
    function header($text, $level, $pos) {
        if($level == 1){
            if(!$this->slideopen){
                $this->s5reloaded_init($text); // this is the first slide
                $level = 2;
            }else{
                return;
            }
        }

        if($level == 2){
	    $this->last_h1 = $text;
	}
        if($level > 1){
        //if($level == 2){
            if($this->notesopen){
                $this->doc .= '</div>'.DOKU_LF; //close notes
                $this->notesopen = false;
	    }
            $this->doc .= '<div class="slide">'.DOKU_LF;
            $this->slideopen = true;
        }
        $this->doc .= '<h1>';
	if ($this->last_h1 && $level > 2) {
 	       $this->doc .= $this->_xmlEntities($this->last_h1.":  ".$text);
        	$this->doc .= '</h1>'.DOKU_LF;
              /* $this->doc .= '<h'.($level-1).'> ';
               $this->doc .= '</h'.($level-1).'>'.DOKU_LF;
               $this->doc .= '<h'.($level-1).'>';
	       $this->doc .= $text;
               $this->doc .= '</h'.($level-1).'>'.DOKU_LF;*/
	}
	else {
 	       $this->doc .= $this->_xmlEntities($text);
        	$this->doc .= '</h1>'.DOKU_LF;
	}
    }

    /**
     * Top-Level Sections are slides
     */
    function section_open($level) {
//        if($level < 3){
//            $this->doc .= '<div class="slidecontent">'.DOKU_LF;
//        }else{
//            $this->doc .= '<div>'.DOKU_LF;
//        }
        // we don't use it 
    }

    /**
     * Throw away footnote
     */
    function footnote_close() {
        // recover footnote into the stack and restore old content
        $footnote = $this->doc;
        $this->doc = $this->store;
        $this->store = '';
    }

    /**
     * No acronyms in a presentation
     */
    function acronym($acronym){
        $this->doc .= $this->_xmlEntities($acronym);
    }

    /**
     * A line stops the slide and start the handout section
     */
    function hr() {
        $this->doc .= '<div class="notes">'.DOKU_LF;
        $this->notesopen = true;
    }

    /**
     * Renders internal and external media
     */
    function _media ($src, $title=NULL, $align=NULL, $width=NULL,
                      $height=NULL, $cache=NULL, $render = true) {

        $ret = '';

        list($ext,$mime,$dl) = mimetype($src);
        if(substr($mime,0,5) == 'image'){
            // first get the $title
            if (!is_null($title)) {
                $title  = $this->_xmlEntities($title);
            }elseif($ext == 'jpg' || $ext == 'jpeg'){
                //try to use the caption from IPTC/EXIF
                require_once(DOKU_INC.'inc/JpegMeta.php');
                $jpeg =& new JpegMeta(mediaFN($src));
                if($jpeg !== false) $cap = $jpeg->getTitle();
                if($cap){
                    $title = $this->_xmlEntities($cap);
                }
            }
            if (!$render) {
                // if the picture is not supposed to be rendered
                // return the title of the picture
                if (!$title) {
                    // just show the sourcename
                    $title = $this->_xmlEntities(basename(noNS($src)));
                }
                return $title;
            }
            //add image tag
            $ret .= '<img src="'.ml($src,array('w'=>$width,'h'=>$height,'cache'=>$cache)).'"';
            $ret .= ' class="scale"';

            // make left/right alignment for no-CSS view work (feeds)
            if($align == 'right') $ret .= ' align="right"';
            if($align == 'left')  $ret .= ' align="left"';

            if ($title) {
                $ret .= ' title="' . $title . '"';
                $ret .= ' alt="'   . $title .'"';
            }else{
                $ret .= ' alt=""';
            }

            if ( !is_null($width) )
                $ret .= ' width="'.$this->_xmlEntities($width).'"';

            if ( !is_null($height) )
                $ret .= ' height="'.$this->_xmlEntities($height).'"';

            $ret .= ' />';

        }elseif($mime == 'application/x-shockwave-flash'){
            if (!$render) {
                // if the flash is not supposed to be rendered
                // return the title of the flash
                if (!$title) {
                    // just show the sourcename
                    $title = basename(noNS($src));
                }
                return $this->_xmlEntities($title);
            }

            $att = array();
            $att['class'] = "media$align";
            if($align == 'right') $att['align'] = 'right';
            if($align == 'left')  $att['align'] = 'left';
            $ret .= html_flashobject(ml($src,array('cache'=>$cache)),$width,$height,
                                     array('quality' => 'high'),
                                     null,
                                     $att,
                                     $this->_xmlEntities($title));
        }elseif($title){
            // well at least we have a title to display
            $ret .= $this->_xmlEntities($title);
        }else{
            // just show the sourcename
            $ret .= $this->_xmlEntities(basename(noNS($src)));
        }

        return $ret;
    }

}

//Setup VIM: ex: et ts=4 enc=utf-8 :
