<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	'pages' => "P&aacute;ginas",
	'pages:owner' => "P&aacute;ginas de %s",
	'pages:friends' => "P&aacute;ginas de amigos",
	'pages:all' => "Todas las P&aacute;ginas",
	'pages:add' => "Agregar P&aacute;gina",

	'pages:group' => "P&aacute;ginas de grupo",
	'groups:enablepages' => 'Habilitar p&aacute;ginas del grupo',

	'pages:edit' => "Editar esta p&aacute;gina",
	'pages:delete' => "Eliminar esta p&aacute;gina",
	'pages:history' => "Historial",
	'pages:view' => "Ver p&aacute;gina",
	'pages:revision' => "Revisi&oacute;n",

	'pages:navigation' => "Navegaci&oacute;n",
	'pages:via' => "p&aacute;ginas via",
	'item:object:page_top' => 'P&aacute;ginas de nivel superior',
	'item:object:page' => 'P&aacute;ginas',
	'pages:nogroup' => 'El grupo a&uacute;n no posee p&aacute;ginas',
	'pages:more' => 'M&aacute;s p&aacute;ginas',
	'pages:none' => 'No hay p&aacute;ginas creadas a&uacute;n',

	/**
	* River
	**/
	'river:create:object:page' => '%s ha creado la p&aacute;gina %s',
	'river:create:object:page_top' => '%s ha creado una p&aacute;gina %s',
	'river:update:object:page' => '%s ha actualizado la p&aacute;gina %s',
	'river:update:object:page_top' => '%s ha actualizado una p&aacute;gina %s',
	'river:comment:object:page' => '%s ha comentado en la p&aacute;gina titulada %s',
	'river:comment:object:page_top' => '%s ha comentado en una p&aacute;gina titulada %s',

	/**
	 * Form fields
	 */
	'pages:title' => 'T&iacute;tulo de la p&aacute;gina',
	'pages:description' => 'Texto de la p&aacute;gina',
	'pages:tags' => 'Tags',
	'pages:access_id' => 'Acceso de lectura',
	'pages:write_access_id' => 'Acceso de escritura',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'No hay acceso a la p&aacute;gina',
	'pages:cantedit' => 'No puede editar esta p&aacute;gina',
	'pages:saved' => 'P&aacute;gina guardada',
	'pages:notsaved' => 'La p&aacute;gina no pudo ser guardada',
	'pages:error:no_title' => 'Debe especificar un t&iacute;tulo para esta p&aacute;gina.',
	'pages:delete:success' => 'La p&aacute;gina ha sido eliminada correctamente.',
	'pages:delete:failure' => 'La p&aacute;gina no pudo ser eliminada.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Ultima actualizaci&oacute;n %s por %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revisi&oacute;n creada %s por %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Cantidad de p&aacute;ginas a mostrar',
	'pages:widget:description' => "Este es el listado de sus p&aacute;ginas.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Ver p&aacute;gina",
	'pages:label:edit' => "Editar p&aacute;gina",
	'pages:label:history' => "Historial de la p&aacute;gina",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Esta p&aacute;gina",
	'pages:sidebar:children' => "Sub-p&aacute;ginas",
	'pages:sidebar:parent' => "Padre",

	'pages:newchild' => "Crear una sub-p&aacute;gina",
	'pages:backtoparent' => "Regresar a '%s'",
);

add_translation("es", $spanish);