<?php

$spanish = array(
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
	
	/*
	 * Move group
	 */
	'au_subgroups:move:edit:title' => "Make this group a subgroup of another group",
	'au_subgroups:transfer:help' => "You can set this group as a subgroup of any other group you have permissions to edit.  If users are not a member of the new parent group, they will be removed from this group and sent a new invitation that will enroll them in the new parent group and all subgroups leading to this one. <b>This will also transfer any subgroups of this group</b>",
	'au_subgroups:search:text' => "Search Groups",
	'au_subgroups:search:noresults' => "No groups found",
	'au_subgroups:error:timeout' => "Search timed out",
	'au_subgroups:error:generic' => "An error has occurred with the search",
	'au_subgroups:move:confirm' => "Are you sure you want to make this a subgroup of another group?",
	'au_subgroups:error:permissions' => "You must have edit permissions for the subgroup and each parent up to the top.  Additionally, a group cannot move to a subgroup of itself.",
	'au_subgroups:move:success' => "Group has been moved successfully",
	'au_subgroups:error:invalid:group' => "Invalid group identifier",
	'au_subgroups:invite:body' => "Hi %s,

The group %s has been moved to a subgroup of the group %s.
As you are not currently a member of the new parent group you have been removed from
the subgroup.  You have been re-invited into the group, accepting the invitation will
automatically join you as a member of all parent groups.

Click below to view your invitations:

%s",

);
					
add_translation("es",$spanish);
