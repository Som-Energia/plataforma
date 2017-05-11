<?php

/**
 * Core Spanish Language
 *
 * @package Elgg.Core
 * @subpackage Languages.Spanish
 */
return array(
    'group_tools:add_users' => "Agregar usuarios",
    'group_tools:delete_selected' => "Borrar usuarios",
    'group_tools:clear_selection' => "Limpiar selección",
    'group_tools:all_members' => "Todos los miembros",
    'group_tools:explain' => "Explicación",
    'group_tools:default:access:group' => "Miembros del grupo solamente",
    'group_tools:joinrequest:already' => "Cancelar pedido de incorporación a este grupo",
    'group_tools:joinrequest:already:tooltip' => "Ya has solicitado la incorporación a este grupo, haz click aquí para cancelar tu solicitud",
    'group_tools:join:already:tooltip' => "Fuiste invitado a este grupo, puedes unirte ahora.",
    'item:object:group_tools_group_mail' => "Mail del Grupo",
    // menu
    'group_tools:menu:mail' => "Miembros del Mail",
    'group_tools:menu:invitations' => "Gestionar invitaciones",
    'admin:administer_utilities:group_bulk_delete' => "Borrar varios grupos",
    'admin:groups:admin_approval' => "Se necesita aprobación",
    'admin:appearance:group_tool_presets' => "Configuraciones predefinidas de herramientas de grupo",
    // plugin settings
    'group_tools:settings:default_off' => "Si, configuraciones por defecto desactivadas",
    'group_tools:settings:default_on' => "Yes, configuraciones por defecto activadas",
    'group_tools:settings:required' => "Si, requerido",
    'group_tools:settings:invite:title' => "Opciones de invitación a grupos",
    'group_tools:settings:management:title' => "Opciones de grupos generales",
    'group_tools:settings:default_access:title' => "Acceso a grupos por defecto",
    'group_tools:settings:admin_transfer' => "Permitir transferencia de propietario de grupo",
    'group_tools:settings:admin_transfer:admin' => "Solo administradores del sitio",
    'group_tools:settings:admin_transfer:owner' => "Propietarios de grupo y administadores del sitio",
    'group_tools:settings:multiple_admin' => "Permitir múltiples administradores de grupo",
    'group_tools:settings:auto_suggest_groups' => "Sugerir grupos automaticamente en la página 'Sugeridos' basados en la información del perfil. Será completado con los grupos sugeridos predefinidos. Marcar esto como 'No' solo mostrará los grupos sugeridos predefinidos, en caso de haberlos.",
    'group_tools:settings:notifications:title' => "Configuración de las notificaciones de grupo",
    'group_tools:settings:notifications:notification_toggle' => "Mostrar la configuración de notificaciónes al unirse al grupo",
    'group_tools:settings:notifications:notification_toggle:description' => "Esto mostrará un mensaje del sistma en el cual los usuarios podrán modificar la configuración de noticiaciones, y agragar un link en las notificaciones via email para acceder a la configuración.",
    'group_tools:settings:invite' => "Permitir la invitación a todos los usuarios (no solamente amigos)",
    'group_tools:settings:invite_friends' => "Permitir la invitación a amigos",
    'group_tools:settings:invite_email' => "Permitir la invitación a todos los usuarios via dirección de correo electrónico",
    'group_tools:settings:invite_email:match' => "Intentar coincidir los correos electrónicos de los usuarios existentes",
    'group_tools:settings:invite_csv' => "Permitir la invitación a todos los usuarios via archivo CSV",
    'group_tools:settings:invite_members' => "Permitir a los miembros la invitación de nuevos usuarios.",
    'group_tools:settings:invite_members:description' => "Propietarios y administradores de grupo pueden habilitar/deshabilitar esta opción para su grupo",
    'group_tools:settings:domain_based' => "Permitir grupos basados en dominios",
    'group_tools:settings:domain_based:description' => "Los usuarios pueden unirse a grupos basados en su dominio de correo electrónico (@ejemplo.com). Durante el registro serán incorporados automáticamente según el dominio de su correo.",
    'group_tools:settings:join_motivation' => "La incorporación en grupos cerrados requiere una motivación",
    'group_tools:settings:join_motivation:description' => "Cuando un usuario quiere unirse a un grupo cerrado, se le solicita un motivo. Los propietarios de grupo pueden cambiar esta configuración, sino modificarla a 'no' o 'requerida'.",
    'group_tools:settings:mail' => "Permitir un mail grupal (permite a los administradores enviar un email a todos los miembros)",
    'group_tools:settings:mail:members' => "Permite a los administradores habilitar el mail grupal a los miembros",
    'group_tools:settings:mail:members:description' => "La opción Mail Grupal debe estar habilidata",
    'group_tools:settings:listing:title' => "Configuración de listados de grupos",
    'group_tools:settings:listing:description' => "Aquí puedes configurar que pestañas estarán visibles en la página de listados de grupos, cual será la pestaña principal, y cual será el criterio de orden por defecto en cada pestaña.",
    'group_tools:settings:listing:enabled' => "Habilitado",
    'group_tools:settings:listing:default_short' => "Pestaña por defecto",
    'group_tools:settings:listing:default' => "Pestaña de listados de grupos por defecto",
    'group_tools:settings:listing:available' => "Pestañas de listados de grupos disponibles",
    'group_tools:settings:default_access' => "Cuál debe ser el acceso por defecto para el contenido de los grupos en este sitio?",
    'group_tools:settings:search_index' => "Permitir que los grupos cerrados sean indexados en los motores de búsqueda",
    'group_tools:settings:auto_notification' => "Habilitar automáticamente notificaciones de grupo al unirse",
    'group_tools:settings:show_membership_mode' => "Mostrar el estado abierto/cerrado de las membresias y el bloqueo del propietario en el perfil de grupo",
    'group_tools:settings:show_hidden_group_indicator' => "Mostrar un indicador si el grupo es oculto",
    'group_tools:settings:show_hidden_group_indicator:group_acl' => "Si, si el grupo es solo para miembros",
    'group_tools:settings:show_hidden_group_indicator:logged_in' => "Si, para todos los grupos no públicos",
    'group_tools:settings:special_states' => "Grupos con un estado especial",
    'group_tools:settings:special_states:featured:description' => "Los administradores de grupo han elegido esta funcionalidad para los siguientes grupos.",
    'group_tools:settings:special_states:auto_join' => "Incorporación automática",
    'group_tools:settings:special_states:auto_join:description' => "Nuevos usuarios serán incorporados automáticamente a los siguientes grupos.",
    'group_tools:settings:special_states:suggested' => "Sugeridos",
    'group_tools:settings:special_states:suggested:description' => "Los siguientes grupos son sugeridos a los (nuevos) usuarios. Es posible sugerir grupos automáticamente, en caso de que hayan pocos grupos o no sean detectados, el listado será completado con estos grupos.",
    'group_tools:settings:fix:title' => "Corregir problemas de acceso a grupos",
    'group_tools:settings:fix:missing' => "Hay %d usuarios que son miembros de un grupo pero no tienen acceso al contenido compartido con el grupo.",
    'group_tools:settings:fix:excess' => "Hay %d usuario que tienen acceso al contenido de un grupo del cual no forman más parte.",
    'group_tools:settings:fix:without' => "Hay %d grupos sin la posibilidad de compartir contenido con sus miembros.",
    'group_tools:settings:fix:all:description' => "Corregir todos los problemas seleccionados de una sola vez.",
    'group_tools:settings:fix_it' => "Corregir esto",
    'group_tools:settings:fix:all' => "Corregir todos los problemas",
    'group_tools:settings:member_export' => "Permitir a los administradores de grupo exportar la información de los miembros",
    'group_tools:settings:member_export:description' => "Esto incluye el nombre, usuario y correo electrónico de los usuarios.",
    'group_tools:settings:admin_approve' => "Los administradores de usuario necesitan aprobar nuevos grupos",
    'group_tools:settings:admin_approve:description' => "Cualquier usuario puede crear un grupo, pero un administrador del sitio debe aprobarlo",
    // group tool presets
    'group_tools:admin:group_tool_presets:description' => "Aquí puedes configurar las herramientas predefinidas del grupo.
Cuando un usuario crea un grupo, puede elegir una de los configuraciones predefinidas para obtener rápidamente las herramientas correctas. Una opción en blanco es ofrecida al usuario para que ajuste sus propias configuraciones.",
    'group_tools:admin:group_tool_presets:header' => "Configuraciones predefinidas existentes",
    'group_tools:create_group:tool_presets:description' => "Puedes elegir una configuración predefinida para las herramientes de grupo aquí. Si hacer eso, tendrás un grupo de herramientas preconfiguradas según tu selección. Siempre podrás agregar herramientas adicionales a tu configuración, o elegir quitar algunas que no desees.",
    'group_tools:create_group:tool_presets:active_header' => "Herramientas para esta configuracón predefinida",
    'group_tools:create_group:tool_presets:more_header' => "Herramientas extra",
    'group_tools:create_group:tool_presets:select' => "Elige el tipo de grupo",
    'group_tools:create_group:tool_presets:show_more' => "Más herramientas",
    'group_tools:create_group:tool_presets:blank:title' => "Grupo en blanco",
    'group_tools:create_group:tool_presets:blank:description' => "Elige este tipo de grupo para configurar tus propias herramientas.",
    // group invite message
    'group_tools:groups:invite:body' => "Hola %s,

%s te ha invitado a unirte al grupo '%s'.
%s

Haz click debajo para ver tus invitaciones:
%s",
    // group add message
    'group_tools:groups:invite:add:subject' => "Te han agregado al grupo %s",
    'group_tools:groups:invite:add:body' => "Hola %s,

%s te ha agregado al grupo %s.
%s

Para ver el grupo haz click en este link
%s",
    // group invite by email
    'group_tools:groups:invite:email:subject' => "Te han invitado al grupo %s",
    'group_tools:groups:invite:email:body' => "Hola,

%s te ha invitado a unirte al grupo %s en %s.
%s

Si no tienes usuario en %s por favor regístrate aquí
%s

Si tienes un usuario o luego de registrarte, haz click en el siguiente link para aceptar la invitación
%s

También puedes ir a Todos los grupos -> Invitaciones de grupo e incluir el siguiene código:
%s",
    // group transfer notification
    'group_tools:notify:transfer:subject' => "La administración del grupo %s te ha sido asignada",
    'group_tools:notify:transfer:message' => "Hola %s,

%s te ha asignado como el nuevo administrador del grupo %s.

Para visitar el grupo haz click sobre el siguiente link:
%s",
    // deline membeship request notification
    'group_tools:notify:membership:declined:subject' => "Su pedido de incorporación para el grupo '%s' fue rechazado",
    'group_tools:notify:membership:declined:message' => "Hola %s,

Tu pedido de incorporación para el grupo '%s' fue rechazado.

Puedes encontrar el grupo aquí:
%s",
    'group_tools:notify:membership:declined:message:reason' => "Hola %s,

Tu pedido de incorporación para el grupo '%s' fue rechazado, debido a la siguiente razón:

%s

Puedes encontrar el grupo aquí:
%s",
    // group edit tabbed
    'group_tools:group:edit:profile' => "Perfil",
    'group_tools:group:edit:access' => "Acceso",
    'group_tools:group:edit:tools' => "Herramientas",
    'group_tools:group:edit:other' => "Otras opciones",
    // admin transfer - form
    'group_tools:admin_transfer:current' => "Mantener propietario actual: %s",
    'group_tools:admin_transfer:myself' => "Yo mismo/a",
    // special states form
    'group_tools:special_states:title' => "Estados especiales de grupo",
    'group_tools:special_states:description' => "Un grupo puede tener distintos estados especiales, aquí hay un resumen de los estados especiales y sus valores actuales.",
    'group_tools:special_states:featured' => "Es este grupo destacado",
    'group_tools:special_states:auto_join' => "Los usuarios se uniran automáticamente a este grupo",
    'group_tools:special_states:auto_join:fix' => "Para convertir a todos los usuarios del sitio miembros de este grupo, haz %sclick aquí%s.",
    'group_tools:special_states:suggested' => "Es este grupo sugerido a (nuevos) usuarios",
    // group admins
    'group_tools:multiple_admin:group_admins' => "Administradores de grupo",
    'group_tools:multiple_admin:profile_actions:remove' => "Borrar administrador de grupo",
    'group_tools:multiple_admin:profile_actions:add' => "Agregar administrador de grupo",
    'group_tools:multiple_admin:group_tool_option' => "Permitir a los administradores de grupo asignar otros administradores",
    // cleanup options
    'group_tools:cleanup:title' => "Limpieza de barra lateral de grupos",
    'group_tools:cleanup:description' => "Limpia la barra lateral del grupo. Esto no tendrá efecto para los administradores de grupo.",
    'group_tools:cleanup:extras_menu' => "Ocultar el menú de extras",
    'group_tools:cleanup:extras_menu:explain' => "El menú de extras puede ser encontrado en la parte superior de la barra lateral, algunos links pueden ser publicados en este área (ejemplo: links de RSS).",
    'group_tools:cleanup:actions' => "Ocultar el botón de unirse al grupo o solicitar incorporación",
    'group_tools:cleanup:actions:explain' => "Dependiendo en tu configuración de grupo, usuario pueden directamente unirse al grupo o solicitar incorporación.",
    'group_tools:cleanup:menu' => "Ocultar items del menu lateral",
    'group_tools:cleanup:menu:explain' => "Oculta los enlaces del menú a las diferentes herramientas del grupo. Los usuarios sólo tendran acceso a las herramientas del grupo a través de los widgets.",
    'group_tools:cleanup:members' => "Ocultar los miembros del grupo",
    'group_tools:cleanup:members:explain' => "En la página del perfil del grupo, un listado de miembros puede verse en la barra lateral. Puedes ocultar este listado.",
    'group_tools:cleanup:search' => "Ocultar la búsqueda en el grupo",
    'group_tools:cleanup:search:explain' => "En la página de perfil del grupo una caja de búsqueda está disponible. Puedes elegir ocultarla.",
    'group_tools:cleanup:featured' => "Mostrar grupos destacados en la barra lateral",
    'group_tools:cleanup:featured:explain' => "Puedes elegir mostrar un listado de grupos destacados en la barra lateral de la página de perfil del grupo",
    'group_tools:cleanup:featured_sorting' => "Como ordenar grupos destacados",
    'group_tools:cleanup:featured_sorting:time_created' => "Recientes primero",
    'group_tools:cleanup:my_status' => "Ocultar la barra lateral de Mi Estado",
    'group_tools:cleanup:my_status:explain' => "En la barra lateral de la página de perfil de grupo hay un item que muestra tu actual estado de membresía y otra información de estado. Puedes elegir ocultar esto.",
    // group default access
    'group_tools:default_access:title' => "Nivel de acceso por defecto en el grupo",
    'group_tools:default_access:description' => "Aquí puedes controlar cual será el nivel de acceso por defecto del nuevo contenido en tu grupo.",
    // group admin approve
    'group_tools:group:admin_approve:notice' => "Los grupos nuevos necesitan se aprobados por el administrador del sitio. Puedes crear/editar el grupo, pero este no será visible para los otros usuarios hasta que sea aprobado por el administrador.",
    'group_tools:group:admin_approve:decline:confirm' => "Estas seguro que deseas rechazar este grupo? Esto eliminaría el grupo.",
    'group_tools:group:admin_approve:admin:description' => "Esta es una lista de grupos que necesitan ser aprobados por el administrador del sitio antes de que puedan utilizarse.

Si apruebas un grupo, el propietario recibirá una notificación de que su grupo está disponible para su uso.

Si rechazas un grupo, el propietario recibirá una notificación de que su grupo fue removido, y el mismo será eliminado.",
    'group_tools:group:admin_approve:approve:success' => "El grupo ahora puede ser utilizado en el sitio",
    'group_tools:group:admin_approve:decline:success' => "El grupo fue eliminado",
    'group_tools:group:admin_approve:approve:subject' => "Tu grupo '%s' fue aprobado",
    'group_tools:group:admin_approve:approve:summary' => "Tu grupo '%s' fue aprobado",
    'group_tools:group:admin_approve:approve:message' => "Hola %s,

tu grupo '%s' fue aprobado por el administrador del sitio. Ahora puedes utilizarlo.

Para visitar el grupo haz click aquí:
%s",
    'group_tools:group:admin_approve:admin:subject' => "Un nuevo grupo '%s' fue creado y requiere aprobación",
    'group_tools:group:admin_approve:admin:summary' => "Un nuevo grupo '%s' fue creado y requiere aprobación",
    'group_tools:group:admin_approve:admin:message' => "Hola %s,

%s creó el grupo '%s' que necesita ser aprobado por un administrador del sitio.

Para visitar el grupo haz click aquí:
%s

Para ver todos los grupos que requieren acciones haz click aquí:
%s",
    'group_tools:group:admin_approve:decline:subject' => "Tu grupo '%s' ha sido rechazado",
    'group_tools:group:admin_approve:decline:summary' => "Tu grupo '%s' ha sido rechazado",
    'group_tools:group:admin_approve:decline:message' => "Hola %s,

tu grupo '%s' fue rechazado y eliminado por un administrador del sitio.",
    // group notification
    'group_tools:notifications:title' => "Notificaciones de grupo",
    'group_tools:notifications:description' => "Este grupo tiene %s miembros, de los cuales %s han activado las notificaciones de actividad en este grupo. Debajo puedes cambiar esto para todos los usuarios del grupo.",
    'group_tools:notifications:disclaimer' => "Con grupos numerosos esto puede demorar unos momentos.",
    'group_tools:notifications:enable' => "Activar las notificaciones para todos",
    'group_tools:notifications:disable' => "Desactivas las notificaciones para todos",
    'group_tools:notifications:toggle:email:enabled' => "Actualmente tu estás recibiendo las notificaciones de la actividad en este grupo. Si no deseas recibir notificaciones, cambia la configuración aquí %s",
    'group_tools:notifications:toggle:email:disabled' => "Actualmente tu no estás recibiendo las notificaciones de la actividad en este grupo. Si deseas recibir notificaciones, cambia la configuración aquí %s",
    'group_tools:notifications:toggle:site:enabled' => "Actualmente tu estás recibiendo las notificaciones de la actividad en este grupo. Si no deseas recibir notificaciones, haz click aquí %s",
    'group_tools:notifications:toggle:site:enabled:link' => "desactivar notificaciones",
    'group_tools:notifications:toggle:site:disabled' => "Actualmente tu no estás recibiendo las notificaciones de la actividad en este grupo. Si deseas recibir notificaciones, haz click aquí %s",
    'group_tools:notifications:toggle:site:disabled:link' => "activar notificaciones",
    // group mail
    'group_tools:tools:mail_members' => "Permitir a los miembros del grupo escribir correos a otros miembros",
    'mail_members:group_tool_option:description' => "Esto permitirá a los miembros normales del grupo enviar un correo electrónico a otros miembros. Por defecto esta función está limitada a administradores de grupo.",
    'group_tools:mail:message:from' => "Del grupo",
    'group_tools:mail:title' => "Enviar un correo a los miembros del grupo",
    'group_tools:mail:form:recipients' => "Número de destinatarios",
    'group_tools:mail:form:members:selection' => "Seleccionar miembros individuales",
    'group_tools:mail:form:title' => "Asunto",
    'group_tools:mail:form:description' => "Cuerpo del texto",
    'group_tools:mail:form:js:members' => "Por favor, selecciona al menos un miembro al cual enviar el mensaje",
    'group_tools:mail:form:js:description' => "Por favor, ingresa el mensaje",
    // group invite
    'group_tools:groups:invite:error' => "Las opciones de invitación no están disponibles",
    'group_tools:groups:invite:title' => "Invitar usuarios a este grupo",
    'group_tools:groups:invite' => "Invitar usuarios",
    'group_tools:groups:invite:user_already_member' => "El usuario ya es miembro de este grupo",
    'group_tools:group:invite:friends:select_all' => "Seleccionar todos mis amigos",
    'group_tools:group:invite:friends:deselect_all' => "Deseleccionar todos mis amigos",
    'group_tools:group:invite:users' => "Encontrar usuario(s)",
    'group_tools:group:invite:users:description' => "Ingresa el nombre o usuario que quieres encontrar y seleccionalo de la lista",
    'group_tools:group:invite:users:all' => "Invitar a todos los usuarios del sitio a este grupo",
    'group_tools:group:invite:email' => "Usa una dirección de correo electrónico",
    'group_tools:group:invite:email:description' => "Ingresa una dirección de correo electrónico válida y eligela del listado",
    'group_tools:group:invite:csv' => "Una un archivo CSV",
    'group_tools:group:invite:csv:description' => "Puedes cargar un archivo CSV que contenga usuarios para invitar.<br />El formato del archivo debe ser: nombre;e-mail. No debe tener encabezado.",
    'group_tools:group:invite:text' => "Nota personal (opcional)",
    'group_tools:group:invite:add:confirm' => "Estás seguro que desea agregar estos usuarios directamente?",
    'group_tools:group:invite:resend' => "Reenviar invitaciones a usuarios que ya fueron invitados",
    'group_tools:groups:invitation:code:title' => "Invitación a grupo vía correo electrónico",
    'group_tools:groups:invitation:code:description' => "Si has recibido una invitación para unirte a un grupo via correo electrónico, puedes ingresar el código de la invitación aquí para aceptarla. Si hacer click en el link que te fue enviado, el código será ingresado automáticamente.",
    // group membership requests
    'group_tools:groups:membershipreq:requests' => "Solicitudes de incorporación",
    'group_tools:groups:membershipreq:invitations' => "Usuarios invitados",
    'group_tools:groups:membershipreq:invitations:none' => "No hay invitaciones pendientes",
    'group_tools:groups:membershipreq:email_invitations' => "Correos electrónicos invitados",
    'group_tools:groups:membershipreq:email_invitations:none' => "No hay invitaciones a correos electrónicos pendientes",
    'group_tools:groups:membershipreq:invitations:revoke:confirm' => "Estás seguro que deseas revocar esta invitación",
    'group_tools:groups:membershipreq:kill_request:prompt' => "Puedes comunicar al usuario porque revocastes la solicitud.",
    // group invitations
    'group_tools:group:invitations:request' => "Solicitudes de incorporación destacadas",
    'group_tools:group:invitations:request:revoke:confirm' => "Estás seguro que deseas revocar esta invitación",
    'group_tools:group:invitations:request:non_found' => "No hay solicitudes de incorporación destacadas en este momento",
    // group listing
    'group_tools:groups:sorting:open' => "Abiertos",
    'group_tools:groups:sorting:closed' => "Cerrados",
    'group_tools:groups:sorting:ordered' => "Ordenados",
    'group_tools:groups:sorting:suggested' => "Sugeridos",
    // allow group members to invite
    'group_tools:invite_members:title' => "Los miembros del grupo pueden invitar",
    'group_tools:invite_members:description' => "Permite a los miembros de un grupo invitar a nuevos miembros",
    'group_tools:invite_members:disclaimer' => "Por favor ten en cuenta que para grupos cerrados esto significa que las invitaciones realizadas por miembros no requerirán aprobación del propietario o administradores de grupo.",
    // group tool option descriptions
    'activity:group_tool_option:description' => "Mostrar un feed de actividad sobre contenidos relacionados al grupo.",
    // actions
    // group edit
    'group_tools:action:group:edit:error:default_access' => "El nivel de acceso elegido por defecto es más abierto que el nivel de acceso del grupo, por lo que el accese por defecto a sido reducido a los miembros del grupo.",
    // group admins - action
    'group_tools:action:toggle_admin:error:group' => "El valor ingresado no sirve en un grupo, no puedes editar este grupo o el usuario no es miembro",
    'group_tools:action:toggle_admin:error:remove' => "Un error desconocido ocurrió mientras se quitaba al usuario como administrador de grupo",
    'group_tools:action:toggle_admin:error:add' => "Un error desconocido ocurrió mientras se añadía al usuario como administrador de grupo",
    'group_tools:action:toggle_admin:success:remove' => "El usuario fue removido exitosamente como administrador de grupo",
    'group_tools:action:toggle_admin:success:add' => "El usuario fue añadido exitosamente como administrador de grupo",
    // group mail - action
    'group_tools:action:mail:success' => "Mensaje enviado exitosamente",
    // group - invite - action
    'group_tools:action:invite:error:invite' => "Ningún usuario fue invitado (%s ya invitados, %s ya son miembros)",
    'group_tools:action:invite:error:add' => "Ningún usuario fue añadido (%s ya invitados, %s ya son miembros)",
    'group_tools:action:invite:success:invite' => "%s usuarios exitosamente invitados (%s ya invitados, %s ya son miembros)",
    'group_tools:action:invite:success:add' => "%s usuarios exitosamente añadidos (%s ya invitados, %s ya son miembros)",
    // group - invite - accept e-mail
    'group_tools:action:groups:email_invitation:error:code' => "El código de invitación ingresado ya no es válido",
    'group_tools:action:groups:email_invitation:error:join' => "Un error desconocido ocurrió mientras te unías al grupo %s, tal vez ya eras miembro",
    'group_tools:action:groups:email_invitation:success' => "Te has unido exitosamente al grupo",
    // group - invite - decline e-mail
    'group_tools:action:groups:decline_email_invitation:error:delete' => "Un error ocurrió mientras se borraba la invitación",
    // suggested groups
    'group_tools:suggested_groups:info' => "Los siguientes grupos pueden ser de tu interés. Haz click en los botones para unirte inmediatamente o en el título para ver más información sobre los grupos.",
    'group_tools:suggested_groups:none' => "No podemos sugerirte grupos. Esto puede suceder si tenemos poca información sobre tí o si ya eres miembro de los grupos que queremos recomendarte. Usa la búsqueda para encontrar más grupos.",
    // group toggle auto join
    'group_tools:action:toggle_special_state:error:auto_join' => "Un error ocurrió mientras se guardaban los nuevas configuraciones de la incorporación automática",
    'group_tools:action:toggle_special_state:error:suggested' => "Un error ocurrió mientras se guardaban las nuevas configuraciones sugeridas",
    'group_tools:action:toggle_special_state:error:state' => "Estado inválido",
    'group_tools:action:toggle_special_state:auto_join' => "Las nuevas configuraciones de incorporación automática fueron guardadas exitosamente",
    'group_tools:action:toggle_special_state:suggested' => "Las nuevas configuraciones sugeridas fueron guardadas exitosamente",
    // group fix auto_join
    'group_tools:action:fix_auto_join:success' => "Incorporación a grupo corregida: %s nuevos miembros, %s ya eran miembros y %s errores",
    // group cleanup
    'group_tools:actions:cleanup:success' => "Las configuraciones de limpieza fueron guardadas exitosamente",
    // group notifications
    'group_tools:action:notifications:error:toggle' => "Opción inválida",
    'group_tools:action:notifications:success:disable' => "Las notificaciones han sido desabilitadas para todos los miembros",
    'group_tools:action:notifications:success:enable' => "Las notificaciones han sido habilitadas para todos los miembros",
    // fix group problems
    'group_tools:action:fix_acl:error:input' => "Opción inválida que no puedes corregir: %s",
    'group_tools:action:fix_acl:error:missing:nothing' => "No se han encontrado usuarios perdidos en la ACL del grupo",
    'group_tools:action:fix_acl:error:excess:nothing' => "No se han encontrado usuarios excedentes en la ACL del grupo",
    'group_tools:action:fix_acl:error:without:nothing' => "No se pueden encontrar grupos sin la ACL",
    'group_tools:action:fix_acl:success:missing' => "Se han añadido exitosamente %d usuarios a la ACL del grupo",
    'group_tools:action:fix_acl:success:excess' => "Se han removido exitosamente %d usuarios a la ACL del grupo",
    'group_tools:action:fix_acl:success:without' => "Se han creado exitosamente %d ACL de grupo",
    // Widgets
    // Group River Widget
    'widgets:group_river_widget:title' => "Actividad de Grupo",
    'widgets:group_river_widget:description' => "Muestra la actividad de un grupo en un widget",
    'widgets:group_river_widget:edit:num_display' => "Número de actividades",
    'widgets:group_river_widget:edit:group' => "Elige un grupo",
    'widgets:group_river_widget:edit:no_groups' => "Necesitas ser miembro de al menos un grupo para usar este widget",
    'widgets:group_river_widget:view:not_configured' => "Este widget no está configurado todavía",
    'widgets:group_river_widget:view:noactivity' => "No pudimos encontrar actividad.",
    // Group Members
    'widgets:group_members:title' => "Miembros de Grupo",
    'widgets:group_members:description' => "Muestra los miembros de este grupo",
    'widgets:group_members:view:no_members' => "No se han encontrado miembros en el grupo",
    // Group Invitations
    'widgets:group_invitations:title' => "Invitaciones de Grupo",
    'widgets:group_invitations:description' => "Muestra las invitaciones de grupo destacadas para el usuario vigente",
    // index_groups
    'widgets:index_groups:description' => "Lista los grupos de tu comunidad",
    'widgets:index_groups:show_members' => "Muestra la suma de miembros",
    'widgets:index_groups:featured' => "Muestra solo los grupos destacados",
    'widgets:index_groups:sorting' => "Como ordenar los grupos",
    'widgets:index_groups:filter:field' => "Filtrar los grupos basado en el campo grupal",
    'widgets:index_groups:filter:value' => "con valor",
    'widgets:index_groups:filter:no_filter' => "Sin filtro",
    // Featured Groups
    'widgets:featured_groups:description' => "Muestra una lista aleatoria de grupos destacados",
    'widgets:featured_groups:edit:show_random_group' => "Muestra una lista aleatoria de grupos no destacados",
    // group_news widget
    "widgets:group_news:title" => "Noticias de Grupo",
    "widgets:group_news:description" => "Muestra los últimos 5 blogs de varios grupos",
    "widgets:group_news:no_projects" => "No hay grupos configurados",
    "widgets:group_news:no_news" => "Este grupo no tiene blogs",
    "widgets:group_news:settings:project" => "Grupo",
    "widgets:group_news:settings:no_project" => "Elige un grupo",
    "widgets:group_news:settings:blog_count" => "Número máximo de blogs",
    "widgets:group_news:settings:group_icon_size" => "Tamaño del ícono del grupo",
    'groups:search:title' => "Buscar grupos que coincidan con '%s'",
    // welcome message
    'group_tools:welcome_message:title' => "Mensaje de bienvenida de grupo",
    'group_tools:welcome_message:description' => "Puedes configurar un mensaje de bienvenida para los nuevos usuarios que se unan a este grupo. Si no quieres enviar un mensaje, deja este casillero en blanco.",
    'group_tools:welcome_message:explain' => "Para personalizar el mensaje tu puedes usar los siguientes campos de texto:
[name]: el nombre del nuevo usuario (ej. %s)
[group_name]: el nombre del grupo (ej. %s)
[group_url]: la url del grupo (ej. %s)",
    'group_tools:action:welcome_message:success' => "El mensaje de bienvenida fue guardado",
    'group_tools:welcome_message:subject' => "Bienvenido/a a %s",
    // email invitations
    'group_tools:action:revoke_email_invitation:error' => "Un error ocurrió mientras se revocaba la invitación, por favor intente nuevamente",
    'group_tools:action:revoke_email_invitation:success' => "La invitación fue revocada",
    // domain based groups
    'group_tools:join:domain_based:tooltip' => "Tu dominio de correo coincide con el de este grupo, puedes unirte.",
    'group_tools:domain_based:title' => "Configurar los dominios de los correos electrónicos",
    'group_tools:domain_based:description' => "Cuando configuras uno o más dominios de correo, los usuarios con ese dominio serán incorporados automáticamente a tu grupo cuando se registren. Tambien si tienes un grupo cerrado los usuarios con el dominio de correo pueden unirse sin invitación. Puedes configurar múltiples dominios usando una coma. No incluyas el símbolo @",
    'group_tools:action:domain_based:success' => "Los nuevos dominios de correo electrónico fueron guardados",
    // related groups
    'groups_tools:related_groups:tool_option' => "Mostrar grupos relacionados",
    'groups_tools:related_groups:widget:title' => "Grupos relacionados",
    'groups_tools:related_groups:widget:description' => "Muestra un listado de grupos que has agregado como relacionados con este grupo.",
    'groups_tools:related_groups:none' => "No se encontraron grupos relacionados.",
    'group_tools:related_groups:title' => "Grupos relacionados",
    'group_tools:related_groups:form:placeholder' => "Buscar un nuevo grupo relacionado",
    'group_tools:related_groups:form:description' => "Puedes buscar un nuevo grupo relacionado, elígelo de la lista y haz click en Añadir.",
    'group_tools:action:related_groups:error:same' => "No puedes relacionar ese grupo con sí mismo",
    'group_tools:action:related_groups:error:already' => "El grupo elegido ya está relacionado",
    'group_tools:action:related_groups:error:add' => "Un error desconocido ocurrió mientras se añadía una relación, por favor intenta nuevamente.",
    'group_tools:action:related_groups:success' => "El grupo ahora está relacionado",
    'group_tools:related_groups:notify:owner:subject' => "Un nuevo grupo relacionado fue agregado",
    'group_tools:related_groups:notify:owner:message' => "Hola %s,

%s agregó tu grupo %s como un grupo relacionado de %s.",
    'group_tools:related_groups:entity:remove' => "Remover grupo relacionado",
    'group_tools:action:remove_related_groups:error:not_related' => "Este grupo no está relacionado",
    'group_tools:action:remove_related_groups:error:remove' => "Un error desconocido ocurrió mientras se removía la relación, por favor intente de nuevo",
    'group_tools:action:remove_related_groups:success' => "Este grupo no está más relacionado",
    'group_tools:action:group_tool:presets:saved' => "Se han guardado las nuevas configuraciones predefinidas para las herramientas de grupo",
    'group_tools:forms:members_search:members_search:placeholder' => "Ingresa el nombre del usuario al que estas buscando",
    // group member export
    'group_tools:member_export:title_button' => "Exportar miembros",
    // csv exporter
    'group_tools:csv_exporter:group_admin:name' => "Nombre del administrador(es) de grupo",
    'group_tools:csv_exporter:group_admin:email' => "Correo electrónico del administrador(es) de grupo",
    'group_tools:csv_exporter:group_admin:url' => "Url del perfil del administrador(es) de grupo",
    'group_tools:csv_exporter:user:group_admin:name' => "Nombre de los grupos administrados",
    'group_tools:csv_exporter:user:group_admin:url' => "Url de los grupos administrados",
    // group bulk delete
    'group_tools:action:bulk_delete:success' => "El grupo elegido fue eliminado",
    'group_tools:action:bulk_delete:error' => "Un error ocurrió mientras se borraban los grupos, intenta nuevamente",
    // group toggle notifications
    'group_tools:action:toggle_notifications:disabled' => "Las notificaciones para el grupo '%s' han sido desabilitadas",
    'group_tools:action:toggle_notifications:enabled' => "Las notificaciones para el grupo '%s' han sido habilitadas",
    // group join motivation
    'group_tools:join_motivation:edit:option:label' => "La incorporación a este grupo cerrado requiere una motivación",
    'group_tools:join_motivation:edit:option:description' => "Los grupos cerrados pueden solicitar que los nuevos miembros envien una motivación de porqué quieren unirse.",
    'group_tools:join_motivation:title' => "Porque quieres unirte a '%s'?",
    'group_tools:join_motivation:description' => "El propietario de '%s' ha fijado que una motivación es necesaria para unirse a este grupo. Por favor, escribe tu motivación debajo para que el propietario pueda decidir sobre tu solicitud.",
    'group_tools:join_motivation:label' => "Mi motivación para unirme a este grupo",
    'group_tools:join_motivation:notification:subject' => "%s ha solicitado unirse a %s",
    'group_tools:join_motivation:notification:summary' => "%s ha solicitado unirse a %s",
    'group_tools:join_motivation:notification:body' => "Hola %s,

%s ha solicitado unirse al grupo '%s'.

Su motivación para unirse es:
%s

Haz click aquí para ver su perfil:
%s

Haz click debajo para ver las solicitudes de adhesión del grupo:
%s",
    'group_tools:join_motivation:toggle' => "Mostrar motivación",
    'group_tools:join_motivation:listing' => "Razón para unirse:",
    'mentions:notification:subject' => '%s t\'ha nombrat a %s',
    'mentions:notification:body' => '%s t\'ha nombrat a %s.


Per veure la publicació complerta, fes clic a l\'enllaç següent:
%s
',
    'mentions:notification_types:object:blog' => 'una entrada al blog',
    'mentions:notification_types:object:bookmarks' => 'un marcador',
    'mentions:notification_types:object:groupforumtopic' => 'un missatge de debat al grup',
    'mentions:notification_types:object:discussion_reply' => 'una resposta de debat al grup',
    'mentions:notification_types:object:thewire' => 'un missatge a The Wire',
    'mentions:notification_types:object:comment' => 'un comentari',
    'mentions:settings:send_notification' => 'Rebre comunicacions quan algú et @nombri?',
    // admin
    'mentions:named_links' => 'Canviar @usuari pel nom d\'usuari',
    'mentions:fancy_links' => 'Afegir imatge juntament amb el nom d\'usuari',
    'mentions:restrict_group_search' => 'Dins un grup, suggerir només els membres del grup',
    'mentions:friends_only_search' => 'Suggerir només els amics de l\'usuari',
    'mentions:settings:failed' => 'No s\'ha guardat la configuració de les mencions.',
    'file_tools' => "Eines Fitxers",
    'file_tools:file:actions' => 'Accions',
    'file_tools:list:sort:type' => 'Tipus',
    'file_tools:list:sort:time_created' => 'Data creació',
    'file_tools:list:sort:asc' => 'Ascendent',
    'file_tools:list:sort:desc' => 'Descendent',
    // object name
    'item:object:folder' => "Carpeta Fitxers",
    // menu items
    'file_tools:menu:mine' => "Teves Carpetes",
    'file_tools:menu:user' => "%s's carpetes",
    'file_tools:menu:group' => "Grup de carpetes de fitxers",
    // group tool option
    'file_tools:group_tool_option:structure_management' => "Permetre administració de carpetes per membres",
    // views
    // object
    'file_tools:object:files' => "%s fitxer(s) en aquesta carpeta",
    'file_tools:object:no_files' => "Cap fitxer en aquesta carpeta",
    // input - folder select
    'file_tools:input:folder_select:main' => "Carpeta Principal",
    // list
    'file_tools:list:title' => "Carpetes llista fitxers",
    'file_tools:list:folder:main' => "Carpeta Principal",
    'file_tools:list:files:none' => "Cap fitxer en aquesta carpeta",
    'file_tools:list:select_all' => 'Selecciona tot',
    'file_tools:list:deselect_all' => 'Deselecciona tot',
    'file_tools:list:download_selected' => 'Descarregar seleccionat',
    'file_tools:list:delete_selected' => 'Esborra seleccionat',
    'file_tools:list:alert:not_all_deleted' => 'No tots els fitxers poden ser esborrats',
    'file_tools:list:alert:none_selected' => 'Cap element seleccionat',
    'file_tools:list:tree:info' => "Sabies que?",
    'file_tools:list:tree:info:1' => "Pots arrossegar i deixar anar els fitxers a les carpetes per organitzar-les!",
    'file_tools:list:tree:info:2' => "Pots fer doble click sobre qualsevol carpeta per expandir totes les seves sub-carpetes!",
    'file_tools:list:tree:info:3' => "Pots reordenar carpetes arrossegant-les al seu nou lloc en el arbre!",
    'file_tools:list:tree:info:4' => "Pots moure estructures completes de carpetes!",
    'file_tools:list:tree:info:5' => "Si esborres una carpeta, pots escollir opcionalment esborrar tots els seus fitxers!",
    'file_tools:list:tree:info:6' => "Quan esborres una carpeta, totes les subcarpetes seran esborrades!",
    'file_tools:list:tree:info:7' => "Aquest missatge és aleatori!",
    'file_tools:list:tree:info:8' => "Quan esborres una carpeta, però els seus fitxers, els fitxers
apareixeran a la carpeta de nivel superior!",
    'file_tools:list:tree:info:9' => "Una carpeta recentment afegida pot ser posada directament a la correcta subcarpeta!",
    'file_tools:list:tree:info:10' => "Quan puges o edites un fitxer pots escollir en quina carpeta hauria d'aparèixer!",
    'file_tools:list:tree:info:11' => "Arrossegar fitxers és únicament disponible a la vista de llista, no a la  vista de galeria!",
    'file_tools:list:tree:info:12' => "Pots actualitzar el nivell d'acces a totes les carpetes i fins i tot (opcional) de tots els fitxers durant l'edici� d'una carpeta!",
    'file_tools:list:files:options:sort_title' => 'Ordenació',
    'file_tools:list:files:options:view_title' => 'Vista',
    'file_tools:usersettings:time' => 'Visualització Hora',
    'file_tools:usersettings:time:description' => 'Canviar com es mostra la data de fitxer/carpeta ',
    'file_tools:usersettings:time:default' => 'Visualització hora per defecte',
    'file_tools:usersettings:time:date' => 'Data',
    'file_tools:usersettings:time:days' => 'Dies enrere',
    // new/edit
    'file_tools:new:title' => "Nova carpeta fitxers",
    'file_tools:edit:title' => "Editar carpeta fitxers",
    'file_tools:forms:edit:title' => "Títol",
    'file_tools:forms:edit:description' => "Descripció",
    'file_tools:forms:edit:parent' => "Seleccionar una carpeta pare",
    'file_tools:forms:edit:change_children_access' => "Actualitzar accés de totes les subcarpetes",
    'file_tools:forms:edit:change_files_access' => "Actualitzar acces de tots els fitxers en aquesta carpeta (i totes les seves subcarpetes si es selecciona)",
    'file_tools:forms:browse' => 'Navegar..',
    'file_tools:forms:empty_queue' => 'Cua buida',
    'file_tools:folder:delete:confirm_files' => "Vols també eliminar tots els arxius en les (sub)carpetes a esborrar",
    // actions
    // edit
    'file_tools:action:edit:error:input' => "Entrada incorrecte al crear/editar una carpeta",
    'file_tools:action:edit:error:owner' => "No es pot trobar el propietari de la carpeta",
    'file_tools:action:edit:error:folder' => "Cap carpeta a crear/editar",
    'file_tools:action:edit:error:save' => "Error desconegut al guardar la carpeta",
    'file_tools:action:edit:success' => "Carpeta creada/editada satisfactòriament",
    'file_tools:action:move:parent_error' => "No es pot arrosseguar carpeta en si mateixa.",
    // delete
    'file_tools:actions:delete:error:input' => "Entrada incorrecte al esborrar una carpeta",
    'file_tools:actions:delete:error:entity' => "El GUID no pot ser trobat",
    'file_tools:actions:delete:error:subtype' => "El GUID no és una carpeta",
    'file_tools:actions:delete:error:delete' => "Error desconegut al eliminar la carpeta",
    'file_tools:actions:delete:success' => "La carpeta s'ha esborrat satisfactòriament",
    'file_tools:upload:new' => 'Pujar fitxer zip',
    'file_tools:upload:form:choose' => 'Escollir fitxer',
    'file_tools:upload:form:info' => 'Clicar navegar per pujar (multiple) fitxers',
    'file_tools:upload:form:zip:info' => "Pots pujar un fitxer zip. S'extreurà i cada un dels fitxers  seran importats separadament. Tamb� si tens carpetes en el teu zip s'importaran en la corresponent carpeta. Tipus de fitxers que no estan permesos seran omesos.",
    //errors
    'file_tools:error:pageowner' => 'Error recuperant propietari pàgina.',
    'file_tools:error:nofilesextracted' => 'No s\'ha trobat fitxers per extreure.',
    'file_tools:error:cantopenfile' => 'Fitxer Zip no pot ser obert (revisa si el fitxer pujat és un fitxar .zip).',
    'file_tools:error:nozipfilefound' => 'Fitxer pujat no és un fitxer .zip.',
    'file_tools:error:nofilefound' => 'Escull un fitxer a pujar.',
    //messages
    'file_tools:error:fileuploadsuccess' => 'Fitxer Zip pujat i extret satisfactòriament.',
    // move
    'file_tools:action:move:success:file' => "El fitxer s'ha mogut satisfatòriament",
    'file_tools:action:move:success:folder' => "La carpeta s'ha mogut satisfatòriament",
    // buld delete
    'file_tools:action:bulk_delete:success:files' => "Esborrats %s fitxers satisfatòriament",
    'file_tools:action:bulk_delete:error:files' => "Hi ha hagut un error en l'esborrat d'alguns fitxers",
    'file_tools:action:bulk_delete:success:folders' => "Esborrades %s carpetes satisfatòriament",
    'file_tools:action:bulk_delete:error:folders' => "Hi ha hagut un error en l'esborrat d'algunes carpetes",
    // reorder
    'file_tools:action:folder:reorder:success' => "Reordenat la(les) carpetes satisfatòriament",
    //settings
    'file_tools:settings:allowed_extensions' => 'Extensions permeses (separades per comes)',
    'file_tools:settings:user_folder_structure' => 'Usar estructura carpetes',
    'file_tools:settings:sort:default' => 'Opcions ordenació carpetes per defecte',
    'file:type:application' => 'Applicació',
    'file:type:text' => 'Text',
    // widgets
    // file tree
    'widgets:file_tree:title' => "Carpetes",
    'widgets:file_tree:description' => "Mostrar les teves carpetes",
    'widgets:file_tree:edit:select' => "Seleccionar quina(es) carpeta(es) mostrar",
    'widgets:file_tree:edit:show_content' => "Mostrar el contingut de la(les) carpeta(es)",
    'widgets:file_tree:no_folders' => "Cap carpeta configurada",
    'widgets:file_tree:no_files' => "Cap fitxer configurat",
    'widgets:file_tree:more' => "Més carpetes",
    'widget:file:edit:show_only_featured' => 'Mostrar només els fitxers que apareixen',
    'widget:file_tools:show_file' => 'Feature file (widget)',
    'widget:file_tools:hide_file' => 'Unfeature file',
    'widgets:file_tools:more_files' => 'Mós fitxers',
    // Group files
    'widgets:group_files:description' => "Mostrar els últims grups fitxers",
    // index_file
    'widgets:index_file:description' => "Mostrar els últims fitxers de la comunitat",
    'comments' => "Comentaris",
    'comment:notification:settings' => 'Notificacions de comentaris',
    'comment:notification:settings:description' => "Avisa'm quan hi hagi comentaris en elements als que estic subscrit.",
    'comment:notification:settings:how' => "Selecciona el mètode de notificació",
    'comment:notification:settings:linktext' => 'Veure tots els elements als que estic subscrit',
    'comment:subscriptions' => 'Subscripcions',
    'comment:subscriptions:none' => 'No hi ha subscripcions actualment',
    'comment:subscribe:tooltip' => 'Subscriu-te per rebre notificacions quan hi hagi comentaris',
    'allow:comment:notification' => 'Vols activar les notificacions? ',
    'email:content:type' => 'Vols rebre els correus en format HTML? ',
    'text:email' => 'No',
    'html:email' => 'Sí',
    'comment:subscribe' => "Subscriure'm",
    'comment:unsubscribe' => 'Cancel·lar la subscripció',
    'comment:subscribe:long' => "Subscriure'm a les notificacions de comentaris",
    'comment:unsubscribe:long' => 'Cancel·lar la subscripció a les notificacions de comentaris',
    'comment_tracker:setting:autosubscribe' => "Auto-subscriure'm als continguts on hagi fet comentaris?",
    'show:subscribers' => 'Mostra subscriptors',
    'comment:subscribe:success' => "T'has subscrit correctament a aquest contingut o temàtica.",
    'comment:subscribe:failed' => "Ho sentim! No hem pogut subscriure't correctament a aquest contingut o temàtica.",
    'comment:subscribe:entity:not:access' => "Ho sentim! No hem pogut trobar aquest contingut o temàtica.",
    'comment:unsubscribe:success' => "S'ha cancel·lat correctament la teva subscripció a aquest contingut o temàtica.",
    'comment:unsubscribe:failed' => "Ho sentim! No has pogut cancel·lar la subscripció a aquest contingut o temàtica.",
    'comment:unsubscribe:not:valid:url' => 'Ho sentim! Aquesta url no és vàlida per cancel·lar la subscripció a aquest contingut o temàtica.',
    'comment:unsubscribe:entity:not:access' => "Ho sentim! No hem trobat el contingut o temàtica.",
    'comment_tracker:setting:show_button' => "Mostrar el botó de subscripció/cance·lació a sobre dels comentaris? ",
    'comment_tracker:item' => "element",
    'comment:notify:subject:groupforumtopic' => '%s afegit a la discussió %s en el grup %s',
    'comment:notify:subject:comment' => '%s ha comentat en el %s "%s"',
    'comment:notify:subject:comment:group' => '%s ha comentat en el %s "%s" en el grup %s',
    /* Legacy stuff - @TODO - see what's safe to delete */
    'comment:notify:subject' => 'Hi ha un nou comentari a %s',
    'comment:notify:group:subject' => 'Hi ha un nou contingut en el fil %s',
    'comment:notify:body:web' => 'Hola %s,
<br/>Hi ha una nova entrada a %s
<br/>%s ha escrit: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.<br/>Per canviar les preferències de notificació, fes clic aquí: %s<br/>
</font>
		',
    'comment:notify:group:body:web' => 'Hola %s,
<br/>Hi ha un nou comentari a %s
<br/>%s va escriure: %s
<br/>%s
<br/>
<font color="#888888" size="2">

Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.<br/>Per canviar les preferències de notificació, fes clic aquí: %s<br/>
</font>
		',
    'comment:notify:body:email:text' => 'Hola %s,
Hi ha un nou comentari a %s

%s ha escrit: %s

%s 
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Per favor, tingues en compte que és possible que hagis d\'inicar sessió per veure el contingut.Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.

Per canviar les preferències de notificació, fes clic aquí: %s
</font>
		',
    'comment:notify:group:body:email:text' => 'Hola %s,

Hi ha un nou contingut en el fil %s

%s ha escrit: %s

%s 
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Per favor, tingues en compte que és possible que hagis d\'inicar sessió per veure el contingut.

Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.

Per canviar les preferències de notificació per aquests missatges, fes clic aquí: %s
</font>
		',
    'comment:notify:body:email:html' => '
<div>
	<div>Hola %s,</div>
	<div>Hi ha un nou comentari a %s</div>
	<div>%s ha escrit: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div> </div></div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Per favor, tingues en compte que és possible que hagis d\'inicar sessió per veure el contingut.</div>
		<div>Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.</div>
		<div>Per canviar les preferències de notificació per a aquests missatges, fes clic aquí: %s</div>
	</div>
</div>
		',
    'comment:notify:group:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>Hi ha un nou contingut en el fil %s</div>
	<div>%s ha escrit: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div> </div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Per favor, tingues en compte que és possible que hagis d\'iniciar sessió per veure el contingut.</div>
		<div>Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.</div>
		<div>Per canviar les preferències de notificació per a aquests missatges, fes clic aquí: %s</div>
	</div>
</div>
		',
    'au_subgroups' => "Subgrups",
    'au_subgroups:subgroup' => "Subgrup",
    'au_subgroups:subgroups' => "Subgrups",
    'au_subgroups:group:enable' => "Habilitar els subgrups d'aquest grup?",
    'au_subgroups:parent' => "Grup pare",
    'au_subgroups:add:subgroup' => 'Crear un subgrup',
    'au_subgroups:nogroups' => "No s'han creat subgrups",
    'au_subgroups:error:notparentmember' => "Els usuaris no poden unir-se al subgrup si no són membres del grup pare",
    'au_subtypes:error:create:disabled' => "La creació de subgrups s'ha desactivat per aquest grup",
    'au_subgroups:noedit' => "No es pot editar aquest grup",
    'au_subgroups:subgroups:delete' => "Elimina grup",
    'au_subgroups:delete:label' => "Què ha de passar amb el contingut d'aquest grup? Qualsevol opció seleccionada s'aplicarà també a qualsevol subgrup que s'elimini.",
    'au_subgroups:deleteoption:delete' => "Elimina tot el contingut dins d'aquest grup",
    'au_subgroups:deleteoption:owner' => 'Transferir tot el contingut dels creadors originals',
    'au_subgroups:deleteoption:parent' => 'Transferir tot el contingut al grup pare',
    'au_subgroups:subgroup:of' => "Subgroup de %s",
    'au_subgroups:setting:display_alphabetically' => "Visualitzar els anuncis personals de grups per ordre alfabètic?",
    'au_subgroups:setting:display_subgroups' => 'Mostra subgrups en els anuncis del grup estàndard?',
    'au_subgroups:setting:display_featured' => 'Mostra la barra lateral grups destacats en les llistes de grups personals?',
    'au_subgroups:error:invite' => "Acció ha estat cancel·lada - els usuaris següents no són membres del grup pare i no poden ser convidats/agregats.",
    'au_subgroups:option:parent:members' => "Els membres del grup pare",
    'au_subgroups:subgroups:more' => "Veure tots els subgrups",
    /*
     * Widget
     */
    'au_subgroups:widget:order' => 'Ordenar els resultats per',
    'au_subgroups:option:default' => 'Hora de creació',
    'au_subgroups:option:alpha' => 'Alfabètic',
    'au_subgroups:widget:numdisplay' => 'Nombre de subgrups per mostrar',
    'au_subgroups:widget:description' => "Llista dels subgrups d'aquest grup",
    /**
     * Menu items and titles
     */
    'groups:enablelongcolumn' => "Habilitar tres columnes el mòdul de debat",
    'groups' => "Grups",
    'groups:owned' => "Grups que administreu",
    'groups:yours' => "Els meus grups",
    'groups:user' => "Grups de %s",
    'groups:all' => "Tots els grups",
    'groups:add' => "Crear un nou grup",
    'groups:edit' => "Editar el grup",
    'groups:delete' => "Suprimir el grup",
    'groups:membershiprequests' => "Administrar les sol·licituds per afegir-se al grup",
    'groups:invitations' => "Invitacions del grup",
    'groups:icon' => "Icona del grup (deixeu-ho en blanc si no la voleu modificar)",
    'groups:name' => "Nom del grup",
    'groups:username' => "Nom identificador del grup (es mostra als URLs, únicament caràcters alfanumèrics)",
    'groups:description' => "Descripció",
    'groups:briefdescription' => "Resum",
    'groups:interests' => "Etiquetes",
    'groups:website' => "Lloc web",
    'groups:members' => "Membres del grup",
    'groups:members:title' => "Membres de %s",
    'groups:members:more' => "Visualitzar tots els membres",
    'groups:membership' => "Permisos d'accés dels membres del grup",
    'groups:access' => "Permisos d'accés",
    'groups:owner' => "Administrador",
    'groups:widget:num_display' => "Quantitat de grups a visualitzar",
    'groups:widget:membership' => "Membres del grup",
    'groups:widgets:description' => "Mostrar al vostre perfil els grups que formeu part",
    'groups:noaccess' => "Sense accés al grup",
    'groups:permissions:error' => "No teniu els permisos d'accés suficients",
    'groups:ingroup' => "al grup",
    'groups:cantedit' => "No podeu modificar el grup",
    'groups:saved' => "S'ha desat el grup",
    'groups:featured' => "Grups preferits",
    'groups:makeunfeatured' => "Marcar-lo com a no preferit",
    'groups:makefeatured' => "Marcar-lo com a preferit",
    'groups:featuredon' => "%s és un grup preferit.",
    'groups:unfeatured' => "%s s'ha suprimit dels grups preferits.",
    'groups:featured_error' => "El grup no és vàlid.",
    'groups:joinrequest' => "Sol·licitud per afegir-se",
    'groups:join' => "Afegir-se al grup",
    'groups:leave' => "Abandonar el grup",
    'groups:invite' => "Convidar amics",
    'groups:invite:title' => "Convidar amics al grup",
    'groups:inviteto' => "Convidar amics a '%s'",
    'groups:nofriends' => "Tots els amics han estat convidats al grup.",
    'groups:nofriendsatall' => "No teniu amics a convidar!",
    'groups:viagroups' => "grups via",
    'groups:group' => "Grup",
    'groups:search:tags' => "etiqueta",
    'groups:search:title' => "Buscar els grups que coincideixin amb l'etiqueta '%s'",
    'groups:search:none' => "No s'ha trobat cap grup",
    'groups:activity' => "Activitat del grup",
    'groups:enableactivity' => "Habilitar l'activitat del grup",
    'groups:activity:none' => "No hi ha activitat al grup",
    'groups:notfound' => "No s'ha trobat el grup",
    'groups:notfound:details' => "El grup no existeix o no hi teniu accés",
    'groups:requests:none' => "No hi ha sol·licituds pendents.",
    'groups:invitations:none' => "No hi ha invitacions pendents.",
    'item:object:groupforumtopic' => "Discussions",
    'groupforumtopic:new' => "Nova entrada de debat",
    'groups:count' => "grups creats",
    'groups:open' => "grup obert",
    'groups:closed' => "grup tancat",
    'groups:member' => "membres",
    'groups:searchtag' => "Buscar grups per l'etiqueta",
    'groups:more' => "Més grups",
    'groups:none' => "Cap grup",
    /*
     * Access
     */
    'groups:access:private' => "Tancat - Els usuaris s'han de convidar",
    'groups:access:public' => "Obert - Qualsevol usuari s'hi pot afegir",
    'groups:access:group' => "Grup - Limitat als membres del grup",
    'groups:closedgroup' => "El grup limita les seves admissions.",
    'groups:closedgroup:request' => "Per sol·licitar afegir-se al grup premeu la 'Sol·licitar afegir-se'.",
    'groups:visibility' => "Qui pot veure les dades d'aquest grup?",
    /*
      Group tools
     */
    'groups:enableforum' => "Habilitar el fòrums",
    'groups:yes' => "sí",
    'groups:no' => "no",
    'groups:lastupdated' => "Última actualització %s de %s",
    'groups:lastcomment' => "Últim comentari %s de %s",
    /*
      Group discussion
     */
    'discussion' => "Debat",
    'discussion:add' => "Nou debat",
    'discussion:latest' => "Últim debat",
    'discussion:group' => "Debats",
    'discussion:topic:created' => "S'ha creat una nou debat.",
    'discussion:topic:updated' => "S'ha actualitzat el debat.",
    'discussion:topic:deleted' => "S'ha eliminat el debat.",
    'discussion:topic:notfound' => "No s'ha trobat el debat.",
    'discussion:error:notsaved' => "No s'ha desat el debat.",
    'discussion:error:missing' => "És obligatori introduir el títol i el missatge",
    'discussion:error:permissions' => "No teniu els permisos necessaris.",
    'discussion:error:notdeleted' => "No s'ha eliminat el debat",
    'discussion:reply:deleted' => "S'ha eliminat la resposta del debat.",
    'discussion:reply:error:notdeleted' => "No s'ha eliminat la resposta del debat.",
    'reply:this' => "Respondre",
    'group:replies' => "Respostes",
    'groups:forum:created' => "Creat %s amb %d comentaris",
    'groups:forum:created:single' => "Creat %s amb %d respostes",
    'groups:forum' => "Debat",
    'groups:addtopic' => "Nou Debat",
    'groups:forumlatest' => "Últim debat",
    'groups:latestdiscussion' => "Últim debat",
    'groups:newest' => "La més recent",
    'groups:popular' => "Popular",
    'groupspost:success' => "S'ha publicat la resposta",
    'groups:alldiscussion' => "Últim debat",
    'groups:edittopic' => "Editar el debat",
    'groups:topicmessage' => "Missatge del debat",
    'groups:topicstatus' => "Estat del debat",
    'groups:reply' => "Publicar un comentari",
    'groups:topic' => "Debat",
    'groups:posts' => "Entrades",
    'groups:lastperson' => "Última persona",
    'groups:when' => "Quan",
    'grouptopic:notcreated' => "No s'han trobat discussions.",
    'groups:topicopen' => "Oberta",
    'groups:topicclosed' => "Tancada",
    'groups:topicresolved' => "Resolta",
    'grouptopic:created' => "S'ha creat un debat.",
    'groupstopic:deleted' => "S'ha eliminat el debat.",
    'groups:topicsticky' => "Enganxada",
    'groups:topicisclosed' => "El debat està tancada.",
    'groups:topiccloseddesc' => "El debat està tancada i no s'accepten més comentaris.",
    'grouptopic:error' => "No s'ha pogut crear un debat al grup. Torneu-ho a intentar o poseu-vos en contacte amb l'administrador del sistema.",
    'groups:forumpost:edited' => "S'ha editat el comentari del fòrum.",
    'groups:forumpost:error' => "S'ha produït un error a l'editar el comentari del fòrum.",
    'groups:privategroup' => "El grup està tancat.",
    'groups:notitle' => "Els grups han de tenir un títol",
    'groups:cantjoin' => "No s'ha pogut afegir al grup",
    'groups:cantleave' => "No s'ha pogut abandonar el grup",
    'groups:removeuser' => "Suprimir l'usuari",
    'groups:cantremove' => "No s'ha pogut suprimir l'usuari del grup",
    'groups:removed' => "S'ha suprimit %s del grup",
    'groups:addedtogroup' => "S'ha afegit al grup correctament",
    'groups:joinrequestnotmade' => "No pot sol·licitar que s'afegeixi al grup",
    'groups:joinrequestmade' => "Ha sol·licitat afegir-se al grup",
    'groups:joined' => "S'ha afegit al grup!",
    'groups:left' => "Ha abandonat el grup",
    'groups:notowner' => "No sou administrador del grup.",
    'groups:notmember' => "No sou membre del grup.",
    'groups:alreadymember' => "Ja és membre del grup!",
    'groups:userinvited' => "S'ha convidat l'usuari.",
    'groups:usernotinvited' => "No s'ha pogut convidar l'usuari.",
    'groups:useralreadyinvited' => "L'usuari ja s'havia convidat prèviament.",
    'groups:invite:subject' => "%s us ha convidat a afegir-vos a %s!",
    'groups:updated' => "Última resposta per %s %s",
    'groups:started' => "Iniciat per %s",
    'groups:joinrequest:remove:check' => "Voleu suprimir la sol·licitud de grup?",
    'groups:invite:remove:check' => "Voleu suprimir la invitació?",
    'groups:invite:body' => "Hola %s,

%s t'ha convidat a afegir-te al grup '%s'. Premeu per a veure la invitació

%s",
    'groups:welcome:subject' => "Benvingut/da al grup %s!",
    'groups:welcome:body' => "Hola %s!

Sou membre del grup %s! Premeu per a començar a utilitzar-lo!

%s",
    'groups:request:subject' => "%s ha sol·licitat poder-se afegir a %s",
    'groups:request:body' => "Hola %s,

%s ha sol·licitat poder-se afegir al grup '%s'. Premeu per a visualitzar el perfil

%s

o premeu per a veure les sol·licituds d'aquest grup:

%s",
    /*
      Forum river items
     */
    'river:create:group:default' => "%s ha creat el grup %s",
    'river:join:group:default' => "%s s'ha afegit al grup %s",
    'river:create:object:groupforumtopic' => "%s ha afegit una nou debat a %s",
    'river:reply:object:groupforumtopic' => "%s ha contestat a el debat %s",
    'groups:nowidgets' => "No s'han trobat enginys associats al grup.",
    'groups:widgets:members:title' => "Membres del grup",
    'groups:widgets:members:description' => "Llistar els membres del grup.",
    'groups:widgets:members:label:displaynum' => "Llistar els membres del grup.",
    'groups:widgets:members:label:pleaseedit' => "Configureu l'enginy.",
    'groups:widgets:entities:title' => "Objectes del grup",
    'groups:widgets:entities:description' => "Llistar els objectes del grup.",
    'groups:widgets:entities:label:displaynum' => "Llistar els objectes del grup.",
    'groups:widgets:entities:label:pleaseedit' => "Configureu l'enginy.",
    'groups:forumtopic:edited' => "El debat s'ha editat correctament.",
    'groups:allowhiddengroups' => "Voleu habilitar els grups privats (invisibles)?",
    /**
     * Action messages
     */
    'group:deleted' => "S'ha suprimit el grup i els seus continguts",
    'group:notdeleted' => "No s'ha suprimit el grup",
    'group:notfound' => "No s'ha trobat el grup",
    'grouppost:deleted' => "S'ha suprimit l'entrada del grup",
    'grouppost:notdeleted' => "No s'ha suprimit l'entrada del grup",
    'groupstopic:deleted' => "S'ha suprimit el tema",
    'groupstopic:notdeleted' => "No s'ha suprimit el tema",
    'grouptopic:blank' => "No hi ha cap tema",
    'grouptopic:notfound' => "No s'ha trobat el tema",
    'grouppost:nopost' => "No hi ha cap entrada",
    'groups:deletewarning' => "Voleu suprimir el grup ? El grup no es podrà restaurar!",
    'groups:invitekilled' => "S'ha suprimit la invitació",
    'groups:joinrequestkilled' => "S'ha suprimit la sol·licitud d'inscripció.",
    // ecml
    'groups:ecml:discussion' => "Discussions",
    'groups:ecml:groupprofile' => "Perfils del grup",
    /**
     * Sites
     */
    'item:site' => "Llocs",
    /**
     * Sessions
     */
    'login' => "Iniciar sessi&oacute;",
    'loginok' => "Has iniciat sessi&oacute;",
    'loginerror' => "Inici de sessi&oacute; incorrecte. Verifica les teves credencials i intenta-ho de nou",
    'login:empty' => "El nom d'usuari i contrasenya s&oacute;n requerits",
    'login:baduser' => "No s'ha pogut carregar el teu compte d'usuari",
    'auth:nopams' => "Error intern. No es troba un m&egrave;tode d'autenticaci&oacute; instal·lat",
    'logout' => "Tancar sessi&oacute;",
    'logoutok' => "S'ha tancat la sessi&oacute;",
    'logouterror' => "No s'ha pogut tancar la sessi&oacute;, si us plau intenta-ho de nou",
    'loggedinrequired' => "Has d'estar autenticat per poder veure aquesta p&agrave;gina",
    'adminrequired' => "Has de ser un administrador per poder veure aquesta p&agrave;gina",
    'membershiprequired' => "Has de ser membre del grup per poder veure aquesta p&agrave;gina",
    /**
     * Errors
     */
    'exception:title' => "Error Fatal",
    'actionundefined' => "La acci&oacute; (%s) sol&middot;licitada no est&agrave; definida al sistema",
    'actionnotfound' => "El log d'accions per %s no s'ha trobat",
    'actionloggedout' => "Ho sentim, no es pot realitzar aquesta acci&oacute; sense identificar-se",
    'actionunauthorized' => "No tens els permisos necesaris per realitzar aquesta acci&oacute;",
    'InstallationException:SiteNotInstalled' => "No s'ha pogut procesar la sol&middot;licitud. El lloc "
    . " no es troba configurat o la base de dades es troba caiguda",
    'InstallationException:MissingLibrary' => "No s'ha pogut carregar %s",
    'InstallationException:CannotLoadSettings' => "No s'ha pogut carregar l'arxiu de configuraci&oacute;, potser no existeix o hi ha un error de configuraci&oacute; de permisos",
    'SecurityException:Codeblock' => "Acc&eacute;s denegat per l'execuci&oacute; de bloc de codi privilegiat",
    'DatabaseException:WrongCredentials' => "No s'ha pugut connectar a la base de dades amb les credencials prove&iuml;des. Verifica l'arxiu de configuraci&oacute;",
    'DatabaseException:NoConnect' => "No es pot consultar la base de dades '%s', si us plau verifica que la base de dades existeix i que hi tens permisos",
    'SecurityException:FunctionDenied' => "Acc&eacute;s denegat a la funci&oacute; privilegiada '%s'",
    'DatabaseException:DBSetupIssues' => "S'han trobat una quantitat d'errors: ",
    'DatabaseException:ScriptNotFound' => "No s'ha pogut trobar l'script de base de dades %s",
    'DatabaseException:InvalidQuery' => "Consulta inv&agrave;lida",
    'IOException:FailedToLoadGUID' => "Error al carregar una nova %s de GUID: %d",
    'InvalidParameterException:NonElggObject' => "Passant un no-ElggObject a un constructor ElggObject!",
    'InvalidParameterException:UnrecognisedValue' => "No es reconeix el valor passat al constructor",
    'InvalidClassException:NotValidElggStar' => "GUID: %d no és un %s v&agrave;lid",
    'PluginException:MisconfiguredPlugin' => "%s (guid: %s) és un plugin desconfigurat que ha estat deshabilitat. Si us plau, revisa la Wiki d'Elgg per m&eacute;s informaci&oacute; (http://docs.elgg.org/wiki/)",
    'PluginException:CannotStart' => "%s (guid: %s) no pot iniciar-se. Motiu: %s",
    'PluginException:InvalidID' => "%s no és un ID de plugin v&agrave;lid",
    'PluginException:InvalidPath' => "%s és un path de plugin inv&agrave;lid",
    'PluginException:InvalidManifest' => "Arxiu de manifest inv&agrave;lid pel plugin %s",
    'PluginException:InvalidPlugin' => "%s no és un plugin v&agrave;lid",
    'PluginException:InvalidPlugin:Details' => "%s no és un plugin v&agrave;lid: %s",
    'ElggPlugin:MissingID' => "No es troba l'ID del plugin (guid %s)",
    'ElggPlugin:NoPluginPackagePackage' => "Manca ElggPluginPackage pel plugin amb ID %s (guid %s)",
    'ElggPluginPackage:InvalidPlugin:MissingFile' => "Manca l'arxiu %s al package",
    'ElggPluginPackage:InvalidPlugin:InvalidDependency' => "Tipus de depend&egrave;ncia '%s' inv&agrave;lida",
    'ElggPluginPackage:InvalidPlugin:InvalidProvides' => "Tipus '%s' provist inv&agrave;lid",
    'ElggPluginPackage:InvalidPlugin:CircularDep' => "Depend&egrave;ncia %s inv&agrave;lida '%s' al plugin %s. Els plugins no poden entrar en conlicte amb altres requerits!",
    'ElggPlugin:Exception:CannotIncludeFile' => "No pot incloure's %s pel plugin %s (guid: %s) a %s. Verifica els permisos!",
    'ElggPlugin:Exception:CannotRegisterViews' => "No pot cargar-se el directori 'views' pel plugin %s (guid: %s) a %s. Verifica els permisos!",
    'ElggPlugin:Exception:CannotRegisterLanguages' => "No poden registrar-se llenguatges pel plugin %s (guid: %s) a %s.  Verifica els permisos!",
    'ElggPlugin:Exception:NoID' => "No s'ha trobat l'ID pel plugin amb guid %s!",
    'PluginException:ParserError' => "Error processant el manifiest amb versi&oacute; d'API %s al plugin %s",
    'PluginException:NoAvailableParser' => "No es troba un processador pel manifest de la versi&oacute; de l'API %s al plugin %s",
    'PluginException:ParserErrorMissingRequiredAttribute' => "Manca l'atribut '%s' al manifest del plugin %s",
    'ElggPlugin:Dependencies:Requires' => 'Requereix',
    'ElggPlugin:Dependencies:Suggests' => 'Suggereix',
    'ElggPlugin:Dependencies:Conflicts' => 'Conflictes',
    'ElggPlugin:Dependencies:Conflicted' => 'En conflicte',
    'ElggPlugin:Dependencies:Provides' => 'Proveeix',
    'ElggPlugin:Dependencies:Priority' => 'Prioritat',
    'ElggPlugin:Dependencies:Elgg' => 'Versi&oacute; Elgg',
    'ElggPlugin:Dependencies:PhpExtension' => 'Extensi&oacute; PHP: %s',
    'ElggPlugin:Dependencies:PhpIni' => 'Configuraci&oacute; PHP ini: %s',
    'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
    'ElggPlugin:Dependencies:Priority:After' => 'Despr&eacute;s %s',
    'ElggPlugin:Dependencies:Priority:Before' => 'Abans %s',
    'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s no instal&middot;lat',
    'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Manca',
    'ElggPlugin:InvalidAndDeactivated' => "%s no és un plugin v&agrave;lid i s'ha deshabilitat",
    'InvalidParameterException:NonElggUser' => "Passant un no-ElggUser a un constructor ElggUser!",
    'InvalidParameterException:NonElggSite' => "Passant un no-ElggSite a un constructor ElggSite!",
    'InvalidParameterException:NonElggGroup' => "Passant un no-ElggGroup a un constructor ElggGroup!",
    'IOException:UnableToSaveNew' => "No s'ha pogut guardar un nou %s",
    'InvalidParameterException:GUIDNotForExport' => "No s'ha especificat un GUID durant l'exportaci&oacute;, aix&ograve; no hauria de passar",
    'InvalidParameterException:NonArrayReturnValue' => "Funci&oacute; de serialitzaci&oacute; d'entitat passada a un par&agrave;metre de retorn no-array",
    'ConfigurationException:NoCachePath' => "Path de mem&ograve;ria cau seteat en Null!",
    'IOException:NotDirectory' => "%s no és un directori",
    'IOException:BaseEntitySaveFailed' => "No s'ha pogut guardar una nova entitat!",
    'InvalidParameterException:UnexpectedODDClass' => "import() passat a una classe ODD inesperat",
    'InvalidParameterException:EntityTypeNotSet' => "Ha de setear-se el tipus d'entitat",
    'ClassException:ClassnameNotClass' => "%s no és un %s",
    'ClassNotFoundException:MissingClass' => "Classe '%s' no trobada, manca alg&uacute; plugin?",
    'InstallationException:TypeNotSupported' => "No es reconeix el tipus %s. Aix&ograve; indica un error en la instal&middot;laci&oacute;, segurament causat per una actualizaci&oacute; incompleta",
    'ImportException:ImportFailed' => "No s'ha pogut importar l'element %d",
    'ImportException:ProblemSaving' => "S'ha trobat un problema al guardar %s",
    'ImportException:NoGUID' => "S'ha creat una nova entitat sense GUID, aix&ograve; no ha de passar",
    'ImportException:GUIDNotFound' => "No s'ha pogut trobar l'entitat '%d'",
    'ImportException:ProblemUpdatingMeta' => "S'ha produ&iuml;t un error actualitzant '%s' en l'entitat '%d'",
    'ExportException:NoSuchEntity' => "GUID d'entitat inv&agrave;lid: %d",
    'ImportException:NoODDElements' => "No s'han trobat elements OpenDD per la importaci&oacute;, la importaci&oacute; ha fallat",
    'ImportException:NotAllImported' => "No s'han importat tots els elements",
    'InvalidParameterException:UnrecognisedFileMode' => "Mode d'arxiu '%s' no reconegut",
    'InvalidParameterException:MissingOwner' => "L'arxiu %s (guid: %d) (guid del propietari: %d) no t&eacute; propietari!",
    'IOException:CouldNotMake' => "No s'ha pogut realitzar %s",
    'IOException:MissingFileName' => "Has d'especificar un nom abans d'obrir un arxiu",
    'ClassNotFoundException:NotFoundNotSavedWithFile' => "No ha pogut carregar-se la classe de repositori %s per l'arxiu %u",
    'NotificationException:NoNotificationMethod' => "No s'ha especificat un m&egrave;tode de notificaci&oacute;",
    'NotificationException:NoHandlerFound' => "No s'ha trobat un controlador '%s' o no és executable",
    'NotificationException:ErrorNotifyingGuid' => "S'ha donat un error al notificar %d",
    'NotificationException:NoEmailAddress' => "No ha pogut carregar-se la adreça de Email pel GUID:%d",
    'NotificationException:MissingParameter' => "Manca par&agrave;metre requerit: '%s'",
    'DatabaseException:WhereSetNonQuery' => "On no contingui WhereQueryComponent",
    'DatabaseException:SelectFieldsMissing' => "Manquen camps en l'estil de consulta",
    'DatabaseException:UnspecifiedQueryType' => "Tipus de consulta no reconegut o no especificat",
    'DatabaseException:NoTablesSpecified' => "No s'han trobat les taules per la consulta",
    'DatabaseException:NoACL' => "No s'ha especificat el control d'acc&eacute;s en la consulta",
    'InvalidParameterException:NoEntityFound' => "No s'ha trobat l'entitat, potser que no existeixi o que no tinguis els permisos necessaris sobre ella",
    'InvalidParameterException:GUIDNotFound' => "No s'ha pugut trobar el GUID: %s, o no tens acc&eacute;s a ella",
    'InvalidParameterException:IdNotExistForGUID' => "Ho sentim, '%s' no existeix pel guid: %d",
    'InvalidParameterException:CanNotExportType' => "Ho sentim, no es troba implementada l'exportaci&oacute; de '%s'",
    'InvalidParameterException:NoDataFound' => "No s'han trobat resultats",
    'InvalidParameterException:DoesNotBelong' => "No pertany a la entitat",
    'InvalidParameterException:DoesNotBelongOrRefer' => "No pertany o es refereix a l'entitat",
    'InvalidParameterException:MissingParameter' => "Manca par&agrave;metre, ha de proveir un GUID",
    'InvalidParameterException:LibraryNotRegistered' => '%s no és una llibreria registrada',
    'APIException:ApiResultUnknown' => "Els resultats de l'API no són coneguts, aix&ograve; no ha de passar",
    'ConfigurationException:NoSiteID' => "No s'ha especificat un ID del lloc",
    'SecurityException:APIAccessDenied' => "Ho sentim, l'acc&eacute;s a l'API ha estat deshabilitat per a l'administrador",
    'SecurityException:NoAuthMethods' => "No s'han trobat m&egrave;todes d'autenticaci&oacute; per a processar la sol&iuml;licitut",
    'SecurityException:UnexpectedOutputInGatekeeper' => "Sortida inesperada en resultat gatekeeper. Aturant l'execuci&oacute; per seguretat. Revisa http://docs.elgg.org/ per m&eacute;s informaci&oacute;",
    'InvalidParameterException:APIMethodOrFunctionNotSet' => "M&egrave;tode o funci&oacute; no especificat en la crida a expose_method()",
    'InvalidParameterException:APIParametersArrayStructure' => "Estructures d'Array són inv&agrave;lides en crides a la funci&oacute; '%s'",
    'InvalidParameterException:UnrecognisedHttpMethod' => "M&egrave;tode http %s no reconegut pel m&egrave;tode '%s' de l'API",
    'APIException:MissingParameterInMethod' => "Manca par&agrave;metre %s en m&egrave;tode %s",
    'APIException:ParameterNotArray' => "%s no és un Array",
    'APIException:UnrecognisedTypeCast' => "Tipus no reconegut en casting %s per a la variable '%s' en el m&egrave;tode '%s'",
    'APIException:InvalidParameter' => "S'ha trobat un par&agrave;metre inv&agrave;lid per '%s' en el m&egravetode '%s'",
    'APIException:FunctionParseError' => "%s(%s) t&eacute; un error de processat",
    'APIException:FunctionNoReturn' => "%s(%s) no ha retornat cap valor",
    'APIException:APIAuthenticationFailed' => "La crida al m&egrave;tode ha fallat en l'autenticaci&oacute; de l'API",
    'APIException:UserAuthenticationFailed' => "La crida al m&egrave;tode ha fallat en l'autenticaci&oacute; de l'usuari",
    'SecurityException:AuthTokenExpired' => "El token d'autenticaci&oacute; no se troba o b&eacute; ha expirat",
    'CallException:InvalidCallMethod' => "%s ha de cridar-se utilizant '%s'",
    'APIException:MethodCallNotImplemented' => "La crida al m&egrave;tode '%s' no es troba implementada",
    'APIException:FunctionDoesNotExist' => "La funci&oacute; pel m&egrave;tode '%s' no es executable",
    'APIException:AlgorithmNotSupported' => "No se soporta o s'ha deshabilitat l'algoritme '%s'",
    'ConfigurationException:CacheDirNotSet' => "Directori de mem&ograve;ria cau 'cache_path' no establert",
    'APIException:NotGetOrPost' => "El m&egrave;tode de Request ha de ser GET o POST",
    'APIException:MissingAPIKey' => "Manca clau API",
    'APIException:BadAPIKey' => "Clau API incorrecta",
    'APIException:MissingHmac' => "Manca capçalera X-Elgg-hmac",
    'APIException:MissingHmacAlgo' => "Manca capçalera X-Elgg-hmac-algo",
    'APIException:MissingTime' => "Manca capçalera X-Elgg-time",
    'APIException:MissingNonce' => "Manca capçalera X-Elgg-nonce",
    'APIException:TemporalDrift' => "X-Elgg-time és molt lluny&agrave; en el passat o en el futur. Fallida Epoch",
    'APIException:NoQueryString' => "No hi han dades en la query string",
    'APIException:MissingPOSTHash' => "Manca capçalera X-Elgg-posthash",
    'APIException:MissingPOSTAlgo' => "Manca capçalera X-Elgg-posthash_algo",
    'APIException:MissingContentType' => "Manca Content type per a post data",
    'SecurityException:InvalidPostHash' => "Hash de POST data inv&agrave;lid - S'esperava %s per&ograve; s'ha rebut %s",
    'SecurityException:DupePacket' => "Signatura de paquet ja vista",
    'SecurityException:InvalidAPIKey' => "Clau API inv&agrave;lida o manca",
    'NotImplementedException:CallMethodNotImplemented' => "La crida al m&egrave;tode '%s' no est&agrave; soportat",
    'NotImplementedException:XMLRPCMethodNotImplemented' => "Crida al m&egrave;tode XML-RPC '%s' no implementada",
    'InvalidParameterException:UnexpectedReturnFormat' => "La crida al m&egrave;tode '%s' ha retornat un resultat inesperat",
    'CallException:NotRPCCall' => "La crida no sembla ser una crida XML-RPC v&agrave;lida",
    'PluginException:NoPluginName' => "No s'ha pugut trobar el nom del plugin",
    'SecurityException:authenticationfailed' => "No s'ha pogut autenticar l'usuari",
    'CronException:unknownperiod' => "%s no és un per&iacute;ode reconeixible",
    'SecurityException:deletedisablecurrentsite' => "No pot eliminar o deshabilitar el lloc que est&agrave; veient en aquest moment!",
    'RegistrationException:EmptyPassword' => "Els camps de contrasenyes s&oacute;n obligatoris",
    'RegistrationException:PasswordMismatch' => "Les contrasenyes han de coincidir",
    'LoginException:BannedUser' => "El teu ingr&eacute;s ha estat bloquejat moment&agrave;neament",
    'LoginException:UsernameFailure' => "No s'ha pogut iniciar la sessi&oacute;. Si us plau, verifica el teu nom d'usuari i contrasenya",
    'LoginException:PasswordFailure' => "No s'ha pogut iniciar la sessi&oacute;. Si us plau, verifica el teu nom d'usuari i contrasenya",
    'LoginException:AccountLocked' => "El teu compte ha estat bloquejat per la quantitat d'intents erronis d'inici de sessi&oacute;",
    'memcache:notinstalled' => "M&ograve;dul memcache del PHP no instal&middot;lat, has d'instal&middot;lar el m&ograve;dul php5-memcache",
    'memcache:noservers' => 'No hi han servers memcache definits, si us plau popula la variable $CONFIG->memcache_servers',
    'memcache:versiontoolow' => "Memcache requereix com a m&iacute;nim la versi&oacute; %s per el seu funcionament, s'est&agrave; executant la versi&oacute; %s",
    'memcache:noaddserver' => "Suport per a m&uacute;ltiples servidors deshabilitat, has d'actualitzar la llibreria memcache PECL",
    'deprecatedfunction' => "Precauci&oacute;: Aquest codi utilitza la funci&oacute; obsoleta \"%s\" que no és compatible amb aquesta versi&oacute; d'Elgg",
    'pageownerunavailable' => "Precauci&oacute;: L'administrador de p&agrave;gina %d no es troba accesible!",
    'viewfailure' => "S'ha donat un error intern en la vista %s",
    'changebookmark' => "Si us plau, modifica el teu &iacute;ndex per aquesta vista",
    /**
     * API
     */
    'system.api.list' => "Llista de totes les crides de l'API del sistema",
    'auth.gettoken' => "La crida permet a l'usuari obtenir un testimoni d'autenticació que pot utilitzar per a futures crides a l'API enviant-lo com a paràmetre auth_token",
    /**
     * User details
     */
    'name' => "Nom",
    'email' => "Adreça de correu electrònic",
    'username' => "Nom de l'usuari",
    'loginusername' => "Nom de l'usuari o adreça de correu electrònic",
    'password' => "Contrasenya",
    'passwordagain' => "Contrasenya (verificació)",
    'admin_option' => "Voleu que l'usuari sigui administrador?",
    /**
     * Access
     */
    'PRIVATE' => "Privat",
    'LOGGED_IN' => "Usuaris connectats",
    'PUBLIC' => "Tots",
    'access:friends:label' => "Contactes",
    'access' => "Accés",
    /**
     * Dashboard and widgets
     */
    'dashboard' => "Quadre de control",
    'dashboard:nowidgets' => "El quadre de control us permet seguir l'activitat i el contingut que us pugui interessar del lloc web",
    'widgets:add' => "Afegir un enginy",
    'widgets:add:description' => "Per afegir un enginy a la pàgina premeu el botó",
    'widgets:position:fixed' => "(Posició fixa a la pàgina)",
    'widget:unavailable' => "S'ha afegit l'enginy",
    'widget:numbertodisplay' => "Quantitat d'elements a visualitzar",
    'widget:delete' => "Suprimir %s",
    'widget:edit' => "Personalitzar l'enginy",
    'widgets' => "Enginys",
    'widget' => "Enginy",
    'item:object:widget' => "Enginys",
    'widgets:save:success' => "L'enginy s'ha desat correctament",
    'widgets:save:failure' => "No s'ha pogut desar l'enginy. Torneu-ho a intentar",
    'widgets:add:success' => "L'enginy s'ha afegit correctament",
    'widgets:add:failure' => "No s'ha pogut afegir l'enginy",
    'widgets:move:failure' => "No s'ha pogut desar la posició de l'enginy",
    'widgets:remove:failure' => "No s'ha pogut suprimir l'enginy",
    /**
     * Groups
     */
    'group' => "Grup",
    'item:group' => "Grups",
    /**
     * Users
     */
    'user' => "Usuari/a",
    'item:user' => "Usuaris/es",
    /**
     * Friends
     */
    'friends' => "Contactes",
    'friends:yours' => "Els teus contactes",
    'friends:owned' => "Contacte de %s",
    'friend:add' => "Nou contacte",
    'friend:remove' => "Esborrar contacte",
    'friends:add:successful' => "S'ha afegit a %s com a contacte",
    'friends:add:failure' => "No s'ha pogut afegir a %s com a contacte. Si us plau, intenta-ho de nou",
    'friends:remove:successful' => "S'ha esborrat a %s dels teus contactes",
    'friends:remove:failure' => "No s'ha pogut esborrar a %s dels teus contactes. Si us plau intenta-ho de nou",
    'friends:none' => "Aquest/a usuari/a encara no t&eacute; contactes",
    'friends:none:you' => "Encara no tens contactes",
    'friends:none:found' => "No s'han trobat contactes",
    'friends:of:none' => "Ning&uacute; ha afegit encara a aquest/a usuari/a com a contacte",
    'friends:of:none:you' => "Ning&uacute; t'ha afegit encara com a contacte. Pots completar el teu perfil i afegir continguts perque la gent et trobi!",
    'friends:of:owned' => "Contactes de %s",
    'friends:of' => "Contactes de",
    'friends:collections' => "Col&middot;leccions de contactes",
    'collections:add' => "Nova col&middot;lecci&oacute;",
    'friends:collections:add' => "Nova col&middot;lecci&oacute; de contactes",
    'friends:addfriends' => "Sel&middot;leccionar contactes",
    'friends:collectionname' => "Nom de la col&middot;lecci&oacute;",
    'friends:collectionfriends' => "Contactes en la col&middot;lecci&oacute;",
    'friends:collectionedit' => "Editar aquesta col&middot;lecci&oacute;",
    'friends:nocollections' => "Encara no tens col&middot;leccions",
    'friends:collectiondeleted' => "La col&middot;lecci&oacute; ha estat esborrada",
    'friends:collectiondeletefailed' => "No s'ha pogut eliminar la col&middot;lecci&oacute;",
    'friends:collectionadded' => "La col&middot;lecci&oacute; s'ha creat correctament",
    'friends:nocollectionname' => "Has de posar un nom a la col&middot;lecci&oacute; abans de crear-la",
    'friends:collections:members' => "Membres d'aquesta col&middot;lecci&oacute;",
    'friends:collections:edit' => "Editar col&middot;lecci&oacute;",
    'friends:collections:edited' => "Col&middot;lecci&oacute; guardada",
    'friends:collection:edit_failed' => "No s'ha pogut guardar la col&middot;lecci&oacute;",
    'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'avatar' => 'Imatge de perfil',
    'avatar:create' => 'Crea la teva imatge de perfil',
    'avatar:edit' => 'Editar imatge de perfil',
    'avatar:preview' => 'Previsualitzar',
    'avatar:upload' => 'Pujar nova imatge de perfil',
    'avatar:current' => 'Imatge de perfil actual',
    'avatar:crop:title' => "Eina de retall d'imatge de perfil",
    'avatar:upload:instructions' => "La teva imatge de perfil ja es mostra a la plateforma. Podr&agrave;s modificar-la sempre que vulguis (Formats d'arxiu acceptats: GIF, JPG o PNG)",
    'avatar:create:instructions' => "Fes click i arrossega un quadrat per a sel&middot;leccionar la retallada de la imatge. Veur&agrave;s una previsualitzaci&oacute; a la caixa de la dreta. Quan estiguis d'acord amb la previsualitzaci&oacute;, fes click a \'Crea la teva imatge de perfil\'. La versi&oacute; retallada ser&agrave; la utilitzada per a mostrar a la plataforma",
    'avatar:upload:success' => 'Imatge de perfil pujada correctament',
    'avatar:upload:fail' => 'Ha fallat la pujada de la imatge de perfil',
    'avatar:resize:fail' => 'Error al modificar el tamany de la imatge de perfil',
    'avatar:crop:success' => 'Retallada de la imatge de perfil finalitzada correctament',
    'avatar:crop:fail' => 'Error en la retallada de la imatge de perfil',
    'profile:edit' => 'Editar perfil',
    'profile:aboutme' => "Sobre mi",
    'profile:description' => "Sobre mi",
    'profile:briefdescription' => "Descripci&oacute; curta",
    'profile:location' => "Ubicaci&oacute;",
    'profile:skills' => "Habilitats",
    'profile:interests' => "Interessos",
    'profile:contactemail' => "Email de contacte",
    'profile:phone' => "Tel&egrave;fon",
    'profile:mobile' => "M&ograve;vil",
    'profile:website' => "Lloc Web",
    'profile:twitter' => "Usuari de Twitter",
    'profile:saved' => "El teu perfil s'ha guardat correctament",
    'admin:appearance:profile_fields' => 'Editar camps de perfil',
    'profile:edit:default' => 'Editar camps de perfil',
    'profile:label' => "Etiqueta de perfil",
    'profile:type' => "Tipus de perfil",
    'profile:editdefault:delete:fail' => 'Error en eliminar &iacute;tem de perfil per defecte',
    'profile:editdefault:delete:success' => '&Iacute;tem de perfil per defecte eliminat!',
    'profile:defaultprofile:reset' => 'Reinici de perfil de sistema per defecte',
    'profile:resetdefault' => 'Reiniciar perfil de sistema per defecte',
    'profile:explainchangefields' => "Pots canviar els camps del perfil utilitzant el formulari. \n\n Introdueix un nou nom de camp de perfil, per exemple, 'Tecnologia renovable favorita', despr&eacute;s sel&middot;lecciona el tipus de camp (eg. texte, url, tags), i fes click al bot&oacute; 'Afegir'. Per a endreçar els camps, arrossega el control al costat de l'etiqueta del camp. Per a editar l'etiqueta del camp, fes click en el texte de l'etiqueta per a tornar-ho editable. \n\n Pots tornar a la disposici&oacute; original del perfil en qualsevol moment, per&ograve; perdr&agrave;s la informaci&oacute; creada en els camps personalitzats del perfil",
    'profile:editdefault:success' => 'Element afegit al perfil per defecte correctament',
    'profile:editdefault:fail' => "No s'ha pugut guardar el perfil per defecte",
    /**
     * Feeds
     */
    'feed:rss' => 'Canal RSS per aquesta p&agrave;gina',
    /**
     * Links
     */
    'link:view' => 'Veure enllaç',
    'link:view:all' => 'Veure tots',
    /**
     * River
     */
    'river' => "River",
    'river:friend:user:default' => "%s ara &eacute;s contacte de %s",
    'river:update:user:avatar' => '%s t&eacute; una nova imatge de perfil',
    'river:noaccess' => 'No tens permisos per a veure aquest element',
    'river:posted:generic' => '%s publicat',
    'riveritem:single:user' => 'un/a usuari/a',
    'riveritem:plural:user' => 'alguns/es usuaris/es',
    'river:ingroup' => 'en el grup %s',
    'river:none' => 'Sense activitat',
    'river:widget:title' => "Activitat",
    'river:widget:description' => "Veure la &uacute;ltima activitat",
    'river:widget:type' => "Tipus d'activitat",
    'river:widgets:friends' => 'Activitat de contactes',
    'river:widgets:all' => "Tota l'activitat del lloc",
    /**
     * Notifications
     */
    'notifications:usersettings' => "Configuraci&oacute; de notificacions",
    'notifications:methods' => "Si us plau, indica els m&egrave;todes que vols habilitar",
    'notifications:usersettings:save:ok' => "La teva configuraci&oacute; de notificacions s'ha guardat correctament",
    'notifications:usersettings:save:fail' => "Hi ha hagut un error al guardar la configuraci&oacute; de notificacions",
    'user.notification.get' => 'Retornar la configuraci&oacute; de notificacions per un/a usuari/a',
    'user.notification.set' => 'Guardar la configuraci&oacute; de notificacions per un/a usuari/a',
    /**
     * Search
     */
    'search' => "Cercar",
    'searchtitle' => "Cercar: %s",
    'users:searchtitle' => "Cercar per usuaris/es: %s",
    'groups:searchtitle' => "Cercar per grups: %s",
    'advancedsearchtitle' => "%s amb coincid&egrave;ncies en resultats %s",
    'notfound' => "No s'han trobat resultats",
    'next' => "Seg&uuml;ent",
    'previous' => "Anterior",
    'viewtype:change' => "Modificar tipus de llista",
    'viewtype:list' => "Veure llista",
    'viewtype:gallery' => "Galeria",
    'tag:search:startblurb' => "&Iacute;tems amb etiquetes que coincideixen amb '%s':",
    'user:search:startblurb' => "Usuaris/es que coincideixen amb '%s':",
    'user:search:finishblurb' => "Click aqu&iacute; per a veure m&eacute;s",
    'group:search:startblurb' => "Grups que coincideixen amb '%s':",
    'group:search:finishblurb' => "Click aqu&iacute; per a veure m&eacute;s",
    'search:go' => 'Anar',
    'userpicker:only_friends' => 'Nom&eacute;s contactes',
    /**
     * Account
     */
    'account' => "Compte",
    'settings' => "Configuraci&oacute;",
    'tools' => "Eines",
    'register' => "Registrar-se",
    'registerok' => "T'has registrat correctament per %s",
    'registerbad' => "No t'has pugut registrar degut a un error desconegut",
    'registerdisabled' => "El registre s'ha deshabilitat per l'administrador del sistema",
    'registration:notemail' => "No has ingressat una adreça d'email v&agrave;lida",
    'registration:userexists' => "El nom d'usuari/a ja existeix",
    'registration:usernametooshort' => "El nom d'usuari/a ha de tenir un m&iacute;nim de %u car&agrave;cters",
    'registration:passwordtooshort' => "La contrasenya ha de tenir un m&iacute;nim de %u car&agrave;cters",
    'registration:dupeemail' => "Ja es troba registrada la adreça d'email",
    'registration:invalidchars' => "El teu nom d'usuari/a t&eacute; car&agrave;acters inv&agrave;lids: %s. Aquests s&oacute;n tots els car&agrave;cters que es troban invalidats: %s",
    'registration:emailnotvalid' => "La adreça d'email que has ingressat &eacute;s inv&agrave;lid al sistema",
    'registration:passwordnotvalid' => 'La contrasenya que has ingressat es inv&agrave;lid al sistema',
    'registration:usernamenotvalid' => "El nom d'usuari/a que has ingressat &eacute;s inv&agrave;lid al sistema",
    'adduser' => "Nou usuari/a",
    'adduser:ok' => "S'ha enregistrat correctament un nou usuari/a",
    'adduser:bad' => "No s'ha pogut enregistrar el nou usuari/a",
    'user:set:name' => "Configuraci&oacute; del nom de compte",
    'user:name:label' => "El meu nom per a mostrar",
    'user:name:success' => "S'ha modificat correctament el seu nom a la plataforma",
    'user:name:fail' => "No s'ha pogut modificar el seu nom a la plataforma. Si us plau, assegura't que no es massa llarg i prova de nou",
    'user:set:password' => "Contrasenya del compte",
    'user:current_password:label' => 'Contrasenya actual',
    'user:password:label' => "Nova contrasenya",
    'user:password2:label' => "Confirmar nova contrasenya",
    'user:password:success' => "Contrasenya modificada",
    'user:password:fail' => "No s'ha pogut modificar la contrasenya a la plataforma",
    'user:password:fail:notsame' => "Les dues contrasenyes no coincideixen!",
    'user:password:fail:tooshort' => "La contrasenya &eacute;s massa curta!",
    'user:password:fail:incorrect_current_password' => "La contrasenya ingressada &eacute;s incorrecta",
    'user:resetpassword:unknown_user' => "Usuari/a inv&agrave;lid",
    'user:resetpassword:reset_password_confirm' => "Al modificar la contrasenya rebr&agrave;s la nova a la direcci&oacute; d'email registrada",
    'user:set:language' => "Configuraci&oacute; de l'idioma",
    'user:language:label' => "El teu idioma",
    'user:language:success' => "S'ha actualitzat la teva configuraci&oacute; d'idioma",
    'user:language:fail' => "No s'ha pogut actualitzar la teva configuraci&oacute; d'idioma",
    'user:username:notfound' => "No es troba l'usuari/a %s",
    'user:password:lost' => "He oblidat la meva contrasenya",
    'user:password:resetreq:success' => "Sol&middot;licitut de nova contrasenya confirmada, se t'ha enviat un email",
    'user:password:resetreq:fail' => "No s'ha pugut sol&middot;licitar una nova contrasenya",
    'user:password:text' => "Per a sol&middot;licitar una nova contrasenya ingressa el teu nom d'usuari/a i pressiona el bot&oacute; de sota",
    'user:persistent' => "Recorda-m'ho",
    'walled_garden:welcome' => "Benvingut a",
    /**
     * Administration
     */
    'menu:page:header:administer' => "Administrar",
    'menu:page:header:configure' => "Configurar",
    'menu:page:header:develop' => "Desenvolupar",
    'menu:page:header:default' => "Altres",
    'admin:view_site' => "Veure lloc web",
    'admin:loggedin' => "Sessió iniciada com a %s",
    'admin:menu' => "Menú",
    'admin:configuration:success' => "S'ha desat la vostra configuració",
    'admin:configuration:fail' => "No s'ha pogut desar la vostra configuració",
    'admin:unknown_section' => "La secció d'administració no és vàlida",
    'admin' => "Administració",
    'admin:description' => "El tauler d'administració us permet organitzar tots els aspectes del sistema, des de la gestió dels usuaris al comportament de les extensions. Per començar, seleccioneu una opció",
    'admin:statistics' => "Estadístiques",
    'admin:statistics:overview' => "Resum",
    'admin:appearance' => "Aparença",
    'admin:utilities' => "Utilitats",
    'admin:users' => "Usuaris",
    'admin:users:online' => "Connectats",
    'admin:users:newest' => "El més nou",
    'admin:users:add' => "Afegir un usuari",
    'admin:users:description' => "El tauler d'administració us permet gestionar la configuració d'usuaris de la xarxa. Per començar, seleccioneu una opció",
    'admin:users:adduser:label' => "Premeu per afegir un nou usuari..",
    'admin:users:opt:linktext' => "Configuració dels usuaris..",
    'admin:users:opt:description' => "Configuració dels usuaris i informació dels comptes..",
    'admin:users:find' => "Cercar",
    'admin:settings' => "Configuració",
    'admin:settings:basic' => "Configuració Bàsica",
    'admin:settings:advanced' => "Configuració Avançada",
    'admin:site:description' => "El tauler d'administració us permet gestionar la configuració global de la xarxa. Per començar, seleccioneu una opció",
    'admin:site:opt:linktext' => "Configurar el lloc web..",
    'admin:site:access:warning' => "Les modificacions del control d'accés s'activaran en el proper accés",
    'admin:dashboard' => "Tauler de control",
    'admin:widget:online_users' => "Usuaris connectats",
    'admin:widget:online_users:help' => "Llista d'usuaris connectats a la xarxa",
    'admin:widget:new_users' => "Nous usuaris",
    'admin:widget:new_users:help' => "Fes una llista dels usuaris més nous",
    'admin:widget:content_stats' => "Estadístiques del contingut",
    'admin:widget:content_stats:help' => "Seguiment del contingut creat pels usuaris de la xarxa",
    'widget:content_stats:type' => "Tipus de contingut",
    'widget:content_stats:number' => "Número",
    'admin:widget:admin_welcome' => "Benvinguts",
    'admin:widget:admin_welcome:help' => "Aquesta és l'àrea d'administració",
    'admin:widget:admin_welcome:intro' =>
    "Benvinguts! Us trobeu al tauler de control de l'administració. És una eina útil per a visualitzar les novetats de la xarxa",
    'admin:widget:admin_welcome:admin_overview' =>
    "La navegació per l'àrea d'administració es troba al menú de la dreta i s'organitza en"
    . " tres seccions:
	<dl>
		<dt>Administrar</dt><dd>Tasques diàries com monitoritzar els continguts, verificar els usuaris connectats i visualitzar les estadístiques.</dd>
		<dt>Configurar</dt><dd>Tasques ocasionals com establir el nom de la xarxa social i activar/desactivar extensions.</dd>
		<dt>Desenvolupar</dt><dd>Per a desenvolupadors d'extensions i disseny de temes personalitzats. (Necessita l'extensió de desenvolupador.)</dd>
	</dl>
	",
    // argh, this is ugly
    'admin:widget:admin_welcome:outro' => "<br />Verifiqueu els recursos disponibles als enllaços del peu de pàgina. Gràcies per utilitzar Elgg!",
    'admin:footer:faq' => "PMFs d'administració",
    'admin:footer:manual' => "Manual d'Administració",
    'admin:footer:community_forums' => "Fòrums de la comunitat de l'Elgg",
    'admin:footer:blog' => "Bloc de l'Elgg",
    'admin:plugins:category:all' => "Totes les extensions",
    'admin:plugins:category:active' => "Extensions activades",
    'admin:plugins:category:inactive' => "Extensions desactivades",
    'admin:plugins:category:admin' => "Administració",
    'admin:plugins:category:bundled' => "Inclòs",
    'admin:plugins:category:content' => "Contingut",
    'admin:plugins:category:development' => "Desenvolupament",
    'admin:plugins:category:enhancement' => "Millores",
    'admin:plugins:category:api' => "Servei/API",
    'admin:plugins:category:communication' => "Comunicació",
    'admin:plugins:category:security' => "Seguretat i Spam",
    'admin:plugins:category:social' => "Social",
    'admin:plugins:category:multimedia' => "Multimèdia",
    'admin:plugins:category:theme' => "Temes",
    'admin:plugins:category:widget' => "Enginys",
    'admin:plugins:sort:priority' => "Prioritat",
    'admin:plugins:sort:alpha' => "Alfabètic",
    'admin:plugins:sort:date' => "Les més noves",
    'admin:plugins:markdown:unknown_plugin' => "Extensió desconeguda",
    'admin:plugins:markdown:unknown_file' => "Arxiu desconegut",
    'admin:notices:could_not_delete' => "No s'ha pogut suprimir la notificació",
    'admin:options' => "Opcions d'administració",
    /**
     * Plugins
     */
    'plugins:settings:save:ok' => "La configuració de l'extensió %s s'ha desat correctament",
    'plugins:settings:save:fail' => "S'ha produït un error al desar la configuració de l'extensió %s",
    'plugins:usersettings:save:ok' => "S'ha desat la configuració de l'usuari per a l'extensió %s",
    'plugins:usersettings:save:fail' => "S'ha produït un error al desar la configuració de l'usuari per a l'extensió %s",
    'item:object:plugin' => "Extensions",
    'admin:plugins' => "Extensions",
    'admin:plugins:activate_all' => "Activar-les tots",
    'admin:plugins:deactivate_all' => "Desactivar-les tots",
    'admin:plugins:activate' => "Activar",
    'admin:plugins:deactivate' => "Desactivar",
    'admin:plugins:description' => "El tauler us permet controlar i configurar les eines instal·lades al lloc web",
    'admin:plugins:opt:linktext' => "Configurar les eines..",
    'admin:plugins:opt:description' => "Configurar les eines instal·lades al lloc web.",
    'admin:plugins:label:author' => "Autor",
    'admin:plugins:label:copyright' => "Copyright",
    'admin:plugins:label:categories' => "Categories",
    'admin:plugins:label:licence' => "Llicència",
    'admin:plugins:label:website' => "URL",
    'admin:plugins:label:moreinfo' => "més informació",
    'admin:plugins:label:version' => "Versió",
    'admin:plugins:label:location' => "Ubicació",
    'admin:plugins:label:dependencies' => "Dependències",
    'admin:plugins:warning:elgg_version_unknown' => "L'arxiu de manifest de l'extensió és obsolet i no especifica una versió compatible de l'Elgg. És molt probable que no funcioni!",
    'admin:plugins:warning:unmet_dependencies' => "L'extensió té dependències desconegudes i no s'activarà. Podeu consultar les dependències a l'apartat de més informació",
    'admin:plugins:warning:invalid' => "%s no és una extensió vàlida de l'Elgg. Per a solucionar el problema visiteu <a href='http://docs.elgg.org/Invalid_Plugin'>la documentació de l'Elgg</a>",
    'admin:plugins:cannot_activate' => "no s'ha pogut activar",
    'admin:plugins:set_priority:yes' => "Tornar a ordenar %s",
    'admin:plugins:set_priority:no' => "No s'ha pogut tornar a ordenar %s",
    'admin:plugins:deactivate:yes' => "Desactivar %s",
    'admin:plugins:deactivate:no' => "No s'ha pogut desactivar %s",
    'admin:plugins:activate:yes' => "S'ha activat %s",
    'admin:plugins:activate:no' => "No s'ha pogut activar %s",
    'admin:plugins:categories:all' => "Totes les categories",
    'admin:plugins:plugin_website' => "Lloc web de l'extensió",
    'admin:plugins:author' => "%s",
    'admin:plugins:version' => "Versió %s",
    'admin:plugins:simple' => "Simple",
    'admin:plugins:advanced' => "Avançada",
    'admin:plugin_settings' => "Configuració de l'extensió",
    'admin:plugins:simple_simple_fail' => "No s'ha pogut desar la configuració",
    'admin:plugins:simple_simple_success' => "S'ha desat la configuració",
    'admin:plugins:simple:cannot_activate' => "No s'ha pogut activar l'extensió. Per a més informació verifiqueu-ne l'àrea d'administració avançada.",
    'admin:plugins:warning:unmet_dependencies_active' => "L'extensió està activada però disposa de dependències desconegudes. Es poden produir erros en el seu funcionament. Per accedir a informació més detallada aneu a l'apartat \"Més informació\"",
    'admin:plugins:dependencies:type' => "Tipus",
    'admin:plugins:dependencies:name' => "Nom",
    'admin:plugins:dependencies:expected_value' => "Valor de Prova",
    'admin:plugins:dependencies:local_value' => "Valor Actual",
    'admin:plugins:dependencies:comment' => "Comentari",
    'admin:statistics:description' => "És un resum de les estadístiques del lloc web. Si necessiteu estadístiques més avançades podeu accedir-hi a través de la funcionalitat d'administració professional",
    'admin:statistics:opt:description' => "Veure la informació estadística dels usuaris i els objectes del lloc web",
    'admin:statistics:opt:linktext' => "Veure les estadístiques..",
    'admin:statistics:label:basic' => "Estadístiques bàsiques del lloc web",
    'admin:statistics:label:numentities' => "Entitats del lloc web",
    'admin:statistics:label:numusers' => "Nombre d'usuaris",
    'admin:statistics:label:numonline' => "Nombre d'usuaris connectats",
    'admin:statistics:label:onlineusers' => "Usuaris connectats",
    'admin:statistics:label:version' => "Versió de l'Elgg",
    'admin:statistics:label:version:release' => "Release",
    'admin:statistics:label:version:version' => "Versió",
    'admin:statistics:groups' => "Activitat grups",
    'admin:user:label:search' => "Trobar usuari:",
    'admin:user:label:searchbutton' => "Cercar",
    'admin:user:ban:no' => "No s'ha pogut bloquejar l'usuari",
    'admin:user:ban:yes' => "S'ha bloquejat l'usuari",
    'admin:user:self:ban:no' => "No us podeu desbloquejar",
    'admin:user:unban:no' => "No s'ha pogut desbloquejar l'usuari",
    'admin:user:unban:yes' => "S'ha desbloquejat l'usuari",
    'admin:user:delete:no' => "No s'ha pogut eliminar l'usuari",
    'admin:user:delete:yes' => "S'ha eliminat l'usuari %s",
    'admin:user:self:delete:no' => "No us podeu eliminar",
    'admin:user:resetpassword:yes' => "S'ha pogut tornar a establir la contrasenya. Es notificarà l'usuari",
    'admin:user:resetpassword:no' => "No s'ha pogut tornar a establir la contrasenya",
    'admin:user:makeadmin:yes' => "L'usuari és administrador",
    'admin:user:makeadmin:no' => "No s'ha pogut establir l'usuari com a administrador",
    'admin:user:removeadmin:yes' => "L'usuari ja no és administrador",
    'admin:user:removeadmin:no' => "No podeu treure els drets d'administrador a l'usuari",
    'admin:user:self:removeadmin:no' => "No podeu suprimir els drets d'administrador",
    'admin:appearance:menu_items' => "Elements del menú",
    'admin:menu_items:configure' => "Configurar els elements del menú principal",
    'admin:menu_items:description' => "Seleccioneu els elements del menú que voleu mostrar com a enllaços preferits. Els elements no seleccionats seran accessibles a través de l'element \"Més\" situat al final de la llista",
    'admin:menu_items:hide_toolbar_entries' => "Voleu treure els enllaços del menú de la barra d'eines ?",
    'admin:menu_items:saved' => "Elements del menú desats",
    'admin:add_menu_item' => "Afegir un element del menú personalitzat",
    'admin:add_menu_item:description' => "Per agregar un element al menú personalitzat introduïu el nom que es visualitzarà i la direcció URL associada",
    'admin:appearance:default_widgets' => "Enginys predeterminats",
    'admin:default_widgets:unknown_type' => "El tipus d'enginy és desconegut",
    'admin:default_widgets:instructions' => "Afegir, treure, noure i configurar els enginys predeterminats a la pàgina d'enginys seleccionada"
    . " Els canvis només s'aplicaran als nous usuaris",
    /**
     * User settings
     */
    'usersettings:description' => "El tauler de configuració us permet parametritzar les vostres preferències personals, des de l'administració d'usuaris al comportament de les extensions. Per a començar, seleccioneu una opció",
    'usersettings:statistics' => "Les vostres estadístiques",
    'usersettings:statistics:opt:description' => "Veure la informació estadística dels usuaris i objectes de la xarxa",
    'usersettings:statistics:opt:linktext' => "Estadístiques del compte",
    'usersettings:user' => "Les vostres preferències",
    'usersettings:user:opt:description' => "Aquesta funcionalitat us permet definir les vostres preferències",
    'usersettings:user:opt:linktext' => "Modificar les vostres preferències",
    'usersettings:plugins' => "Eines",
    'usersettings:plugins:opt:description' => "Preferències de configuració de les vostres eines actives",
    'usersettings:plugins:opt:linktext' => "Configureu les vostres eines",
    'usersettings:plugins:description' => "El tauler us permet definir les preferències personals de les eines habilitades per l'administrador del sistema",
    'usersettings:statistics:label:numentities' => "El contingut",
    'usersettings:statistics:yourdetails' => "La vostra informació detallada",
    'usersettings:statistics:label:name' => "Nom complet",
    'usersettings:statistics:label:email' => "Adreça de correu electrònic",
    'usersettings:statistics:label:membersince' => "Membre des de",
    'usersettings:statistics:label:lastlogin' => "Últim accés",
    /**
     * Activity river
     */
    'river:all' => "Activitat de tota la xarxa",
    'river:mine' => "La meva activitat",
    'river:friends' => "L'activitat dels meus amics",
    'river:select' => "Mostrar %s",
    'river:comments:more' => "+%u més",
    'river:generic_comment' => "comentat a %s %s",
    'friends:widget:description' => "Mostra alguns dels vostres amics",
    'friends:num_display' => "Quantitat d'amics a mostrar",
    'friends:icon_size' => "Mida de la icona",
    'friends:tiny' => "molt petita",
    'friends:small' => "petita",
    /**
     * Generic action words
     */
    'save' => "Guardar",
    'reset' => "Reiniciar",
    'publish' => "Publicar",
    'cancel' => "Cancel·lar",
    'saving' => "Desant..",
    'update' => "Actualitzar",
    'preview' => "Previsualitzar",
    'edit' => "Editar",
    'delete' => "Eliminar",
    'accept' => "Acceptar",
    'load' => "Carregar",
    'upload' => "Pujar",
    'ban' => "Bloquejar",
    'unban' => "Desbloquejar",
    'banned' => "Bloquejat",
    'enable' => "Habilitar",
    'disable' => "Inhabilitar",
    'request' => "Sol·licitud",
    'complete' => "Completa",
    'open' => "Obrir",
    'close' => "Tancar",
    'reply' => "Respondre",
    'more' => "Més",
    'comments' => "Comentaris",
    'import' => "Importar",
    'export' => "Exportar",
    'untitled' => "Sense Títol",
    'help' => "Ajuda",
    'send' => "Enviar",
    'post' => "Publicar",
    'submit' => "Enviar",
    'comment' => "Comentar",
    'upgrade' => "Actualitzar",
    'sort' => "Ordenar",
    'filter' => "Filtrar",
    'site' => "Lloc web",
    'activity' => "Activitat",
    'members' => "Membres",
    'up' => "Amunt",
    'down' => "Avall",
    'top' => "Primer",
    'bottom' => "Últim",
    'more' => "més",
    'invite' => "Convidat",
    'resetpassword' => "Tornar a establir la contrassenya",
    'makeadmin' => "Afegir un administrador",
    'removeadmin' => "Suprimir l'administrador",
    'option:yes' => "Sí",
    'option:no' => "No",
    'unknown' => "Desconegut",
    'active' => "Actiu",
    'total' => "Total",
    'learnmore' => "Premeu per a veure més",
    'content' => "contingut",
    'content:latest' => "Última activitat",
    'content:latest:blurb' => "Premeu alternativament per veure el contingut actualitzat de la xarxa.",
    'link:text' => "veure l'enllaç",
    /**
     * Generic questions
     */
    'question:areyousure' => "N'esteu segur?",
    /**
     * Generic data words
     */
    'title' => "Títol",
    'description' => "Descripció",
    'tags' => "Etiquetes",
    'spotlight' => "Enfocament",
    'all' => "Tots",
    'mine' => "Meu",
    'by' => "per",
    'none' => "res",
    'annotations' => "Anotacions",
    'relationships' => "Relacions",
    'metadata' => "Metadades",
    'tagcloud' => "Núvol d'etiquetes",
    'tagcloud:allsitetags' => "Etiquetes de tot el lloc web",
    /**
     * Entity actions
     */
    'edit:this' => "Editar",
    'delete:this' => "Suprimir",
    'comment:this' => "Comentar",
    /**
     * Input / output strings
     */
    'deleteconfirm' => "Segur que voleu suprimir l'element ?",
    'fileexists' => "S'ha penjat l'arxiu. Per a substituir-lo, seleccioneu:",
    /**
     * User add
     */
    'useradd:subject' => "S'ha creat el compte d'usuari",
    'useradd:body' => "
%s,
	
S'ha creat el vostre compte d'usuari a %s. Per iniciar una sessió visiteu:
	
%s

i inicieu la sessió amb les credencials següents:
	
Nom d'usuari: %s
contrasenya: %s
	
Us recomanem que modifiqueu la vista contrasenya un cop autenticats.
",
    /**
     * System messages
     * */
    'systemmessages:dismiss' => "Premeu-lo per tancar",
    /**
     * Import / export
     */
    'importsuccess' => "La importació s'ha realitzat correctament",
    'importfail' => "S'ha produït un error en la importació de dades de l'OpenDD",
    /**
     * Time
     */
    'friendlytime:justnow' => "ara",
    'friendlytime:minutes' => "fa %s minuts",
    'friendlytime:minutes:singular' => "fa un minut",
    'friendlytime:hours' => "fa %s hores",
    'friendlytime:hours:singular' => "fa una hora",
    'friendlytime:days' => "fa %s dies",
    'friendlytime:days:singular' => "ahir",
    'friendlytime:date_format' => "j F Y @ g:ia",
    'date:month:01' => "Gener %s",
    'date:month:02' => "Febrer %s",
    'date:month:03' => "Març %s",
    'date:month:04' => "Abril %s",
    'date:month:05' => "Maig %s",
    'date:month:06' => "Juny %s",
    'date:month:07' => "Juliol %s",
    'date:month:08' => "Agost %s",
    'date:month:09' => "Setembre %s",
    'date:month:10' => "Octubre %s",
    'date:month:11' => "Novembre %s",
    'date:month:12' => "Desembre %s",
    /**
     * System settings
     */
    'installation:sitename' => "El nom del lloc web:",
    'installation:sitedescription' => "Breu descripció del lloc web (opcional):",
    'installation:wwwroot' => "URL del lloc web:",
    'installation:path' => "El camí sencer a la instal·lació de l'Elgg:",
    'installation:dataroot' => "El camí sencer al directori de dades:",
    'installation:dataroot:warning' => "El directori s'ha de crear manualment. El directori ha d'estar en un directori diferent al de la instal·lació de l'Elgg",
    'installation:sitepermissions' => "Permisos d'accés predeterminats:",
    'installation:language' => "Idioma predeterminat:",
    'installation:debug' => "El mode Depuració ofereix informació extra que es pot utilitzar per avaluar incidències. L'activació del mode pot disminuir la velocitat de funcionament del sistema i només s'ha d'utilitzar quan es detectin problemes:",
    'installation:debug:none' => "Inhabilitar el mode Depuració (recomanat)",
    'installation:debug:error' => "Mostrar només els errors crítics",
    'installation:debug:warning' => "Mostrar només les alertes crítiques",
    'installation:debug:notice' => "Mostrar tots els errors, alertes i informació d'incidències",
    // Walled Garden support
    'installation:registration:description' => "El registre està activitat per defecte. Podeu desactivar l'opció per evitar que els usuaris es puguin registrar",
    'installation:registration:label' => "Habilitar el registre de nous usuaris",
    'installation:walled_garden:description' => "Habilitar l'execució del lloc web en una xarxa privada. L'opció impedeix la visualització de qualsevol pàgina no pública als usuaris no registrats",
    'installation:walled_garden:label' => "Restringir l'accés a les pàgines a usuaris registrats",
    'installation:httpslogin' => "Habiliteu l'opció per forçar l'autenticació HTTPS. Perquè funcioni també caldrà que habiliteu l'autenticació HTTPS al servidor",
    'installation:httpslogin:label' => "Habilitar l'autenticació HTTPS",
    'installation:view' => "Introduïu la vista predeterminada del lloc web o deixeu-ho en blanc per utilitzar la vista predeterminada (en cas de dubte deixeu la predeterminada):",
    'installation:siteemail' => "Adreça de correu electrònic del lloc web (s'utilitza per enviar correus electrònics del sistema):",
    'installation:disableapi' => "L'Elgg disposa d'una API per al desenvolupament de serveis web que permet que aplicacions remotes puguin interactuar amb el lloc web",
    'installation:disableapi:label' => "Habilitar la API de serveis web de l'Elgg",
    'installation:allow_user_default_access:description' => "Permet que els usuaris puguin establir el seu propi nivell d'accés predeterminat. Permet sobreescriure els nivell d'accés del sistema",
    'installation:allow_user_default_access:label' => "Habilitar l'accés predeterminat dels usuaris",
    'installation:simplecache:description' => "La memòria cau simple augmenta el rendiment en l'emmagatzematge de contingut estàtic com poden ser fulls  CSS i arxius JavaScript. En la majoria dels casos la funció està activada",
    'installation:simplecache:label' => "Utilitzar la memòria cau simple (recomanat)",
    'installation:viewpathcache:description' => "La memòria cau de camins de les vistes redueix els temps de càrrega de les extensions guardant la ubicació dels arxius",
    'installation:viewpathcache:label' => "Utilitzar la memòria cau de camins de les vistes (recomanat)",
    'upgrading' => "S'està actualitzant..",
    'upgrade:db' => "S'ha actualitzat la base de dades",
    'upgrade:core' => "S'ha actualitzat la instal·lació de l'Elgg",
    'upgrade:unable_to_upgrade' => "No s'ha pogut actualitzar",
    'upgrade:unable_to_upgrade_info' =>
    "La instal·lació no es pot actualitzar perquè s'han detectat vistes velles al directori de vistes
	del nucli de l'Elgg. Aquestes vistes estan obsoletes i s'han de suprimir per assegurar que l'Elgg funciona
	correctament. Si no heu realitzat modificacions de l'Elgg podeu suprimir el directori de vistes i
	reemplaçar-lo amb l'últim del paquet d'instal·lació de l'Elgg disponible a <a href='http://elgg.org'>elgg.org</a>.<br /><br />
	
	
	Si necessiteu instruccions detallades visiteu la <a href='http://docs.elgg.org/wiki/Upgrading_Elgg'>
	Documentació d'actualització de l'Elgg</a>. Si necessiteu ajuda visiteu els
	<a href='http://community.elgg.org/pg/groups/discussion/'>Fòrums de suport a la comunitat</a>",
    'update:twitter_api:deactivated' => "Durant l'actualització s'ha desactivat l'API de Twitter (anteriorment Twitter Service). Si la voleu utilitzar activeu-la manualment",
    'update:oauth_api:deactivated' => "Durant l'actualització s'ha desactivat l'API OAuth (anteriorment OAuth Lib). Si la voleu utilitzar activeu-la manualment",
    'deprecated:function' => "%s() ha quedat obsoleta per %s()",
    /**
     * Welcome
     */
    'welcome' => "Benvingut/da",
    'welcome:user' => "Benvingut/da %s",
    /**
     * Emails
     */
    'email:settings' => "Configuració del correu electrònic",
    'email:address:label' => "Adreça del correu electrònic",
    'email:save:success' => "S'ha desat la nova adreça de correu electrònic. S'ha sol·licitat la seva verificació",
    'email:save:fail' => "No s'ha pogut desar la nova adreça de correu electrònic",
    'friend:newfriend:subject' => "%s t'ha afegit a la seva llista de contactes!",
    'friend:newfriend:body' => "%s t'ha afegit a la seva llista de contactes!
	
	Per visualitzar el seu perfil premeu:
	
%s

Siusplau, no respongueu a aquest correu electrònic",
    'email:resetpassword:subject' => "S'ha restablert la contrasenya!",
    'email:resetpassword:body' => "Hola %s,
	
S'ha restablert la vostra contrasenya: %s",
    'email:resetreq:subject' => "Sol·licitud de nova contrasenya",
    'email:resetreq:body' => "Hola %s,

Algú (des de l'adreça IP %s) ha sol·licitat una nova contrasenya pel vostre compte.
	
Si heu fet la sol·licitud premeu l'enllaç de sota. En cas contrari, ignoreu aquest correu electrònic.
	
%s
",
    /**
     * user default access
     */
    'default_access:settings' => "El vostre nivell d'accés predeterminat",
    'default_access:label' => "Nivell d'accés predeterminat",
    'user:default_access:success' => "S'ha desat el nivell d'accés predeterminat",
    'user:default_access:failure' => "No s'ha pogut desar el nivell d'accés predeterminat",
    /**
     * XML-RPC
     */
    'xmlrpc:noinputdata' => "Dades pendents",
    /**
     * Comments
     */
    'comments:count' => "%s comentaris",
    'riveraction:annotation:generic_comment' => "%s ha comentat a %s",
    'generic_comments:add' => "Comentar",
    'generic_comments:post' => "Publicar un comentari",
    'generic_comments:text' => "Comentar",
    'generic_comments:latest' => "Últims comentaris",
    'generic_comment:posted' => "S'ha publicat el vostre comentari",
    'generic_comment:deleted' => "S'ha suprimit el vostre comentari",
    'generic_comment:blank' => "Heu d'introduir un comentari abans de poder desar-lo",
    'generic_comment:notfound' => "No s'ha pogut trobar l'element indicat",
    'generic_comment:notdeleted' => "No s'ha pogut suprimir el comentari",
    'generic_comment:failure' => "S'ha produït un error a l'intentar afegir el vostre comentari. Torneu-ho a intentar",
    'generic_comment:none' => "Sense comentaris",
    'generic_comment:email:subject' => "Teniu un comentari nou!",
    'generic_comment:email:body' => "Teniu un comentari nou a \"%s\" de %s. Diu:
	
	
%s
	
	
Per respondre o veure l'original, premeu:
	
%s
	
Per veure el perfil de %s, premeu:
	
%s
	
Siusplau, no respongueu a aquest correu",
    /**
     * Entities
     */
    'byline' => "Per %s",
    'entity:default:strapline' => "Creat %s per %s",
    'entity:default:missingsupport:popup' => "L'entitat no s'ha pogut mostrar correctament. Es pot deure a que el suport que ofereix una extensió ja no estigui instal·lat al sistema",
    'entity:delete:success' => "S'ha suprimit l'entitat %s",
    'entity:delete:fail' => "No s'ha pogut suprimir l'entitat %s",
    /**
     * Action gatekeeper
     */
    'actiongatekeeper:missingfields' => "Falten camps _token o camps _ts",
    'actiongatekeeper:tokeninvalid' => "S'ha trobat un error (el token no coincideix). Probablement es degui al venciment de la pàgina. Torneu-ho a intentar",
    'actiongatekeeper:timeerror' => "La pàgina que estàveu utilitzant ha vençut. Actualitzeu-la i torneu-ho a intentar",
    'actiongatekeeper:pluginprevents' => "El formulari no s'ha enviat perquè una extensió no ho ha autoritzat",
    /**
     * Word blacklists
     */
    'word:blacklist' => "and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever",
    /**
     * Tag labels
     */
    'tag_names:tags' => "Etiquetes",
    'tags:site_cloud' => "Núvol d'etiquetes del lloc web",
    /**
     * Javascript
     */
    'js:security:token_refresh_failed' => "No s'ha pogut restaurar la connexió amb %s. Es poden produir problemes al desar continguts al lloc web",
    'js:security:token_refreshed' => "S'ha restaurat la connexió amb %s!",
    /**
     * Languages according to ISO 639-1
     */
    'aa' => "Afar",
    'ab' => "Abkhazià",
    'af' => "Afrikaans",
    'am' => "Amharic",
    'ar' => "Aràbic",
    'as' => "Assamese",
    'ay' => "Aymara",
    'az' => "Azerbaijani",
    'ba' => "Bashkir",
    'be' => "Bielorus",
    'bg' => "Búlgar",
    'bh' => "bihari",
    'bi' => "Bislama",
    'bn' => "Bengali;Bangla",
    'bo' => "Tibetà",
    'br' => "Bretó",
    'ca' => "Català",
    'co' => "Corsa",
    'cs' => "Xec",
    'cy' => "Galés",
    'da' => "Danès",
    'de' => "Alemà",
    'dz' => "Bhutani",
    'el' => "Grec",
    'en' => "Anglès",
    'eo' => "Esperanto",
    'es' => "Castellà",
    'et' => "Estonià",
    'eu' => "Eusquera",
    'fa' => "Persa",
    'fi' => "Finlandès",
    'fj' => "Fiji",
    'fo' => "Faeroese",
    'fr' => "Francès",
    'fy' => "Frisio",
    'ga' => "Irlandès",
    'gd' => "Gaèlic",
    'gl' => "Gallec",
    'gn' => "Guaraní",
    'gu' => "Gujarati",
    'he' => "Hebreu",
    'ha' => "Haussa",
    'hi' => "Hindú",
    'hr' => "Croat",
    'hu' => "Hongarès",
    'hy' => "Armeni",
    'ia' => "Interllenguatge",
    'id' => "Indonesi",
    'ie' => "Interllenguatge",
    'ik' => "Inupiak",
    'is' => "Islandès",
    'it' => "Italià",
    'iu' => "Inuktitut",
    'iw' => "Hebreu antic",
    'ja' => "Japonès",
    'ji' => "Yiddish",
    'jw' => "Javanès",
    'ka' => "Georgià",
    'kk' => "Kazakh",
    'kl' => "Groenlandia",
    'km' => "Cambotjà",
    'kn' => "Canadenc",
    'ko' => "Coreà",
    'ks' => "Kashmiri",
    'ku' => "Kurd",
    'ky' => "Kirghiz",
    'la' => "Llatí",
    'ln' => "Lingala",
    'lo' => "Laotán",
    'lt' => "Lituà",
    'lv' => "Letó",
    'mg' => "Magaix",
    'mi' => "Maorí",
    'mk' => "Macedoni",
    'ml' => "Mayalam",
    'mn' => "Mongol",
    'mo' => "Moldà",
    'mr' => "Marathi",
    'ms' => "Malay",
    'mt' => "Maltes",
    'my' => "Burmes",
    'na' => "Nauru",
    'ne' => "Nepalí",
    'nl' => "Holandès",
    'no' => "Noruec",
    'oc' => "Occità",
    'om' => "(Afan) Orom",
    'or' => "Oriyà",
    'pa' => "Punjabi",
    'pl' => "Polac",
    'ps' => "Pashto / Pushto",
    'pt' => "Portuguès",
    'qu' => "Quechua",
    'rm' => "Rhaeto-Romance",
    'rn' => "Kirundi",
    'ro' => "Rumà",
    'ru' => "Rus",
    'rw' => "Kinyarwanda",
    'sa' => "Sanskrit",
    'sd' => "Sindhi",
    'sg' => "Sangro",
    'sh' => "Serb-croata",
    'si' => "Singalès",
    'sk' => "Slovak",
    'sl' => "Sloveno",
    'sm' => "Samoan",
    'sn' => "Shona",
    'so' => "Somalí",
    'sq' => "Albanès",
    'sr' => "Serbi",
    'ss' => "Siswati",
    'st' => "Sesotho",
    'su' => "Sondanès",
    'sv' => "Suec",
    'sw' => "Swahili",
    'ta' => "Tamil",
    'te' => "Tegulu",
    'tg' => "Tajik",
    'th' => "Thai",
    'ti' => "Tigrinyà",
    'tk' => "Turc",
    'tl' => "Tagalog",
    'tn' => "Sestswana",
    'to' => "Tonga",
    'tr' => "Turc",
    'ts' => "Tsonga",
    'tt' => "Tatar",
    'tw' => "Twi",
    'ug' => "Uigur",
    'uk' => "Ucranià",
    'ur' => "Urdú",
    'uz' => "Uzbek",
    'vi' => "Vietnamita",
    'vo' => "Volapuk",
    'wo' => "Wolof",
    'xh' => "Xhosa",
    'yi' => "Yiddisha",
    'yo' => "Yoruba",
    'za' => "Zuang",
    'zh' => "Xinès",
    'zu' => "Zulu"
);
