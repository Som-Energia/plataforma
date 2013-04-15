<?php
/**
 * Elgg file plugin language pack
 *
 * @package ElggFile
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	'file' => "Archivos",
	'file:user' => "Archivos de %s",
	'file:friends' => "Archivos de amigos",
	'file:all' => "Todos los archivos",
	'file:edit' => "Editar archivo",
	'file:more' => "M&aacute;s archivos",
	'file:list' => "vista de lista",
	'file:group' => "Archivos del grupo",
	'file:gallery' => "vista de galer&iacute;a",
	'file:gallery_list' => "Vista de galer&iacute;a o lista",
	'file:num_files' => "Cantidad de archivos a mostrar",
	'file:user:gallery'=>'Vista %s galer&iacute;a',
	'file:via' => 'archivos v&iacute;a',
	'file:upload' => "Subir un archivo",
	'file:replace' => 'Reemplazar contenido de archivo (dejar en blanco para no modificar)',
	'file:list:title' => "%s - %s %s",
	'file:title:friends' => "De amigos",

	'file:add' => 'Subir un archivo',

	'file:file' => "Archivo",
	'file:title' => "T&iacute;tulo",
	'file:desc' => "Descripci&oacute;n",
	'file:tags' => "Tags",

	'file:types' => "Tipos de archivo subidos",

	'file:type:' => 'Archivos',
	'file:type:all' => "Todos los archivos",
	'file:type:video' => "Videos",
	'file:type:document' => "Documentos",
	'file:type:audio' => "Audio",
	'file:type:image' => "Imagenes",
	'file:type:general' => "General",

	'file:user:type:video' => "Videos de %s",
	'file:user:type:document' => "Documentos de %s",
	'file:user:type:audio' => "Audio de %s",
	'file:user:type:image' => "Imagenes de %s",
	'file:user:type:general' => "Archivos generales de %s",

	'file:friends:type:video' => "Videos de amigos",
	'file:friends:type:document' => "Documentos de amigos",
	'file:friends:type:audio' => "Audio de amigos",
	'file:friends:type:image' => "Imagenes de amigos",
	'file:friends:type:general' => "Archivos generales de amigos",

	'file:widget' => "Widget de archivos",
	'file:widget:description' => "Ver los &uacute;ltimos archivos",

	'groups:enablefiles' => 'Habilitar archivos de grupos',

	'file:download' => "Descargar",

	'file:delete:confirm' => "Desea eliminar este archivo?",

	'file:tagcloud' => "Tag cloud",

	'file:display:number' => "Cantidad de archivos a mostrar",

	'river:create:object:file' => '%s subi&oacute; el archivo %s',
	'river:comment:object:file' => '%s coment&oacute; en el archivo %s',

	'item:object:file' => 'Archivos',

	/**
	 * Embed media
	 **/
		'file:embed' => "Incrustar multimedia",
		'file:embedall' => "Todo",

	/**
	 * Status messages
	 */
		'file:saved' => "Archivo guardado correctamente.",
		'file:deleted' => "Archivo eliminado correctamente.",

	/**
	 * Error messages
	 */
		'file:none' => "No se subieron archivos.",
		'file:uploadfailed' => "Lo sentimos, no se pudo guardar el archivo.",
		'file:downloadfailed' => "Lo sentimos, el archivo no est&aacute; disponible en este momento.",
		'file:deletefailed' => "Su archivo no puede ser eliminado en este momento.",
		'file:noaccess' => "No posee los permisos necesarios para modificar el archivo",
		'file:cannotload' => "Ha ocurrido un error al intentar cargar el archivo",
		'file:nofile' => "Debe seleccionar un archivo",
);

add_translation("es", $spanish);