<?php
/**
 *
 */

$label = elgg_echo('registrationterms:agree', array(elgg_normalize_url('/terms')));

$input = elgg_view('input/checkbox', array(
	'name' => 'agreetoterms',
	'value' => 'true',
	'required' => TRUE,
	'default' => false,
));
?>
<div>
	<label><?php echo "$input $label"; ?></label>
</div>