<?php
/**
 * Comment tracker plugin settings
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version 1.0
 * @author Akhilesh @ Cubet Technologies
 */

$allow_comment_notification = $vars['entity']->allow_comment_notification;
if (!$allow_comment_notification) $allow_comment_notification = 'yes';
$email_content_type = $vars['entity']->email_content_type;
if (!$email_content_type) $email_content_type = 'text';
?>	
<p style="margin-bottom:10px;">
	<?php 
		echo elgg_echo('allow:comment:notification');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[allow_comment_notification]',
			'options_values' => array(
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
			),
			'value' => $allow_comment_notification
		));
	?>
</p>
<p>
	<?php 
		echo elgg_echo('email:content:type');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[email_content_type]',
			'options_values' => array(
				'text' => elgg_echo('text:email'),
				'html' => elgg_echo('html:email')
			),
			'value' => $email_content_type
		));
	?>
</p>

<p>
	<?php 
		echo elgg_echo('comment_tracker:setting:show_button');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[show_button]',
			'options_values' => array(
				'yes' => elgg_echo('option:yes'),
				'no' => elgg_echo('option:no')
			),
			'value' => $vars['entity']->show_button ? $vars['entity']->show_button : 'no'
		));
	?>
</p>