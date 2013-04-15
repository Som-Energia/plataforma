<?php
/**
 * Elgg developer tools English language file.
 *
 */

$spanish = array(
	// menu
	'admin:developers' => 'Desarrolladores',
	'admin:developers:settings' => 'Configuraci&oacute;n de Desarrolladores',
	'admin:developers:preview' => 'Previsualizaci&oacute;n de Temas',
	'admin:developers:inspect' => 'Inspecci&oacute;n',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Controle su configuraci&oacute;n de desarrollo y depuraci&oacute;n. Algunas de estas opciones tambi&eacute;n se encuentran disponibles en otras secciones de la administraci&oacute;n.',
	'developers:label:simple_cache' => 'Utilizar cache simple',
	'developers:help:simple_cache' => 'Deshabilitar la cache mientras se desarrolla. De otro modo, las modificaciones a las views (incluyendo los css) ser&aacute;n ignoradas.',
	'developers:label:view_path_cache' => 'Utilizar cache de paths de views',
	'developers:help:view_path_cache' => 'Deshabilitar mientras se desarrolla. De otro modo, las nuevas vistas en sus plugins no se registrar&aacute;n.',
	'developers:label:debug_level' => "Nivel de monitoreo",
	'developers:help:debug_level' => "Esto controla la cantidad de informaci&oacute;n que se registra. Vea elgg_log() para m&aacute;s informaci&oacute;n.",
	'developers:label:display_errors' => 'Mostrar errores fatales de PHP',
	'developers:help:display_errors' => "Por defecto, el archivo .htaccess de Elgg deshabilita la visualizaci&oacute;n de errores fatales.",
	'developers:label:screen_log' => "Registrar en pantalla",
	'developers:help:screen_log' => "Esto muestra las salidas de elgg_log() y elgg_dump() en la p&aacute;gina.",
	'developers:label:show_strings' => "Mostrar strings de traducciones extra&ntilde;as",
	'developers:help:show_strings' => "Esto muestra las traducciones utilizadas por elgg_echo().",
	'developers:label:wrap_views' => "Wrap de vistas",
	'developers:help:wrap_views' => "Esto atrapa casi toda la vista con comentarios HTML. Util para encontrar la vista en particular que genera un HTML.",
	'developers:label:log_events' => "Eventos de Logs y Hooks de plugins",
	'developers:help:log_events' => "Escribir eventos y hooks de plugins en el log. Precauci&oacute;n: hay varios de estos por p&aacute;gina.",

	'developers:debug:off' => 'Apagado',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Precauci&oacute;n',
	'developers:debug:notice' => 'Informaci&oacute;n',
	
	// inspection
	'developers:inspect:help' => 'Inspecci&oacute;n de configuration del framework Elgg.',

	// event logging
	'developers:event_log_msg' => "%s: '%s, %s' en %s",

	// theme preview
	'theme_preview:general' => 'Introducci&oacute;n',
	'theme_preview:breakout' => 'Fuera de iframe',
	'theme_preview:buttons' => 'Botones',
	'theme_preview:components' => 'Componentes',
	'theme_preview:forms' => 'Formularios',
	'theme_preview:grid' => 'Grilla',
	'theme_preview:icons' => 'Iconos',
	'theme_preview:modules' => 'M&oacute;dulos',
	'theme_preview:navigation' => 'Navegaci&oacute;n',
	'theme_preview:typography' => 'Tipograf&iacute;as',

	// status messages
	'developers:settings:success' => 'Configuraciones almacenadas',
);

add_translation('es', $spanish);
