<?php
 global $CONFIG;

$labelex = elgg_echo('image:agree');

?>

  <p>

    <img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="mod/gutwacaptcha/securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left">
    <object type="application/x-shockwave-flash" data="mod/gutwacaptcha/securimage_play.swf?bgcol=#ffffff&amp;icon_file=mod/gutwacaptcha/images/audio_icon.png&amp;audio_file=mod/gutwacaptcha/securimage_play.php" height="32" width="32">
    <param name="movie" value="mod/gutwacaptcha/securimage_play.swf?bgcol=#ffffff&amp;icon_file=mod/gutwacaptcha/images/audio_icon.png&amp;audio_file=mod/gutwacaptcha/securimage_play.php" />
    </object>
    &nbsp; 
    <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'mod/gutwacaptcha/securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="mod/gutwacaptcha/images/refresh.png" alt="Reload Image" onclick="this.blur()" align="bottom" border="0"></a><br />

    <label><?php echo "$labelex"; ?></label>
     <input type="text" name="sirisana_input" autocomplete="off" size="12" maxlength="8" /> 
  </p>

