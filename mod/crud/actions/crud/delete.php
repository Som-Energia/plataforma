<?php
/**
 * CRUD -- Delete action
 *
 * @package        Lorea
 * @subpackage     CRUD
 *
 * Copyright 2012-2013 Lorea Faeries <federation@lorea.org>
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Affero General Public License
 * as published by the Free Software Foundation, either version 3 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this program. If not, see
 * <http://www.gnu.org/licenses/>.
 */

$entity_guid = get_input('guid');
$entity = get_entity($entity_guid);

$crud_type = $entity->getSubtype();
$crud = crud_get_handler($crud_type);

$module = $crud->module;

if (elgg_instanceof($entity, 'object', $crud_type) && $entity->canEdit()) {
	$parent = get_entity($entity->parent_guid);
	$container = get_entity($entity->container_guid);
	if ($entity->delete()) {
		system_message(elgg_echo("$module:message:deleted_$crud_type"));
		if ($parent) {
			$parent_type = $parent->getSubtype();
			forward("$parent_type/view/$parent->guid");
		} else {
			forward("$crud_type/owner/$container->guid");
		}
	} else {
		register_error(elgg_echo("$module:error:cannot_delete_$crud_type"));
	}
} else {
	register_error(elgg_echo("$module:error:$crud_type"."_not_found"));
}

forward(REFERER);
