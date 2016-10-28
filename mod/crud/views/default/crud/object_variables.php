<?php
/**
 * CRUD -- Entity variables view
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
 *
 * @uses $vars['entity']    The crud object
 */
	$entity = $vars['entity'];
	$object_subtype = $entity->getSubtype();
	$crud_object = crud_get_handler($object_subtype);
	$children_categories = $crud_object->children_categories;

	$variables = elgg_get_config($object_subtype);
	foreach ($variables as $name => $type) {

		if (is_array($type)) {
			$type = elgg_extract('output_view', $type, elgg_extract('type', $type));
		}

		$value = $entity->$name;

		if (in_array($name, array('title', 'description', 'access_id'))) {
			continue;
		}
		if (!$value) {
			continue;
		}
		if ($children_categories == $name) {
			continue;
		}
	?>
	<div>
		<?php
			if ($name != 'tags') {
		?>
		<label><?php echo elgg_echo("$crud_object->module:$object_subtype:$name") ?>: </label>
		<?php
			}
			if ($type != 'longtext') {
			}
		?>
		<?php echo elgg_view("output/$type", array(
				'name' => $name,
				'crud' => $crud_object,
				'value' => $value,
			));
		?>
	</div>
	<?php
	}

