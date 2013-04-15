<?php
/**
 * Elgg log rotator language pack.
 *
 * @package ElggLogRotate
 */

$spanish = array(
	'logrotate:period' => 'Con qu&eacute; frecuencia debe archivarse el log del sistema?',

	'logrotate:weekly' => 'Una vez a la semana',
	'logrotate:monthly' => 'Una vez al mes',
	'logrotate:yearly' => 'Una vez al a&ntilde;o',

	'logrotate:logrotated' => "Registro archivado\n",
	'logrotate:lognotrotated' => "Error al archivar el registro\n",
	
	'logrotate:date' => 'Eliminar registros archivados anteriores a:',

	'logrotate:week' => 'semana',
	'logrotate:month' => 'mes',
	'logrotate:year' => 'a&ntilde;o',
		
	'logrotate:logdeleted' => "Registro eliminado\n",
	'logrotate:lognotdeleted' => "Error al eliminar el registro\n",
);

add_translation("es", $spanish);
