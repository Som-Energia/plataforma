<?php

/**
 * embed video widget edit page
 */

global $CONFIG;

$sites_supported = $CONFIG->wwwroot . 'mod/embedvideo/graphics/sites_supported.png';
$url_hash = md5($vars['entity']->url);

?>
<div style='text-align: center; margin:0 0 10px 0;'><img src="<?php echo $sites_supported; ?>" alt="<?php echo elgg_echo('embedvideo:sites'); ?>" title="<?php echo elgg_echo('embedvideo:sites'); ?>"/></div>
<p>
    <input type="hidden" name="params[url_hash]" id="params[url_hash]" value="<?php echo $url_hash; ?>" /> 
	<?php echo elgg_echo('embedvideo:url'); ?><br />
    <input onclick="this.select();" type="text" name="params[url]" style="width: 96%;" value="<?php echo htmlentities($vars['entity']->url); ?>" class="input-text" />
</p>

<p>
	<?php echo elgg_echo('embedvideo:title'); ?><br />
    <textarea class="input-textarea" name="params[videotitle]" style="height: 20px; width: 96%;" ><?php echo htmlentities($vars['entity']->videotitle); ?></textarea>
</p>  

<p>
	<?php echo elgg_echo('embedvideo:comment');
echo elgg_echo('embedvideo:tags_instruct'); ?> <br />
    <textarea class="input-textarea" name="params[comment]" style="height: 100px; width: 96%;" ><?php echo htmlentities($vars['entity']->comment); ?></textarea>
</p>  

