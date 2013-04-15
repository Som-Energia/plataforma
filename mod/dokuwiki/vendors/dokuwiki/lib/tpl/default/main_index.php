<?php 
/**
 * DokuWiki Sidebar Template
 * This template is the Dokuwiki Default Template with
 * a configurable sidebar facility.
 *
 * @link   http://wiki.jalakai.co.uk/dokuwiki
 * @link   http://dokuwiki.org/template/sidebar
 * @author Christopher Smith <chris@jalakai.co.uk>
 * @date   2009-01-27
 *
 * Default template by ...
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

$page_inline = get_input("inline_page");
// include functions that provide sidebar functionality
//@require_once(dirname(__FILE__).'/tplfn_sidebar.php');
?>
  <?php //tpl_metaheaders()?>

  <?php /*old includehook @include(dirname(__FILE__).'/meta.html') */ ?>

<?php /*old includehook @include(dirname(__FILE__).'/topheader.html') */ ?>
<div class="dokuwiki">
  <?php html_msgarea()?>

  <div class="stylehead">

  <?php if (empty($page_inline)) { ?>
    <div class="header">
      <div class="pagename">
        [[<?php tpl_link(wl($ID,'do=backlink'),tpl_pagetitle($ID,true),'title="'.$lang['btn_backlink'].'"')?>]]
      </div>
      <div class="logo">
        <?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"')?>
      </div>

      <div class="clearer"></div>
    </div>
    <?php }?>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

  <?php if (empty($page_inline)) { ?>
    <div class="bar" id="bar__top">
      <div class="bar-left" id="bar__topleft">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
      </div>

      <div class="bar-right" id="bar__topright">
        <?php tpl_button('recent')?>
        <?php tpl_searchform()?>&nbsp;
      </div>

      <div class="clearer"></div>
    </div>
  <?php } ?>

    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>

  </div>
  <?php flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page">
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>

  <?php if (empty($page_inline)) { ?>
  <div class="clearer">&nbsp;</div>

  <?php flush()?>

  <div class="stylefoot">

    <div class="meta">
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
      <div class="doc">
        <?php tpl_pageinfo()?>
      </div>
    </div>

   <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

  </div>
  <?php } ?>
    <div class="bar" id="bar__bottom">
      <div class="bar-left" id="bar__bottomleft">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
      </div>
      <div class="bar-right" id="bar__bottomright">
        <?php tpl_button('subscribe')?>
        <?php tpl_button('subscribens')?>
        <?php tpl_button('admin')?>
        <?php tpl_button('profile')?>
        <?php tpl_button('login')?>
        <?php tpl_button('index')?>
        <?php tpl_button('top')?>&nbsp;
      </div>
      <div class="clearer"></div>
    </div>
  <?php if (empty($page_inline)) { ?>

  </div>
  <?php } ?>

  <?php/* tpl_license(false);*/?>

<?php /*old includehook @include(dirname(__FILE__).'/footer.html')*/ ?>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
