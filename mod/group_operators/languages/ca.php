<?php
/**
 * Group Operators languages
 *
 * @package ElggGroupOperators
 */

$catalan = array(

	/**
	 * Titles
	 */
	"group_operators:title" => 'Operadors de %s',
	"group_operators:manage" => 'Maneja els operadors del grup',
	"group_operators:operators" => 'Operadors',
	"group_operators:members" => 'Membres',
	
	/**
	 * Menus
	 */
	"group_operators:operators:drop" => 'Treu els privilegis',
	"group_operators:owner" => 'Es el propietari',
	"group_operators:owner:make" => 'Fes propietari',
	
	/**
	 * Form fields
	 */
	"group_operators:new" => 'Afegeix un altre operador',
	"group_operators:new:button" => 'Afegeix operador',
	"group_operators:selectone" => 'selecciona un...',
	
	/**
	 * System messages
	 */
	"group_operators:added" => '%s ha estat afegit satisfactòriament com operador del grup',
	"group_operatros:add:error" => 'Ha estat impossible d\'afegir a %s com operador del grup',
	"group_operators:owner_changed" => '%s és el nou propietari',
	"group_operators:change_owner:error" => 'Tan sols el propietari del grup pot assignar un nou propietari',
	"group_operators:removed" => 'L\'operador ha estat esborrat satisfactòriament',

);

add_translation("ca", $catalan);
