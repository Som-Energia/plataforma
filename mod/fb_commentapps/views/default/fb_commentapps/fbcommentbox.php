<?php
   $appURL = "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
   $appID = elgg_get_plugin_setting('fbAppID', 'fb_commentapps');
   $numPost = elgg_get_plugin_setting('fbNumPost', 'fb_commentapps');
   $appWidth = elgg_get_plugin_setting('fbWidth', 'fb_commentapps');
   $appColor = elgg_get_plugin_setting('fbColor', 'fb_commentapps');
   

   //show Facebook comment box
   if ($appID != '' && $show_add_form) {
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=<?php echo $appID; ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-comments" data-href="<?php echo $appURL; ?>" data-num-posts="<?php echo $numPost; ?>" data-width="<?php echo $appWidth; ?>" data-colorscheme="<?php echo $appColor; ?>"></div>


<?php
   }
?>   
