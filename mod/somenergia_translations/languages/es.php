<?php

/**
 * Core Spanish Language
 *
 * @package Elgg.Core
 * @subpackage Languages.Spanish
 */
$spanish = array(
	'mentions:notification:subject' => '%s te ha nombrado en %s',
	'mentions:notification:body' => '%s te ha nombrado en %s.
To see the full post, click on the link below:
%s
',
	'mentions:notification_types:object:blog' => 'a blog post',
	'mentions:notification_types:object:bookmarks' => 'a bookmark',
	'mentions:notification_types:object:groupforumtopic' => 'a group discussion post',
	'mentions:notification_types:annotation:group_topic_post' => 'a group discussion reply',
	'mentions:notification_types:object:thewire' => 'a wire post',
	'mentions:notification_types:annotation:generic_comment' => 'un comentario',
	'mentions:settings:send_notification' => 'Recibir notificaciones cuando alguien te @nombre ?',
	// admin
	'mentions:fancy_links' => 'Replce @mentions with a small picture of the user in addition to the user\'s name',
	'mentions:settings:failed' => 'Could not save mentions settings.',
    'file_tools' => "File Tools",
    'file_tools:file:actions' => 'Acciones',
    'file_tools:list:sort:type' => 'Tipo',
    'file_tools:list:sort:time_created' => 'Hora de creación',
    'file_tools:list:sort:asc' => 'Ascendente',
    'file_tools:list:sort:desc' => 'Descendente',
    // object name
    'item:object:folder' => "Carpeta de archivos",
    // menu items
    'file_tools:menu:mine' => "Tus carpetas",
    'file_tools:menu:user' => "carpetas de %s",
    'file_tools:menu:group' => "Carpetas de grupo",
    // group tool option
    'file_tools:group_tool_option:structure_management' => "Permitir la gestión de carpetas por los miembros",
    // views
    // object
    'file_tools:object:files' => "%s fichero(s) en esta carpeta",
    'file_tools:object:no_files' => "No hay ficheiros en esta carpeta",
    // input - folder select
    'file_tools:input:folder_select:main' => "Carpeta principal",
    // list
    'file_tools:list:title' => "Listar carpetas",
    'file_tools:list:folder:main' => "Carpeta principal",
    'file_tools:list:files:none' => "No se encontraron ficheros en esta carpeta",
    'file_tools:list:select_all' => 'Seleccionar todo',
    'file_tools:list:deselect_all' => 'Des-seleccionar todo',
    'file_tools:list:download_selected' => 'Descargar seleccionados',
    'file_tools:list:delete_selected' => 'Eliminar seleccionados',
    'file_tools:list:alert:not_all_deleted' => 'No se pueden borrar todos los ficheros',
    'file_tools:list:alert:none_selected' => 'No se seleccionó ningún elemento',
    'file_tools:list:tree:info' => "Lo sabías?",
    'file_tools:list:tree:info:1' => "Puedes arrastrar y soltar ficheros en las carpetas para organizarlos!",
    'file_tools:list:tree:info:2' => "Puedes hacer doble click en cualquier carpeta para expandir todas sus subcarpetas!",
    'file_tools:list:tree:info:3' => "¡Puedes reordenar las carpetas arrastrándolas hasta su nuevo lugar en el árbol!",
    'file_tools:list:tree:info:4' => "¡Puedes mover estructuras de carpetas completas!",
    'file_tools:list:tree:info:5' => "¡Si borras una carpeta, puedes escoger opcionalmente eliminar todos los archivos!",
    'file_tools:list:tree:info:6' => "¡Cuando borras una carpeta,  se borrarán también todas sus subcarpetas!",
    'file_tools:list:tree:info:7' => "¡Este mensaje es aleatorio!",
    'file_tools:list:tree:info:8' => "¡Cuando eliminas una carpeta, pero no sus archivos, los archivos aparecerán en la carpeta raíz!",
    'file_tools:list:tree:info:9' => "¡Una carpeta nueva se puede poner directamente en la subcarpeta correcta!",
    'file_tools:list:tree:info:10' => "¡Cuando subes o editas un fichero puedes escoger en que carpeta aparecerá!",
    'file_tools:list:tree:info:11' => "¡Arrastrar ficheros sólo está disponible en la vista de lista, no en la vista de galería!",
    'file_tools:list:tree:info:12' => "¡Puedes actualizar el nivel de acceso en todas las subcarpetas y también (opcional) en todos los ficheros cuando editas una carpeta!",
    'file_tools:list:files:options:sort_title' => 'Ordenando',
    'file_tools:list:files:options:view_title' => 'Ver',
    'file_tools:usersettings:time' => 'Visualización de la hora',
    'file_tools:usersettings:time:description' => 'Cambiar la manera en que se muestra la hora de un fichero/carpeta',
    'file_tools:usersettings:time:default' => 'Visualización de hora predeterminada',
    'file_tools:usersettings:time:date' => 'Fecha',
    'file_tools:usersettings:time:days' => 'Días atrás',
    // new/edit
    'file_tools:new:title' => "Nueva carpeta",
    'file_tools:edit:title' => "Editar carpeta",
    'file_tools:forms:edit:title' => "Título",
    'file_tools:forms:edit:description' => "Descripción",
    'file_tools:forms:edit:parent' => "Seleccionar la carpeta superior",
    'file_tools:forms:edit:change_children_access' => "Actualizar acceso en todas las subcarpetas",
    'file_tools:forms:edit:change_files_access' => "Actualizar acceso en todos los ficheiros en esta carpeta (y todas las subcarpetas si está seleccionado)",
    'file_tools:forms:browse' => 'Navegar..',
    'file_tools:forms:empty_queue' => 'Cola vacía',
    'file_tools:folder:delete:confirm_files' => "Quieres eliminar todos los ficheiros de las (sub)carpetas eliminadas",
    // upload
    'file_tools:upload:tabs:single' => "Fichero único",
    'file_tools:upload:tabs:multi' => "Multi-fichero",
    'file_tools:upload:tabs:zip' => "Fichero Zip",
    'file_tools:upload:form:choose' => 'Escoger fichero',
    'file_tools:upload:form:info' => 'Pulsa navegar para subir (multiples) archivos',
    'file_tools:upload:form:zip:info' => "Puedes subir un fichero zip. Se extraerá el contenido y se importará cada fichero por separado. Si  tienes carpetas en tu fichero zip también se importarán en su carpeta específica. Se saltarán los ficheros de tipos no permitidos.",
    // actions
    // edit
    'file_tools:action:edit:error:input' => "Entrada incorrecta para crear/editar una carpeta",
    'file_tools:action:edit:error:owner' => "No se pudo encontrar el propietario de la carpeta",
    'file_tools:action:edit:error:folder' => "No hai ningunha carpeta para crear/editar",
    'file_tools:action:edit:error:parent_guid' => "Carpeta superior inválida, la carpeta superior no puede ser la propia carpeta.",
    'file_tools:action:edit:error:save' => "Error desconocido al salvar la carpeta",
    'file_tools:action:edit:success' => "La carpeta se creó/editó correctamente",
    'file_tools:action:move:parent_error' => "No se puede soltar la carpeta sobre si misma",
    // delete
    'file_tools:actions:delete:error:input' => "Entrada incorrecta para borrar la carpeta",
    'file_tools:actions:delete:error:entity' => "No se pudo encontrar el GUID proporcionado",
    'file_tools:actions:delete:error:subtype' => "El GUID proporcionado no es una carpeta",
    'file_tools:actions:delete:error:delete' => "Ocurrió un error desconocido al eliminar la carpeta",
    'file_tools:actions:delete:success' => "La carpeta se eliminó correctamente",
    //errors
    'file_tools:error:pageowner' => 'Error al obtener el propietario de la página.',
    'file_tools:error:nofilesextracted' => 'No se encontraron archivos para extraer.',
    'file_tools:error:cantopenfile' => 'No se pudo abrir el archivo zip (comprueba que el archivo que has subido es un archivo .zip)',
    'file_tools:error:nozipfilefound' => 'El archivo subido no es un archivo .zip.',
    'file_tools:error:nofilefound' => 'Escoge un archivo para subir.',
    //messages
    'file_tools:error:fileuploadsuccess' => 'El archivo zip se subió y se extrajo correctamente.',
    // move
    'file_tools:action:move:success:file' => "El fichero se movió correctamente",
    'file_tools:action:move:success:folder' => "La carpeta se movió correctamente",
    // buld delete
    'file_tools:action:bulk_delete:success:files' => "Se han eliminado %s archivos correctamente",
    'file_tools:action:bulk_delete:error:files' => "Hubo un error al elminar algunos archivos",
    'file_tools:action:bulk_delete:success:folders' => "Se han eliminado %s carpetas correctamente",
    'file_tools:action:bulk_delete:error:folders' => "Hubo un error al eliminar algunas carpetas",
    // reorder
    'file_tools:action:folder:reorder:success' => "Se reordenaron las carpetas correctamente",
    //settings
    'file_tools:settings:allowed_extensions' => 'Extensiones permitidas (separadas por comas)',
    'file_tools:settings:user_folder_structure' => 'Usar estructura de carpetas',
    'file_tools:settings:sort:default' => 'Opciones de ordenación de carpetas',
    'file:type:application' => 'Aplicación',
    'file:type:text' => 'Texto',
    // widgets
    // file tree
    'widgets:file_tree:title' => "Carpetas",
    'widgets:file_tree:description' => "Escaparate de tus carpetas",
    'widgets:file_tree:edit:select' => "Seleccionar que carpeta(s) mostrar",
    'widgets:file_tree:edit:show_content' => "Mostrar el contenido de las carpetas",
    'widgets:file_tree:no_folders' => "No se configuraron carpetas",
    'widgets:file_tree:no_files' => "No se configuraron archivos",
    'widgets:file_tree:more' => "Más carpetas",
    'widget:file:edit:show_only_featured' => 'Mostrar solo archivos destacados',
    'widget:file_tools:show_file' => 'Archivo destacado (widget)',
    'widget:file_tools:hide_file' => 'Archivo sin destacar',
    'widgets:file_tools:more_files' => 'Más archivos',
    // Group files
    'widgets:group_files:description' => "Mostrar los últimos archivos del grupo",
    // index_file
    'widgets:index_file:description' => "Mostrar los últimos archivos en tu comunidad",
    'file_tools' => "File Tools",
    'file_tools:file:actions' => 'Acciones',
    'file_tools:list:sort:type' => 'Tipo',
    'file_tools:list:sort:time_created' => 'Hora de creación',
    'file_tools:list:sort:asc' => 'Ascendente',
    'file_tools:list:sort:desc' => 'Descendente',
    // object name
    'item:object:folder' => "Carpeta de archivos",
    // menu items
    'file_tools:menu:mine' => "Tus carpetas",
    'file_tools:menu:user' => "carpetas de %s",
    'file_tools:menu:group' => "Carpetas de grupo",
    // group tool option
    'file_tools:group_tool_option:structure_management' => "Permitir la gestión de carpetas por los miembros",
    // views
    // object
    'file_tools:object:files' => "%s fichero(s) en esta carpeta",
    'file_tools:object:no_files' => "No hay ficheiros en esta carpeta",
    // input - folder select
    'file_tools:input:folder_select:main' => "Carpeta principal",
    // list
    'file_tools:list:title' => "Listar carpetas",
    'file_tools:list:folder:main' => "Carpeta principal",
    'file_tools:list:files:none' => "No se encontraron ficheros en esta carpeta",
    'file_tools:list:select_all' => 'Seleccionar todo',
    'file_tools:list:deselect_all' => 'Des-seleccionar todo',
    'file_tools:list:download_selected' => 'Descargar seleccionados',
    'file_tools:list:delete_selected' => 'Eliminar seleccionados',
    'file_tools:list:alert:not_all_deleted' => 'No se pueden borrar todos los ficheros',
    'file_tools:list:alert:none_selected' => 'No se seleccionó ningún elemento',
    'file_tools:list:tree:info' => "Lo sabías?",
    'file_tools:list:tree:info:1' => "Puedes arrastrar y soltar ficheros en las carpetas para organizarlos!",
    'file_tools:list:tree:info:2' => "Puedes hacer doble click en cualquier carpeta para expandir todas sus subcarpetas!",
    'file_tools:list:tree:info:3' => "¡Puedes reordenar las carpetas arrastrándolas hasta su nuevo lugar en el árbol!",
    'file_tools:list:tree:info:4' => "¡Puedes mover estructuras de carpetas completas!",
    'file_tools:list:tree:info:5' => "¡Si borras una carpeta, puedes escoger opcionalmente eliminar todos los archivos!",
    'file_tools:list:tree:info:6' => "¡Cuando borras una carpeta,  se borrarán también todas sus subcarpetas!",
    'file_tools:list:tree:info:7' => "¡Este mensaje es aleatorio!",
    'file_tools:list:tree:info:8' => "¡Cuando eliminas una carpeta, pero no sus archivos, los archivos aparecerán en la carpeta raíz!",
    'file_tools:list:tree:info:9' => "¡Una carpeta nueva se puede poner directamente en la subcarpeta correcta!",
    'file_tools:list:tree:info:10' => "¡Cuando subes o editas un fichero puedes escoger en que carpeta aparecerá!",
    'file_tools:list:tree:info:11' => "¡Arrastrar ficheros sólo está disponible en la vista de lista, no en la vista de galería!",
    'file_tools:list:tree:info:12' => "¡Puedes actualizar el nivel de acceso en todas las subcarpetas y también (opcional) en todos los ficheros cuando editas una carpeta!",
    'file_tools:list:files:options:sort_title' => 'Ordenando',
    'file_tools:list:files:options:view_title' => 'Ver',
    'file_tools:usersettings:time' => 'Visualización de la hora',
    'file_tools:usersettings:time:description' => 'Cambiar la manera en que se muestra la hora de un fichero/carpeta',
    'file_tools:usersettings:time:default' => 'Visualización de hora predeterminada',
    'file_tools:usersettings:time:date' => 'Fecha',
    'file_tools:usersettings:time:days' => 'Días atrás',
    // new/edit
    'file_tools:new:title' => "Nueva carpeta",
    'file_tools:edit:title' => "Editar carpeta",
    'file_tools:forms:edit:title' => "Título",
    'file_tools:forms:edit:description' => "Descripción",
    'file_tools:forms:edit:parent' => "Seleccionar la carpeta superior",
    'file_tools:forms:edit:change_children_access' => "Actualizar acceso en todas las subcarpetas",
    'file_tools:forms:edit:change_files_access' => "Actualizar acceso en todos los ficheiros en esta carpeta (y todas las subcarpetas si está seleccionado)",
    'file_tools:forms:browse' => 'Navegar..',
    'file_tools:forms:empty_queue' => 'Cola vacía',
    'file_tools:folder:delete:confirm_files' => "Quieres eliminar todos los ficheiros de las (sub)carpetas eliminadas",
    // upload
    'file_tools:upload:tabs:single' => "Fichero único",
    'file_tools:upload:tabs:multi' => "Multi-fichero",
    'file_tools:upload:tabs:zip' => "Fichero Zip",
    'file_tools:upload:form:choose' => 'Escoger fichero',
    'file_tools:upload:form:info' => 'Pulsa navegar para subir (multiples) archivos',
    'file_tools:upload:form:zip:info' => "Puedes subir un fichero zip. Se extraerá el contenido y se importará cada fichero por separado. Si  tienes carpetas en tu fichero zip también se importarán en su carpeta específica. Se saltarán los ficheros de tipos no permitidos.",
    // actions
    // edit
    'file_tools:action:edit:error:input' => "Entrada incorrecta para crear/editar una carpeta",
    'file_tools:action:edit:error:owner' => "No se pudo encontrar el propietario de la carpeta",
    'file_tools:action:edit:error:folder' => "No hai ningunha carpeta para crear/editar",
    'file_tools:action:edit:error:parent_guid' => "Carpeta superior inválida, la carpeta superior no puede ser la propia carpeta.",
    'file_tools:action:edit:error:save' => "Error desconocido al salvar la carpeta",
    'file_tools:action:edit:success' => "La carpeta se creó/editó correctamente",
    'file_tools:action:move:parent_error' => "No se puede soltar la carpeta sobre si misma",
    // delete
    'file_tools:actions:delete:error:input' => "Entrada incorrecta para borrar la carpeta",
    'file_tools:actions:delete:error:entity' => "No se pudo encontrar el GUID proporcionado",
    'file_tools:actions:delete:error:subtype' => "El GUID proporcionado no es una carpeta",
    'file_tools:actions:delete:error:delete' => "Ocurrió un error desconocido al eliminar la carpeta",
    'file_tools:actions:delete:success' => "La carpeta se eliminó correctamente",
    //errors
    'file_tools:error:pageowner' => 'Error al obtener el propietario de la página.',
    'file_tools:error:nofilesextracted' => 'No se encontraron archivos para extraer.',
    'file_tools:error:cantopenfile' => 'No se pudo abrir el archivo zip (comprueba que el archivo que has subido es un archivo .zip)',
    'file_tools:error:nozipfilefound' => 'El archivo subido no es un archivo .zip.',
    'file_tools:error:nofilefound' => 'Escoge un archivo para subir.',
    //messages
    'file_tools:error:fileuploadsuccess' => 'El archivo zip se subió y se extrajo correctamente.',
    // move
    'file_tools:action:move:success:file' => "El fichero se movió correctamente",
    'file_tools:action:move:success:folder' => "La carpeta se movió correctamente",
    // buld delete
    'file_tools:action:bulk_delete:success:files' => "Se han eliminado %s archivos correctamente",
    'file_tools:action:bulk_delete:error:files' => "Hubo un error al elminar algunos archivos",
    'file_tools:action:bulk_delete:success:folders' => "Se han eliminado %s carpetas correctamente",
    'file_tools:action:bulk_delete:error:folders' => "Hubo un error al eliminar algunas carpetas",
    // reorder
    'file_tools:action:folder:reorder:success' => "Se reordenaron las carpetas correctamente",
    //settings
    'file_tools:settings:allowed_extensions' => 'Extensiones permitidas (separadas por comas)',
    'file_tools:settings:user_folder_structure' => 'Usar estructura de carpetas',
    'file_tools:settings:sort:default' => 'Opciones de ordenación de carpetas',
    'file:type:application' => 'Aplicación',
    'file:type:text' => 'Texto',
    // widgets
    // file tree
    'widgets:file_tree:title' => "Carpetas",
    'widgets:file_tree:description' => "Escaparate de tus carpetas",
    'widgets:file_tree:edit:select' => "Seleccionar que carpeta(s) mostrar",
    'widgets:file_tree:edit:show_content' => "Mostrar el contenido de las carpetas",
    'widgets:file_tree:no_folders' => "No se configuraron carpetas",
    'widgets:file_tree:no_files' => "No se configuraron archivos",
    'widgets:file_tree:more' => "Más carpetas",
    'widget:file:edit:show_only_featured' => 'Mostrar solo archivos destacados',
    'widget:file_tools:show_file' => 'Archivo destacado (widget)',
    'widget:file_tools:hide_file' => 'Archivo sin destacar',
    'widgets:file_tools:more_files' => 'Más archivos',
    // Group files
    'widgets:group_files:description' => "Mostrar los últimos archivos del grupo",
    // index_file
    'widgets:index_file:description' => "Mostrar los últimos archivos en tu comunidad",
    'comments' => "Commentarios",
    'comment:notification:settings' => 'Notificaciones de comentarios',
    'comment:notification:settings:description' => 'Notificarme cuando haya comentarios en elementos en los que te hayas suscrito.',
    'comment:notification:settings:how' => 'Selecciona tu método de notificación',
    'comment:notification:settings:linktext' => 'Ver todos los elementos en los que estoy suscrito',
    'comment:subscriptions' => 'Suscripciones',
    'comment:subscriptions:none' => 'No hay suscripciones actualmente',
    'comment:subscribe:tooltip' => 'Suscríbete para recibir notificaciones cuando haya comentarios',
    'allow:comment:notification' => '¿Quieres habilitar las notificaciones? ',
    'email:content:type' => '¿Deseas recibir correos en formato HTML? ',
    'text:email' => 'No',
    'html:email' => 'Sí',
    'comment:subscribe' => 'Subscribirme',
    'comment:unsubscribe' => 'Cancelar suscripción',
    'comment:subscribe:long' => 'Suscribirme a las notificaciones de comentarios',
    'comment:unsubscribe:long' => 'Cancelar suscripción de las notificaciones de comentarios',
    'comment_tracker:setting:autosubscribe' => "¿Auto-suscribirme al contenido en el que haya comentado?",
    'show:subscribers' => 'Mostrar suscriptores.',
    'comment:subscribe:success' => 'Te has suscrito correctamente a este contenido o temática.',
    'comment:subscribe:failed' => "Lo sentimos! No hemos podido suscribirte a este contenido o temática.",
    'comment:subscribe:entity:not:access' => "Lo sentimos! No hemos encontrado el contenido o temática por alguna razón.",
    'comment:unsubscribe:success' => 'Se ha cancelado correctamente la suscripción a este contenido o temática.',
    'comment:unsubscribe:failed' => "Sorry! You couldn't unsubscribe from this post or topic.",
    'comment:unsubscribe:not:valid:url' => 'Lo sentimos! Esta no es una url correcta para cancelar la suscipción de este contenido o temática.',
    'comment:unsubscribe:entity:not:access' => "Lo sentimos! No hemos encontrado el contenido o temática.",
    'comment_tracker:setting:show_button' => "¿Mostrar el botón de suscripción/cancelación arriba del comentario? ",
    'comment_tracker:item' => "elemento",
    'comment:notify:subject:groupforumtopic' => '%s añadido a la discusión a%s en el grupo %s',
    'comment:notify:subject:comment' => '%s comentó en el %s "%s"',
    'comment:notify:subject:comment:group' => '%s comentó en el %s "%s" en el grupo %s',
    /* Legacy stuff - @TODO - see what's safe to delete */
    'comment:notify:subject' => 'Hay un nuevo comentario en %s',
    'comment:notify:group:subject' => 'Hay un nuevo contenido en el hilo %s',
    'comment:notify:body:web' => 'Hola %s,
<br/>Hay una nueva entrada en %s
<br/>%s ecribió: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.<br/>
Para cambiar las preferencias de notificación, haz clic aquí: %s<br/>
</font>
		',
    'comment:notify:group:body:web' => 'Hola %s,
<br/>Hay una nueva entrada en el hilo %s
<br/>%s escribió: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.<br/>
Para cambiar las preferencias de notificación, haz clic aquí: %s<br/>
</font>
		',
    'comment:notify:body:email:text' => 'Hola %s,

Hay un nuevo comentario en %s

%s escribió: %s

%s

%s

_________________________________________________________________________________
<font color="#888888" size="2">
Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.

Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.

Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s
</font>
		',
    'comment:notify:group:body:email:text' => 'Hola %s,

Hay un nuevo contenido en el hilo %s

%s escribió: %s

%s

%s

_________________________________________________________________________________
<font color="#888888" size="2">
Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.

Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.

Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s
</font>
		',
    'comment:notify:body:email:html' => '
<div>
	<div>Hola %s,</div>
	<div>Hay un nuevo comentario en %s</div>
	<div>%s escribió: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.</div>
		<div>Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.</div>
		<div>Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s</div>
	</div>
</div>
		',
    'comment:notify:group:body:email:html' => '
<div>
	<div>Hola %s,</div>
	<div>Hay un nuevo contenido en el hilo %s</div>
	<div>%s escribió: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.</div>
		<div>Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.</div>
		<div>Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s</div>
	</div>
</div>
		',
    'au_subgroups' => "Subgrupos",
    'au_subgroups:subgroup' => "Subgrupo",
    'au_subgroups:subgroups' => "Subgrupos",
    'au_subgroups:parent' => "Grupo padre",
    'au_subgroups:add:subgroup' => 'Crear un subgrupo',
    'au_subgroups:nogroups' => 'No se ha creado el subgrupo',
    'au_subgroups:error:notparentmember' => "Los usuarios no pueden unirse a un subgrupo si no son miembros del grupo padre",
    'au_subtypes:error:create:disabled' => "La creación de subgrupos se ha deshabilitado para este grupo",
    'au_subgroups:noedit' => "No se puede editar este grupo",
    'au_subgroups:subgroups:delete' => "Borrar grupo",
    'au_subgroups:delete:label' => "¿Qué debe pasar con el contenido de este grupo? Cualquier opción seleccionada se aplicará también a cualquier subgrupo que se elimine.",
    'au_subgroups:deleteoption:delete' => 'Eliminar todo el contenido dentro de este grupo',
    'au_subgroups:deleteoption:owner' => 'Transferir todo el contenido de los creadores originales',
    'au_subgroups:deleteoption:parent' => 'Transferir todo el contenido al grupo padre',
    'au_subgroups:subgroup:of' => "Subgrupo de %s",
    'au_subgroups:setting:display_alphabetically' => "¿Visualizar los anuncios personales de grupos por orden alfabético?",
    'au_subgroups:setting:display_subgroups' => '¿Mostrar subgrupos en los anuncios del grupo estándar?',
    'au_subgroups:setting:display_featured' => '¿Mostrar barra lateral grupos destacados en las listas de grupos personales?',
    'au_subgroups:error:invite' => "La acción ha sido cancelada - los usuarios siguientes no son miembros del grupo padre y no pueden ser invitados/agregados.",
    'au_subgroups:option:parent:members' => "Los miembros del grupo padre",
    'au_subgroups:subgroups:more' => "Ver todos los subgrupos",
    'subgroups:parent:need_join' => "Unirse al grupo padre",
    // group options
    'au_subgroups:group:enable' => "Subgroups: Enable Sub-Groups for this group?",
    'au_subgroups:group:memberspermissions' => "Subgroups: Enable any member to create subgroups? (if no, only group admins will be able to create subgroups)",
    /*
     * Widget
     */
    'au_subgroups:widget:order' => 'Ordenar los resultados por',
    'au_subgroups:option:default' => 'Hora de creación',
    'au_subgroups:option:alpha' => 'Alfabético',
    'au_subgroups:widget:numdisplay' => 'Número de subgrupos para mostrar',
    'au_subgroups:widget:description' => 'Lista de los subgrupos de este grupo',
    /**
     * Menu items and titles
     */
    'groups:enablelongcolumn' => "Habilitar a 3 columnas el módulo de debate",
    'groups' => "Grupos",
    'groups:owned' => "Grupos que administro",
    'groups:yours' => "Mis grupos",
    'groups:user' => "Grupos de %s",
    'groups:all' => "Todos los grupos",
    'groups:add' => "Crear un nuevo grupo",
    'groups:edit' => "Editar grupo",
    'groups:delete' => 'Eliminar grupo',
    'groups:membershiprequests' => 'Administrar solicitudes para unirse',
    'groups:invitations' => 'Invitaciones de grupo',
    'groups:icon' => 'Icono de grupo (dejar en blanco para no modificarlo)',
    'groups:name' => 'Nombre del grupo',
    'groups:username' => 'Nombre corto del grupo (se muestra en URLs, solamente caracteres alfanum&eacute;ricos)',
    'groups:description' => 'Descripci&oacute;n',
    'groups:briefdescription' => 'Descripci&oacute;n corta',
    'groups:interests' => 'Tags',
    'groups:website' => 'Sitio web',
    'groups:members' => 'Miembros del grupo',
    'groups:members:title' => 'Miembros de %s',
    'groups:members:more' => "Ver todos los miembros",
    'groups:membership' => "Permisos de miembros del grupo",
    'groups:access' => "Permisos de acceso",
    'groups:owner' => "Administrador",
    'groups:widget:num_display' => 'Cantidad de grupos a mostrar',
    'groups:widget:membership' => 'Miembros del grupo',
    'groups:widgets:description' => 'Mostrar en tu perfil los grupos a los que perteneces',
    'groups:noaccess' => 'Sin acceso al grupo',
    'groups:permissions:error' => 'No posee permisos para esto',
    'groups:ingroup' => 'en el grupo',
    'groups:cantedit' => 'No puede modificar este grupo',
    'groups:saved' => 'Grupo guardado',
    'groups:featured' => 'Grupos favoritos',
    'groups:makeunfeatured' => 'No favorito',
    'groups:makefeatured' => 'Hacer favorito',
    'groups:featuredon' => '%s ahora es un grupo favorito.',
    'groups:unfeatured' => '%s ha sido quitado de los grupos favoritos.',
    'groups:featured_error' => 'Grupo inv&aacute;lido.',
    'groups:joinrequest' => 'Solicitar unirse',
    'groups:join' => 'Unirse al grupo',
    'groups:leave' => 'Abandonar grupo',
    'groups:invite' => 'Invitar amigos',
    'groups:invite:title' => 'Invitar amigos al grupo',
    'groups:inviteto' => "Invitar amigos a '%s'",
    'groups:nofriends' => "No posee amigos que no hayan sido invitados al grupo.",
    'groups:nofriendsatall' => 'No tienes amigos para invitar!',
    'groups:viagroups' => "grupos via",
    'groups:group' => "Grupo",
    'groups:search:tags' => "tag",
    'groups:search:title' => "Buscar grupos que conicidan con el tag '%s'",
    'groups:search:none' => "No se encontraron grupos",
    'groups:activity' => "Actividad del grupo",
    'groups:enableactivity' => 'Habilitar la actividad del grupo',
    'groups:activity:none' => "A&uacute;n no hay actividad en el grupo",
    'groups:notfound' => "Grupo no encontrado",
    'groups:notfound:details' => "El grupo solicitado no existe o bien no tiene acceso a el",
    'groups:requests:none' => 'En este momento no hay solicitudes pendientes.',
    'groups:invitations:none' => 'En este momento no hay invitaciones.',
    'item:object:groupforumtopic' => "Debates",
    'groupforumtopic:new' => "Nueva entrada de debate",
    'groups:count' => "grupos creados",
    'groups:open' => "grupo abierto",
    'groups:closed' => "grupo cerrado",
    'groups:member' => "miembros",
    'groups:searchtag' => "Buscar grupos por tag",
    'groups:more' => 'M&aacute;s grupos',
    'groups:none' => 'Sin grupos',
    /*
     * Access
     */
    'groups:access:private' => 'Cerrado - Los usuarios deben ser invitados',
    'groups:access:public' => 'Abierto - Cualquier usuario puede unirse',
    'groups:access:group' => 'S&oacute;lo miembros del grupo',
    'groups:closedgroup' => 'Este grupo es cerrado en sus admisiones.',
    'groups:closedgroup:request' => 'Para solicitar unirse, haga click en el link del men&uacute; "solicitar unirse".',
    'groups:visibility' => 'Quienes pueden ver este grupo?',
    /*
      Group tools
     */
    'groups:enableforum' => 'Habilitar debates de grupo',
    'groups:yes' => 'si',
    'groups:no' => 'no',
    'groups:lastupdated' => 'Ultima actualizaci&oacute;n %s por %s',
    'groups:lastcomment' => 'Ultimo comentario %s por %s',
    /*
      Group discussion
     */
    'discussion' => 'Debate',
    'discussion:add' => 'Nuevo debate',
    'discussion:latest' => 'Ultimo debate',
    'discussion:group' => 'Debates',
    'discussion:topic:created' => 'Se cre&oacute; una nueva discusi&oacute;n.',
    'discussion:topic:updated' => 'Se ha actualizado la discusi&oacute;n.',
    'discussion:topic:deleted' => 'Se ha eliminado la discusi&oacute;n.',
    'discussion:topic:notfound' => 'No se pudo encontrar la discusi&oacute;n',
    'discussion:error:notsaved' => 'No se pudo guardar la discusi&oacute;n',
    'discussion:error:missing' => 'El t&iacute;tulo y el mensaje son requridos',
    'discussion:error:permissions' => 'No posee los permisos necesarios para poder realizar esta acci&oacute;n',
    'discussion:error:notdeleted' => 'No se pudo eliminar la discusi&oacute;n',
    'discussion:reply:deleted' => 'La respuesta en la discusi&oacute;n ha sido eliminada.',
    'discussion:reply:error:notdeleted' => 'No se pudo eliminar la respuesta en la discusi&oacute;n',
    'reply:this' => 'Responder',
    'group:replies' => 'Respuestas',
    'groups:forum:created' => 'Creado %s con %d comentarios',
    'groups:forum:created:single' => 'Creado %s con %d respuestas',
    'groups:forum' => 'Debate',
    'groups:addtopic' => 'Nuevo debate',
    'groups:forumlatest' => 'Ultima discusi&oacute;n',
    'groups:latestdiscussion' => 'Ultima discusi&oacute;n',
    'groups:newest' => 'La m&aacute;s reciente',
    'groups:popular' => 'Popular',
    'groupspost:success' => 'Su respuesta ha sido publicada correctamente',
    'groups:alldiscussion' => 'Ultima discusi&oacute;n',
    'groups:edittopic' => 'Editar discusi&oacute;n',
    'groups:topicmessage' => 'Mensaje de discusi&oacute;n',
    'groups:topicstatus' => 'Estado de la discusi&oacute;n',
    'groups:reply' => 'Publicar un comentario',
    'groups:topic' => 'Debate',
    'groups:posts' => 'Entradas',
    'groups:lastperson' => 'Ultima persona',
    'groups:when' => 'Cuando',
    'grouptopic:notcreated' => 'No se encontraron discusiones.',
    'groups:topicopen' => 'Abierta',
    'groups:topicclosed' => 'Cerrada',
    'groups:topicresolved' => 'Resuelta',
    'grouptopic:created' => 'Se ha creado la discusi&oacute;n.',
    'groupstopic:deleted' => 'La discusi&oacute;n ha sido eliminada.',
    'groups:topicsticky' => 'Pegadiza',
    'groups:topicisclosed' => 'La discusi&oacute;n se encuentra cerrada.',
    'groups:topiccloseddesc' => 'La discusi&oacute;n se encuentra cerrada y no acepta nuevos comentarios.',
    'grouptopic:error' => 'No se pudo crear una discusi&oacute;n en el grupo. Por favor intente nuevamente o contacte a un administrador del sistema.',
    'groups:forumpost:edited' => "El comentario en el foro ha sido editado.",
    'groups:forumpost:error' => "Ha ocurrido un error al intentar editar el comentario en el foro.",
    'groups:privategroup' => 'El grupo se encuentra cerrado. Solicitando unirse.',
    'groups:notitle' => 'Los grupos deben tener un t&iacute;tulo',
    'groups:cantjoin' => 'No puede unirse al grupo',
    'groups:cantleave' => 'No puede abandonar el grupo',
    'groups:removeuser' => 'Quitar del grupo',
    'groups:cantremove' => 'No se pudo quitar el usuario del grupo',
    'groups:removed' => 'Se quit&oacute; a %s del grupo',
    'groups:addedtogroup' => 'Se agreg&oacute; al grupo correctamente',
    'groups:joinrequestnotmade' => 'No puede solicitar unirse al grupo',
    'groups:joinrequestmade' => 'Solicit&oacute; unirse al grupo',
    'groups:joined' => 'Se ha unido al grupo correctamente!',
    'groups:left' => 'Ha abandonado al grupo correctamente',
    'groups:notowner' => 'Lo sentimos, no es el administrador de este grupo.',
    'groups:notmember' => 'Lo sentimos, no es miembro de este grupo.',
    'groups:alreadymember' => 'Ya es miembro de este grupo!',
    'groups:userinvited' => 'El usuario ha sido invitado.',
    'groups:usernotinvited' => 'No se pudo invitar al usuario.',
    'groups:useralreadyinvited' => 'El usuario ya ha sido invitado',
    'groups:invite:subject' => "%s has sido invitado para unirte a %s!",
    'groups:updated' => "Ultima respuesta por %s %s",
    'groups:started' => "Iniciado por %s",
    'groups:joinrequest:remove:check' => 'Est&aacute; seguro que desea quitar la solicitud al grupo?',
    'groups:invite:remove:check' => 'Est&aacute; seguro de quitar la invitaci&oacute;n?',
    'groups:invite:body' => "Hola %s,

%s te ha invitado a unirte al grupo '%s'. Haz click debajo para ver la invitaci&oacute;n:

%s",
    'groups:welcome:subject' => "Bienvenido al grupo %s!",
    'groups:welcome:body' => "Hola %s!

Eres miembro del grupo '%s'! Haz click debajo para comenzar a autilizarlo!

%s",
    'groups:request:subject' => "%s ha solicitado unirse a %s",
    'groups:request:body' => "Hola %s,

%s ha solicitado unirse al grupo '%s'. Haga click debajo para consultar su perfil

%s

o haga click debaajo para ver las solicitudes para este grupo:

%s",
    /*
      Forum river items
     */
    'river:create:group:default' => '%s ha creado el grupo %s',
    'river:join:group:default' => '%s se ha unido al grupo %s',
    'river:create:object:groupforumtopic' => '%s ha agregado una nueva discusi&oacute;n: %s',
    'river:reply:object:groupforumtopic' => '%s ha respondido en la discusi&oacute;n %s',
    'groups:nowidgets' => 'No se encontraon widgets para este grupo.',
    'groups:widgets:members:title' => 'Miembros del grupo',
    'groups:widgets:members:description' => 'Listar miembros del grupo.',
    'groups:widgets:members:label:displaynum' => 'Listar miembros del grupo.',
    'groups:widgets:members:label:pleaseedit' => 'Por favor configure este widget.',
    'groups:widgets:entities:title' => "Objetos en el grupo",
    'groups:widgets:entities:description' => "Lista de objetos guardados en el grupo",
    'groups:widgets:entities:label:displaynum' => 'Lista de objetos del grupo.',
    'groups:widgets:entities:label:pleaseedit' => 'Por favor configure este widget.',
    'groups:forumtopic:edited' => 'Discusi&oacute;n editada correctamente.',
    'groups:allowhiddengroups' => 'Desea permitir los grupos privados(invisibles)?',
    /**
     * Action messages
     */
    'group:deleted' => 'Grupo y contenidos de grupo eliminados',
    'group:notdeleted' => 'No se pudo eliminar al grupo',
    'group:notfound' => 'No se pudo encontrar el grupo',
    'grouppost:deleted' => 'La publicaci&oacute;n del grupo ha sido eliminada',
    'grouppost:notdeleted' => 'No se pudo eliminar la publicaci&oacute;n del grupo',
    'groupstopic:deleted' => 'Duscusi&oacute;n eliminada',
    'groupstopic:notdeleted' => 'Discusi&oacute;n no eliminada',
    'grouptopic:blank' => 'No hay discusi&oacute;n',
    'grouptopic:notfound' => 'No se pudo encontrar la discusi&oacute;n',
    'grouppost:nopost' => 'Entrada vac&iacute;a',
    'groups:deletewarning' => "Desea eliminar este grupo? su acci&oacute;n es irreversible!",
    'groups:invitekilled' => 'Se ha eliminado la invitaci&oacute;n.',
    'groups:joinrequestkilled' => 'Se ha eliminado la solicitud de inscripci&oacute;n.',
    // ecml
    'groups:ecml:discussion' => 'Discusiones del grupo',
    'groups:ecml:groupprofile' => 'Perfiles del grupo',
    /**
     * Sites
     */
    'item:site' => 'Sitios',
    /**
     * Sessions
     */
    'login' => "Iniciar sesi&oacute;n",
    'loginok' => "Ha iniciado sesi&oacute;n",
    'loginerror' => "Inicio de sesi&oacute;n incorrecto. Verifique sus credenciales e intente nuevamente",
    'login:empty' => "El nombre de usuario y contrase&ntilde;a son requeridos",
    'login:baduser' => "No se pudo cargar su cuenta de usuario",
    'auth:nopams' => "Error interno. No se encuentra un m&eacute;todo de autenticaci&oacute;n instalado",
    'logout' => "Cerrar sesi&oacute;n",
    'logoutok' => "Se ha cerrado la sesi&oacute;n",
    'logouterror' => "No se pudo cerrar la sesi&oacute;n, por favor intente nuevamente",
    'loggedinrequired' => "Debe estar autenticado para poder visualizar esta p&aacute;gina",
    'adminrequired' => "Debe ser un administrador para poder visualizar esta p&aacute;gina",
    'membershiprequired' => "Debe ser miembro del grupo para poder visualizar esta p&aacute;gina",
    /**
     * Errors
     */
    'exception:title' => "Error Fatal",
    'actionundefined' => "La acci&oacute;n (%s) solicitada no se encuentra definida en el sistema",
    'actionnotfound' => "El log de acciones para %s no se ha encontrado",
    'actionloggedout' => "Lo sentimos, no puede realizar esta acci&oacute;n sin identificarse",
    'actionunauthorized' => 'Usted no posee los permisos necesarios para realizar esta acci&oacute;n',
    'InstallationException:SiteNotInstalled' => 'No se pudo procesar la solicitud. El sitio '
    . ' no se encuentra configurado o la base de datos se encuentra ca&iacute;da',
    'InstallationException:MissingLibrary' => 'No se pudo cargar %s',
    'InstallationException:CannotLoadSettings' => 'No se pudo cargar el archivo de configuracion, puede que no exista o que se deba a un error de configuraci&oacute;n de permisos',
    'SecurityException:Codeblock' => "Acceso denegado para la ejecuci&oacute;n de bloque de c&oacute;digo privilegiado",
    'DatabaseException:WrongCredentials' => "No se pudo conectar a la base de datos con las credenciales provistas. Verifique el archivo de configuraci&oacute;n",
    'DatabaseException:NoConnect' => "No se puede consultar la base de datos '%s', por favor verifique que dicha base de datos exista y que posea permisos sobre la misma",
    'SecurityException:FunctionDenied' => "Acceso denegado a la funci&oacute;n privilegiada '%s'",
    'DatabaseException:DBSetupIssues' => "Se encontr&oacute; una cantidad de errores: ",
    'DatabaseException:ScriptNotFound' => "No se pudo encontrar el script de base de datos %s",
    'DatabaseException:InvalidQuery' => "Consulta inv&aacute;lida",
    'IOException:FailedToLoadGUID' => "Error al cargar una nueva %s de GUID: %d",
    'InvalidParameterException:NonElggObject' => "Pasando un no-ElggObject a un constructor ElggObject!",
    'InvalidParameterException:UnrecognisedValue' => "No se reconoce el valor pasado al constructor",
    'InvalidClassException:NotValidElggStar' => "GUID: %d no es un %s v&aacute;lido",
    'PluginException:MisconfiguredPlugin' => "%s (guid: %s) es un plugin desconfigurado que ha sido deshabilitado. Por favor revise la Wiki de Elgg para m&aacute;s informaci&oacute;n (http://docs.elgg.org/wiki/)",
    'PluginException:CannotStart' => '%s (guid: %s) no puede iniciarse. Motivo: %s',
    'PluginException:InvalidID' => "%s no es un ID de plugin v&aacute;lido",
    'PluginException:InvalidPath' => "%s es un path de plugin inv&aacute;lido",
    'PluginException:InvalidManifest' => 'Archivo de manifesto inv&aacute;lido para el plugin %s',
    'PluginException:InvalidPlugin' => '%s no es un plugin v&aacute;lido',
    'PluginException:InvalidPlugin:Details' => '%s no es un plugin v&aacute;lido: %s',
    'ElggPlugin:MissingID' => 'No se encuentra el ID del plugin (guid %s)',
    'ElggPlugin:NoPluginPackagePackage' => 'ElggPluginPackage faltante para el plugin con ID %s (guid %s)',
    'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Archivo %s faltante en el package',
    'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Tipo de dependencia "%s" inv&aacute;lida',
    'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Tipo "%s" provisto inv&aacute;lido',
    'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Dependencia %s inv&aacute;lida "%s" en plugin %s. Los plugins no pueden entrar en conlicto con otros requeridos!',
    'ElggPlugin:Exception:CannotIncludeFile' => 'No puede incluirse %s para el plugin %s (guid: %s) en %s. Verifique los permisos!',
    'ElggPlugin:Exception:CannotRegisterViews' => 'No puede cargarse el directorio "views" para el plugin %s (guid: %s) en %s. Verifique los permisos!',
    'ElggPlugin:Exception:CannotRegisterLanguages' => 'No pueden registrarse lenguajes para el plugin %s (guid: %s) en %s.  Verifique los permisos!',
    'ElggPlugin:Exception:NoID' => 'No se encontr&oacute; el ID para el plugin con guid %s!',
    'PluginException:ParserError' => 'Error procesando el manifiesto con versi&oacute;n de API %s en plugin %s',
    'PluginException:NoAvailableParser' => 'No se encuentra un procesador para el manifiesto de la versi&oacute;n de la API %s en plugin %s',
    'PluginException:ParserErrorMissingRequiredAttribute' => "Atributo '%s' faltante en manifiesto del el plugin %s",
    'ElggPlugin:Dependencies:Requires' => 'Requiere',
    'ElggPlugin:Dependencies:Suggests' => 'Sugiere',
    'ElggPlugin:Dependencies:Conflicts' => 'Conflictos',
    'ElggPlugin:Dependencies:Conflicted' => 'En conflicto',
    'ElggPlugin:Dependencies:Provides' => 'Provee',
    'ElggPlugin:Dependencies:Priority' => 'Prioridad',
    'ElggPlugin:Dependencies:Elgg' => 'Versi&oacute;n Elgg',
    'ElggPlugin:Dependencies:PhpExtension' => 'Extensi&oacute;n PHP: %s',
    'ElggPlugin:Dependencies:PhpIni' => 'Configuraci&oacute;n PHP ini: %s',
    'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
    'ElggPlugin:Dependencies:Priority:After' => 'Luego %s',
    'ElggPlugin:Dependencies:Priority:Before' => 'Antes %s',
    'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s no instalado',
    'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Faltante',
    'ElggPlugin:InvalidAndDeactivated' => '%s no es un plugin v&aacute;lido y se ha deshabilitado',
    'InvalidParameterException:NonElggUser' => "Pasando un no-ElggUser a un constructor ElggUser!",
    'InvalidParameterException:NonElggSite' => "Pasando un no-ElggSite a un constructor ElggSite!",
    'InvalidParameterException:NonElggGroup' => "Pasando un no-ElggGroup a un constructor ElggGroup!",
    'IOException:UnableToSaveNew' => "No se pudo guardar un nuevo %s",
    'InvalidParameterException:GUIDNotForExport' => "No se ha especificado un GUID durante la exportaci&oacute;n, esto no deber&iacute;a ocurrir",
    'InvalidParameterException:NonArrayReturnValue' => "Funci&oacute;n de serializaci&oacute;n de entidad pasada a un par&aacute;metro de retorno no-array",
    'ConfigurationException:NoCachePath' => "Path de Cache seteado en Null!",
    'IOException:NotDirectory' => "%s no es un directorio",
    'IOException:BaseEntitySaveFailed' => "No se pudo guardar una nueva entidad!",
    'InvalidParameterException:UnexpectedODDClass' => "import() pasado a una clase ODD inesperado",
    'InvalidParameterException:EntityTypeNotSet' => "Debe setearse el tipo de entidad",
    'ClassException:ClassnameNotClass' => "%s no es un %s",
    'ClassNotFoundException:MissingClass' => "Clase '%s' no encontrada, hay alg&uacute;n plugin faltante?",
    'InstallationException:TypeNotSupported' => "No se reconoce el tipo %s. Esto indica un error en la instalaci&oacute;n, seguramente causado por una actualizaci&oacute;n incompleta",
    'ImportException:ImportFailed' => "No pudo importarse el elemento %d",
    'ImportException:ProblemSaving' => "Se encontr&oacute; un problema al guardar %s",
    'ImportException:NoGUID' => "Se cre&oacute; una nueva entidad sin GUID, esto no debe ocurrir",
    'ImportException:GUIDNotFound' => "No se pudo encontrar la entidad '%d'",
    'ImportException:ProblemUpdatingMeta' => "Ocurri&oacute; un error al actualizar '%s' en la entidad '%d'",
    'ExportException:NoSuchEntity' => "GUID de entidad inv&aacute;lido: %d",
    'ImportException:NoODDElements' => "No se encontraron elementos OpenDD para la importaci&oacute;n, la importaci&oacute;n ha fallado",
    'ImportException:NotAllImported' => "No se importaron todos los elementos",
    'InvalidParameterException:UnrecognisedFileMode' => "Modo de archivo '%s' no reconocido",
    'InvalidParameterException:MissingOwner' => "El archivo %s (guid: %d) (guid del due&ntilde;o: %d) no tiene un due&ntilde;o!",
    'IOException:CouldNotMake' => "No puede realizarse %s",
    'IOException:MissingFileName' => "Debe especificar un nombre antes de abrir un archivo",
    'ClassNotFoundException:NotFoundNotSavedWithFile' => "No pudo cargarse la clase de repositorio %s para el archivo %u",
    'NotificationException:NoNotificationMethod' => "No se especific&oacute; un m&eacute;todo de notificaci&oacute;n",
    'NotificationException:NoHandlerFound' => "No se encuentra un controlador '%s' o no es ejecutable",
    'NotificationException:ErrorNotifyingGuid' => "Ocurri&oacute; un error al notificar %d",
    'NotificationException:NoEmailAddress' => "No pudo cargarse la direcci&oacute;n de Email para el GUID:%d",
    'NotificationException:MissingParameter' => "Par&aacute;metro requerido faltante: '%s'",
    'DatabaseException:WhereSetNonQuery' => "Donde no contenga WhereQueryComponent",
    'DatabaseException:SelectFieldsMissing' => "Campos faltantes en el estilo de consulta",
    'DatabaseException:UnspecifiedQueryType' => "Tipo de consulta no reconocido o no especificado",
    'DatabaseException:NoTablesSpecified' => "No se especificaron las tablas para la consulta",
    'DatabaseException:NoACL' => "No se especific&oacute; el control de acceso en la consulta",
    'InvalidParameterException:NoEntityFound' => "No se encuentra la entidad, puede que esta no exista o que no tenga los permisos necesarios sobre ella",
    'InvalidParameterException:GUIDNotFound' => "No se pudo encontrar el GUID: %s, o no tiene acceso a ella",
    'InvalidParameterException:IdNotExistForGUID' => "Lo sentimos, '%s' no existe para el guid: %d",
    'InvalidParameterException:CanNotExportType' => "Lo sentimos, no se encuentra implementada la exportaci&oacute;n de '%s'",
    'InvalidParameterException:NoDataFound' => "No se encontraron resultados",
    'InvalidParameterException:DoesNotBelong' => "No pertenece a la entidad",
    'InvalidParameterException:DoesNotBelongOrRefer' => "No pertenece o se refiere a la entidad",
    'InvalidParameterException:MissingParameter' => "Par&aacute;metro faltante, debe proveer un GUID",
    'InvalidParameterException:LibraryNotRegistered' => '%s no es una librer&iacute;a registrada',
    'APIException:ApiResultUnknown' => "Los resultados de la API no son conocidos, esto no debe ocurrir",
    'ConfigurationException:NoSiteID' => "No se especific&oacute; un ID del sitio",
    'SecurityException:APIAccessDenied' => "Lo sentimos, el acceso a la API ha sido deshabilitado para el administrador",
    'SecurityException:NoAuthMethods' => "No se encontraron m&eacute;todos de autenticaci&oacute;n para procesar la solicitud",
    'SecurityException:UnexpectedOutputInGatekeeper' => 'Salida inesperada en resultado gatekeeper. Deteniendo la ejecuci&oacute;n por seguridad. Revise http://docs.elgg.org/ para m&aacute;s informaci&oacute;n',
    'InvalidParameterException:APIMethodOrFunctionNotSet' => "M&eacute;todo o funci&oacute;n no especificado en el llamado a expose_method()",
    'InvalidParameterException:APIParametersArrayStructure' => "Estructuras de Array son inv&aacute;lidas en llamados a la funci&oacute;n '%s'",
    'InvalidParameterException:UnrecognisedHttpMethod' => "M&eacute;todo http %s no reconocido para el m&eacute;todo '%s' de la API",
    'APIException:MissingParameterInMethod' => "Par&aacute;metro %s faltante en m&eacute;todo %s",
    'APIException:ParameterNotArray' => "%s no es un Array",
    'APIException:UnrecognisedTypeCast' => "Tipo no reconocido en casteo %s para la variable '%s' en el m&eacute;todo '%s'",
    'APIException:InvalidParameter' => "Se encontr&oacute; un par&aacute;metro inv&aacute;lido para '%s' en el m&eacute;todo '%s'",
    'APIException:FunctionParseError' => "%s(%s) posee un error de procesamiento",
    'APIException:FunctionNoReturn' => "%s(%s) no retorn&oacute; ning&uacute;n valor",
    'APIException:APIAuthenticationFailed' => "El llamado al m&eacute;todo fall&oacute; en la autenticaci&oacute;n de la API",
    'APIException:UserAuthenticationFailed' => "El llamado al m&eacute;todo fall&oacute; en la autenticaci&oacute;n del usuario",
    'SecurityException:AuthTokenExpired' => "El token de autenticaci&oacute;n no se encuentra o bien se encuentra expirado",
    'CallException:InvalidCallMethod' => "%s debe llamarse utilizando '%s'",
    'APIException:MethodCallNotImplemented' => "La llamada al m&eacute;todo '%s' no se encuentra implementada",
    'APIException:FunctionDoesNotExist' => "La funci&oacute;n para el m&eacute;todo '%s' no es ejecutable",
    'APIException:AlgorithmNotSupported' => "No se soporta o se ha deshabilitado el algoritmo '%s'",
    'ConfigurationException:CacheDirNotSet' => "Directorio de Cache 'cache_path' no establecido",
    'APIException:NotGetOrPost' => "El m&eacute;todo de Request debe ser GET o POST",
    'APIException:MissingAPIKey' => "Clave API faltante",
    'APIException:BadAPIKey' => "Clave API incorrecta",
    'APIException:MissingHmac' => "Encabezado X-Elgg-hmac faltante",
    'APIException:MissingHmacAlgo' => "Encabezado X-Elgg-hmac-algo faltante",
    'APIException:MissingTime' => "Encabezado X-Elgg-time faltante",
    'APIException:MissingNonce' => "Encabezado X-Elgg-nonce faltante",
    'APIException:TemporalDrift' => "X-Elgg-time es muy lejano en el pasado o en el futuro. Fallo Epoch",
    'APIException:NoQueryString' => "No hay datos en la query string",
    'APIException:MissingPOSTHash' => "Encabezado X-Elgg-posthash faltante",
    'APIException:MissingPOSTAlgo' => "Encabezado X-Elgg-posthash_algo faltante",
    'APIException:MissingContentType' => "Content type faltante para post data",
    'SecurityException:InvalidPostHash' => "Hash de POST data inv&aacute;lido - Se esperaba %s pero se recibi&oacute; %s",
    'SecurityException:DupePacket' => "Firma de paquete ya vista",
    'SecurityException:InvalidAPIKey' => "Clave API inv&aacute;lida o faltante",
    'NotImplementedException:CallMethodNotImplemented' => "El llamado al m&eacute;todo '%s' no es soportado",
    'NotImplementedException:XMLRPCMethodNotImplemented' => "Llamado al m&eacute;todo XML-RPC '%s' no implementada",
    'InvalidParameterException:UnexpectedReturnFormat' => "La llamada al m&eacute;todo '%s' devolvi&oacute; un resultado inesperado",
    'CallException:NotRPCCall' => "La llamada no parece ser una llamada XML-RPC v&aacute;lida",
    'PluginException:NoPluginName' => "No se pudo encontrar el nombre del plugin",
    'SecurityException:authenticationfailed' => "No se pudo autenticar el usuario",
    'CronException:unknownperiod' => '%s no es un per&iacute;odo reconocible',
    'SecurityException:deletedisablecurrentsite' => 'No puede eliminar o deshabilitar el sitio que est&aacute; viendo en este momento!',
    'RegistrationException:EmptyPassword' => 'Los campos de contrase&ntilde;as son obligatorios',
    'RegistrationException:PasswordMismatch' => 'Las contrase&ntilde;as deben coincidir',
    'LoginException:BannedUser' => 'Su ingreso ha sido bloqueado moment&aacute;neamente',
    'LoginException:UsernameFailure' => 'No pudo iniciarse la sesi&oacute;n. Por favor verifique su nombre de usuario y contrase&ntilde;a',
    'LoginException:PasswordFailure' => 'No pudo iniciarse la sesi&oacute;n. Por favor verifique su nombre de usuario y contrase&ntilde;a',
    'LoginException:AccountLocked' => 'Su cuenta ha sido bloqueada por la cantidad de intentos fallidos de inicio de sesion',
    'memcache:notinstalled' => 'M&oacute;dulo memcache del PHP no instalado, debe instalar el m&oacute;dulo php5-memcache',
    'memcache:noservers' => 'No hay servers memcache definidos, por favor popule la variable $CONFIG->memcache_servers',
    'memcache:versiontoolow' => 'Memcache requiere al menos la versi&oacute;n %s para su funcionamiento, se est&aacute; ejecutando la versi&oacute;n %s',
    'memcache:noaddserver' => 'Soporte para m&uacute;ltiples servidores deshabilitados, debe actualizar la librer&iacute;a memcache PECL',
    'deprecatedfunction' => 'Precauci&oacute;n: Este c&oacute;digo utiliza la funci&oacute;n obsoleta \'%s\' que no es compatible con esta versi&oacute;n de Elgg',
    'pageownerunavailable' => 'Precauci&oacute;n: El administrador de p&aacute;gina %d no se encuentra accesible!',
    'viewfailure' => 'Ocurri&oacute; un error interno en la vista %s',
    'changebookmark' => 'Por favor modifique su &iacute;ndice para esta vista',
    /**
     * API
     */
    'system.api.list' => "Lista todas las llamadas API disponibles en el sistema",
    'auth.gettoken' => "Esta llamada API le permite al usuario obtener un token de autenticaci&oacute;n el cual puede ser utilizado para autenticar futuras llamadas a la API. Enviarlo como par&aacute;metro auth_token",
    /**
     * User details
     */
    'name' => "Nombre",
    'email' => "Direcci&oacute;n de Email",
    'username' => "Nombre de usuario",
    'loginusername' => "Nombre de usuario o Email",
    'password' => "Contrase&ntilde;a",
    'passwordagain' => "Contrase&ntilde;a (nuevamente, para verificaci&oacute;n)",
    'admin_option' => "Hacer administrador a este usuario?",
    /**
     * Access
     */
    'PRIVATE' => "Privado",
    'LOGGED_IN' => "Usuarios logueados",
    'PUBLIC' => 'Todos',
    'access:friends:label' => "Contactos",
    'access' => "Acceso",
    /**
     * Dashboard and widgets
     */
    'dashboard' => "Panel de control",
    'dashboard:nowidgets' => "Su panel de control le permite seguir la actividad y el contenido que le interesan de este sitio",
    'widgets:add' => 'Agregar widget',
    'widgets:add:description' => "Haga click en el bot&oacute;n de alg&uacute;n widget para agregarlo a la p&aacute;gina",
    'widgets:position:fixed' => '(Posici&oacute;n fija en la p&aacute;gina)',
    'widget:unavailable' => 'Ya agreg&oacute; este widget',
    'widget:numbertodisplay' => 'Cantidad de elementos para mostrar',
    'widget:delete' => 'Quitar %s',
    'widget:edit' => 'Personalizar este widget',
    'widgets' => "Widgets",
    'widget' => "Widget",
    'item:object:widget' => "Widgets",
    'widgets:save:success' => "El widget se guard&oacute; correctamente",
    'widgets:save:failure' => "No se pudo guardar el widget, por favor intente nuevamente",
    'widgets:add:success' => "Se agreg&oacute; correctamente el widget",
    'widgets:add:failure' => "No se pudo a&ntilde;adir el widget",
    'widgets:move:failure' => "No se pudo guardar la nueva posici&oacute;n del widget",
    'widgets:remove:failure' => "No se pudo quitar el widget",
    /**
     * Groups
     */
    'group' => "Grupo",
    'item:group' => "Grupos",
    /**
     * Users
     */
    'user' => "Usuario",
    'item:user' => "Usuarios",
    /**
     * Friends
     */
    'friends' => "Contactos",
    'friends:yours' => "Tus contactos",
    'friends:owned' => "Contacto de %s",
    'friend:add' => "Nuevo contacto",
    'friend:remove' => "Quitar contacto",
    'friends:add:successful' => "Se ha a&ntilde;adido a %s como contacto",
    'friends:add:failure' => "No se pudo a&ntilde;adir a %s como contacto. Por favor intente nuevamente",
    'friends:remove:successful' => "Se quit&oacute; a %s de sus contactos",
    'friends:remove:failure' => "No se pudo quitar a %s de sus contactos. Por favor intente nuevamente",
    'friends:none' => "Este usuario no tiene contactos a&uacute;n",
    'friends:none:you' => "No tienes contactos a&uacute;n",
    'friends:none:found' => "No se encontraron contactos",
    'friends:of:none' => "Nadie ha agragado a este usuario como contacto a&uacute;n",
    'friends:of:none:you' => "Nadie te ha agragado como contacto a&uacute;n. Comienza a a&ntilde;adir contenido y completar tu perfil para que la gente te encuentre!",
    'friends:of:owned' => "Amigos de %s",
    'friends:of' => "Contactos de",
    'friends:collections' => "Colecciones de contactos",
    'collections:add' => "Nueva colecci&oacute;n",
    'friends:collections:add' => "Nueva colecci&oacute;n de contactos",
    'friends:addfriends' => "Seleccionar contactos",
    'friends:collectionname' => "Nombre de la colecci&oacute;n",
    'friends:collectionfriends' => "Contactos en la colecci&oacute;n",
    'friends:collectionedit' => "Editar esta colecci&oacute;n",
    'friends:nocollections' => "No tienes colecciones a&uacute;n",
    'friends:collectiondeleted' => "La colecci&oacute;n ha sido eliminada",
    'friends:collectiondeletefailed' => "No se puede eliminar la colecci&oacute;n",
    'friends:collectionadded' => "La colecci&oacute;n se ha creado correctamente",
    'friends:nocollectionname' => "Debes ponerle un nombre a la colecci&oacute;n antes de crearla",
    'friends:collections:members' => "Miembros de esta colecci&oacute;n",
    'friends:collections:edit' => "Editar colecci&oacute;n",
    'friends:collections:edited' => "Colecci&oacute;n guardada",
    'friends:collection:edit_failed' => 'No se pudo guardar la colecci&oacute;n',
    'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'avatar' => 'Imagen de perfil',
    'avatar:create' => 'Cree su imagen de perfil',
    'avatar:edit' => 'Editar imagen de perfil',
    'avatar:preview' => 'Previsualizar',
    'avatar:upload' => 'Subir nueva imagen de perfil',
    'avatar:current' => 'Imagen de perfil actual',
    'avatar:crop:title' => 'Herramienta de recorte de imagen de perfil',
    'avatar:upload:instructions' => "Su imagen de perfil se mostrar&aacute; en la red. Podr&aacute; modificarla siempre que lo desee (Formatos de archivo aceptados: GIF, JPG o PNG)",
    'avatar:create:instructions' => 'Haga click y arrastre un cuadrado debajo para seleccionar el recorte de la imagen. Aparecer&aacute; una previsualizaci&oacute;n en la caja de la deracha. Cuando est&eacute; conforme con la previsualizaci&oacute;n, haga click en \'Crear imagen de perfil\'. La versi&oacute;n recortada ser&aacute; la que se utilice para mostrar en la red',
    'avatar:upload:success' => 'Imagen de perfil subida correctamente',
    'avatar:upload:fail' => 'Fall&oacute; la subida de la imagen de perfil',
    'avatar:resize:fail' => 'Error al modificar el tama&ntilde;o de la imagen de perfil',
    'avatar:crop:success' => 'Recorte de la imagen de perfil finalizado correctamente',
    'avatar:crop:fail' => 'Error en el recorte de la imagen de perfil',
    'profile:edit' => 'Editar perfil',
    'profile:aboutme' => "Sobre mi",
    'profile:description' => "Sobre mi",
    'profile:briefdescription' => "Descripci&oacute;n corta",
    'profile:location' => "Ubicaci&oacute;n",
    'profile:skills' => "Habilidades",
    'profile:interests' => "Intereses",
    'profile:contactemail' => "Email de contacto",
    'profile:phone' => "Tel&eacute;fono",
    'profile:mobile' => "M&oacute;vil",
    'profile:website' => "Sitio Web",
    'profile:twitter' => "Usuario de Twitter",
    'profile:saved' => "Su perfil ha sido guardado correctamente",
    'admin:appearance:profile_fields' => 'Editar campos de perfil',
    'profile:edit:default' => 'Editar campos de perfil',
    'profile:label' => "Etiqueta de perfil",
    'profile:type' => "Tipo de perfil",
    'profile:editdefault:delete:fail' => 'Error al eliminar item de perfil por defecto',
    'profile:editdefault:delete:success' => 'Item de perfil por defecto eliminado!',
    'profile:defaultprofile:reset' => 'Reinicio de perfil de sistema por defecto',
    'profile:resetdefault' => 'Reiniciar perfil de sistema por defecto',
    'profile:explainchangefields' => "Puede reemplazar los campos de perfil existentes con sus propios utilizando el formulario de abajo. \n\n Ingrese un nuevo nombre de campo de perfil, por ejemplo, 'Equipo favorito', luego seleccione el tipo de campo (eg. texto, url, tags), y haga click en el bot&oacute;n de 'Agregar'. Para re ordenar los campos arrastre el control al lado de la etiqueta del campo. Para editar la etiqueta del campo haga click en el texto de la etiqueta para volverlo editable. \n\n Puede volver a la disposici&oacute;n original del perfil en cualquier momento, pero perder&aacute; la informaci&oacute;n creada en los campos personalizados del perfil hasta el momento",
    'profile:editdefault:success' => 'Elemento agregado al perfil por defecto correctamente',
    'profile:editdefault:fail' => 'No se pudo guardar el perfil por defecto',
    /**
     * Feeds
     */
    'feed:rss' => 'Canal RSS para esta p&aacute;gina',
    /**
     * Links
     */
    'link:view' => 'Ver enlace',
    'link:view:all' => 'Ver todos',
    /**
     * River
     */
    'river' => "River",
    'river:friend:user:default' => "%s ahora es amigo de %s",
    'river:update:user:avatar' => '%s tiene una nueva imagen de perfil',
    'river:noaccess' => 'No posee permisos para visualizar este elemento',
    'river:posted:generic' => '%s publicado',
    'riveritem:single:user' => 'un usuario',
    'riveritem:plural:user' => 'algunos usuarios',
    'river:ingroup' => 'en el grupo %s',
    'river:none' => 'Sin actividad',
    'river:widget:title' => "Actividad",
    'river:widget:description' => "Mostrar la &uacute;ltima actividad",
    'river:widget:type' => "Tipo de actividad",
    'river:widgets:friends' => 'Actividad de amigos',
    'river:widgets:all' => 'Toda la actividad del sitio',
    /**
     * Notifications
     */
    'notifications:usersettings' => "Configuraci&oacute;n de notifiaciones",
    'notifications:methods' => "Por favor, indique los m&eacute;todos que desea habilitar",
    'notifications:usersettings:save:ok' => "Su configuraci&oacute;n de notificaciones se guard&oacute; correctamente",
    'notifications:usersettings:save:fail' => "Ocurri&oacute; un error al guardar la configuraci&oacute;n de notificaciones",
    'user.notification.get' => 'Retornar la configuraci&oacute;n de notificaciones para un usuario dado',
    'user.notification.set' => 'Establecer la configuraci&oacute;n de notificaciones para un usuario dado',
    /**
     * Search
     */
    'search' => "Buscar",
    'searchtitle' => "Buscar: %s",
    'users:searchtitle' => "Buscar para usuarios: %s",
    'groups:searchtitle' => "Buscar para grupos: %s",
    'advancedsearchtitle' => "%s con coincidencias en resultados %s",
    'notfound' => "No se encontraron resultados",
    'next' => "Siguiente",
    'previous' => "Anterior",
    'viewtype:change' => "Modificar tipo de lista",
    'viewtype:list' => "Vista de lista",
    'viewtype:gallery' => "Galer&iacute;a",
    'tag:search:startblurb' => "Items con tags que coincidan con '%s':",
    'user:search:startblurb' => "Usuarios que coincidan con '%s':",
    'user:search:finishblurb' => "Click aqu&iacute; para ver mas",
    'group:search:startblurb' => "Grupos que coinciden con '%s':",
    'group:search:finishblurb' => "Click aqu&iacute; para ver mas",
    'search:go' => 'Ir',
    'userpicker:only_friends' => 'S&oacute;lo amigos',
    /**
     * Account
     */
    'account' => "Cuenta",
    'settings' => "Configuraci&oacute;n",
    'tools' => "Herramientas",
    'register' => "Registrarse",
    'registerok' => "Se registr&oacute; correctamente para %s",
    'registerbad' => "No se pudo registrar debido a un error desconocido",
    'registerdisabled' => "La registraci&oacute;n se deshabilit&oacute; por el administrador del sistema",
    'registration:notemail' => 'No ha ingresado una direcci&oacute;n de Email v&aacute;lida',
    'registration:userexists' => 'El nombre de usuario ya existe',
    'registration:usernametooshort' => 'El nombre de usuario debe tener un m&iacute;nimo de %u caracteres',
    'registration:passwordtooshort' => 'La contrase&ntilde;a debe tener un m&iacute;nimo de %u caracteres',
    'registration:dupeemail' => 'Ya se encuentra registrada la direcci&oacute;n de Email',
    'registration:invalidchars' => 'Lo sentimos, su nombre de usuario posee los caracteres inv&aacute;lidos: %s. Estos son todos los caracteres que se encuentran invalidados: %s',
    'registration:emailnotvalid' => 'Lo sentimos, la direcci&oacute;n de email que ha ingresado es inv&aacute;lida en el sistema',
    'registration:passwordnotvalid' => 'Lo sentimos, la contrase&ntilde;a que ha ingresado es inv&aacute;lida en el sistema',
    'registration:usernamenotvalid' => 'Lo sentimos, el nombre de usuario que ha ingresado es inv&aacute;lida en el sistema',
    'adduser' => "Nuevo usuario",
    'adduser:ok' => "Se agreg&oacute; correctamente un nuevo usuario",
    'adduser:bad' => "No se pudo agregar el nuevo usuario",
    'user:set:name' => "Configuraci&oacute;n del nombre de cuenta",
    'user:name:label' => "Mi nombre para mostrar",
    'user:name:success' => "Se modific&oacute; correctamente su nombre en la red",
    'user:name:fail' => "No se pudo modificar su nombre en la red. Por favor, aseg&uacute;rese de que no es demasiado largo e intente nuevamente",
    'user:set:password' => "Contrase&ntilde;a de la cuenta",
    'user:current_password:label' => 'Contrase&ntilde;a actual',
    'user:password:label' => "Nueva contrase&ntilde;a",
    'user:password2:label' => "Confirmar nueva contrase&ntilde;a",
    'user:password:success' => "Contrase&ntilde;a modificada",
    'user:password:fail' => "No se pudo modificar la contrase&ntilde;a en  la red",
    'user:password:fail:notsame' => "Las dos contrase&ntilde;as no coinciden!",
    'user:password:fail:tooshort' => "La contrase&ntilde;a es demasiado corta!",
    'user:password:fail:incorrect_current_password' => 'La contrase&ntilde;a actual ingresada es incorrecta',
    'user:resetpassword:unknown_user' => 'Usuario inv&aacute;lido',
    'user:resetpassword:reset_password_confirm' => 'Al modificar la contrase&ntilde;a se le enviar&aacute; la nueva a la direcci&oacute;n de Email registrada',
    'user:set:language' => "Configuraci&oacute;n de lenguaje",
    'user:language:label' => "Su lenguaje",
    'user:language:success' => "Se actualiz&oacute; su configuraci&oacute;n de lenguaje",
    'user:language:fail' => "No se pudo actualizar su configuraci&oacute;n de lenguaje",
    'user:username:notfound' => 'No se encuentra el usuario %s',
    'user:password:lost' => 'Olvid&eacute; mi contrase&ntilde;a',
    'user:password:resetreq:success' => 'Solicitud de nueva contrase&ntilde;a confirmada, se le ha enviado un Email',
    'user:password:resetreq:fail' => 'No se pudo solicitar una nueva contrase&ntilde;a',
    'user:password:text' => 'Para solicitar una nueva contrase&ntilde;a ingrese su nombre de usuario y presione el bot&oacute;n debajo',
    'user:persistent' => 'Recordarme',
    'walled_garden:welcome' => 'Bienvenido a',
    /**
     * Administration
     */
    'menu:page:header:administer' => 'Administrar',
    'menu:page:header:configure' => 'Configurar',
    'menu:page:header:develop' => 'Desarrollar',
    'menu:page:header:default' => 'Otro',
    'admin:view_site' => 'Ver sitio',
    'admin:loggedin' => 'Sesi&oacute;n iniciada como %s',
    'admin:menu' => 'Men&uacute;',
    'admin:configuration:success' => "Su configuraci&oacute;n ha sido guardada",
    'admin:configuration:fail' => "No se pudo guardar su configuraci&oacute;n",
    'admin:unknown_section' => 'Secci&oacute;n de administraci&oacute;n inv&aacute;lida',
    'admin' => "Administraci&oacute;n",
    'admin:description' => "El panel de administraci&oacute;n le permite organizar todos los aspectos del sistema, desde la gesti&oacute;n de usuarios hasta el comportamiento de los plugins. Seleccione una opci&oacute;n debajo para comenzar",
    'admin:statistics' => "Estad&iacute;sticas",
    'admin:statistics:overview' => 'Resumen',
    'admin:appearance' => 'Apariencia',
    'admin:utilities' => 'Utilidades',
    'admin:users' => "Usuarios",
    'admin:users:online' => 'Conectados actualmente',
    'admin:users:newest' => 'Los mas nuevos',
    'admin:users:add' => 'Agregar Nuevo Usuario',
    'admin:users:description' => "Este panel de administraci&oacute;n le permite gestionar la configuraci&oacute;n de usuarios de la red. Seleccione una opci&oacute;n debajo para comenzar",
    'admin:users:adduser:label' => "Click aqu&iacute; para agregar un nuevo usuario..",
    'admin:users:opt:linktext' => "Configurar usuarios..",
    'admin:users:opt:description' => "Configurar usuarios e informaci&oacute;n de cuentas",
    'admin:users:find' => 'Buscar',
    'admin:settings' => 'Configuraci&oacute;n',
    'admin:settings:basic' => 'Configuraci&oacute;n B&aacute;sica',
    'admin:settings:advanced' => 'Configuraci&oacute;n Avanzada',
    'admin:site:description' => "Este panel de administraci&oacute;n le permite gestionar la configuraci&oacute;n global de la red. Selecciona una opci&oacute;n debajo para comenzar",
    'admin:site:opt:linktext' => "Configurar sitio..",
    'admin:site:access:warning' => "Las modificaciones en el control de accesos s&oacute;lo tendr&aacute; impacto en los accesos futuros",
    'admin:dashboard' => 'Panel de control',
    'admin:widget:online_users' => 'Usuarios conectados',
    'admin:widget:online_users:help' => 'Lista los usuarios conectados actualmente en la red',
    'admin:widget:new_users' => 'Usuarios Nuevos',
    'admin:widget:new_users:help' => 'Lista los usuarios m&aacute;s nuevos',
    'admin:widget:content_stats' => 'Estad&iacute;sticas de contenido',
    'admin:widget:content_stats:help' => 'Seguimiento del contenido creado por los usuarios de la red',
    'widget:content_stats:type' => 'Tipo de contenido',
    'widget:content_stats:number' => 'N&uacute;mero',
    'admin:widget:admin_welcome' => 'Bienvenido',
    'admin:widget:admin_welcome:help' => "Esta es el &aacute;rea de administraci&oacute;n",
    'admin:widget:admin_welcome:intro' =>
    'Bienvenido! Se encuentra viendo el panel de control de la administraci&oacute;n. Es &uacute;til para visualizar las novedades en la red',
    'admin:widget:admin_welcome:admin_overview' =>
    "La navegaci&oacute;n para el &aacute;rea de administraci&oacute;n se encuentra en el men&uacute; de la derecha. El mismo se organiza en"
    . " tres secciones:
	<dl>
		<dt>Administrar</dt><dd>Tareas diarias como monitorear contenido reportado, verificar qui&eacute;n se encuentra conectado y visualizar estad&iacute;sticas.</dd>
		<dt>Configurar</dt><dd>Tareas ocasionales como establecer el nombre de la red social o activar y desactivar plugins.</dd>
		<dt>Desarrollar</dt><dd>Para desarrolladores quienes construyen plugins o dise&ntilde;an temas personalizados. (Requiere el plugin de desarrollador.)</dd>
	</dl>
	",
    // argh, this is ugly
    'admin:widget:admin_welcome:outro' => '<br />Aseg&uacute;rese de verificar los recursos disponibles en los enlaces del pi&eacute; de p&aacute;gina y gracias por utilizar Elgg!',
    'admin:footer:faq' => 'FAQs de Administraci&oacute;n',
    'admin:footer:manual' => 'Manual de Administraci&oacute;n',
    'admin:footer:community_forums' => 'Foros de la Comunidad Elgg',
    'admin:footer:blog' => 'Blog Elgg',
    'admin:plugins:category:all' => 'Todos los plugins',
    'admin:plugins:category:active' => 'Plugins activos',
    'admin:plugins:category:inactive' => 'Plugins inactivos',
    'admin:plugins:category:admin' => 'Admin',
    'admin:plugins:category:bundled' => 'Inclu&iacute;do',
    'admin:plugins:category:content' => 'Contenido',
    'admin:plugins:category:development' => 'Desarrollo',
    'admin:plugins:category:enhancement' => 'Mejoras',
    'admin:plugins:category:api' => 'Servicio/API',
    'admin:plugins:category:communication' => 'Comunicaci&oacute;n',
    'admin:plugins:category:security' => 'Seguridad and Spam',
    'admin:plugins:category:social' => 'Social',
    'admin:plugins:category:multimedia' => 'Multimedia',
    'admin:plugins:category:theme' => 'Temas',
    'admin:plugins:category:widget' => 'Widgets',
    'admin:plugins:sort:priority' => 'Prioridad',
    'admin:plugins:sort:alpha' => 'Alfab&eacute;tico',
    'admin:plugins:sort:date' => 'Los m&aacute;s nuevos',
    'admin:plugins:markdown:unknown_plugin' => 'Plugin desconocido',
    'admin:plugins:markdown:unknown_file' => 'Archivo desconocido',
    'admin:notices:could_not_delete' => 'Notificaci&oacute;n de no se pudo eliminar',
    'admin:options' => 'Opciones de Admin',
    /**
     * Plugins
     */
    'plugins:settings:save:ok' => "Configuraci&oacute;n para el plugin %s guardada correctamente",
    'plugins:settings:save:fail' => "Ocurri&oacute; un error al intentar guardar la configuraci&oacute;n para el plugin %s",
    'plugins:usersettings:save:ok' => "Configuraci&oacute;n del usuario para el plugin %s guardada",
    'plugins:usersettings:save:fail' => "Ocurri&oacute; un error al intentar guardar la configuraci&oacute;n del usuario para el plugin %s",
    'item:object:plugin' => 'Plugins',
    'admin:plugins' => "Plugins",
    'admin:plugins:activate_all' => 'Activar todos',
    'admin:plugins:deactivate_all' => 'Desactivar todos',
    'admin:plugins:activate' => 'Activar',
    'admin:plugins:deactivate' => 'Desactivar',
    'admin:plugins:description' => "Este panel le permite controlar y configurar las herramientas instaladas en su sitio",
    'admin:plugins:opt:linktext' => "Configurar herramientas..",
    'admin:plugins:opt:description' => "Configurar las herramientas instaladas en el sitio. ",
    'admin:plugins:label:author' => "Autor",
    'admin:plugins:label:copyright' => "Copyright",
    'admin:plugins:label:categories' => 'Categor&iacute;as',
    'admin:plugins:label:licence' => "Licencia",
    'admin:plugins:label:website' => "URL",
    'admin:plugins:label:moreinfo' => 'mas informaci&oacute;n',
    'admin:plugins:label:version' => 'Versi&oacute;n',
    'admin:plugins:label:location' => 'Ubicacion',
    'admin:plugins:label:dependencies' => 'Dependencias',
    'admin:plugins:warning:elgg_version_unknown' => 'Este plugin utiliza un archivo de manifiesto obsoleto y no especifica una versi&oacute;n de Elgg compatibla. Es muy probable que no funcione!',
    'admin:plugins:warning:unmet_dependencies' => 'Este plugin tiene dependencias desconocidas y no se activar&aacute;. Consulte las dependencias debajo de mas informaci&oacute;n',
    'admin:plugins:warning:invalid' => '%s no es un plugin Elgg v&aacute;lido. Visite <a href="http://docs.elgg.org/Invalid_Plugin">la Documentaci&oacute;n Elgg</a> para consejos de soluci&oacute;n de problemas',
    'admin:plugins:cannot_activate' => 'no se puede activar',
    'admin:plugins:set_priority:yes' => "Reordenar %s",
    'admin:plugins:set_priority:no' => "No se puede reordenar %s",
    'admin:plugins:deactivate:yes' => "Desactivar %s",
    'admin:plugins:deactivate:no' => "No se puede desactivar %s",
    'admin:plugins:activate:yes' => "Activado %s",
    'admin:plugins:activate:no' => "No se puede activar %s",
    'admin:plugins:categories:all' => 'Todas las categor&iacute;as',
    'admin:plugins:plugin_website' => 'Sitio del plugin',
    'admin:plugins:author' => '%s',
    'admin:plugins:version' => 'Versi&oacute;n %s',
    'admin:plugins:simple' => 'Simple',
    'admin:plugins:advanced' => 'Avanzado',
    'admin:plugin_settings' => 'Configuraci&oacute;n del plugin',
    'admin:plugins:simple_simple_fail' => 'No se pudo guardar la configuraci&oacute;n',
    'admin:plugins:simple_simple_success' => 'Configuraci&oacute;n guardada',
    'admin:plugins:simple:cannot_activate' => 'No se puede activar el plugin. Verifique el &aacute;rea de administraci&oacute;n avanzada del plugin para mas informaci&oacute;n',
    'admin:plugins:warning:unmet_dependencies_active' => 'El plugin se ecnuentra activo pero posee dependencias desconocidas. Puede que se encuentren problemas en su funcionamiento. Vea "mas informaci&oacute;n" debajo para detalles',
    'admin:plugins:dependencies:type' => 'Tipo',
    'admin:plugins:dependencies:name' => 'Nombre',
    'admin:plugins:dependencies:expected_value' => 'Valor de Test',
    'admin:plugins:dependencies:local_value' => 'Valor Actual',
    'admin:plugins:dependencies:comment' => 'Comentario',
    'admin:statistics:description' => "Este es un resumen de las estad&iacute;sticas del sitio. Si necesita estad&iacute;sticas mas avanzadas, hay dispoinble una funcionalidad de administraci&oacute;n profesional",
    'admin:statistics:opt:description' => "Ver informaci&oacute;n estad&iacute;stica sobre usuarios y objetos en el sitio",
    'admin:statistics:opt:linktext' => "Ver estad&iacute;sticas..",
    'admin:statistics:label:basic' => "Estad&iacute;sticas b&aacute;sicas del sitio",
    'admin:statistics:label:numentities' => "Entidades del sitio",
    'admin:statistics:label:numusers' => "Cantidad de usuarios",
    'admin:statistics:label:numonline' => "Cantidad de usuarios conectados",
    'admin:statistics:label:onlineusers' => "Usuarios conectados en este momento",
    'admin:statistics:label:version' => "Versi&oacute;n de Elgg",
    'admin:statistics:label:version:release' => "Release",
    'admin:statistics:label:version:version' => "Versi&oacute;n",
    'admin:statistics:groups' => "Actividad grupos",
    'admin:user:label:search' => "Encontrar usuarios:",
    'admin:user:label:searchbutton' => "Buscar",
    'admin:user:ban:no' => "No puede bloquear al usuario",
    'admin:user:ban:yes' => "Usuario bloqueado",
    'admin:user:self:ban:no' => "No puede bloquearse a usted mismo",
    'admin:user:unban:no' => "No puede desbloquear al usuario",
    'admin:user:unban:yes' => "Usuario desbloqueado",
    'admin:user:delete:no' => "No puede eliminar al usuario",
    'admin:user:delete:yes' => "El usuario %s ha sido eliminado",
    'admin:user:self:delete:no' => "No puede eliminarse a usted mismo",
    'admin:user:resetpassword:yes' => "Contrase&ntilde;a restablecida, se notifica al usuario",
    'admin:user:resetpassword:no' => "No se puede restablecer la contrase&ntilde;a",
    'admin:user:makeadmin:yes' => "El usuario ahora es un administrador",
    'admin:user:makeadmin:no' => "No se pudo establecer al usuario como administrador",
    'admin:user:removeadmin:yes' => "El usuario ya no es administrador",
    'admin:user:removeadmin:no' => "No se pueden quitar los privilegios de administrador de este usuario",
    'admin:user:self:removeadmin:no' => "No puede quitar sus privilegios de administrador",
    'admin:appearance:menu_items' => 'Elementos del Men&uacute;',
    'admin:menu_items:configure' => 'Configurar los elementos del men&uacute; principal',
    'admin:menu_items:description' => 'Seleccione qu&eacute; elementos del men&uacute; desea mostrar como enlaces favoritos. Los items no utilizados se encontrar&aacute;n en el item "Mas" al final de la lista',
    'admin:menu_items:hide_toolbar_entries' => 'Quitar enlaces del men&uacute; de la barra de herramientas?',
    'admin:menu_items:saved' => 'Elementos del men&uacute; guardados',
    'admin:add_menu_item' => 'Agregar un elemento del men&uacute; personalizado',
    'admin:add_menu_item:description' => 'Complete el nombre para mostrar y la direcci&oacute;n url para agregar un elemento de men&uacute; personalizado',
    'admin:appearance:default_widgets' => 'Widgets por defecto',
    'admin:default_widgets:unknown_type' => 'Tipo de widget desconocido',
    'admin:default_widgets:instructions' => 'Agregar, quitar, mover y configurar los widgets por defecto en la p&aacute;gina de widget seleccionada'
    . ' Estos cambios s&oacute;lo tendr&aacute;n impacto en los nuevos usuarios',
    /**
     * User settings
     */
    'usersettings:description' => "El panel de configuraci&oacute;n permite parametrizar sus preferencias personales, desde la administraci&oacute;n de usuarios al comportamiento de los plugins. Seleccione una opci&oacute;n debajo para comenzar",
    'usersettings:statistics' => "Sus estad&iacute;sticas",
    'usersettings:statistics:opt:description' => "Ver informaci&oacute;n estad&iacute;stica de usuarios y objectos en la red",
    'usersettings:statistics:opt:linktext' => "Estad&iacute;sticas de la cuenta",
    'usersettings:user' => "Sus preferencias",
    'usersettings:user:opt:description' => "Esto le permite establecer sus preferencias",
    'usersettings:user:opt:linktext' => "Modificar sus preferencias",
    'usersettings:plugins' => "Herramientas",
    'usersettings:plugins:opt:description' => "Preferencias de Configuraci&oacute;n para sus herramientas activas",
    'usersettings:plugins:opt:linktext' => "Configure sus herramientas",
    'usersettings:plugins:description' => "Este panel le permite establecer sus preferencias personales para las herramientas habilitadas por el administrador del sistema",
    'usersettings:statistics:label:numentities' => "Su contenido",
    'usersettings:statistics:yourdetails' => "Sus detalles",
    'usersettings:statistics:label:name' => "Nombre completo",
    'usersettings:statistics:label:email' => "Email",
    'usersettings:statistics:label:membersince' => "Membro desde",
    'usersettings:statistics:label:lastlogin' => "&uacute;ltimo acceso",
    /**
     * Activity river
     */
    'river:all' => 'Actividad de toda la red',
    'river:mine' => 'Mi Actividad',
    'river:friends' => 'Actividad de Amigos',
    'river:select' => 'Mostrar %s',
    'river:comments:more' => '+%u m&aacute;s',
    'river:generic_comment' => 'comentado en %s %s',
    'friends:widget:description' => "Muestra algunos de tus amigos",
    'friends:num_display' => "Cantidad de amigos a mostrar",
    'friends:icon_size' => "Tama&ntilde;o del &iacute;cono",
    'friends:tiny' => "peque&ntilde;o",
    'friends:small' => "chico",
    /**
     * Generic action words
     */
    'save' => "Guardar",
    'reset' => 'Reiniciar',
    'publish' => "Publicar",
    'cancel' => "Cancelar",
    'saving' => "Guardando..",
    'update' => "Actualizar",
    'preview' => "Previsualizar",
    'edit' => "Editar",
    'delete' => "Eliminar",
    'accept' => "Aceptar",
    'load' => "Cargar",
    'upload' => "Subir",
    'ban' => "Bloquear",
    'unban' => "Desbloquar",
    'banned' => "Bloqueado",
    'enable' => "Habilitar",
    'disable' => "Deshabilitar",
    'request' => "Solicitud",
    'complete' => "Completa",
    'open' => 'Abrir',
    'close' => 'Cerrar',
    'reply' => "Responder",
    'more' => 'M&aacute;s',
    'comments' => 'Comentarios',
    'import' => 'Importar',
    'export' => 'Exportar',
    'untitled' => 'Sin T&iacute;tulo',
    'help' => 'Ayuda',
    'send' => 'Enviar',
    'post' => 'Publicar',
    'submit' => 'Enviar',
    'comment' => 'Comentar',
    'upgrade' => 'Actualizar',
    'sort' => 'Ordenar',
    'filter' => 'Filtrar',
    'site' => 'Sitio',
    'activity' => 'Actividad',
    'members' => 'Miembros',
    'up' => 'Arriba',
    'down' => 'Abajo',
    'top' => 'Primero',
    'bottom' => 'Ultimo',
    'more' => 'm&aacute;s',
    'invite' => "Invitar",
    'resetpassword' => "Restablecer contrase&ntilde;a",
    'makeadmin' => "Hacer administrador",
    'removeadmin' => "Quitar administrador",
    'option:yes' => "Si",
    'option:no' => "No",
    'unknown' => 'Desconocido',
    'active' => 'Activo',
    'total' => 'Total',
    'learnmore' => "Click aqu&iacute; para ver m&aacute;s",
    'content' => "contenido",
    'content:latest' => '&uacute;ltima actividad',
    'content:latest:blurb' => 'Alternativamente, click aqu&iacute; para ver el &uacute;ltimo contenido en toda la red',
    'link:text' => 'ver link',
    /**
     * Generic questions
     */
    'question:areyousure' => '¿Estás seguro?',
    /**
     * Generic data words
     */
    'title' => "T&iacute;tulo",
    'description' => "Descripci&oacute;n",
    'tags' => "Tags",
    'spotlight' => "Enfoque",
    'all' => "Todo",
    'mine' => "M&iacute;o",
    'by' => 'por',
    'none' => 'nada',
    'annotations' => "Anotaciones",
    'relationships' => "Relaciones",
    'metadata' => "Metadata",
    'tagcloud' => "Nube de tags",
    'tagcloud:allsitetags' => "Tags de todo el sitio",
    /**
     * Entity actions
     */
    'edit:this' => 'Editar',
    'delete:this' => 'Eliminar',
    'comment:this' => 'Comentar',
    /**
     * Input / output strings
     */
    'deleteconfirm' => "Est&aacute; seguro de eliminar este item?",
    'fileexists' => "El archivo ya se ha subido. Para reemplazarlo, seleccione:",
    /**
     * User add
     */
    'useradd:subject' => 'Cuenta de usuario creada',
    'useradd:body' => '
%s,

Su cuenta de usuario ha sido creada en %s. Para iniciar sesi&oacute;n visite:

%s

e inicie sesi&oacute;n con las siguientes credenciales:

Username: %s
Password: %s

Una vez autenticado, le recomendamos que modifique su contrase&ntilde;a.
',
    /**
     * System messages
     * */
    'systemmessages:dismiss' => "click para cerrar",
    /**
     * Import / export
     */
    'importsuccess' => "Importaci&oacute;n exitosa",
    'importfail' => "Error al importar datos de OpenDD",
    /**
     * Time
     */
    'friendlytime:justnow' => "ahora",
    'friendlytime:minutes' => "hace %s minutos",
    'friendlytime:minutes:singular' => "hace un minuto",
    'friendlytime:hours' => "hace %s horas",
    'friendlytime:hours:singular' => "hace una hora",
    'friendlytime:days' => "hace %s d&iacute;as",
    'friendlytime:days:singular' => "ayer",
    'friendlytime:date_format' => 'j F Y @ g:ia',
    'date:month:01' => 'Enero %s',
    'date:month:02' => 'Febrero %s',
    'date:month:03' => 'Marzo %s',
    'date:month:04' => 'Abril %s',
    'date:month:05' => 'Mayo %s',
    'date:month:06' => 'Junio %s',
    'date:month:07' => 'Julio %s',
    'date:month:08' => 'Agosto %s',
    'date:month:09' => 'Septiembre %s',
    'date:month:10' => 'Octubre %s',
    'date:month:11' => 'Noviembre %s',
    'date:month:12' => 'Diciembre %s',
    /**
     * System settings
     */
    'installation:sitename' => "El nombre del sitio:",
    'installation:sitedescription' => "Breve descripci&oacute;n del sitio (opcional):",
    'installation:wwwroot' => "URL del sitio:",
    'installation:path' => "El path completo a la instalaci&oacute;n de Elgg:",
    'installation:dataroot' => "El path completo al directorio de datos:",
    'installation:dataroot:warning' => "Debe crear este directorio manualmente. Debe encontrarse en un directorio diferente al de la instalaci&oacute;n de Elgg",
    'installation:sitepermissions' => "Permisos de acceso por defecto:",
    'installation:language' => "Lenguaje por defecto para el sitio:",
    'installation:debug' => "El modo Debug provee informaci&oacute;n extra que puede utilizarse para evaluar eventualidades. Puede enlentecer el funcionamiento del sistema y debe utilizarse s&oacute;lo cuando se detectan problemas:",
    'installation:debug:none' => 'Desactivar modo Debug (recomendado)',
    'installation:debug:error' => 'Mostrar s&oacute;lo errores cr&iacute;ticos',
    'installation:debug:warning' => 'Mostrar s&oacute;lo alertas cr&iacute;ticas',
    'installation:debug:notice' => 'Mostrar todos los errores, alertas e informaciones de eventos',
    // Walled Garden support
    'installation:registration:description' => 'La registraci&oacute;n de usuarios se encuentra habilitada por defecto. Puede deshabilitarla para impedir que nuevos usuarios se registren por s&iacute; mismos',
    'installation:registration:label' => 'Permitir el registro de nuevos usuarios',
    'installation:walled_garden:description' => 'Habilitar al sitio para ejecutarse como una red privada. Esto impedir&aacute; a usuarios no registrados visualizar cualquier p&aacute;gina del sitio, exceptuando las establecidas como p&uacute;blicas',
    'installation:walled_garden:label' => 'Restringir p&aacute;ginas a usuarios registrados',
    'installation:httpslogin' => "Habilitar esta opci&oacute;n para que los usuarios se autentiquen mediante HTTPS. Necesitar&aacute; habilitar HTTPS en el server tambi&eacute;n para que esto funcione",
    'installation:httpslogin:label' => "Habilitar autenticaci&oacute;n HTTPS",
    'installation:view' => "Ingrese la vista que se visualizar&aacute; por defecto en el sitio o deje esto en blanco para la vista por defecto (si tiene dudas, d&eacute;jelo por defecto):",
    'installation:siteemail' => "Direcci&oacute;n de Email del sitio (utilizada para enviar mails desde el sistema):",
    'installation:disableapi' => "Elgg provee una API para el desarrollo de servicios web de modo que aplicaciones remotas puedan interactuar con el sitio",
    'installation:disableapi:label' => "Habilitar la API de servicios web de Elgg",
    'installation:allow_user_default_access:description' => "Si se selecciona, se les permitir&aacute; a los usuarios establecer su propio nivel de acceso por defecto que puede sobreescribir los niveles de acceso del sistema",
    'installation:allow_user_default_access:label' => "Permitir el acceso por defecto de los usuarios",
    'installation:simplecache:description' => "La cache simple aumenta el rentimiento almacenando contenido est&aacute;tico, como hojas CSS y archivos JavaScript. Normalmente se desea esto activado",
    'installation:simplecache:label' => "Utilizar cache simple (recomendado)",
    'installation:viewpathcache:description' => "La cache de paths de views reduce los tiempos de carga de plugins almacenando la ubicaci&oacute;n de sus archivos",
    'installation:viewpathcache:label' => "Utilizar cache de paths de views (recomendado)",
    'upgrading' => 'Actualizando..',
    'upgrade:db' => 'La base de datos ha sido actualizada',
    'upgrade:core' => 'La instalaci&oacute;n de Elgg ha sido actualizada',
    'upgrade:unable_to_upgrade' => 'No se puede actualizar',
    'upgrade:unable_to_upgrade_info' =>
    'La instalaci&oacute;n no se puede actualizar debido a que se detectaron views antiguas
		en el directorio de views del core de Elgg. Estas views han quedado obsoletas y deben removerse
		para que Elgg funcione correctamente. Si no ha efectuado cambios al core de Elgg, puede
		simplemente eliminar el directorio de views y reemplazarlo con el del &uacute;ltimo paquete de instalaci&oacute;n
		de Elgg descargado de <a href="http://elgg.org">elgg.org</a>.<br /><br />

		Si necesita instrucciones detalladas, por favor visite la <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Documentaci&oacute;n de actualizaci&oacute;n de Elgg</a>. Si necesita asistencia, por favor acuda a los
		<a href="http://community.elgg.org/pg/groups/discussion/">Foros de Soporte de la Comunidad</a>',
    'update:twitter_api:deactivated' => 'La API de Twitter (anteriormente Twitter Service) se ha desactivado durante la actualizaci&oacute;n. Por favor act&iacute;vela manualmente si se requiere',
    'update:oauth_api:deactivated' => 'La API OAuth (anteriormente OAuth Lib) se ha desactivado durante la actualizaci&oacute;n. Por favor act&iacute;vela manualmente si se requiere',
    'deprecated:function' => '%s() ha quedado obsoleta por %s()',
    /**
     * Welcome
     */
    'welcome' => "Bienvenido",
    'welcome:user' => 'Bienvenido %s',
    /**
     * Emails
     */
    'email:settings' => "Configuraci&oacute;n de Email",
    'email:address:label' => "Direcci&oacute;n de Email",
    'email:save:success' => "Nueva direcci&oacute;n de Email guardada, se solicit&oacute; la verificaci&oacute;n",
    'email:save:fail' => "No se pudo guardar la nueva direcci&oacute;n de Email",
    'friend:newfriend:subject' => "%s te ha puesto como contacto suyo!",
    'friend:newfriend:body' => "%s te ha puesto como contacto suyo!

Para visualizar su perfil haz click aqu&iacute;:

%s

Por favor no responda a este mail",
    'email:resetpassword:subject' => "Contrase&ntilde;a restablecida!",
    'email:resetpassword:body' => "Hola %s,

Tu contrase&ntilde;a ha sido restablecida a: %s",
    'email:resetreq:subject' => "Solicitud de nueva contrase&ntilde;a",
    'email:resetreq:body' => "Hola %s,

Alguien (de la direcci&oacute;n IP %s) solicit&oacute; una nueva contrase&ntilde;a para su cuenta.

Si fuiste tu quien realiz&oacute; la solicitud haz click en el link debajo, de otra forma ignora este mail.

%s
",
    /**
     * user default access
     */
    'default_access:settings' => "Tu nivel de acceso por defecto",
    'default_access:label' => "Acceso por defecto",
    'user:default_access:success' => "El nivel de acceso por defecto ha sido guardado",
    'user:default_access:failure' => "El nivel de acceso por defecto no ha podido ser guardado",
    /**
     * XML-RPC
     */
    'xmlrpc:noinputdata' => "Ingresos de datos faltantes",
    /**
     * Comments
     */
    'comments:count' => "%s comentarios",
    'riveraction:annotation:generic_comment' => '%s coment&oacute; en %s',
    'generic_comments:add' => "Comentar",
    'generic_comments:post' => "Publicar un comentario",
    'generic_comments:text' => "Comentar",
    'generic_comments:latest' => "&uacute;ltimos comentarios",
    'generic_comment:posted' => "Se ha publicado su comentario",
    'generic_comment:deleted' => "Se ha quitado su comentario",
    'generic_comment:blank' => "Lo sentimos, debe ingresar alg&uacute;n comentario antes de poder guardarlo",
    'generic_comment:notfound' => "Lo sentimos, no se pudo encontrer el item especificado",
    'generic_comment:notdeleted' => "Lo sentimos, no se pudo eliminar el comentario",
    'generic_comment:failure' => "Ocurri&oacute; un error inesperado al intentar agregar su comentario. Por favor intente nuevamente",
    'generic_comment:none' => 'Sin comentarios',
    'generic_comment:email:subject' => 'Tienes un nuevo comentario!',
    'generic_comment:email:body' => "Tiene un nuevo comentario en el item \"%s\" de %s. Dice:


%s


Para responder o ver el item original, haga click aqu&iacute;:

%s

Para ver el prefil de %s, haga click aqu&iacute;:

%s

Por favor no responda a este correo",
    /**
     * Entities
     */
    'byline' => 'Por %s',
    'entity:default:strapline' => 'Creado %s por %s',
    'entity:default:missingsupport:popup' => 'Esta entidad no puede mostrarse correctamente. Esto puede deberse a que el soporte provisto por un plugin ya no se encuentra instalado',
    'entity:delete:success' => 'La entidad %s ha sido eliminada',
    'entity:delete:fail' => 'La entidad %s no pudo ser eliminada',
    /**
     * Action gatekeeper
     */
    'actiongatekeeper:missingfields' => 'En el formulario faltan __token o campos __ts',
    'actiongatekeeper:tokeninvalid' => "Se encontr&oacute; un error (no coincidencia de token). Esto probablemente indique que la p&aacute;gina que se encontraba utilizando haya expirado. Por favor intente nuevamente",
    'actiongatekeeper:timeerror' => 'La p&aacute;gina que se encontraba utilizando ha expirado. Por favor refresque la p&aacute;gina e intente nuevamente',
    'actiongatekeeper:pluginprevents' => 'Una extensi&oacute;n de este formulario ha evitado que se env&iacute;e el formulario',
    /**
     * Word blacklists
     */
    'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',
    /**
     * Tag labels
     */
    'tag_names:tags' => 'Tags',
    'tags:site_cloud' => 'Nube de Tags del Sitio',
    /**
     * Javascript
     */
    'js:security:token_refresh_failed' => 'No se pudo contactar a %s. Puede experimentar problemas al guardar contenidos en el sitio',
    'js:security:token_refreshed' => 'La conexi&oacute;n a %s ha sido restaurada!',
    /**
     * Languages according to ISO 639-1
     */
    "aa" => "Afar",
    "ab" => "Abkhazian",
    "af" => "Afrikaans",
    "am" => "Amharic",
    "ar" => "Arabic",
    "as" => "Assamese",
    "ay" => "Aymara",
    "az" => "Azerbaijani",
    "ba" => "Bashkir",
    "be" => "Byelorussian",
    "bg" => "Bulgarian",
    "bh" => "Bihari",
    "bi" => "Bislama",
    "bn" => "Bengali; Bangla",
    "bo" => "Tibetan",
    "br" => "Breton",
    "ca" => "Catalan",
    "co" => "Corsican",
    "cs" => "Czech",
    "cy" => "Welsh",
    "da" => "Danish",
    "de" => "German",
    "dz" => "Bhutani",
    "el" => "Greek",
    "en" => "English",
    "eo" => "Esperanto",
    "es" => "Espa&ntilde;ol",
    "et" => "Estonian",
    "eu" => "Basque",
    "fa" => "Persian",
    "fi" => "Finnish",
    "fj" => "Fiji",
    "fo" => "Faeroese",
    "fr" => "French",
    "fy" => "Frisian",
    "ga" => "Irish",
    "gd" => "Scots / Gaelic",
    "gl" => "Galician",
    "gn" => "Guarani",
    "gu" => "Gujarati",
    "he" => "Hebrew",
    "ha" => "Hausa",
    "hi" => "Hindi",
    "hr" => "Croatian",
    "hu" => "Hungarian",
    "hy" => "Armenian",
    "ia" => "Interlingua",
    "id" => "Indonesian",
    "ie" => "Interlingue",
    "ik" => "Inupiak",
    //"in" => "Indonesian",
    "is" => "Icelandic",
    "it" => "Italian",
    "iu" => "Inuktitut",
    "iw" => "Hebrew (obsolete)",
    "ja" => "Japanese",
    "ji" => "Yiddish (obsolete)",
    "jw" => "Javanese",
    "ka" => "Georgian",
    "kk" => "Kazakh",
    "kl" => "Greenlandic",
    "km" => "Cambodian",
    "kn" => "Kannada",
    "ko" => "Korean",
    "ks" => "Kashmiri",
    "ku" => "Kurdish",
    "ky" => "Kirghiz",
    "la" => "Latin",
    "ln" => "Lingala",
    "lo" => "Laothian",
    "lt" => "Lithuanian",
    "lv" => "Latvian/Lettish",
    "mg" => "Malagasy",
    "mi" => "Maori",
    "mk" => "Macedonian",
    "ml" => "Malayalam",
    "mn" => "Mongolian",
    "mo" => "Moldavian",
    "mr" => "Marathi",
    "ms" => "Malay",
    "mt" => "Maltese",
    "my" => "Burmese",
    "na" => "Nauru",
    "ne" => "Nepali",
    "nl" => "Dutch",
    "no" => "Norwegian",
    "oc" => "Occitan",
    "om" => "(Afan) Oromo",
    "or" => "Oriya",
    "pa" => "Punjabi",
    "pl" => "Polish",
    "ps" => "Pashto / Pushto",
    "pt" => "Portuguese",
    "qu" => "Quechua",
    "rm" => "Rhaeto-Romance",
    "rn" => "Kirundi",
    "ro" => "Romanian",
    "ru" => "Russian",
    "rw" => "Kinyarwanda",
    "sa" => "Sanskrit",
    "sd" => "Sindhi",
    "sg" => "Sangro",
    "sh" => "Serbo-Croatian",
    "si" => "Singhalese",
    "sk" => "Slovak",
    "sl" => "Slovenian",
    "sm" => "Samoan",
    "sn" => "Shona",
    "so" => "Somali",
    "sq" => "Albanian",
    "sr" => "Serbian",
    "ss" => "Siswati",
    "st" => "Sesotho",
    "su" => "Sundanese",
    "sv" => "Swedish",
    "sw" => "Swahili",
    "ta" => "Tamil",
    "te" => "Tegulu",
    "tg" => "Tajik",
    "th" => "Thai",
    "ti" => "Tigrinya",
    "tk" => "Turkmen",
    "tl" => "Tagalog",
    "tn" => "Setswana",
    "to" => "Tonga",
    "tr" => "Turkish",
    "ts" => "Tsonga",
    "tt" => "Tatar",
    "tw" => "Twi",
    "ug" => "Uigur",
    "uk" => "Ukrainian",
    "ur" => "Urdu",
    "uz" => "Uzbek",
    "vi" => "Vietnamese",
    "vo" => "Volapuk",
    "wo" => "Wolof",
    "xh" => "Xhosa",
    //"y" => "Yiddish",
    "yi" => "Yiddish",
    "yo" => "Yoruba",
    "za" => "Zuang",
    "zh" => "Chinese",
    "zu" => "Zulu",
);

add_translation("es", $spanish);
