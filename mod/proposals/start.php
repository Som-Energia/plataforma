<?php
/**
 * Proposals
 *
 * @package Proposals
 *
 */

elgg_register_event_handler('init', 'system', 'proposals_init');

/**
 * Init proposals plugin.
 */
function proposals_init() {
	
	if (!elgg_is_active_plugin('crud')) {
		return;
	}

	// register proposals library
	elgg_register_library('elgg:proposals', elgg_get_plugins_path() . 'proposals/lib/proposals.php');
	
	// add to the main css
	elgg_extend_view('css/elgg', 'proposals/css');

	// Add group option
	add_group_tool_option('proposals', elgg_echo('proposals:enableproposals'), false);
	elgg_extend_view('groups/tool_latest', 'proposals/group_module');

	// 
	$action_path = elgg_get_plugins_path() . 'proposals/actions/proposals';
	elgg_register_action("proposals/vote", "$action_path/vote.php");

	// data types
	$variables = array(
		'title' => 'text',
		'description' => 'longtext',
		#'tags' => 'tags',
		'access_id' => 'access',
	);
	
	$crud = crud_register_type('decision', $variables);
	$crud->children_type = 'proposal';
	// the following is to not overwrite module if assemblies set it
	// before, since we don't need explicit module.
	if ($crud->module == 'decision') {
		$crud->module = 'proposals';
	}
	//$crud->module = 'proposals';
	$crud->owner_menu = 'group';

	$variables = array(
		'title' => 'text',
		'description' => 'longtext',
		'tags' => 'tags',
		'access_id' => 'access',
		'improves_guid' => array(
			'type' => 'url',
			'input_view' => 'hidden',
			'output_view' => 'proposal',
			'default_value' => get_input('improves'),
		),
	);
	
	$crud = crud_register_type('proposal', $variables);
	#$crud->children_type = 'agenda_point';
	$crud->module = 'proposals';
}
