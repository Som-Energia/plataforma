<?php 

	$catalan = array(
		'file_tools' => "Eines Fitxers",
	
		'file_tools:file:actions' => 'Accions',
	
		'file_tools:list:sort:type' => 'Tipus',
		'file_tools:list:sort:time_created' => 'Data creació',
		'file_tools:list:sort:asc' => 'Ascendent',
		'file_tools:list:sort:desc' => 'Descendent',
	
		// object name
		'item:object:folder' => "Carpeta Fitxers",
	
		// menu items
		'file_tools:menu:mine' => "Teves Carpetes",
		'file_tools:menu:user' => "%s's carpetes",
		'file_tools:menu:group' => "Grup de carpetes de fitxers",
		
		// group tool option
		'file_tools:group_tool_option:structure_management' => "Permetre administració de carpetes per membres",
		
		// views
	
		// object
		'file_tools:object:files' => "%s fitxer(s) en aquesta carpeta",
		'file_tools:object:no_files' => "Cap fitxer en aquesta carpeta",
	
		// input - folder select
		'file_tools:input:folder_select:main' => "Carpeta Principal",
	
		// list
		'file_tools:list:title' => "Carpetes llista fitxers",
		
		'file_tools:list:folder:main' => "Carpeta Principal",
		'file_tools:list:files:none' => "Cap fitxer en aquesta carpeta",
		'file_tools:list:select_all' => 'Selecciona tot',
		'file_tools:list:deselect_all' => 'Deselecciona tot',
		'file_tools:list:download_selected' => 'Descarregar seleccionat',
		'file_tools:list:delete_selected' => 'Esborra seleccionat',
		'file_tools:list:alert:not_all_deleted' => 'No tots els fitxers poden ser esborrats',
		'file_tools:list:alert:none_selected' => 'Cap element seleccionat',
		
	
		'file_tools:list:tree:info' => "Sabies que?",
		'file_tools:list:tree:info:1' => "Pots arrossegar i deixar anar els fitxers a les carpetes per organitzar-les!",
		'file_tools:list:tree:info:2' => "Pots fer doble click sobre qualsevol carpeta per expandir totes les seves sub-carpetes!",
		'file_tools:list:tree:info:3' => "Pots reordenar carpetes arrossegant-les al seu nou lloc en el arbre!",
		'file_tools:list:tree:info:4' => "Pots moure estructures completes de carpetes!",
		'file_tools:list:tree:info:5' => "Si esborres una carpeta, pots escollir opcionalment esborrar tots els seus fitxers!",
		'file_tools:list:tree:info:6' => "Quan esborres una carpeta, totes les subcarpetes seran esborrades!",
		'file_tools:list:tree:info:7' => "Aquest missatge és aleatori!",
		'file_tools:list:tree:info:8' => "Quan esborres una carpeta, però els seus fitxers, els fitxers
apareixeran a la carpeta de nivel superior!",
		'file_tools:list:tree:info:9' => "Una carpeta recentment afegida pot ser posada directament a la correcta subcarpeta!",
		'file_tools:list:tree:info:10' => "Quan puges o edites un fitxer pots escollir en quina carpeta hauria d'aparèixer!",
		'file_tools:list:tree:info:11' => "Arrossegar fitxers és únicament disponible a la vista de llista, no a la  vista de galeria!",
		'file_tools:list:tree:info:12' => "Pots actualitzar el nivell d'acces a totes les carpetes i fins i tot (opcional) de tots els fitxers durant l'edició d'una carpeta!",
	
		'file_tools:list:files:options:sort_title' => 'Ordenació',
		'file_tools:list:files:options:view_title' => 'Vista',
	
		'file_tools:usersettings:time' => 'Visualització Hora',
		'file_tools:usersettings:time:description' => 'Canviar com es mostra la data de fitxer/carpeta ',
		'file_tools:usersettings:time:default' => 'Visualització hora per defecte',
		'file_tools:usersettings:time:date' => 'Data',
		'file_tools:usersettings:time:days' => 'Dies enrere',
		
		// new/edit
		'file_tools:new:title' => "Nova carpeta fitxers",
		'file_tools:edit:title' => "Editar carpeta fitxers",
		'file_tools:forms:edit:title' => "Títol",
		'file_tools:forms:edit:description' => "Descripció",
		'file_tools:forms:edit:parent' => "Seleccionar una carpeta pare",
		'file_tools:forms:edit:change_children_access' => "Actualitzar accés de totes les subcarpetes",
		'file_tools:forms:edit:change_files_access' => "Actualitzar acces de tots els fitxers en aquesta carpeta (i totes les seves subcarpetes si es selecciona)",
		'file_tools:forms:browse' => 'Navegar..',
		'file_tools:forms:empty_queue' => 'Cua buida',
	
		'file_tools:folder:delete:confirm_files' => "Vols també eliminar tots els arxius en les (sub)carpetes a esborrar",
	
		// actions
		// edit
		'file_tools:action:edit:error:input' => "Entrada incorrecte al crear/editar una carpeta",
		'file_tools:action:edit:error:owner' => "No es pot trobar el propietari de la carpeta",
		'file_tools:action:edit:error:folder' => "Cap carpeta a crear/editar",
		'file_tools:action:edit:error:save' => "Error desconegut al guardar la carpeta",
		'file_tools:action:edit:success' => "Carpeta creada/editada satisfactòriament",
	
		'file_tools:action:move:parent_error' => "No es pot arrosseguar carpeta en si mateixa.",
		
		// delete
		'file_tools:actions:delete:error:input' => "Entrada incorrecte al esborrar una carpeta",
		'file_tools:actions:delete:error:entity' => "El GUID no pot ser trobat",
		'file_tools:actions:delete:error:subtype' => "El GUID no és una carpeta",
		'file_tools:actions:delete:error:delete' => "Error desconegut al eliminar la carpeta",
		'file_tools:actions:delete:success' => "La carpeta s'ha esborrat satisfactòriament",
	
		'file_tools:upload:new' => 'Pujar fitxer zip',
		'file_tools:upload:form:choose' => 'Escollir fitxer',
		'file_tools:upload:form:info' => 'Clicar navegar per pujar (multiple) fitxers',
		'file_tools:upload:form:zip:info' => "Pots pujar un fitxer zip. S'extreurà i cada un dels fitxers  seran importats separadament. També si tens carpetes en el teu zip s'importaran en la corresponent carpeta. Tipus de fitxers que no estan permesos seran omesos.",
	
		//errors
		'file_tools:error:pageowner' => 'Error recuperant propietari pàgina.',
		'file_tools:error:nofilesextracted' => 'No s\'ha trobat fitxers per extreure.',
		'file_tools:error:cantopenfile' => 'Fitxer Zip no pot ser obert (revisa si el fitxer pujat és un fitxar .zip).',
		'file_tools:error:nozipfilefound' => 'Fitxer pujat no és un fitxer .zip.',
		'file_tools:error:nofilefound' => 'Escull un fitxer a pujar.',
	
		//messages
		'file_tools:error:fileuploadsuccess' => 'Fitxer Zip pujat i extret satisfactòriament.',
		
		// move
		'file_tools:action:move:success:file' => "El fitxer s'ha mogut satisfatòriament",
		'file_tools:action:move:success:folder' => "La carpeta s'ha mogut satisfatòriament",
		
		// buld delete
		'file_tools:action:bulk_delete:success:files' => "Esborrats %s fitxers satisfatòriament",
		'file_tools:action:bulk_delete:error:files' => "Hi ha hagut un error en l'esborrat d'alguns fitxers",
		'file_tools:action:bulk_delete:success:folders' => "Esborrades %s carpetes satisfatòriament",
		'file_tools:action:bulk_delete:error:folders' => "Hi ha hagut un error en l'esborrat d'algunes carpetes",
		
		// reorder
		'file_tools:action:folder:reorder:success' => "Reordenat la(les) carpetes satisfatòriament",
		
		//settings
		'file_tools:settings:allowed_extensions' => 'Extensions permeses (separades per comes)',
		'file_tools:settings:user_folder_structure' => 'Usar estructura carpetes',
		'file_tools:settings:sort:default' => 'Opcions ordenació carpetes per defecte',
	
		'file:type:application' => 'Applicació',
		'file:type:text' => 'Text',

		// widgets
		// file tree
		'widgets:file_tree:title' => "Carpetes",
		'widgets:file_tree:description' => "Mostrar les teves carpetes",
		
		'widgets:file_tree:edit:select' => "Seleccionar quina(es) carpeta(es) mostrar",
		'widgets:file_tree:edit:show_content' => "Mostrar el contingut de la(les) carpeta(es)",
		'widgets:file_tree:no_folders' => "Cap carpeta configurada",
		'widgets:file_tree:no_files' => "Cap fitxer configurat",
		'widgets:file_tree:more' => "Més carpetes",
	
		'widget:file:edit:show_only_featured' => 'Mostrar només els fitxers que apareixen',
		
		'widget:file_tools:show_file' => 'Feature file (widget)',
		'widget:file_tools:hide_file' => 'Unfeature file',
	
		'widgets:file_tools:more_files' => 'Més fitxers',
		
		// Group files
		'widgets:group_files:description' => "Mostrar els últims grups fitxers",
		
		// index_file
		'widgets:index_file:description' => "Mostrar els últims fitxers de la comunitat",
	
	);
	
	add_translation("ca", $catalan);
	