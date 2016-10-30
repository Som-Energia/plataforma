<?php
/**
 * Group Operators languages
 *
 * @package ElggGroupOperators
 */

$spanish = array(

	/**
	 * Titles
	 */
	"group_operators:title" => 'Operadores de %s',
	"group_operators:manage" => 'Operadores del grupo',
	"group_operators:operators" => 'Operadores',
	
	/**
	 * Menus
	 */
	"group_operators:operators:drop" => 'Saca privilegios',
	"group_operators:owner" => 'Es el propietario',
	"group_operators:owner:make" => 'Haz propietario',
	
	/**
	 * Form fields
	 */
	"group_operators:new" => 'Añade otro operador',
	"group_operators:new:button" => 'Añade operador',
	"group_operators:selectone" => 'selecciona uno...',
	
	/**
	 * System messages
	 */
	"group_operators:added" => '%s ha sido añadido satisfactoriamente como operador del grupo',
	"group_operatros:add:error" => 'Ha sido imposible añadir %s como operador del grupo',
	"group_operators:owner_changed" => '%s es el nuevo propietario',
	"group_operators:change_owner:error" => 'Sólo el propietario del grupo puede asignar un nuevo propietario',
	"group_operators:removed" => 'El operador ha sido borrado satisfactoriamente',

);

add_translation("es", $spanish);
