<?php
/**
* Manage unsubscribe in comment tracker plugin
*
* @package ElggCommentTracker
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
* @version 1.0
* @author Akhilesh @ Cubet Technologies
*/
$entity = $vars['entity'];

if (elgg_instanceof($entity, 'object', 'groupforumtopic') && $entity->status == 'closed') {
  return;
}

$subscription_subtypes = comment_tracker_get_entity_subtypes();
$show_button = elgg_get_plugin_setting('show_button', 'comment_tracker');

if ($show_button == 'yes' && in_array($entity->getSubtype(), $subscription_subtypes)) {
		  $text = '<span data-guid="' . $entity->guid . '">';
		  if (comment_tracker_is_subscribed(elgg_get_logged_in_user_entity(), $entity)) {
              $text .= elgg_echo('comment:unsubscribe:long');
		  } else {
			  $text .= elgg_echo('comment:subscribe:long');
		  }
		  $text .= '</span>';
          
          $link = elgg_view('output/url', array(
              'text' => $text,
              'href' => false,
              'class' => 'comment-tracker-toggle elgg-button elgg-button-action',
          ));
?>
<div class="comment_trackerWrapper">
    <?php echo $link; ?>
</div>

<?php
}