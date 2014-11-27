<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']       The page title
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// render content before head so that JavaScript and CSS can be loaded. See #4032
$topbar = elgg_view('page/elements/topbar', $vars);
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));
$header = elgg_view('page/elements/header', $vars);
$body = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

// Set the content type
header("Content-type: text/html; charset=UTF-8");

$lang = get_current_language();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
<head>
<?php echo elgg_view('page/elements/head', $vars); ?>
</head>
<body>
<div class="elgg-page elgg-page-default">
    
	<div class="elgg-page-topnav">
		<div class="elgg-inner">
                    <div class="elgg-col elgg-col-1of2">
                        <label>
                            Estàs aquí:
                            <div href="#" class="breadcrumbs">
                                 Plataform <span class="fa fa-angle-down"></span>
                                 <ul>
                                     <li><a href="#">Lorem Ipsum</a></li>
                                 </ul>
                            </div>
                        </label>
                    </div>
                    <div class="elgg-col elgg-col-1of2">
                        <a href="#">Fes-te soci</a>
                        <a href="#">Contracta la llum</a>
                        <a href="https://www.facebook.com/somenergia" class="social"><span class="fa fa-facebook"></span></a>
                        <a href="https://twitter.com/somenergia" class="social"><span class="fa fa-twitter"></span></a>
                        <a href="https://www.youtube.com/user/SomEnergia" class="social"><span class="fa fa-youtube"></span></a>
                        <a href="#" class="social"><span class="fa fa-rss"></span></a>
                    </div>
		</div>
	</div>
    
	<div class="elgg-page-messages">
		<?php echo $messages; ?>
	</div>
	
	<?php if (elgg_is_logged_in()){ ?>
	<div class="elgg-page-topbar">
		<div class="elgg-inner">
			<?php echo $topbar; ?>
		</div>
	</div>
	<?php } ?>
	
	<div class="elgg-page-header">
                <?php echo $header; ?>
	</div>
	<div class="elgg-page-body">
		<div class="elgg-inner">
			<?php echo $body; ?>
		</div>
	</div>
	<div class="elgg-page-footer">
		<div class="elgg-inner">
			<?php echo $footer; ?>
		</div>
	</div>
</div>
<?php echo elgg_view('page/elements/foot'); ?>
</body>
</html>