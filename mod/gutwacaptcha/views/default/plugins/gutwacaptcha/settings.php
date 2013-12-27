<?php 

	$yesno_pengo = array(
			"yes" => elgg_echo("option:yes"),
			"no" => elgg_echo("option:no")
	);
	
	$noyes_options = array_reverse($yesno_pengo);
	
?>
<table>
	<tr>
		<td>
			<?php echo elgg_echo("gutwacaptcha:admin:settings:min_completeness"); ?><br />
		</td>
		<td>
			<?php echo elgg_view("input/text", array("name" => "params[min_nyaboke]", "value" => $vars['entity']->min_nyaboke, "size" => 2, "maxlength" => 2)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo elgg_echo('gutwacaptcha:admin:settings:show_in_header'); ?>
		</td>
		<td>
			<?php echo elgg_view("input/dropdown", array("name" => "params[show_ase_motwe]", "options_values" => $noyes_options, "value" => $vars['entity']->show_ase_motwe)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo elgg_echo('gutwacaptcha:admin:settings:autodetect'); ?>
		</td>
		<td>
			<?php echo elgg_view("input/dropdown", array("name" => "params[wakaguzi]", "options_values" => $noyes_options, "value" => $vars['entity']->wakaguzi)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo elgg_echo('gutwacaptcha:admin:settings:show_images'); ?>
		</td>
		<td>
			<?php echo elgg_view("input/dropdown", array("name" => "params[show_ebicha]", "options_values" => $yesno_pengo, "value" => $vars['entity']->show_ebicha)); ?>
		</td>
	</tr>
</table>		