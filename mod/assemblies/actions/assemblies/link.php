<?php
/**
 * Assemblies -- Link a proposal to an assembly
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

   elgg_load_library('elgg:assemblies');

   $guid = get_input('guid');

   $entity = get_entity($guid);
   $user = elgg_get_logged_in_user_entity();

   if (!$entity->canEdit()) {
	register_error(elgg_echo("proposals:decision:cantlink"));
        forward(REFERER);
   }

   $next_assembly = assemblies_get_next_assembly();

   if (!empty($next_assembly)) {
   	$entity->parent_guid = $next_assembly->guid;
        system_message(elgg_echo("proposals:decision:linked"));
        forward($next_assembly->getURL());
   }
   else {
        register_error(elgg_echo("proposals:decision:nonext"));
        forward(REFERER);
   }

   //forward($entity->getURL());
