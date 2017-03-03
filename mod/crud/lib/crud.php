<?php

/**
 * CRUD -- CRUD library
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

/**
 * List crud objects in a group
 *
 * @param CrudTemplate $crud Crud template object
 * @param int $guid Group entity GUID
 */
function crud_handle_list_page($crud, $guid) {

    elgg_set_page_owner_guid($guid);

    $crud_type = $crud->crud_type;

    $parent = get_entity($guid);
    if ($parent instanceof ElggGroup) {
        $group = $parent;
        $parent = NULL;
    } else {
        $group = get_entity($parent->container_guid);
    }

    if (!$group) {
        register_error(elgg_echo('groups:notfound'));
        forward();
    }

    group_gatekeeper();

    elgg_push_breadcrumb($group->name);

    elgg_register_title_button();

    if (elgg_view_exists("forms/$crud->module/{$crud_type}_general")) {
        elgg_register_title_button($crud->crud_type, 'edit_general');
    }

    $title = elgg_echo("item:object:$crud_type");

    $params = array(
        'title' => $title,
        'content' => $crud->getListTabContent(),
        'footer' => elgg_view("$crud->module/{$crud_type}_general", array('entity' => $group)),
        'filter' => $crud->getListTabFilter(),
    );

    $params['sidebar'] .= elgg_view('crud/tagcloud_block', array(
        'subtypes' => $crud->crud_type,
        'owner_guid' => elgg_get_page_owner_guid(),
    ));

    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Edit or add a crud object
 *
 * @param CrudTemplate $crud Crud template object
 * @param string $type 'add' or 'edit'
 * @param int    $guid GUID of group or crud object
 */
function crud_handle_edit_page($crud, $type, $guid) {
    gatekeeper();

    $crud_type = $crud->crud_type;

    if ($type == 'add') {
        $parent = get_entity($guid);
        if ($parent instanceof ElggGroup) {
            $group = $parent;
            $parent = NULL;
        } else {
            $group = get_entity($parent->container_guid);
        }
        if (!$group) {
            register_error(elgg_echo('groups:notfound'));
            forward();
        }
        elgg_set_page_owner_guid($group->guid);

        // make sure user has permissions to add a crud object to container
        if (!$group->canWriteToContainer(0, 'object', $crud_type)) {
            register_error(elgg_echo('crud:permissions:error'));
            forward($group->getURL());
        }

        $title = elgg_echo($crud_type . ':add');

        if ($parent) {
            crud_push_breadcrumb('new', $parent);
        } else {
            elgg_push_breadcrumb($group->name, $crud_type . "/owner/$group->guid");
        }
        elgg_push_breadcrumb($title);

        $body_vars = crud_prepare_form_vars($crud, NULL, $parent);
        $content = elgg_view_form('crud/save', array('crud' => $crud), $body_vars);
    } elseif ($type == 'edit_general') {
        $entity = get_entity($guid);
        if (!$entity || !$entity->canEdit()) {
            register_error(elgg_echo('groups:notfound'));
            forward();
        }
        $group = $entity;

        $title = elgg_echo($crud_type . ':edit_general');

        elgg_push_breadcrumb($group->name, $crud_type . "/owner/$group->guid");
        elgg_push_breadcrumb($title);

        $body_vars = crud_prepare_form_vars($crud, $entity, $parent);
        $content = elgg_view_form("$crud->module/{$crud_type}_general", array('crud' => $crud), $body_vars);
    } else {
        $entity = get_entity($guid);
        if (!$entity || !$entity->canEdit()) {
            register_error(elgg_echo('groups:notfound'));
            forward();
        }
        $group = $entity->getContainerEntity();
        if (!$group) {
            register_error(elgg_echo('groups:notfound'));
            forward();
        }
        $parent = get_entity($entity->parent_guid);

        $title = elgg_echo($crud_type . ':edit');

        elgg_push_breadcrumb($group->name, $crud_type . "/owner/$group->guid");
        elgg_push_breadcrumb($entity->title, $entity->getURL());
        elgg_push_breadcrumb($title);

        $body_vars = crud_prepare_form_vars($crud, $entity, $parent);
        $content = elgg_view_form('crud/save', array('crud' => $crud), $body_vars);
    }

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Push breadcrumbs from the given crud object going up in the parent hirarchy
 *
 * @param ElggObject $last Ending object
 * @param ElggObject $entity Current object
 * @param CrudTemplate $crud Crud template object
 */
function crud_push_breadcrumb($last, $entity, $crud = NULL) {
    if (empty($crud)) {
        $crud = crud_get_handler($entity->getSubtype());
    }

    if ($entity->parent_guid) {
        $parent = get_entity($entity->parent_guid);
        crud_push_breadcrumb($last, $parent);
    } else {
        $group = $entity->getContainerEntity();
        elgg_push_breadcrumb($group->name, "$crud->crud_type/owner/$entity->container_guid");
    }

    $title = $entity->title;
    if (empty($title)) {
        $title = elgg_echo("$crud->module:$crud->crud_type");
    }
    if ($entity == $last) {
        elgg_push_breadcrumb($title);
    } else {
        elgg_push_breadcrumb($title, "$crud->crud_type/view/$entity->guid");
    }
}

/**
 * View a crud object
 *
 * @param CrudTemplate $crud Crud template object
 * @param int $guid GUID of a crud object
 */
function crud_handle_view_page($crud, $guid) {
    // We now have RSS on assemblies
    global $autofeed;
    $autofeed = true;

    $crud_type = $crud->crud_type;

    $entity = get_entity($guid);
    $parent = $entity->getParentEntity();
    if ($parent instanceof ElggGroup) {
        $group = $parent;
        $parent = NULL;
    } else {
        $group = get_entity($entity->container_guid);
    }

    if (!$group) {
        register_error(elgg_echo('noaccess'));
        $_SESSION['last_forward_from'] = current_page_url();
        forward('');
    }

    /* $group = $entity->getContainerEntity();
      if (!$group) {
      register_error(elgg_echo('groups:notfound'));
      forward();
      } */

    if (!empty($crud->children_type)) {
        elgg_set_page_owner_guid($guid);
        elgg_register_title_button($crud->children_type);
    }
    elgg_trigger_plugin_hook("crud:$crud_type:view_buttons", 'view_buttons', array('crud' => $crud, 'type' => $crud_type, 'entity' => $entity), $location);

    elgg_set_page_owner_guid($entity->container_guid);

    group_gatekeeper();

    crud_push_breadcrumb($entity, $entity, $crud);

    $content = elgg_view_entity($entity, array('full_view' => true));

    $content .= elgg_view_comments($entity);

    $params = array(
        'content' => $content,
        'title' => $entity->getTitle(true),
        'filter' => '',
    );

    $sidebar = elgg_view('crud/tagcloud_block', array(
        'subtypes' => $crud->crud_type,
        'owner_guid' => elgg_get_page_owner_guid(),
    ));
    if (isset($params['sidebar'])) {
        $params['sidebar'] .= $sidebar;
    } else {
        $params['sidebar'] = $sidebar;
    }


    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($entity->title, $body);
}

/**
 * Prepare crud object form variables
 *
 * @param CrudTemplate $crud Crud template object
 * @param ElggObject $object Crud object if editing
 * @return array
 */
function crud_prepare_form_vars($crud, $object = NULL, $parent = NULL) {
    $crud_type = $crud->crud_type;
    if ($object)
        $guid = $object->guid;
    // input names => defaults
    $values = array(
        'title' => $object->title,
        'description' => $object->description,
        'access_id' => ACCESS_DEFAULT,
        'tags' => '',
        'crud' => $crud,
        'container_guid' => elgg_get_page_owner_guid(),
        'parent_guid' => $parent->guid,
        'guid' => $guid,
        'entity' => $object,
    );

    $variables = elgg_get_config($crud_type);
    foreach ($variables as $name => $type) {
        if (empty($values[$name])) {
            if ($type == 'date') {
                $values[$name] = time();
            } else {
                $values[$name] = '';
            }
        }
    }

    if ($object) {
        foreach (array_keys($values) as $field) {
            if (isset($object->$field)) {
                $values[$field] = $object->$field;
            }
        }
    }

    if (elgg_is_sticky_form($crud_type)) {
        $sticky_values = elgg_get_sticky_values($crud_type);
        foreach ($sticky_values as $key => $value) {
            $values[$key] = $value;
        }
    }

    elgg_clear_sticky_form($crud_type);

    return $values;
}
