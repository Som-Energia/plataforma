<?php
/**
 * Notification settings for comment tracker view
 */


$notification_handlers = _elgg_services()->notifications->getMethodsAsDeprecatedGlobal();

$user = $vars['user'];
$view_all_link = elgg_view('output/url', array(
		'text' => elgg_echo('comment:notification:settings:linktext'),
		'href' => 'comment_tracker/subscribed/' . $user->username,
		'is_trusted' => true
));
$body = $view_all_link . ' ' . elgg_echo('comment:notification:settings:description');

$body .= '<br><br>';

$body .= elgg_echo('comment_tracker:setting:autosubscribe') . '&nbsp;';

$value = elgg_get_plugin_user_setting('comment_tracker_autosubscribe', $user->guid, 'comment_tracker');
$body .= elgg_view('input/select', array(
	'name' => 'comment_tracker_autosubscribe',
	'value' => $value ? $value : 'yes',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	)
));

echo elgg_view_module('info', elgg_echo('comment:notification:settings'), $body);
?>
		<table id="notificationstable" cellspacing="0" cellpadding="4" border="1" width="100%">
				<tr>
					<td>&nbsp;</td>
				<?php
				$i = 0;
				foreach($notification_handlers as $method => $foo)
				{
					if ($i > 0)
					{
						echo "<td class=\"spacercolumn\">&nbsp;</td>";
					}
				?>
					<td class="<?php echo $method; ?>togglefield"><?php echo elgg_echo('notification:method:'.$method); ?></td>
				<?php
					$i++;
				}
				?>
					<td>&nbsp;</td>
				</tr>
			<?php
			$fields = '';
			$i = 0;
			foreach($notification_handlers as $method => $foo)
			{
				$site_guid = elgg_get_site_entity()->guid;
				if (!check_entity_relationship($user->guid, 'block_comment_notify' . $method, $site_guid))
				{
					$checked[$method] = 'checked="checked"';
				}
				else
				{
					$checked[$method] = '';
				}

				if ($i > 0) {
					$fields .= "<td class=\"spacercolumn\">&nbsp;</td>";
				}

				$fields .= <<< END
					<td class="{$method}togglefield">
					<a border="0" id="comment{$method}" class="{$method}toggleOff" onclick="adjust{$method}_alt('comment{$method}');">
					<input type="checkbox" name="{$method}commentsubscriptions[]" id="{$method}checkbox" onclick="adjust{$method}('comment{$method}');" value="comment" {$checked[$method]} /></a></td>
END;
				$i++;
			}
			?>
			<tr>
				<td class="namefield">
						<p>
							<?php echo elgg_echo('comment:notification:settings:how'); ?>
						</p>
					</td>
				<?php echo $fields; ?>
				<td>&nbsp;</td>
			</tr>
		</table>
