<?php
/**
 * Email user validation plugin language pack.
 *
 * @package Elgg.Core.Plugin
 * @subpackage ElggUserValidationByEmail
 */

$spanish = array(
	'admin:users:unvalidated' => 'No validados',
	
	'email:validate:subject' => "%s por favor confirme su direcci&oacute;n de correo para %s!",
	'email:validate:body' => "%s,

Antes de comenzar a utilizar %s, debe confirmar su direcci&oacute;n de correo.

Por favor confirme su direcci&oacute;n haciendo click en el enlace de abajo:

%s

Si no puede hacer click en el enlace, copie y pegue en su explorador manualmente.

%s
%s
",
	'email:confirm:success' => "Ha confirmado su direcci&oacute;n de Email!",
	'email:confirm:fail' => "Su direcci&oacute;n de Email no pudo ser confirmada...",

	'uservalidationbyemail:registerok' => "Para activar su cuenta, por favor confirme su direcci&oacute;n de Email con el correo que acabamos de enviarle a su casilla.",
	'uservalidationbyemail:login:fail' => "Su cuenta no se encuentra validada y la autenticaci&oacute;n ha fallado. Se envi&oacute; un nuevo correo de verificaci&oacute;n.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'No hay usuarios no validados.',

	'uservalidationbyemail:admin:unvalidated' => 'No validado',
	'uservalidationbyemail:admin:user_created' => 'Registrado %s',
	'uservalidationbyemail:admin:resend_validation' => 'Reenviar validaci&oacute;n',
	'uservalidationbyemail:admin:validate' => 'Validar',
	'uservalidationbyemail:admin:delete' => 'Eliminar',
	'uservalidationbyemail:confirm_validate_user' => 'Validar %s?',
	'uservalidationbyemail:confirm_resend_validation' => 'Reenviar email de validaci&oacute;n a %s?',
	'uservalidationbyemail:confirm_delete' => 'Eliminar %s?',
	'uservalidationbyemail:confirm_validate_checked' => 'Validar usuarios seleccionados?',
	'uservalidationbyemail:confirm_resend_validation_checked' => 'Reenviar validaci&oacute;n a los usuarios seleccionados?',
	'uservalidationbyemail:confirm_delete_checked' => 'Eliminar usuarios seleccionados?',
	'uservalidationbyemail:check_all' => 'Todos',

	'uservalidationbyemail:errors:unknown_users' => 'Usuarios desconocidos',
	'uservalidationbyemail:errors:could_not_validate_user' => 'No se puede validar al usuario.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'No se puede validar a todos los usuarios seleccionados.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'No se puede eliminar al usuario.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'No se puede eliminar a todos los usuarios seleccionados.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'No se puede reenviar la solicitud de validaci&oacute;n.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'No se pueden reenviar las solicitudes de validaci&oacute;n a todos los usuarios seleccionados.',

	'uservalidationbyemail:messages:validated_user' => 'Usuario validado.',
	'uservalidationbyemail:messages:validated_users' => 'Todos los usuarios seleccionados han sido validados.',
	'uservalidationbyemail:messages:deleted_user' => 'Usuario eliminado.',
	'uservalidationbyemail:messages:deleted_users' => 'Todos los usuarios seleccionados han sido eliminados.',
	'uservalidationbyemail:messages:resent_validation' => 'Solicitud de validaci&oacute;n reenviada.',
	'uservalidationbyemail:messages:resent_validations' => 'Solicitudes de validaci&oacute;n reenviadas a los usuarios seleccionados.'

);

add_translation("es", $spanish);