<?php
/**
 * Assemblies function library
 *
 * @package        Lorea
 * @subpackage     Assemblies
 *
 * Copyright 2012-2013 Lorea Faeries <federation@lorea.org>
 *
 * This file is part of the Assemblies plugin for Elgg.
 *
 * Assemblies is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Assemblies is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this program. If not, see
 * <http://www.gnu.org/licenses/>.
 */

function assemblies_get_next_assembly($group) {
	$options = array('types' => 'object',
			 'subtypes' => 'assembly',
			 'limit' => 1,
			 'container_guid' => $group->guid,
			 'metadata_name_value_pairs' => array(
						array('name' => 'date',
							'value' => time(),
							'operand' => '>=')
						),
			 'order_by_metadata' => array('name' => 'date',
						      'direction' => 'ASC')
			);
	$assemblies = elgg_get_entities_from_metadata($options);

	if (count($assemblies))
		return $assemblies[0];
	else
		return false;

}
