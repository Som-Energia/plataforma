<?php

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
    'mentions:notification:subject' => '%s nomeoute en %s',
    'mentions:notification:body' => '%s nomeoute en %s.

Para ver a publicación completa, fai clic na ligazón seguinte:
%s
',
    'mentions:notification_types:object:blog' => 'unha entrada no blogue',
    'mentions:notification_types:object:bookmarks' => 'un marcador',
    'mentions:notification_types:object:groupforumtopic' => 'unha mensaxe de debate nun grupo',
    'mentions:notification_types:object:discussion_reply' => 'unha resposta de debate nun grupo',
    'mentions:notification_types:object:thewire' => 'unha mensaxe en The Wire',
    'mentions:notification_types:object:comment' => 'un comentario',
    'mentions:settings:send_notification' => 'Recibir notificacións cando alguén te @nomee?',
    // admin
    'mentions:named_links' => 'Substituír @usuario polo nome do usuario',
    'mentions:fancy_links' => 'Engadir imaxe xunto ao nome do usuario',
    'mentions:restrict_group_search' => 'Dentro dun grupo, suxerir só os membros do grupo',
    'mentions:friends_only_search' => 'Suxerir só os amigos do usuario',
    'mentions:settings:failed' => 'Non se gardou a configuración das mencións.',
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
    'comments' => "Comentarios",
    'comment:notification:settings' => 'Notificacións de comentarios',
    'comment:notification:settings:description' => 'Notificarme cando haxa comentarios en elementos nos que me subscribín',
    'comment:notification:settings:how' => 'Selecciona o teu método de notificación',
    'comment:notification:settings:linktext' => 'Ver todos os elementos nos que me subscribín',
    'comment:subscriptions' => 'Subscricións',
    'comment:subscriptions:none' => 'Actualmente non hai subscricións',
    'comment:subscribe:tooltip' => 'Subscríbete para recibir notificacións cando haxa comentarios sobre este contido',
    'allow:comment:notification' => 'Queres habilitar as notificacións? ',
    'email:content:type' => 'Desexas recibir correos en formato HTML? ',
    'text:email' => 'Non',
    'html:email' => 'Si',
    'comment:subscribe' => 'Subscribirme',
    'comment:unsubscribe' => 'Cancelar subscrición',
    'comment:subscribe:long' => 'Subscribirme ás notificacións de comentarios',
    'comment:unsubscribe:long' => 'Cancelar subscrición das notificacións de comentarios',
    'comment_tracker:setting:autosubscribe' => "Auto-subscribirme ao contido no que haxa comentarios?",
    'show:subscribers' => 'Amosar subscritores',
    'comment:subscribe:success' => 'Subscribícheste correctamente a este contido ou temática.',
    'comment:subscribe:failed' => "Sentímolo! Non podes subscribirte a este contido ou temática.",
    'comment:subscribe:entity:not:access' => "Sentímolo! Por algunha razón non puidemos atopar o contido ou temática.",
    'comment:unsubscribe:success' => 'Cancelaches correctamente a túa subscrición a este contido ou temática.',
    'comment:unsubscribe:failed' => "Sentímolo! Non puideches cancelar a túa subscrición a este contido ou temática.",
    'comment:unsubscribe:not:valid:url' => 'Sentímolo! Esta non é unha url válida para cancelar a subscrición a este contido ou temática.',
    'comment:unsubscribe:entity:not:access' => "Sentímolo! Non puidemos atopar o contido ou temática.",
    'comment_tracker:setting:show_button' => "Amosar o botón de subscrición/cancelación por riba da vista de comentarios?",
    'comment_tracker:item' => "elemento",
    'comment:notify:subject:groupforumtopic' => '%s engadiuse á discusión %s no grupo %s',
    'comment:notify:subject:comment' => '%s comentou no %s "%s"',
    'comment:notify:subject:comment:group' => '%s comentou no %s "%s" no grupo %s',
    /* Legacy stuff - @TODO - see what's safe to delete */
    'comment:notify:subject' => 'Hai un novo comentario sobre %s',
    'comment:notify:group:subject' => 'Hai novo contido no fío %s',
    'comment:notify:body:web' => 'Ola %s,
<br/>Hai un novo comentario sobre %s
<br/>%s escribiu: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.<br/>
Para cambiar as túas preferencias de notificación, por favor fai clic aquí: %s<br/>
</font>
		',
    'comment:notify:group:body:web' => 'Ola %s,
<br/>Hai novo contido no fío %s
<br/>%s escribiu: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.<br/>

Para cambiar as túas preferencias de notificación, por favor fai clic aquí: %s<br/>
</font>
		',
    'comment:notify:body:email:text' => 'Ola %s,

hai un novo comentario sobre %s

%s escribiu: %s

%s

Saúdos,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
<<<<<<< HEAD
Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema. 

Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela. 
=======
Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema.

Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.
>>>>>>> bb569afab8f2893a1140b49f7cb3f92344f1d04c

Para cambiar as túas preferencias de notificación de este tipo de mensaxes, por favor fai clic aquí: %s
</font>
		',
    'comment:notify:group:body:email:text' => 'Ola %s,

hai novo contido no fío %s

%s escribiu: %s

%s

Saúdos,
%s

_________________________________________________________________________________
<font color="#888888" size="2">Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema.Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.

Para cambiar as túas preferencias de notificación de este tipo de mensaxes, por favor fai clic aquí: %s
</font>
		',
    'comment:notify:body:email:html' => '
<div>
	<div>Ola %s,</div>
	<div>Hai un novo comentario sobre %s</div>
	<div>%s escribiu: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Saúdos,</div></div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema</div>
<<<<<<< HEAD
		<div>Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela
.</div>
		<div>

Para cambiar as túas preferencias de notificación de este tipo de mensaxes, por favor fai clic aquí: %s</div>
	</div>
</div>
		',
    'comment:notify:group:body:email:html' => '
<div>
	<div>Ola %s,</div>
	<div>Hai un novo contido no fío %s</div>
	<div>%s escribiu: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Saúdos,</div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema.</div>
		<div>Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.</div>
		<div>Para cambiar as túas preferencias de notificación de este tipo de mensaxes, por favor fai clic aquí: %s</div>
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
    'groupforumtopic:new' => "Nueva entrada de discusi&oacute;n",
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
    'login' => "Acceder",
    'loginok' => "Accedeu correctamente.",
    'loginerror' => "Non foi posíbel autenticalo. Probe de novo e asegúrese de indicar os seus datos de acceso correctamente.",
    'login:empty' => "Debe introducir o seu nome de usuario ou conta de correo electrónico e mailo seu contrasinal.",
    'login:baduser' => "Non foi posíbel cargar a súa conta de usuario.",
    'auth:nopams' => "Produciuse un erro interno. Non hai ningún método de autenticación de usuarios instalado.",
    'logout' => "Saír",
    'logoutok' => "Pechouse a súa sesión.",
    'logouterror' => "Non foi posíbel pechar a súa sesión. Inténteo de novo.",
    'session_expired' => "Your session has expired. Please <a href='javascript:location.reload(true)'>reload</a> the page to log in.",
    'session_changed_user' => "You have been logged in as another user. You should <a href='javascript:location.reload(true)'>reload</a> the page.",
    'loggedinrequired' => "Identifíquese para poder ver a páxina.",
    'adminrequired' => "Debe ser administrador para poder ver a páxina.",
    'membershiprequired' => "Debe pertencer ao grupo para ver a páxina.",
    'limited_access' => "Non ten permiso para ver a páxina.",
    /**
     * Errors
     */
    'exception:title' => "Erro moi grave.",
    'exception:contact_admin' => 'Produciuse un erro do que non é posíbel recuperarse, e quedou rexistrado. Válgase da seguinte información para contactar co administrador do sitio:',
    'actionundefined' => "A acción solicitada (%s) non está definida no sistema.",
    'actionnotfound' => "Non se atopou o ficheiro para a acción «%s».",
    'actionloggedout' => "Non pode realizar a acción sen antes identificarse.",
    'actionunauthorized' => 'Non ten permisos para realizar a acción.',
    'ajax:error' => 'Produciuse un erro inesperado durante a execución dunha chamada mediante AJAX. Pode que se perdese a conexión co servidor.',
    'ajax:not_is_xhr' => 'Non pode acceder a vistas de AJAX directamente.',
    'PluginException:MisconfiguredPlugin' => "O complemento %s (guid: %s) está mal configurado e desactivouse. Consulte o wiki de Elgg (http://learn.elgg.org/) para intentar determinar a causa do problema.",
    'PluginException:CannotStart' => 'O complemento «%s» (GUID: %s) non pode iniciarse e foi desactivado. Motivo: %s',
    'PluginException:InvalidID' => "«%s» non é un identificador de complemento válido.",
    'PluginException:InvalidPath' => "«%s» non é unha ruta de complemento válida.",
    'PluginException:InvalidManifest' => 'O ficheiro de manifesto do complemento «%s» non é válido.',
    'PluginException:InvalidPlugin' => 'O complemento «%s» non é válido.',
    'PluginException:InvalidPlugin:Details' => 'O complemento «%s» non é válido: %s',
    'PluginException:NullInstantiated' => '«ElggPlugin» non pode iniciarse con valor nulo. Debe asignarlle como valor un identificador único (GUID), un identificador de complemento ou unha ruta completa.',
    'ElggPlugin:MissingID' => 'O complemento carece de identificador (GUID: %s).',
    'ElggPlugin:NoPluginPackagePackage' => 'Ao complemento con identificador «%s» fáltalle «ElggPluginPackage» (GUID: %s).',
    'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Falta o ficheiro «%s».',
    'ElggPluginPackage:InvalidPlugin:InvalidId' => 'Debe cambiar o nome do cartafol do complemento a «%s» para que coincida co identificador do seu manifesto.',
    'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'O manifesto contén un tipo de dependencia, «%s», que non é válido.',
    'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'O manifesto contén un tipo de subministración (provides), «%s», que non é válido.',
    'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Hai unha dependencia de tipo «%s», «%s», no complemento «%s», , que non é válida. Os complementos non poden nin estar en conflicto nin requerir unha dependencia que eles mesmos subministran.',
    'ElggPlugin:Exception:CannotIncludeFile' => 'Non é posíbel incluír «%s» para o complemento «%s» (GUID: %s) en «%s».',
    'ElggPlugin:Exception:CannotRegisterViews' => 'Non é posíbel abrir o cartafol de vistas para o complemento «%s» (GUID: %s) en «%s».',
    'ElggPlugin:Exception:NoID' => 'O complemento con GUID «%s» carece de identificador.',
    'PluginException:NoPluginName' => "Non se atopou o nome do complemento.",
    'PluginException:ParserError' => 'Produciuse un erro ao analizar o manifesto con versión %s da API no complemento «%s».',
    'PluginException:NoAvailableParser' => 'Non é posíbel atopar un analizador para a versión %s da API de manifesto no complemento «%s».',
    'PluginException:ParserErrorMissingRequiredAttribute' => "O atributo «%s» non está presente no manifesto do complemento «%s», e trátase dun atributo obrigatorio.",
    'ElggPlugin:InvalidAndDeactivated' => 'O complemento «%s» non é válido e foi desactivado.',
    'ElggPlugin:Dependencies:Requires' => 'Require',
    'ElggPlugin:Dependencies:Suggests' => 'Suxire',
    'ElggPlugin:Dependencies:Conflicts' => 'Incompatíbel con',
    'ElggPlugin:Dependencies:Conflicted' => 'En conflito con',
    'ElggPlugin:Dependencies:Provides' => 'Subministra',
    'ElggPlugin:Dependencies:Priority' => 'Prioridade',
    'ElggPlugin:Dependencies:Elgg' => 'Versión de Elgg',
    'ElggPlugin:Dependencies:PhpVersion' => 'Versión de PHP',
    'ElggPlugin:Dependencies:PhpExtension' => 'Extensión de PHP: %s',
    'ElggPlugin:Dependencies:PhpIni' => 'Opción de PHP: %s',
    'ElggPlugin:Dependencies:Plugin' => 'Complemento: %s',
    'ElggPlugin:Dependencies:Priority:After' => 'Despois de «%s»',
    'ElggPlugin:Dependencies:Priority:Before' => 'Antes de «%s»',
    'ElggPlugin:Dependencies:Priority:Uninstalled' => '«%s» non está instalada',
    'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Falta',
    'ElggPlugin:Dependencies:ActiveDependent' => 'Hai outros complementos que teñen «%s» entre as súas dependencias. Antes de desactivar este complemento debe desactivar estes outros: %s',
    'ElggMenuBuilder:Trees:NoParents' => 'Atopáronse entradas de menú sen menús pai que liguen con eles.',
    'ElggMenuBuilder:Trees:OrphanedChild' => 'O pai da entrada de menú «%s» non existe. O pai é «%s».',
    'ElggMenuBuilder:Trees:DuplicateChild' => 'Atopouse un rexistro duplicado da entrada de menú «%s».',
    'RegistrationException:EmptyPassword' => 'Os campos de contrasinal non poden estar baleiros.',
    'RegistrationException:PasswordMismatch' => 'Os contrasinais deben coincidir.',
    'LoginException:BannedUser' => 'Foi expulsado do sitio e non pode acceder.',
    'LoginException:UsernameFailure' => 'Non foi posíbel autenticalo. Asegúrese de que introduciu o nome de usuario ou conta de correo electrónico correctos, así como o contrasinal.',
    'LoginException:PasswordFailure' => 'Non foi posíbel autenticalo. Asegúrese de que introduciu o nome de usuario ou conta de correo electrónico correctos, así como o contrasinal.',
    'LoginException:AccountLocked' => 'Bloqueouse a súa conta debido aos repetidos intentos fallidos de acceso.',
    'LoginException:ChangePasswordFailure' => 'O contrasinal actual introducido non coincide co contrasinal actual real.',
    'LoginException:Unknown' => 'Non foi posíbel autenticalo debido a un erro descoñecido.',
    'UserFetchFailureException' => 'Cannot check permission for user_guid [%s] as the user does not exist.',
    'deprecatedfunction' => 'Aviso: Este código fai uso da función «%s», que está obsoleta, e non é compatíbel con esta versión de Elgg.',
    'pageownerunavailable' => 'Aviso: Non é posíbel acceder ao propietario da páxina, «%d».',
    'viewfailure' => 'Produciuse un erro interno na vista «%s».',
    'view:missing_param' => "Falta o parámetro obrigatorio «%s» na vista %s.",
    'changebookmark' => 'Cambie o seu marcador para esta páxina.',
    'noaccess' => 'O contido ao que intentaba acceder eliminouse, ou non ten permisos para velo.',
    'error:missing_data' => 'Faltaban datos na súa solicitude.',
    'save:fail' => 'Produciuse un erro ao intentar gardar os seus datos.',
    'save:success' => 'Gardáronse os seus datos.',
    'error:default:title' => 'Ups…',
    'error:default:content' => 'Ups… algo non foi ben.',
    'error:400:title' => 'Solicitude non válida',
    'error:400:content' => 'A solicitude non é válida ou está incompleta.',
    'error:403:title' => 'Prohibido',
    'error:403:content' => 'Non ten permisos para acceder á páxina solicitada.',
    'error:404:title' => 'Non se atopou a páxina',
    'error:404:content' => 'Non foi posíbel atopar a páxina que solicitou.',
    'upload:error:ini_size' => 'O ficheiro que intentou enviar é grande de máis.',
    'upload:error:form_size' => 'O ficheiro que intentou enviar é grande de máis.',
    'upload:error:partial' => 'Non se completou o envío do ficheiro.',
    'upload:error:no_file' => 'Non seleccionou ningún ficheiro.',
    'upload:error:no_tmp_dir' => 'Non é posíbel gardar o ficheiro enviado.',
    'upload:error:cant_write' => 'Non é posíbel gardar o ficheiro enviado.',
    'upload:error:extension' => 'Non é posíbel gardar o ficheiro enviado.',
    'upload:error:unknown' => 'Non foi posíbel enviar o ficheiro.',
    /**
     * User details
     */
    'name' => "Nome para mostrar",
    'email' => "Conta de correo",
    'username' => "Nome de usuario",
    'loginusername' => "Nome de usuario ou conta de correo",
    'password' => "Contrasinal",
    'passwordagain' => "Contrasinal (repítaa para asegurarse)",
    'admin_option' => "Converter o usuario en administrador?",
    'autogen_password_option' => "Automatically generate a secure password?",
    /**
     * Access
     */
    'PRIVATE' => "Privado",
    'LOGGED_IN' => "Usuarios rexistrados",
    'PUBLIC' => "Público",
    'LOGGED_OUT' => "Usuarios anónimos",
    'access:friends:label' => "Contactos",
    'access' => "Acceso",
    'access:overridenotice' => "Nota: Debido ás políticas de grupos, só os membros do grupo poden acceder a este contido.",
    'access:limited:label' => "Limitado",
    'access:help' => "O nivel de acceso",
    'access:read' => "Lectura",
    'access:write' => "Escritura",
    'access:admin_only' => "Só os administradores",
    'access:missing_name' => "O nome do nivel de acceso non existe.",
    'access:comments:change' => "Actualmente esta discusión só a poden ver certas persoas. Pense ben con quen decide compartila.",
    /**
     * Dashboard and widgets
     */
    'dashboard' => "Taboleiro",
    'dashboard:nowidgets' => "O seu taboleiro permítelle facer un seguimento da actividade e contidos que lle interesen do sitio.",
    'widgets:add' => 'Engadir trebellos',
    'widgets:add:description' => "Prema o botón de calquera dos seguintes trebellos para engadilo á páxina.",
    'widgets:panel:close' => "Pechar o panel de trebellos",
    'widgets:position:fixed' => '(posición fixa na páxina)',
    'widget:unavailable' => 'Xa engadiu ese trebello.',
    'widget:numbertodisplay' => 'Número de elementos para mostrar',
    'widget:delete' => 'Retirar «%s»',
    'widget:edit' => 'Personalizar o trebello',
    'widgets' => "Trebellos",
    'widget' => "Trebello",
    'item:object:widget' => "Trebellos",
    'widgets:save:success' => "O trebello gardouse correctamente.",
    'widgets:save:failure' => "Non foi posíbel gardar o trebello.",
    'widgets:add:success' => "O trebello engadiuse correctamente.",
    'widgets:add:failure' => "Non foi posíbel engadir o trebello.",
    'widgets:move:failure' => "Non foi posíbel almacenar a nova posición do trebello.",
    'widgets:remove:failure' => "Non foi posíbel retirar o trebello.",
    /**
     * Groups
     */
    'group' => "Grupo",
    'item:group' => "Grupos",
    /**
     * Users
     */
    'user' => "Usuari",
    'item:user' => "Usuarios",
    /**
     * Friends
     */
    'friends' => "Contactos",
    'friends:yours' => "Contactos seus",
    'friends:owned' => "Contactos de %s",
    'friend:add' => "Engadir un contacto",
    'friend:remove' => "Retirar dos contactos",
    'friends:add:successful' => "Engadiuse a %s á súa lista de contactos.",
    'friends:add:failure' => "Non foi posíbel engadir a %s á súa lista de contactos.",
    'friends:remove:successful' => "Retirouse a %s da súa lista de contactos.",
    'friends:remove:failure' => "Non foi posíbel retirar a %s da súa lista de contactos.",
    'friends:none' => "Non ten ningún contacto de momento.",
    'friends:none:you' => "Aínda non ten ningún contacto.",
    'friends:none:found' => "Non se atopou ningún contacto.",
    'friends:of:none' => "Ninguén ten a este usuario de contacto de momento.",
    'friends:of:none:you' => "Ninguén o engadiu a vostede de contacto de momento. Comece por engadir contido e completar o seu perfil para axudar a que a xente o atope.",
    'friends:of:owned' => "Xente que ten a %s de contacto",
    'friends:of' => "Contactos de",
    'friends:collections' => "Coleccións de contactos",
    'collections:add' => "Nova colección",
    'friends:collections:add' => "Nova colección de contactos",
    'friends:addfriends' => "Escolla contactos",
    'friends:collectionname' => "Nome da colección",
    'friends:collectionfriends' => "Contactos na colección",
    'friends:collectionedit' => "Editar a colección",
    'friends:nocollections' => "Aínda non ten ningunha colección.",
    'friends:collectiondeleted' => "Eliminouse a súa colección.",
    'friends:collectiondeletefailed' => "Non foi posíbel eliminar a colección. Ou non ten permisos para eliminala, ou produciuse algún outro problema.",
    'friends:collectionadded' => "Creouse a colección.",
    'friends:nocollectionname' => "Ten que porlle nome á colección para poder creala.",
    'friends:collections:members' => "Membros da colección",
    'friends:collections:edit' => "Editar a colección",
    'friends:collections:edited' => "Gardar a colección",
    'friends:collection:edit_failed' => 'Non foi posíbel gardar a colección.',
    'friendspicker:chararray' => 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ',
    'avatar' => 'Imaxe de perfi',
    'avatar:noaccess' => "Non ten permisos para editar a imaxe de perfil deste usuario.",
    'avatar:create' => 'Crear a imaxe de perfil',
    'avatar:edit' => 'Editar a imaxe de perfil',
    'avatar:preview' => 'Vista previa',
    'avatar:upload' => 'Enviar unha nova imaxe de perfil',
    'avatar:current' => 'Imaxe de perfil actual',
    'avatar:remove' => 'Eliminar a súa imaxe de perfil e usar a icona predeterminada',
    'avatar:crop:title' => 'Ferramenta para recortar a imaxe de perfil',
    'avatar:upload:instructions' => "A súa imaxe de perfil móstrase en varias partes do sitio. Pode cambiala sempre que queira. Acéptanse os seguintes formatos de imaxe: GIF, JPG e PNG.",
    'avatar:create:instructions' => 'Prema e arrastre na imaxe para formar un cadrado. O contido do cadrado será a súa imaxe de perfil. A caixa da dereita mostrará unha vista previa. Cando estea contento co resultado, prema «Crear a imaxe de perfil».',
    'avatar:upload:success' => 'Enviouse da imaxe de perfil.',
    'avatar:upload:fail' => 'Non foi posíbel enviar a imaxe de perfil.',
    'avatar:resize:fail' => 'Non foi posíbel axustar o tamaño da imaxe de perfil.',
    'avatar:crop:success' => 'Recortouse a imaxe de perfil.',
    'avatar:crop:fail' => 'Non foi posíbel recortar a imaxe de perfil.',
    'avatar:remove:success' => 'Eliminouse a imaxe de perfil.',
    'avatar:remove:fail' => 'Non foi posíbel eliminar a imaxe de perfil.',
    'profile:edit' => 'Editar o perfil',
    'profile:aboutme' => "Sobre min",
    'profile:description' => "Sobre min",
    'profile:briefdescription' => "Descrición curta",
    'profile:location' => "Lugar",
    'profile:skills' => "Habilidades",
    'profile:interests' => "Intereses",
    'profile:contactemail' => "Correo de contacto",
    'profile:phone' => "Teléfono",
    'profile:mobile' => "Móbil",
    'profile:website' => "Sitio web",
    'profile:twitter' => "Usuario de Twitter",
    'profile:saved' => "Gardouse o seu perfil.",
    'profile:field:text' => 'Texto curto',
    'profile:field:longtext' => 'Zona de texto longo',
    'profile:field:tags' => 'Etiquetas',
    'profile:field:url' => 'Enderezo we',
    'profile:field:email' => 'Enderezo de correo',
    'profile:field:location' => 'Lugar',
    'profile:field:date' => 'Data',
    'admin:appearance:profile_fields' => 'Editar os campos do perfi',
    'profile:edit:default' => 'Editar os campos do perfil.',
    'profile:label' => "Nome do perfil",
    'profile:type' => "Tipo de perfil",
    'profile:editdefault:delete:fail' => 'Non foi posíbel eliminar o campo do perfil.',
    'profile:editdefault:delete:success' => 'Eliminouse o campo de perfil',
    'profile:defaultprofile:reset' => 'Restablecéronse os campos de perfil predeterminados do sistema.',
    'profile:resetdefault' => 'Restablecer os campos de perfil predeterminados do sistema',
    'profile:resetdefault:confirm' => 'Está seguro de que quere eliminar os campos de perfil personalizados?',
    'profile:explainchangefields' => "Use o seguinte formulario para substituír os campos de perfil actuais por campos personalizados. \n\n Déalle un nome para mostrar ao novo campo de perfil, como por exemplo «Equipo favorito», e seleccione o tipo de campo (e. g. texto, URL, etiquetas), e prema o botón de «Engadir». Para cambiar a orde dos campos, arrastre a icona de movemento que hai canda o nome para mostrar do campo. Para cambiar o nome para mostrar do campo, prema o texto do nome para mostrar, de xeito que se poña en modo de edición. \n\n Pode restablecer a configuración predeterminada do perfil en calquera momento, pero perderá toda a información que os usuarios introducisen nos campos personalizados dos seus perfís.",
    'profile:editdefault:success' => 'Engadiuse o novo campo de perfil.',
    'profile:editdefault:fail' => 'Non foi posíbel gardar o perfil predeterminado.',
    'profile:field_too_long' => 'Non é posíbel gardar a información do seu perfil porque a sección «%s» é longa de máis.',
    'profile:noaccess' => "Non ten permisos para editar este perfil.",
    'profile:invalid_email' => '«%s» debe ser un enderezo de correo electrónico válido.',
    /**
     * Feeds
     */
    'feed:rss' => 'Fonte de novas RSS da páxina.',
    /**
     * Links
     */
    'link:view' => 'Ver a ligazón',
    'link:view:all' => 'Velo todo',
    /**
     * River
     */
    'river' => "Onda",
    'river:friend:user:default' => "%s e %s son agora contactos.",
    'river:update:user:avatar' => '%s ten unha nova imaxe de perfil.',
    'river:update:user:profile' => '%s actualizou o seu perfil.',
    'river:noaccess' => 'Non ten permisos para ver isto.',
    'river:posted:generic' => '%s publicou',
    'riveritem:single:user' => 'un usuario',
    'riveritem:plural:user' => 'algúns usuarios',
    'river:ingroup' => 'no grupo %s',
    'river:none' => 'Non hai actividade.',
    'river:update' => 'Actualización de %s',
    'river:delete' => 'Retirar isto',
    'river:delete:success' => 'O elemento retirouse da onda.',
    'river:delete:fail' => 'Non foi posíbel retirar o elemento da onda.',
    'river:subject:invalid_subject' => 'Usuario non válido',
    'activity:owner' => 'Ver a actividade',
    'river:widget:title' => "Actividade",
    'river:widget:description' => "Mostrar a actividade recente",
    'river:widget:type' => "Tipo de actividade",
    'river:widgets:friends' => 'Actividade dos contactos',
    'river:widgets:all' => 'Actividade global',
    /**
     * Notifications
     */
    'notifications:usersettings' => "Configuración das notificacións",
    'notification:method:email' => 'Correo',
    'notifications:usersettings:save:ok' => "Gardouse a configuración das notificacións.",
    'notifications:usersettings:save:fail' => "Non foi posíbel gardar a configuración das notificacións.",
    'notification:subject' => 'Notificación sobre %s',
    'notification:body' => 'Ver a nova actividade en %s',
    /**
     * Search
     */
    'search' => "Buscar",
    'searchtitle' => "Buscar: %s",
    'users:searchtitle' => "Buscando usuarios: %s",
    'groups:searchtitle' => "Buscando grupos: %s",
    'advancedsearchtitle' => "%s con resultados para %s",
    'notfound' => "Non se atopou ningún resultado.",
    'next' => "Seguinte",
    'previous' => "Anterior",
    'viewtype:change' => "Cambiar o tipo de lista",
    'viewtype:list' => "Vista de lista",
    'viewtype:gallery' => "Galería",
    'tag:search:startblurb' => "Elementos con etiquetas que coinciden con «%s»:",
    'user:search:startblurb' => "Usuarios que coinciden con «%s»:",
    'user:search:finishblurb' => "Prema aquí para ver máis.",
    'group:search:startblurb' => "Grupos que coinciden con «%s»:",
    'group:search:finishblurb' => "Prema aquí para ver máis.",
    'search:go' => 'Ir',
    'userpicker:only_friends' => 'Só contactos',
    /**
     * Account
     */
    'account' => "Conta",
    'settings' => "Configuración",
    'tools' => "Ferramentas",
    'settings:edit' => 'Cambiar a configuración',
    'register' => "Registrarse",
    'registerok' => "Rexistrouse para «%s».",
    'registerbad' => "Non foi posíbel rexistralo debido a un erro descoñecido.",
    'registerdisabled' => "O administrador do sistema desactivou o rexistro.",
    'register:fields' => 'Todos os campos son obrigatorios.',
    'registration:notemail' => 'A conta de correo electrónico que forneceu non parece correcta.',
    'registration:userexists' => 'Ese nome de usuario xa existe.',
    'registration:usernametooshort' => 'O seu nome de usuario debe ter polo menos %u caracteres.',
    'registration:usernametoolong' => 'O seu nome de usuario é longo de máis. Non pode sobrepasar os %u caracteres.',
    'registration:passwordtooshort' => 'O contrasinal debe ter un mínimo de %u caracteres.',
    'registration:dupeemail' => 'Ese enderezo de correo electrónico xa está rexistrado.',
    'registration:invalidchars' => 'O seu nome de usuario contén caracteres como «%s» que non están permitidos. Non pode usar ningún dos seguintes caracteres: %s',
    'registration:emailnotvalid' => 'O seu enderezo de correo electrónico non está permitido.',
    'registration:passwordnotvalid' => 'O seu contrasinal non está permitido.',
    'registration:usernamenotvalid' => 'O seu nome de usuario non é válido.',
    'adduser' => "Engadir o usuario",
    'adduser:ok' => "Engadiuse o usuario.",
    'adduser:bad' => "Non foi posíbel crear o usuario.",
    'user:set:name' => "Configuración do nome da conta",
    'user:name:label' => "Nome para mostrar",
    'user:name:success' => "Cambiouse o nome para mostrar.",
    'user:name:fail' => "Non foi posíbel cambiar o nome para mostrar.",
    'user:set:password' => "Contrasinal da conta",
    'user:current_password:label' => 'Contrasinal actual',
    'user:password:label' => "Contrasinal novo",
    'user:password2:label' => "Contrasinal novo (repítao)",
    'user:password:success' => "Cambiouse o contrasinal.",
    'user:password:fail' => "Non foi posíbel cambiar o contrasinal.",
    'user:password:fail:notsame' => "Os contrasinais non coinciden.",
    'user:password:fail:tooshort' => "O contrasinal é curto de máis.",
    'user:password:fail:incorrect_current_password' => 'O contrasinal actual introducido non é correcto.',
    'user:changepassword:unknown_user' => 'O usuario non é válido.',
    'user:changepassword:change_password_confirm' => 'Isto cambiará o seu contrasinal.',
    'user:set:language' => "Configuración do idioma",
    'user:language:label' => "Idioma",
    'user:language:success' => "Actualizouse a configuración do idioma.",
    'user:language:fail' => "Non foi posíbel gardar a configuración do idioma.",
    'user:username:notfound' => 'Non se atopou o nome de usuario «%s».',
    'user:password:lost' => 'Perdín o contrasinal',
    'user:password:changereq:success' => 'Solicitou un novo contrasinal, recibirá un correo en breves.',
    'user:password:changereq:fail' => 'Non foi posíbel solicitar un novo contrasinal.',
    'user:password:text' => 'Para solicitar un novo contrasinal, escriba o seu nome de usuario ou a súa conta de correo electrónico e prema o botón de «Solicitar».',
    'user:persistent' => 'Lembrar.',
    'walled_garden:welcome' => 'Reciba a nosa benvida a',
    /**
     * Administration
     */
    'menu:page:header:administer' => 'Administrar',
    'menu:page:header:configure' => 'Configurar',
    'menu:page:header:develop' => 'Desenvolver',
    'menu:page:header:default' => 'Outro',
    'admin:view_site' => 'Ver o sitio',
    'admin:loggedin' => 'Accedeu como %s',
    'admin:menu' => 'Menú',
    'admin:configuration:success' => "Gardouse a configuración.",
    'admin:configuration:fail' => "Non foi posíbel gardar a configuración.",
    'admin:configuration:dataroot:relative_path' => 'Non é posíbel facer de «%s» a raíz de datos porque non se trata dunha ruta absoluta.',
    'admin:configuration:default_limit' => 'O número de elementos por páxina debe ser como mínimo 1.',
    'admin:unknown_section' => 'Sección de administración incorrecta.',
    'admin' => "Administración",
    'admin:description' => "O panel de administración permítelle controlar todos os aspectos do sistema, desde a xestión de usuarios ata o comportamento dos complementos. Escolla unha das seguintes opcións para comezar.",
    'admin:statistics' => "Estatísticas",
    'admin:statistics:overview' => 'Resumo',
    'admin:statistics:server' => 'Información do servidor',
    'admin:statistics:cron' => 'Cro',
    'admin:cron:record' => 'Últimas tarefas de Cro',
    'admin:cron:period' => 'Período de Cron',
    'admin:cron:friendly' => 'Completado por última vez',
    'admin:cron:date' => 'Data e hora',
    'admin:cron:msg' => 'Message',
    'admin:cron:started' => 'Cron jobs for "%s" started at %s',
    'admin:cron:complete' => 'Cron jobs for "%s" completed at %s',
    'admin:appearance' => 'Aparencia',
    'admin:administer_utilities' => 'Utilidades',
    'admin:develop_utilities' => 'Itilidades',
    'admin:configure_utilities' => 'Utilidades',
    'admin:configure_utilities:robots' => 'Robots.txt',
    'admin:users' => "Usuarios",
    'admin:users:online' => 'Conectados agora',
    'admin:users:newest' => 'Últimos',
    'admin:users:admins' => 'Administradores',
    'admin:users:add' => 'Engadir un usuario',
    'admin:users:description' => "Este panel de administrador permítelle controlar a configuración dos usuarios do sitio. Escolla unha das seguintes opcións para comezar.",
    'admin:users:adduser:label' => "Prema aquí para engadir un usuario…",
    'admin:users:opt:linktext' => "Configurar os usuarios…",
    'admin:users:opt:description' => "Configurar a información dos usuarios e contas.",
    'admin:users:find' => 'Atopar',
    'admin:administer_utilities:maintenance' => 'Modo de mantemento',
    'admin:upgrades' => 'Anovacións',
    'admin:settings' => 'Configuración',
    'admin:settings:basic' => 'Configuración básica',
    'admin:settings:advanced' => 'Configuración avanzada',
    'admin:site:description' => "Este panel de administración permítelle controlar a configuración global do sitio. Escolla unha das seguintes opcións para comezar.",
    'admin:site:opt:linktext' => "Configurar o sitio…",
    'admin:settings:in_settings_file' => 'A opción está configurada en «settings.php».',
    'admin:legend:security' => 'Seguranza',
    'admin:site:secret:intro' => 'Elgg usa unha chave para crear códigos de seguridade para varios fins.',
    'admin:site:secret_regenerated' => "Xerouse un novo segredo para o sitio.",
    'admin:site:secret:regenerate' => "Xerar un novo segredo para o sitio",
    'admin:site:secret:regenerate:help' => "Nota: Ao xerar un novo segredo para o sitio, invalidaranse os códigos das cookies para lembrar as sesións, dos correos de validación, dos códigos de invitación, etc. Isto pode afectar a algúns usuarios.",
    'site_secret:current_strength' => 'Seguranza da chave',
    'site_secret:strength:weak' => "Feble",
    'site_secret:strength_msg:weak' => "Recomendámoslle encarecidamente que volva xerar o segredo do sitio.",
    'site_secret:strength:moderate' => "Moderada",
    'site_secret:strength_msg:moderate' => "Recomendámoslle que volva xerar o segredo do sitio para maior seguranza.",
    'site_secret:strength:strong' => "Forte",
    'site_secret:strength_msg:strong' => "O segredo do sitio é forte dabondo. Non é necesario que o volva xerar.",
    'admin:dashboard' => 'Taboleiro',
    'admin:widget:online_users' => 'Usuarios conectados',
    'admin:widget:online_users:help' => 'Lista os usuarios que están actualmente no sitio.',
    'admin:widget:new_users' => 'Usuarios novos',
    'admin:widget:new_users:help' => 'Lista os últimos usuarios en rexistrarse.',
    'admin:widget:banned_users' => 'Usuarios expulsados',
    'admin:widget:banned_users:help' => 'Lista os usuarios expulsados.',
    'admin:widget:content_stats' => 'Estatísticas do contido',
    'admin:widget:content_stats:help' => 'Fai un seguimento do contido que crean os usuarios.',
    'admin:widget:cron_status' => 'Estado das tarefas programadas',
    'admin:widget:cron_status:help' => 'Mostra o estado das últimas tarefas programadas que se executaron.',
    'widget:content_stats:type' => 'Tipo de contido',
    'widget:content_stats:number' => 'Número',
    'admin:widget:admin_welcome' => 'Benvida',
    'admin:widget:admin_welcome:help' => "Unha breve introdución á zona de administración de Elgg",
    'admin:widget:admin_welcome:intro' =>
    'Reciba a nosa benvida a Elgg. O que ten diante agora mesmo é o taboleiro de administración. Resulta útil para facer un seguimento do que está a acontecer no sitio.',
    'admin:widget:admin_welcome:admin_overview' =>
    "O menú da dereita permite navegar pola zona de administración, e está organizado nas seguintes seccións:
	<dl>
		<dt>Administrar</dt><dd>Tarefas diarias como revisar contido denunciado, comprobar quen está conectado, e ver as estatísticas.</dd>
		<dt>Configurar</dt><dd>Tarefas ocasionais, como definir o nome do sitio ou activar un complemento.</dd>
		<dt>Desenvolver</dt><dd>Para desenvolvedores que están a traballar en complementos ou temas. Necesítase un complemento de desenvolvedor.</dd>
	</dl>
	",
    // argh, this is ugly
    'admin:widget:admin_welcome:outro' => '<br />Asegúrese de botarlle unha ollada aos recursos dispoñíbeis na parte inferior da páxina, e grazas por usar Elgg!',
    'admin:widget:control_panel' => 'Panel de contro',
    'admin:widget:control_panel:help' => "Facilita o acceso a controis habituais.",
    'admin:cache:flush' => 'Baleirar as cachés',
    'admin:cache:flushed' => "Baleiráronse as cachés do sitio.",
    'admin:footer:faq' => 'P+F sobre administración',
    'admin:footer:manual' => 'Manual de administración',
    'admin:footer:community_forums' => 'Foros da comunidade de Elgg',
    'admin:footer:blog' => 'Bitácora de Elgg',
    'admin:plugins:category:all' => 'Todos os complementos',
    'admin:plugins:category:active' => 'Complementos activos',
    'admin:plugins:category:inactive' => 'Complementos inactivos',
    'admin:plugins:category:admin' => 'Administración',
    'admin:plugins:category:bundled' => 'Empaquetado',
    'admin:plugins:category:nonbundled' => 'Non empaquetado',
    'admin:plugins:category:content' => 'Contido',
    'admin:plugins:category:development' => 'Desenvolvemento',
    'admin:plugins:category:enhancement' => 'Melloras',
    'admin:plugins:category:api' => 'Servizo ou API',
    'admin:plugins:category:communication' => 'Comunicación',
    'admin:plugins:category:security' => 'Seguranza e vandalismo',
    'admin:plugins:category:social' => 'Social',
    'admin:plugins:category:multimedia' => 'Son e vídeo',
    'admin:plugins:category:theme' => 'Temas',
    'admin:plugins:category:widget' => 'Trebellos',
    'admin:plugins:category:utility' => 'Utilidades',
    'admin:plugins:markdown:unknown_plugin' => 'Complemento descoñecido.',
    'admin:plugins:markdown:unknown_file' => 'Ficheiro descoñecido.',
    'admin:notices:could_not_delete' => 'Non foi posíbel eliminar a nota.',
    'item:object:admin_notice' => 'Nota dos administradores',
    'admin:options' => 'Opcións de administración',
    /**
     * Plugins
     */
    'plugins:disabled' => 'Non se están a cargar os complementos porque no cartafol «mod» hai un ficheiro chamado «disable» (desactivar).',
    'plugins:settings:save:ok' => "Gardouse a configuración do complemento «%s».",
    'plugins:settings:save:fail' => "Non foi posíbel gardar a configuración do complemento «%s».",
    'plugins:usersettings:save:ok' => "Gardouse a configuración do usuario para o complemento «%s».",
    'plugins:usersettings:save:fail' => "Non foi posíbel gardar a configuración do usuario para o complemento «%s».",
    'item:object:plugin' => 'Complementos',
    'admin:plugins' => "Complementos",
    'admin:plugins:activate_all' => 'Activalos todos',
    'admin:plugins:deactivate_all' => 'Desactivalos todos',
    'admin:plugins:activate' => 'Activar',
    'admin:plugins:deactivate' => 'Desactivar',
    'admin:plugins:description' => "Este panel de administración permítelle controlar e configurar ferramentas instaladas no sitio.",
    'admin:plugins:opt:linktext' => "Configurar as ferramentas…",
    'admin:plugins:opt:description' => "Configurar as ferramentas instaladas no sitio.",
    'admin:plugins:label:id' => "ID",
    'admin:plugins:label:name' => "Name",
    'admin:plugins:label:author' => "Autor",
    'admin:plugins:label:copyright' => "Dereitos de autor",
    'admin:plugins:label:categories' => 'Categorías',
    'admin:plugins:label:licence' => "Licenza",
    'admin:plugins:label:website' => "URL",
    'admin:plugins:label:info' => "Info",
    'admin:plugins:label:files' => "Files",
    'admin:plugins:label:resources' => "Resources",
    'admin:plugins:label:screenshots' => "Screenshots",
    'admin:plugins:label:repository' => "Código",
    'admin:plugins:label:bugtracker' => "Informar dun problema",
    'admin:plugins:label:donate' => "Doar",
    'admin:plugins:label:moreinfo' => 'Máis información',
    'admin:plugins:label:version' => 'Versión',
    'admin:plugins:label:location' => 'Lugar',
    'admin:plugins:label:contributors' => 'Colaboradores',
    'admin:plugins:label:contributors:name' => 'Nome',
    'admin:plugins:label:contributors:email' => 'Corre',
    'admin:plugins:label:contributors:website' => 'Sitio web',
    'admin:plugins:label:contributors:username' => 'Usuario na comunidade',
    'admin:plugins:label:contributors:description' => 'Descrición',
    'admin:plugins:label:dependencies' => 'Dependencias',
    'admin:plugins:warning:unmet_dependencies' => 'O complemento ten dependencias que non están satisfeitas, e polo tanto non pode activarse. Prema «Máis información» para ver a lista de dependencias.',
    'admin:plugins:warning:invalid' => 'O complemento non é válido: %s',
    'admin:plugins:warning:invalid:check_docs' => 'Na <a href="http://learn.elgg.org/en/stable/appendix/faqs.html">documentación de Elss</a> atopará consellos para evitar e solucionar problemas.',
    'admin:plugins:cannot_activate' => 'Non pode activarse',
    'admin:plugins:already:active' => 'The selected plugin(s) are already active.',
    'admin:plugins:already:inactive' => 'The selected plugin(s) are already inactive.',
    'admin:plugins:set_priority:yes' => "Cambiouse a posición de «%s».",
    'admin:plugins:set_priority:no' => "Non foi posíbel cambiar a posición de «%s».",
    'admin:plugins:set_priority:no_with_msg' => "Non foi posíbel cambiar a posición de «%s». Produciuse un erro: %s",
    'admin:plugins:deactivate:yes' => "Desactivouse «%s».",
    'admin:plugins:deactivate:no' => "Non foi posíbel desactivar «%s».",
    'admin:plugins:deactivate:no_with_msg' => "Non foi posíbel desactivar «%s». Produciuse un erro: %s",
    'admin:plugins:activate:yes' => "Activouse «%s».",
    'admin:plugins:activate:no' => "Non foi posíbel activar «%s».",
    'admin:plugins:activate:no_with_msg' => "Non foi posíbel actiar «%s». Produciuse un erro: %s",
    'admin:plugins:categories:all' => 'Todas as categorías',
    'admin:plugins:plugin_website' => 'Sitio web do complemento',
    'admin:plugins:author' => '%s',
    'admin:plugins:version' => 'Versión %s',
    'admin:plugin_settings' => 'Configuración do complement',
    'admin:plugins:warning:unmet_dependencies_active' => 'O complemento está activo pero algunhas das súas dependencias non están satisfeitas. Pode que lle dea problemas. Prema «Máis información» para obter máis detalles.',
    'admin:plugins:dependencies:type' => 'Tipo',
    'admin:plugins:dependencies:name' => 'Nome',
    'admin:plugins:dependencies:expected_value' => 'Valor esperad',
    'admin:plugins:dependencies:local_value' => 'Valor real',
    'admin:plugins:dependencies:comment' => 'Comentari',
    'admin:statistics:description' => "Isto é un resumo das estatísticas do sitio. Se quere estatísticas máis detalladas, existe unha funcionalidade de administración profesional.",
    'admin:statistics:opt:description' => "Ver información estatística sobre usuarios e obxectos do sitio.",
    'admin:statistics:opt:linktext' => "Ver as estatísticas…",
    'admin:statistics:label:basic' => "Estatísticas básicas do sitio",
    'admin:statistics:label:numentities' => "Entidades do sitio",
    'admin:statistics:label:numusers' => "Número de usuarios",
    'admin:statistics:label:numonline' => "Número de usuarios conectados",
    'admin:statistics:label:onlineusers' => "Usuarios conectados",
    'admin:statistics:label:admins' => "Administradores",
    'admin:statistics:label:version' => "Versión de Elgg",
    'admin:statistics:label:version:release' => "Publicación",
    'admin:statistics:label:version:version' => "Versión",
    'admin:server:label:php' => 'PHP',
    'admin:server:label:web_server' => 'Servidor web',
    'admin:server:label:server' => 'Servidor',
    'admin:server:label:log_location' => 'Ruta do rexistro',
    'admin:server:label:php_version' => 'Versión de PHP',
    'admin:server:label:php_ini' => 'Ruta do ficheiro de configuración de PHP',
    'admin:server:label:php_log' => 'Rexistro de PHP',
    'admin:server:label:mem_avail' => 'Memoria dispoñíbel',
    'admin:server:label:mem_used' => 'Memoria en uso',
    'admin:server:error_log' => "Rexistro de erros do servidor web",
    'admin:server:label:post_max_size' => 'Tamaño máximo das solicitudes POST',
    'admin:server:label:upload_max_filesize' => 'Tamaño máximo de envío',
    'admin:server:warning:post_max_too_small' => '(Nota: post_max_size debe ser maior que este valor para permitir envíos deste tamaño)',
    'admin:user:label:search' => "Atopar usuarios:",
    'admin:user:label:searchbutton' => "Buscar",
    'admin:user:ban:no' => "Non é posíbel expular ao usuario",
    'admin:user:ban:yes' => "O usuario foi expulsado.",
    'admin:user:self:ban:no' => "Non é posíbel expulsarse a un mesmo",
    'admin:user:unban:no' => "Non foi posíbel readmitir o usuario.",
    'admin:user:unban:yes' => "Readmitiuse o usuario.",
    'admin:user:delete:no' => "Non foi posíbel eliminar o usuario.",
    'admin:user:delete:yes' => "Eliminouse o usuario %s.",
    'admin:user:self:delete:no' => "Non é posíbel eliminarse a un memso.",
    'admin:user:resetpassword:yes' => "Restableceuse o contrasinal, informouse ao usuario.",
    'admin:user:resetpassword:no' => "Non foi posíbel restablecer o contrasinal.",
    'admin:user:makeadmin:yes' => "O usuario convertiuse en administrador.",
    'admin:user:makeadmin:no' => "Non foi posíbel converter o usuario en administrador.",
    'admin:user:removeadmin:yes' => "O usuario perdeu os privilexios de administrador",
    'admin:user:removeadmin:no' => "Non foi posíbel quitarlle ao usuario os privilexios de administrador.",
    'admin:user:self:removeadmin:no' => "Non é posíbel quitarse os privilexios de administrador a un mesmo.",
    'admin:appearance:menu_items' => 'Elementos do menú',
    'admin:menu_items:configure' => 'Configurar os elementos do menú principal.',
    'admin:menu_items:description' => 'Escolla os elementos de menú que quere mostrar como ligazóns destacadas. Os elementos que non use engadiranse a «Máis» ao final da lista.',
    'admin:menu_items:hide_toolbar_entries' => 'Quere eliminar as ligazóns do menú da barra de ferramentas?',
    'admin:menu_items:saved' => 'Gardáronse os elementos do menú.',
    'admin:add_menu_item' => 'Engadir un elemento de menú personalizado',
    'admin:add_menu_item:description' => 'Complete os campos de nome para mostrar e URL para engadir elementos personalizados al menú de navegación.',
    'admin:appearance:default_widgets' => 'Trebellos predeterminados',
    'admin:default_widgets:unknown_type' => 'Tipo de trebello descoñecido',
    'admin:default_widgets:instructions' => 'Engada, retire, coloque e configure os trebellos predeterminados para a páxina de trebellos seleccionada.
Os cambios só afectarán a novos usuarios.',
    'admin:robots.txt:instructions' => "Edite a continuación o ficheiro «robots.txt» do sitio.",
    'admin:robots.txt:plugins' => "Os complementos están a engadir o seguinte contido ao ficheiro «robots.txt».",
    'admin:robots.txt:subdir' => "A ferramenta de «robots.txt» non vai funcionar porque Elgg está instalado nun subdirectorio.",
    'admin:robots.txt:physical' => "A ferramenta robots.txt non funcionará porque existe un ficheiro robots.txt.",
    'admin:maintenance_mode:default_message' => 'O sitio está pechado por mantemento',
    'admin:maintenance_mode:instructions' => 'Use o modo de mantemento para anovar o sitio ou realizar outros cambios importantes.
		No modo de mantemento só os administradores poden acceder ao sitio.',
    'admin:maintenance_mode:mode_label' => 'Modo de mantemento',
    'admin:maintenance_mode:message_label' => 'Mensaxe que se mostra aos usuarios cando o sitio está no modo de mantemento.',
    'admin:maintenance_mode:saved' => 'Gardouse a configuración do modo de mantemento.',
    'admin:maintenance_mode:indicator_menu_item' => 'O sitio está en modo de mantemento.',
    'admin:login' => 'Acceso para administradores',
    /**
     * User settings
     */
    'usersettings:description' => "O panel de configuración de usuarios permítelle controlar a súa configuración persoal, desde a xestión de usuarios ata o comportamento dos complementos. Escolla unha das seguintes opcións para comezar.",
    'usersettings:statistics' => "Estatísticas súas",
    'usersettings:statistics:opt:description' => "Ver información estatística sobre usuarios e obxectos do sitio.",
    'usersettings:statistics:opt:linktext' => "Estatísticas das contas",
    'usersettings:user' => "Configuración de %s",
    'usersettings:user:opt:description' => "Isto permítelle controlar a configuración dos usuarios",
    'usersettings:user:opt:linktext' => "Cambiar a súa configuración",
    'usersettings:plugins' => "Ferramentas",
    'usersettings:plugins:opt:description' => "Configurar as súas ferramentas activas",
    'usersettings:plugins:opt:linktext' => "Configurar as súas ferramentas",
    'usersettings:plugins:description' => "Este panel permítelle controlar e cambiar a súa configuración persoal das ferramentas instaladas polo administrador do sistema.",
    'usersettings:statistics:label:numentities' => "Contido persoal",
    'usersettings:statistics:yourdetails' => "Detalles persoais",
    'usersettings:statistics:label:name' => "Nome complet",
    'usersettings:statistics:label:email' => "Correo",
    'usersettings:statistics:label:membersince' => "Membro desde",
    'usersettings:statistics:label:lastlogin' => "Último acces",
    /**
     * Activity river
     */
    'river:all' => 'Actividade global',
    'river:mine' => 'Actividade persoal',
    'river:owner' => 'Actividade de %s',
    'river:friends' => 'Actividade dos contactos',
    'river:select' => 'Mostrar %s',
    'river:comments:more' => '+%u máis',
    'river:comments:all' => 'Ver os %u comentarios',
    'river:generic_comment' => 'deixou un comentario en %s %s',
    'friends:widget:description' => "Mostra algúns dos seus contactos.",
    'friends:num_display' => "Número de contactos a mostrar.",
    'friends:icon_size' => "Tamaño das iconas",
    'friends:tiny' => "ananas",
    'friends:small' => "pequenas",
    /**
     * Icons
     */
    'icon:size' => "Tamaño das iconas",
    'icon:size:topbar' => "Barra superior",
    'icon:size:tiny' => "Enanas",
    'icon:size:small' => "Pequenas",
    'icon:size:medium' => "Medianas",
    'icon:size:large' => "Grandes",
    'icon:size:master' => "Xigantes",
    /**
     * Generic action words
     */
    'save' => "Gardar",
    'reset' => 'Restablecer',
    'publish' => "Publicar",
    'cancel' => "Cancelar",
    'saving' => "Gardando…",
    'update' => "Actualizar",
    'preview' => "Vista previa",
    'edit' => "Editar",
    'delete' => "Eliminar",
    'accept' => "Aceptar",
    'reject' => "Rexeitar",
    'decline' => "Refusar",
    'approve' => "Aprobar",
    'activate' => "Activar",
    'deactivate' => "Desactivar",
    'disapprove' => "Desaprobar",
    'revoke' => "Revogar",
    'load' => "Cargar",
    'upload' => "Enviar",
    'download' => "Descargar",
    'ban' => "Expulsar",
    'unban' => "Readmitir",
    'banned' => "Expulsado",
    'enable' => "Activar",
    'disable' => "Desactivar",
    'request' => "Solicitar",
    'complete' => "Completar",
    'open' => 'Abrir',
    'close' => 'Pechar',
    'hide' => 'Agochar',
    'show' => 'Mostrar',
    'reply' => "Responder",
    'more' => 'Máis',
    'more_info' => 'Máis información',
    'comments' => 'Comentarios',
    'import' => 'Importar',
    'export' => 'Exportar',
    'untitled' => 'Sen títul',
    'help' => 'Axuda',
    'send' => 'Enviar',
    'post' => 'Publicar',
    'submit' => 'Entregar',
    'comment' => 'Deixar un comentario',
    'upgrade' => 'Anovar',
    'sort' => 'Ordenar',
    'filter' => 'Filtrar',
    'new' => 'Nov',
    'add' => 'Engadir',
    'create' => 'Crear',
    'remove' => 'Eliminar',
    'revert' => 'Reverter',
    'site' => 'Siti',
    'activity' => 'Actividade',
    'members' => 'Membros',
    'menu' => 'Menú',
    'up' => 'Subir',
    'down' => 'Baixar',
    'top' => 'Arriba',
    'bottom' => 'Abaixo',
    'right' => 'Dereita',
    'left' => 'Esquerda',
    'back' => 'Volver',
    'invite' => "Convidar",
    'resetpassword' => "Restablecer o contrasinal",
    'changepassword' => "Cambiar o contrasinal",
    'makeadmin' => "Facer administrador",
    'removeadmin' => "Quitar os privilexios de administrador",
    'option:yes' => "Si",
    'option:no' => "Non",
    'unknown' => 'Descoñecido',
    'never' => 'Nunca',
    'active' => 'Activo',
    'total' => 'Total',
    'ok' => 'Aceptar',
    'any' => 'Calquera',
    'error' => 'Erro',
    'other' => 'Outro',
    'options' => 'Opcións',
    'advanced' => 'Avanzada',
    'learnmore' => "Prema aquí para saber máis",
    'unknown_error' => 'Erro descoñecido',
    'content' => "Contido",
    'content:latest' => 'Última actividade',
    'content:latest:blurb' => 'Tamén pode premer aquí para ver os últimos contidos de todo o sitio.',
    'link:text' => 'Ver a ligazón',
    /**
     * Generic questions
     */
    'question:areyousure' => 'Está seguro?',
    /**
     * Status
     */
    'status' => 'Estado',
    'status:unsaved_draft' => 'Borrador sen gardar',
    'status:draft' => 'Borrador',
    'status:unpublished' => 'Sen publicar',
    'status:published' => 'Publicado',
    'status:featured' => 'Destacado',
    'status:open' => 'Aberto',
    'status:closed' => 'Pechado',
    /**
     * Generic sorts
     */
    'sort:newest' => 'Último',
    'sort:popular' => 'Popular',
    'sort:alpha' => 'Alfabético',
    'sort:priority' => 'Prioridade',
    /**
     * Generic data words
     */
    'title' => "Títul",
    'description' => "Descrición",
    'tags' => "Etiquetas",
    'all' => "Tod",
    'mine' => "Propio",
    'by' => 'de',
    'none' => 'nada',
    'annotations' => "Anotacións",
    'relationships' => "Relacións",
    'metadata' => "Metadatos",
    'tagcloud' => "Nube de etiquetas",
    'on' => 'Activado',
    'off' => 'Desactivado',
    /**
     * Entity actions
     */
    'edit:this' => 'Editar ist',
    'delete:this' => 'Eliminar ist',
    'comment:this' => 'Deixar un comentario nist',
    /**
     * Input / output strings
     */
    'deleteconfirm' => "Está seguro de que quere eliminar isto?",
    'deleteconfirm:plural' => "Está seguro de que quere eliminar estes elementos?",
    'fileexists' => "Xa se subiu un ficheiro. Para substituílo, seleccióneo a continuación:",
    /**
     * User add
     */
    'useradd:subject' => 'Creouse a conta de usuario',
    'useradd:body' => '
%s.

Creouse unha conta de usuario para vostede en %s. Pode acceder desde:

%s

E identificarse cos seguintes datos:

Username: %s
Password: %s

Despois de acceder, recomendámoslle encarecidamente que cambie o seu contrasinal.
',
    /**
     * System messages
     */
    'systemmessages:dismiss' => "Prema para descartar",
    /**
     * Import / export
     */
    'importsuccess' => "Importáronse os datos",
    'importfail' => "Non foi posíbel importar os datos mediante OpenDD.",
    /**
     * Time
     */
    'friendlytime:justnow' => "hai un intre",
    'friendlytime:minutes' => "hai %s minutos",
    'friendlytime:minutes:singular' => "hai un minuto",
    'friendlytime:hours' => "hai %s horas",
    'friendlytime:hours:singular' => "hai unha hora",
    'friendlytime:days' => "hai %s días",
    'friendlytime:days:singular' => "onte",
    'friendlytime:date_format' => 'j de F de Y ás g:i a',
    'friendlytime:future:minutes' => "en %s minutos",
    'friendlytime:future:minutes:singular' => "nun minuto",
    'friendlytime:future:hours' => "en %s horas",
    'friendlytime:future:hours:singular' => "nunha hora",
    'friendlytime:future:days' => "en %s días",
    'friendlytime:future:days:singular' => "mañá",
    'date:month:01' => '%s de xaneir',
    'date:month:02' => '%s de febreiro',
    'date:month:03' => '%s de marzo',
    'date:month:04' => '%s de abril',
    'date:month:05' => '%s de mai',
    'date:month:06' => '%s de xuño',
    'date:month:07' => '%s de xull',
    'date:month:08' => '%s de agost',
    'date:month:09' => '%s de setembr',
    'date:month:10' => '%s de outubro',
    'date:month:11' => '%s de novembr',
    'date:month:12' => '%s de decembr',
    'date:month:short:01' => 'Jan %s',
    'date:month:short:02' => 'Feb %s',
    'date:month:short:03' => 'Mar %s',
    'date:month:short:04' => 'Apr %s',
    'date:month:short:05' => 'May %s',
    'date:month:short:06' => 'Jun %s',
    'date:month:short:07' => 'Jul %s',
    'date:month:short:08' => 'Aug %s',
    'date:month:short:09' => 'Sep %s',
    'date:month:short:10' => 'Oct %s',
    'date:month:short:11' => 'Nov %s',
    'date:month:short:12' => 'Dec %s',
    'date:weekday:0' => 'Doming',
    'date:weekday:1' => 'Luns',
    'date:weekday:2' => 'Martes',
    'date:weekday:3' => 'Mércores',
    'date:weekday:4' => 'Xoves',
    'date:weekday:5' => 'Venres',
    'date:weekday:6' => 'Sábad',
    'date:weekday:short:0' => 'Sun',
    'date:weekday:short:1' => 'Mon',
    'date:weekday:short:2' => 'Tue',
    'date:weekday:short:3' => 'Wed',
    'date:weekday:short:4' => 'Thu',
    'date:weekday:short:5' => 'Fri',
    'date:weekday:short:6' => 'Sat',
    'interval:minute' => 'Cada minuto',
    'interval:fiveminute' => 'Cada cindo minutos',
    'interval:fifteenmin' => 'Cada cuarto de hora',
    'interval:halfhour' => 'Cada media hora',
    'interval:hourly' => 'Cada hora',
    'interval:daily' => 'Cada día',
    'interval:weekly' => 'Cada semana',
    'interval:monthly' => 'Cada mes',
    'interval:yearly' => 'Cada an',
    'interval:reboot' => 'Ao reiniciar',
    /**
     * System settings
     */
    'installation:sitename' => "Nome do sitio:",
    'installation:sitedescription' => "Descrición curta do sitio (opcional):",
    'installation:wwwroot' => "URL do sitio:",
    'installation:path' => "Ruta completa da instalación de Elgg:",
    'installation:dataroot' => "Ruta completa do cartafol dos datos:",
    'installation:dataroot:warning' => "Debe crear este cartafol manualmente. Debería estar fóra do cartafol de instalación de Elgg.",
    'installation:sitepermissions' => "Permisos de acceso predeterminados:",
    'installation:language' => "Idioma predeterminado:",
    'installation:debug' => "Controle a cantidade de información que se garda no rexistro do servidor.",
    'installation:debug:label' => "Nivel de rexistro:",
    'installation:debug:none' => 'Desactivar o rexistro (recomendado)',
    'installation:debug:error' => 'Só rexistrar erros críticos',
    'installation:debug:warning' => 'Rexistrar erros e avisos',
    'installation:debug:notice' => 'Rexistrar erros, avisos e notas',
    'installation:debug:info' => 'Rexistralo todo',
    // Walled Garden support
    'installation:registration:description' => 'O rexistro de usuarios está activado de maneira predeterminada. Pode desactivalo se non quere que a xente se rexistre pola súa conta.',
    'installation:registration:label' => 'Permitir o rexistro de novos usuarios',
    'installation:walled_garden:description' => 'Active isto para evitar que usuarios anónimos poidan acceder a páxinas do sitio que non estean marcadas como públicas, como pode ser o caso das páxinas de acceso e rexistro de contas.',
    'installation:walled_garden:label' => 'Restrinxir as páxinas a usuarios rexistrados.',
    'installation:view' => "Indique a vista que se usará como vista predeterminada do sitio, ou non indique nada para usar a vista predeterminada. En caso de dúbida, deixe o campo baleiro.",
    'installation:siteemail' => "Enderezo de correo electrónico do sitio (co que enviar as mensaxes do sistema):",
    'installation:default_limit' => "Número predeterminado de elementos por páxina.",
    'admin:site:access:warning' => "Esta é a configuración de intimidade que se lles suxire aos usuarios cando crean novo contido. Cambiala non afecta ao contido xa creado.",
    'installation:allow_user_default_access:description' => "Active isto para permitirlle aos usuarios definir a súa propia configuración de intimidade predeterminada.",
    'installation:allow_user_default_access:label' => "Permitir o acceso predeterminado de usuarios.",
    'installation:simplecache:description' => "A caché simple almacena contido estático, incluídos ficheiros CSS e JavaScript, mellorando así o rendemento.",
    'installation:simplecache:label' => "Usar a caché simple (recomendado).",
    'installation:cache_symlink:description' => "The symbolic link to the simple cache directory allows the server to serve static views bypassing the engine, which considerably improves performance and reduces the server load",
    'installation:cache_symlink:label' => "Use symbolic link to simple cache directory (recommended)",
    'installation:cache_symlink:warning' => "Symbolic link has been established. If, for some reason, you want to remove the link, delete the symbolic link directory from your server",
    'installation:cache_symlink:error' => "Due to your server configuration the symbolic link can not be established automatically. Please refer to the documentation and establish the symbolic link manually.",
    'installation:minify:description' => "A caché simple tamén pode comprimir os ficheiros CSS e JavaScript para mellorar o rendemento. Para activar esta opción active primeiro a caché simple.",
    'installation:minify_js:label' => "Comprimir o código JavaScript (recomendado).",
    'installation:minify_css:label' => "Comprimir o código CSS (recomendado).",
    'installation:htaccess:needs_upgrade' => "Debe actualizar o seu ficheiro «.htaccess» para que a ruta se insira no parámetro GET «__elgg_uri» (pode basearse no modelo que hai en «install/config/htaccess.dist»).",
    'installation:htaccess:localhost:connectionfailed' => "Elgg non pode conectarse a si mesmo para probar as regras de substitución correctamente. Comprobe que o programa «curl» funciona e que non existen restricións de enderezos IP que impidan as conexións locais.",
    'installation:systemcache:description' => "A caché do sistema almacena datos en ficheiros para diminuír o tempo de carga de Elgg",
    'installation:systemcache:label' => "Usar a caché do sistema (recomendado).",
    'admin:legend:system' => 'Sistema',
    'admin:legend:caching' => 'Caché',
    'admin:legend:content_access' => 'Acceso a contidos',
    'admin:legend:site_access' => 'Acceso ao sitio',
    'admin:legend:debug' => 'Depuración e rexistr',
    'upgrading' => 'Anovando…',
    'upgrade:core' => 'Anovouse a instalación de Elgg.',
    'upgrade:unlock' => 'Desbloquear a anovación',
    'upgrade:unlock:confirm' => "A base de datos está bloqueada para outra anovación. Realizar varias anovacións ao mesmo tempo é perigoso. Non continúe salvo que estea certo de que non hai ningunha outra anovación en marcha. Quere desbloquear a anovació?",
    'upgrade:locked' => "Non é posíbel anovar, hai outra anovación en marcha. Pode desbloquear esta anovación desde a sección de administración.",
    'upgrade:unlock:success' => "Desbloqueouse a anovación.",
    'upgrade:unable_to_upgrade' => 'Non é posíbel anovar.',
    'upgrade:unable_to_upgrade_info' =>
    'Non é posíbel anovar a instalación porque se detectaron vistas obsoletas no cartafol principal («core») de vistas de Elgg. Para que Elgg funcione correctamente debe eliminar esas vistas. Se non fixo cambios no cartafol principal de vistas, pode eliminar o cartafol e substituílo polo do último paquete de Elgg, que pode descargar de <a href="http://elgg.org">elgg.org</a>.<br /><br />

Atopará instrucións detalladas na <a href="http://learn.elgg.org/en/stable/admin/upgrading.html">documentación de anovación de Elgg</a> (en inglés). Se necesita axuda, publique unha mensaxe nos <a href="http://community.elgg.org/pg/groups/discussion/">foros de asistencia da comunidade</a> (en inglés).',
    'update:twitter_api:deactivated' => 'A API de Twitter (outrora coñeciza como «Servizo de Twitter») desactivouse durante a anovación. Actívea de novo manualmente.',
    'update:oauth_api:deactivated' => 'A API de OAuth (outrora coñecida como «OAuth Lib») desactivouse durante a anovación. Actívea de novo manualmente.',
    'upgrade:site_secret_warning:moderate' => "Recomendámoslle que volva xerar a chave do sitio para mellorar a seguranza do sistema. Pode facelo desde «Configurar → Configuración → Avanzada».",
    'upgrade:site_secret_warning:weak' => "Recomendámoslle encarecidamente que volva xerar a chave do sitio para mellorar a seguranza do sistema. Pode facelo desde «Configurar → Configuración → Avanzada».",
    'deprecated:function' => 'A función «%s()» está obsoleta, substitúaa por «%s()».',
    'admin:pending_upgrades' => 'O sitio ten anovacións pendentes que requiren da súa atención inmediata.',
    'admin:view_upgrades' => 'Ver as anovacións pendentes.',
    'item:object:elgg_upgrade' => 'Anovacións do sitio.',
    'admin:upgrades:none' => 'A instalación está actualizada.',
    'upgrade:item_count' => 'É necesario anovar <b>%s</b> elementos.',
    'upgrade:warning' => '<b>Advertencia:</b> En sitios grandes, esta anovación pode levar bantante tempo.',
    'upgrade:success_count' => 'Anovado:',
    'upgrade:error_count' => 'Erros:',
    'upgrade:river_update_failed' => 'Non foi posíbel actualizar a entrada da onda para o elemento con identificador «%s».',
    'upgrade:timestamp_update_failed' => 'Non foi posíbel actualizar as datas para o elemento con identificador «%s».',
    'upgrade:finished' => 'Rematou a anovación',
    'upgrade:finished_with_errors' => '<p>Rematou a anovación pero producíronse erros. Actualice a páxina e probe a anovar outra vez.</p></p><br />

Se o erro persiste, comprobe o rexistro de erros do servidor, a ver se pode indetificar a causa. Para pedir axuda para solucionar o erro, acuda ao <a href="http://community.elgg.org/groups/profile/179063/elgg-technical-support">grupo de asistencia técnica</a> na comunidade de Elgg.</p>',
    // Strings specific for the comments upgrade
    'admin:upgrades:comments' => 'Anovación dos comentarios',
    'upgrade:comment:create_failed' => 'Non foi posíbel converter o identificador de comentario «%s» nunha entidade.',
    'admin:upgrades:commentaccess' => 'Anovación do acceso aos comentarios',
    // Strings specific for the datadir upgrade
    'admin:upgrades:datadirs' => 'Anovación do cartafol de datos',
    // Strings specific for the discussion reply upgrade
    'admin:upgrades:discussion_replies' => 'Anovación da resposta de conversa',
    'discussion:upgrade:replies:create_failed' => 'Non foi posíbel converter o identificador de resposta de conversa «%s» nunha entidade.',
    /**
     * Welcome
     */
    'welcome' => "Benvida",
    'welcome:user' => 'Ola, %s',
    /**
     * Emails
     */
    'email:from' => 'De',
    'email:to' => 'A',
    'email:subject' => 'Asunt',
    'email:body' => 'Corpo',
    'email:settings' => "Configuración do corre",
    'email:address:label' => "Enderezo de corre",
    'email:save:success' => "Gardouse o novo enderezo de correo. Envióuselle unha solicitude de verificación.",
    'email:save:fail' => "Non foi posíbel gardar o novo enderezo de correo.",
    'friend:newfriend:subject' => "%s engadiuno como contacto.",
    'friend:newfriend:body' => "%s engadiuno como contacto.

Para ver o seu perfil, visite:

%s

Non responda a esta mensaxe.",
    'email:changepassword:subject' => "Cambiouse o contrasinal.",
    'email:changepassword:body' => "Ola, %s.

Cambiouse o seu contrasinal.",
    'email:resetpassword:subject' => "Restableceuse o seu contrasinal",
    'email:resetpassword:body' => "Ola, %s.

Restableceuse o seu contrasinal, que agora é «%s».",
    'email:changereq:subject' => "Solicitude de cambio de contrasinal.",
    'email:changereq:body' => "Ola, %s.

Alguén (desde o enderezo IP %s) solicitou cambiar o contrasinal da súa conta.

Se foi vostede, prema a ligazón embaixo. En caso contrario, ignore esta mensaxe.

%s
",
    /**
     * user default access
     */
    'default_access:settings' => "Nivel de acceso predeterminado persoal",
    'default_access:label' => "Acceso predeterminado",
    'user:default_access:success' => "Gardouse o seu novo nivel de acceso predeterminado.",
    'user:default_access:failure' => "Non foi posíbel gardar o seu novo nivel de acceso predeterminado.",
    /**
     * Comments
     */
    'comments:count' => "%s comentarios",
    'item:object:comment' => 'Comentarios',
    'river:comment:object:default' => '%s deixou un comentario en %s',
    'generic_comments:add' => "Deixar un comentario",
    'generic_comments:edit' => "Editar o comentario",
    'generic_comments:post' => "Publicar o comentario",
    'generic_comments:text' => "Deixar un comentario",
    'generic_comments:latest' => "Últimos comentarios",
    'generic_comment:posted' => "Publicouse o comentario:",
    'generic_comment:updated' => "Actualizouse o comentario.",
    'generic_comment:deleted' => "Eliminouse o comentario.",
    'generic_comment:blank' => "Non pode enviar un comentario baleiro",
    'generic_comment:notfound' => "Non se atopou o comentario indicado.",
    'generic_comment:notfound_fallback' => "Non se atopou o comentario indicado, esta é a páxina onde se deixou o comentario.",
    'generic_comment:notdeleted' => "Non foi posíbel eliminar o comentario.",
    'generic_comment:failure' => "Non foi posíbel gardar o comentario, produciuse un erro inesperado",
    'generic_comment:none' => 'Non hai comentarios',
    'generic_comment:title' => 'Comentario de %s',
    'generic_comment:on' => '%s en %s',
    'generic_comments:latest:posted' => 'publicou un',
    'generic_comment:email:subject' => 'Ten un comentario novo',
    'generic_comment:email:body' => "Ten un comentario novo en «%s» por parte de «%s». Di así:


%s


Para responder ou ver a súa publicación en:

%s

Pode ver o perfil de %s en:

%s

Non responda a esta mensaxe.",
    /**
     * Entities
     */
    'byline' => 'De %s',
    'byline:ingroup' => 'in the group %s',
    'entity:default:strapline' => 'Creou %s de %s',
    'entity:default:missingsupport:popup' => 'Non é posíbel mostrar correctamente esta entidade. Pode que o motivo sexa que necesita dun complemento que xa non está instalado.',
    'entity:delete:item' => 'Item',
    'entity:delete:item_not_found' => 'Item not found.',
    'entity:delete:permission_denied' => 'You do not have permissions to delete this item.',
    'entity:delete:success' => '%s has been deleted.',
    'entity:delete:fail' => '%s could not be deleted.',
    'entity:can_delete:invaliduser' => 'Cannot check canDelete() for user_guid [%s] as the user does not exist.',
    /**
     * Action gatekeeper
     */
    'actiongatekeeper:missingfields' => 'Ao formulario fáltanlle os campos «__token» ou «__ts».',
    'actiongatekeeper:tokeninvalid' => "A páxina que estaba a usar caducou. Vólvao intentar.",
    'actiongatekeeper:timeerror' => 'A páxina que estaba a usar caducou. Actualize a páxina e vólvao intentar.',
    'actiongatekeeper:pluginprevents' => 'Algunha razón descoñecida impediu enviar o seu formulario.',
    'actiongatekeeper:uploadexceeded' => 'O tamaño dos ficheiros enviados supera o límite definido polo administrador do sitio.',
    'actiongatekeeper:crosssitelogin' => "Non se permite acceder desde un dominio distinto. Vólvao intentar.",
    /**
     * Word blacklists
     */
    'word:blacklist' => 'e, o, a, os, as, entón, pero, mais, ela, el, un, non, tamén, sobre, agora, porén, aínda, igualmente, senón, máis, isto, iso, aquilo, parece, que, quen, cuxa, cuxo, cuxas, cuxos',
    /**
     * Tag labels
     */
    'tag_names:tags' => 'Etiquetas',
    /**
     * Javascript
     */
    'js:security:token_refresh_failed' => 'Non foi posíbel contactar con %s. Pode que teña problemas ao gardar contidos. Actualize a páxina.',
    'js:security:token_refreshed' => 'Restableceuse a conexión con %s.',
    'js:lightbox:current' => "Imaxe número %s de %s",
    /**
     * Miscellaneous
     */
    'elgg:powered' => "Construído con Elgg",
    /**
     * Languages according to ISO 639-1 (with a couple of exceptions)
     */
    "aa" => "Afar",
    "ab" => "Abkhazo",
    "af" => "Afrikaans",
    "am" => "Amáric",
    "ar" => "Árabe",
    "as" => "Asamés",
    "ay" => "Aimará",
    "az" => "Acerbaixano",
    "ba" => "Baskir",
    "be" => "Bielorruso",
    "bg" => "Búlgaro",
    "bh" => "Biari",
    "bi" => "Bislamá; bichlamar",
    "bn" => "Bengalí; bangla",
    "bo" => "Tibetano",
    "br" => "Bretón",
    "ca" => "Catalán",
    "cmn" => "Chinés mandarín", // ISO 639-3
    "co" => "Cors",
    "cs" => "Checho",
    "cy" => "Galés",
    "da" => "Dinamarqués",
    "de" => "Alemán",
    "dz" => "Bhutani",
    "el" => "Grego",
    "en" => "Inglés",
    "eo" => "Esperant",
    "es" => "Castelán",
    "et" => "Estonian",
    "eu" => "Éuscara",
    "eu_es" => "Basque (Spain)",
    "fa" => "Persa",
    "fi" => "Finlandés",
    "fj" => "Fidxian",
    "fo" => "Feroés",
    "fr" => "Francés",
    "fy" => "Frisón; frisi",
    "ga" => "Irlandés",
    "gd" => "Gaélico-escocés",
    "gl" => "Galeg",
    "gn" => "Guaraní",
    "gu" => "Guxaratí; guzerate",
    "he" => "Hebráico",
    "ha" => "Hausa",
    "hi" => "Hindi; híndi; indi",
    "hr" => "Croata",
    "hu" => "Húngaro",
    "hy" => "Armenio",
    "ia" => "Interlingua",
    "id" => "Indonesi",
    "ie" => "Lingua occidental",
    "ik" => "Inupiaq",
    //"in" => "Indonesian",
    "is" => "Islandés",
    "it" => "Italiano",
    "iu" => "Inuktitut",
    "iw" => "Hebráico (obsoleto)",
    "ja" => "Xaponés",
    "ji" => "Yiddish; iídiche (obsoleto)",
    "jw" => "Xavanés",
    "ka" => "Xeorxiano",
    "kk" => "Casaco",
    "kl" => "Groenlandés",
    "km" => "Khmer",
    "kn" => "Kannada",
    "ko" => "Coreano",
    "ks" => "Cachemir",
    "ku" => "Curdo",
    "ky" => "Quirguiz",
    "la" => "Latín",
    "ln" => "Lingala",
    "lo" => "Laosiano",
    "lt" => "Lituan",
    "lv" => "Letón",
    "mg" => "Malgaxe",
    "mi" => "Maorí",
    "mk" => "Macedoni",
    "ml" => "Malaiala",
    "mn" => "Mongo",
    "mo" => "Moldavi",
    "mr" => "Marata",
    "ms" => "Malaio",
    "mt" => "Maltés",
    "my" => "Birmano",
    "na" => "Nauru",
    "ne" => "Nepali; nepalés",
    "nl" => "Neerlandés",
    "no" => "Noruegués",
    "oc" => "Occitan",
    "om" => "Oromo",
    "or" => "Oriya",
    "pa" => "Punjabi",
    "pl" => "Polaco",
    "ps" => "Pashto",
    "pt" => "Portugués",
    "pt_br" => "Portuguese (Brazil)",
    "qu" => "Quechua",
    "rm" => "Retorromance",
    "rn" => "Rundi",
    "ro" => "Romanés",
    "ro_ro" => "Romanian (Romania)",
    "ru" => "Rus",
    "rw" => "Ruandés",
    "sa" => "Sánscrito",
    "sd" => "Sindhi",
    "sg" => "Sango",
    "sh" => "Serbocroata",
    "si" => "Sinhalés; cingalês",
    "sk" => "Eslovaco",
    "sl" => "Esloven",
    "sm" => "Samoa",
    "sn" => "Chona",
    "so" => "Somaí",
    "sq" => "Albanés",
    "sr" => "Serbi",
    "sr_latin" => "Serbian (Latin)",
    "ss" => "Swati",
    "st" => "Sotho do norte",
    "su" => "Sudanés",
    "sv" => "Sueco",
    "sw" => "Swahili",
    "ta" => "Támil",
    "te" => "Telugú",
    "tg" => "Taxico",
    "th" => "Tailandés",
    "ti" => "Tigriña",
    "tk" => "Turcomán; turkmeno",
    "tl" => "Tagalo",
    "tn" => "Tswana",
    "to" => "Tonganés",
    "tr" => "Turc",
    "ts" => "ChiTsonga; XiTsonga; ShiTsonga",
    "tt" => "Tártaro",
    "tw" => "Twi",
    "ug" => "Uigure",
    "uk" => "Ucraíno",
    "ur" => "Urdu",
    "uz" => "Usbeco; uzbek",
    "vi" => "Vietnamita",
    "vo" => "Volapük",
    "wo" => "Wólof",
    "xh" => "Xhosa",
    //"y" => "Yiddish; iídiche",
    "yi" => "Yiddish; iídiche",
    "yo" => "Ioruba; yoruba",
    "za" => "Zhuang; chuang",
    "zh" => "Chinés",
    "zh_hans" => "Chinese Simplified",
    "zu" => "Zulú",
    "field:required" => 'Required',
);
