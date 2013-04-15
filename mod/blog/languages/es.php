<?php
/**
 * Blog Spanish language file.
 *
 */

$spahish = array(
	'blog' => 'Blogs',
	'blog:blogs' => 'Blogs',
	'blog:revisions' => 'Revisiones',
	'blog:archives' => 'Archivos',
	'blog:blog' => 'Blog',
	'item:object:blog' => 'Blogs',

	'blog:title:user_blogs' => 'Blogs de %s',
	'blog:title:all_blogs' => 'Todos los blogs del sitio',
	'blog:title:friends' => 'Blogs de amigos',

	'blog:group' => 'Blog del grupo',
	'blog:enableblog' => 'Habilitar blog del grupo',
	'blog:write' => 'Agregar una entrada al blog',

	// Editing
	'blog:add' => 'Agregar una entrada al blog',
	'blog:edit' => 'Editar entrada del blog',
	'blog:excerpt' => 'Extracto',
	'blog:body' => 'Cuerpo',
	'blog:save_status' => 'Guardado: ',
	'blog:never' => 'Nunca',

	// Statuses
	'blog:status' => 'Estado',
	'blog:status:draft' => 'Borrador',
	'blog:status:published' => 'Publicado',
	'blog:status:unsaved_draft' => 'Borrador no guardado',

	'blog:revision' => 'Revisi&oacute;n',
	'blog:auto_saved_revision' => 'Revisi&oacute;n guardada automaticamente',

	// messages
	'blog:message:saved' => 'Entrada del blog guardada.',
	'blog:error:cannot_save' => 'No se pudo guardar la entrada del blog.',
	'blog:error:cannot_write_to_container' => 'No posee los permisos necesarios para a&ntilde;adir el blog al grupo.',
	'blog:error:post_not_found' => 'Esta entrada ha sido quitada, es inv&aacute;lida, o no tiene los permisos necesarios para poder verla.',
	'blog:messages:warning:draft' => 'Hay un borrador sin guardar para esta entrada!',
	'blog:edit_revision_notice' => '(Versi&oacute;n anterior)',
	'blog:message:deleted_post' => 'Entrada del blog eliminada.',
	'blog:error:cannot_delete_post' => 'No se pudo eliminar la entrada del blog.',
	'blog:none' => 'No hay entradas en el blog',
	'blog:error:missing:title' => 'Debe ingresar un t&iacute;tulo para el blog!',
	'blog:error:missing:description' => 'Debe ingresar el cuerpo de su blog!',
	'blog:error:cannot_edit_post' => 'La publicaci&oacute;n no existe o no posee los permisos necesarios sobre ella.',
	'blog:error:revision_not_found' => 'No se pudo encontrar la revisi&oacute;n.',

	// river
	'river:create:object:blog' => '%s public&oacute; una entrada en el blog %s',
	'river:comment:object:blog' => '%s coment&oacute; en el blog %s',

	// notifications
	'blog:newpost' => 'Una nueva entrada de blog',

	// widget
	'blog:widget:description' => 'Mostrar las &uacute;ltimas entradas de blog',
	'blog:moreblogs' => 'M&aacute;s entradas de blog',
	'blog:numbertodisplay' => 'Cantidad de entradas de blog a mostrar',
	'blog:noblogs' => 'No hay entradas de blog'
);

add_translation('es', $spahish);
