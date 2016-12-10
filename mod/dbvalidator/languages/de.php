<?php
/**
 * German language file for database validator
 */

return array(

	'admin:administer_utilities:dbvalidate' => "Datenbank-Bereinigung",
	'dbvalidate:badusers:count' => "Es gibt %s Benutzer ohne Benutzernamen-Eintrag.",
	'dbvalidate:badentities:count' => "Es gibt %s Entitäten ohne Besitzer-Eintrag.",
	'dbvalidate:incomplete_entities:count' => "Es gibt %s Entitäten mit unvollständigen Datenbankeinträgen.",

	'dbvalidate:title' => "Datenbank-Tool",
	'dbvalidate:validate' => "Überprüfen",
	'dbvalidate:repair' => "Reparieren",
	'dbvalidate:instructions' => "<b>\"Überprüfen\"</b> sucht nach Benutzern ohne Benutzernamen-Eintrag, Entitäten ohne gültigem Besitzer-Eintrag und Entitäten mit unvollständigen Datenbankeinträgen.<br>
	<b>\"Reparieren\"</b> bringt diese fehlerhaften Datenbankeinträge in Ordnung. Dabei werden den Benutzern ohne Benutzernamen-Eintrag Benutzernamen der Form \"userxx\" zugewiesen. Entitäten ohne gültigem Besitzer-Eintrag werden Deinem Account zugewiesen und Entitäten mit unvollständigen Datenbankeinträgen werden gelöscht.",

	'dbvalidate:users' => 'Benutzer',
	'dbvalidate:entities' => 'Entitäten',
	'dbvalidate:GUID' => 'GUID: ',
	'dbvalidate:USERNAME' => 'BENUTZERNAME: ',

	'dbvalidate:badusernames' => "Benutzern ohne Benutzernamen-Eintrag",
	'dbvalidate:nobadusernames' => "Keine Benutzer ohne Benutzernamen-Eintrag gefunden.",
	'dbvalidate:fixbadusernames' => "Benutzeraccounts ohne Benutzernamen-Eintrag reparieren",
	'dbvalidate:badowners' => "Entitäten mit ungültigen Besitzer-Einträgen",
	'dbvalidate:nobadowners' => "Keine Entitäten mit ungültigen Besitzer-Einträgen gefunden.",
	'dbvalidate:fixbadowners' => "Entitäten mit ungültigen Besitzer-Einträgen reparieren",
	'dbvalidate:newowner' => "Du bist nun der neue Besitzer der Entität.",
	'dbvalidate:failowner' => "Zuweisung der Entität zu Deinem Benutzeraccount fehlgeschlagen.",
	'dbvalidate:done' => "Erledigt!",
	'dbvalidate:type' => "Objekt-Typ",
	'dbvalidate:incompleteentities' => 'Unvollständige Entitäten',
	'dbvalidate:noincompleteentities' => 'Es wurden keine unvollständigen Entitäten gefunden.',
	'dbvalidate:fixincompleteentities' => 'Unvollständige Entitäten löschen',
	'dbvalidate:removed' => 'Die unvollständigen Entitäten wurden gelöscht.'
);
