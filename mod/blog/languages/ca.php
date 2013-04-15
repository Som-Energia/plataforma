<?php
/**
 * Blog Catalan language file.
 *
 */

$catalan = array( 
    'blog' => "Blocs",
    'blog:blogs' => "Blocs",
    'blog:revisions' => "Revisions",
    'blog:archives' => "Arxiu",
    'blog:blog' => "Bloc",
    'item:object:blog' => "Blocs",

    'blog:title:user_blogs' => "Blocs de %s",
    'blog:title:all_blogs' => "Tots els blocs del lloc web",
    'blog:title:friends' => "Blocs dels amics",

    'blog:group' => "Bloc del grup",
    'blog:enableblog' => "Habilitar el bloc del grup",
    'blog:write' => "Afegir una entrada al bloc",

    // Editing
    'blog:add' => "Afegir una entrada al bloc",
    'blog:edit' => "Editar una entrada del bloc",
    'blog:excerpt' => "Extracte",
    'blog:body' => "Cos",
    'blog:save_status' => "Desat: ",
    'blog:never' => "Mai",

    // Statuses
    'blog:status' => "Estat",
    'blog:status:draft' => "Esborrany",
    'blog:status:published' => "Publicat",
    'blog:status:unsaved_draft' => "No s'ha desat l'esborrany",

    'blog:revision' => "Revisió",
    'blog:auto_saved_revision' => "La revisió s'ha desat automàticament",

    // messages
    'blog:message:saved' => "S'ha desat l'entrada al bloc.",
    'blog:error:cannot_save' => "No s'ha pogut desar l'entrada al bloc.",
    'blog:error:cannot_write_to_container' => "No teniu els permisos necessaris per afegir una entrada al bloc del grup.",
    'blog:error:post_not_found' => "S'ha suprimit l'entrada, no és vàlida o no disposeu dels permisos necessaris per visualitzar-la.",
    'blog:messages:warning:draft' => "L'entrada té un esborrany pendent de desar!",
    'blog:edit_revision_notice' => "(Versió anterior)",
    'blog:message:deleted_post' => "S'ha suprimit l'entrada del bloc.",
    'blog:error:cannot_delete_post' => "No s'ha pogut suprimir l'entrada del bloc.",
    'blog:none' => "El bloc no té entrades",
    'blog:error:missing:title' => "Heu d'introduir el títol del bloc!",
    'blog:error:missing:description' => "Heu d'introduir el cos del bloc!",
    'blog:error:cannot_edit_post' => "L'entrada no existeix o no teniu permisos suficients per editar-la.",
    'blog:error:revision_not_found' => "No s'ha trobat la revisió.",

    // river
    'river:create:object:blog' => "%s ha publicat una entrada al bloc %s",
    'river:comment:object:blog' => "%s ha comentat al bloc %s",

    // notifications
    'blog:newpost' => "Nova entrada al bloc",

    // widget
    'blog:widget:description' => "Mostrar les últimes entrades del bloc",
    'blog:moreblogs' => "Més entrades",
    'blog:numbertodisplay' => "Quantitat d'entrades a mostrar",
    'blog:noblogs' => "El bloc no té entrades"
); 

add_translation('ca', $catalan); 
