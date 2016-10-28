<?php
/**
 * CRUD -- Define a RESTful resource entity
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

class CrudObject extends ElggObject  {
	/*
	 * Get the crud template for current entity
	 */
	function getCrudTemplate() {
		return crud_get_handler($this->getSubType());
	}

	/*
	 * Returns the parent entity
	 */
	function getParentEntity() {
		if ($this->parent_guid)
			return get_entity($this->parent_guid);
	}

	/*
	 * Get the title for current entity
	 */
	function getTitle($full_view=false) {
		$template = $this->getCrudTemplate();
		$title = $this->title;
		if (empty($title)) {
			$title = $template->getDefaultValue('title', '');
		}

		if ($template->title_extend && !$full_view) {
			$varname = $template->title_extend;
			$value = date(elgg_echo('crud:date_format'), $this->$varname);
			if ($title)
				$title .= ", $value";
			else
				$title = $value;
		}
		return $title;

	}

	/*
	 * Get the title formatted with a link to current entity
	 */
	function getTitleLink($full_view=false) {
		$title = $this->getTitle($full_view);
		$title_link = elgg_view('output/url', array(
                        'href' => $this->getURL(),
                        'text' => $title,
                ));
		return $title_link;
	}

	/**
	 * List children for given entity
	 *
	 * @param entity $entity Entity to operate on
	 */
	function listChildren() {
		$crud = $this->getCrudTemplate();
		if ($crud->children_categories) {
			return $this->listChildrenCategories();
		}
		else {
			return $this->listChildrenRaw();
		}
	}


	/**
	 * List children for given entity
	 *
	 * @param entity $entity Entity to operate on
	 */
	function listChildrenRaw() {
		$crud = $this->getCrudTemplate();
		$child_subtype = $crud->children_type;
		$child_options = array('full_view' => FALSE,
				'types' => 'object',
				'subtypes' => $child_subtype,
				'limit' => 10,
				'list_class' => 'list-'.$child_subtype,
				'metadata_name_value_pairs' => array(
					array('name' => 'parent_guid',
						'value' => $this->guid)
					),
				);

		$children = elgg_list_entities_from_metadata($child_options);
		return $children;
	}

	/**
	 * List children for given entity per category
	 *
	 * @param entity $entity Entity to operate on
	 */
	function listChildrenCategories() {
		global $CONFIG;
		$crud = $this->getCrudTemplate();
		$category_property = $crud->children_categories;
		$categories = $this->$category_property;

		if (empty($categories)) {
			return $this->listChildrenRaw();
		}

		$child_subtype = $crud->children_type;
		foreach($categories as $category) {
			$children .= "<h4>".ucfirst($category)."</h4>";
			$child_options = array('full_view' => FALSE,
					'types' => 'object',
					'subtypes' => $child_subtype,
					'limit' => 10,
					'list_class' => 'list-'.$child_subtype,
					'metadata_name_value_pairs' => array(
						array('name' => 'parent_guid',
							'value' => $this->guid),
						array('name' => $category_property,
							'value' => $category)
						),
					);

			$children .= elgg_list_entities_from_metadata($child_options);

		}
		$children .= "<h4>".elgg_echo('crud:categories:other')."</h4>";
		$child_options = array('full_view' => FALSE,
				'types' => 'object',
				'subtypes' => $child_subtype,
				'limit' => 10,
				'list_class' => 'list-'.$child_subtype,
				'metadata_name_value_pairs' => array(
					array('name' => 'parent_guid',
						'value' => $this->guid))
				);

		 $name_metastring_id = get_metastring_id($category_property);
		 $value_metastring_ids = array();
		 foreach($categories as $category) {
			$value_metastring_ids[] = get_metastring_id($category);
		 }
		 if (empty($value_metastring_ids)) {
			return "";
		 }
		 $value_metastring_id = implode(",", $value_metastring_ids);

		 $child_options['wheres'][] = "NOT EXISTS (
                       SELECT 1 FROM {$CONFIG->dbprefix}metadata md
                       WHERE md.entity_guid = e.guid
                               AND md.name_id = $name_metastring_id
                               AND md.value_id IN ($value_metastring_id))";


		$children .= elgg_list_entities_from_metadata($child_options);

		return $children;
	}


	/**
	 * Return an icon for the entity
	 */
	function getCrudIcon($size='tiny') {
		$crud = $this->getCrudTemplate();

		// Override icon completely for now
		if ($crud->icon_var) {
			$var_name = $crud->icon_var;
			$status = $this->$var_name;

			if(empty($status)) {
				$status = 'new';
			}

			$icon = "mod/$crud->module/graphics/$crud->crud_type-icons/$status.png";
		}
		else {
			$icon = NULL;
		}
		return $icon;
	}

	/**
	 * Get children for given entity
	 */
	function getChildren($count=FALSE) {
		$limit = 10;
		if ($count)
			$limit = 0;
		$crud = $this->getCrudTemplate();
		$child_subtype = $crud->children_type;
		$child_options = array('full_view' => FALSE,
				'types' => 'object',
				'subtypes' => $child_subtype,
				'limit' => $limit,
				'count' => $count,
				'metadata_name_value_pairs' => array(
					array('name' => 'parent_guid',
						'value' => $this->guid)
					)
				);

		$children = elgg_get_entities_from_metadata($child_options);
		return $children;
	}


	/**
	 * Get the only embedded child for an entity.
	 *
	 * note: if there are more than one children, then nothing will be
	 * returned.
	 */
	function getEmbeddedChild() {
		$embedded_children = $this->getChildren();
		if (!empty($embedded_children)) {
			if (count($embedded_children) == 1)
				$embedded_child = $embedded_children[0];
		}
		return $embedded_child;
	}

}


