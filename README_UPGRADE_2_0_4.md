# Checklist Actualización a la version 2.3.2

## 1. Backups
  1. Backup base de datos
  2. Backup carpeta elggdata
  3. Backup código actual

## 2. Pre Actualización
  1. Activar modo mantenimento
  2. Desactivar mod zaudio
  3. Desactivar mod categories
  4. Desactivar mod threadsundo
  5. Desactivar mod spam login filter
  6. Desactivar mod dokuwiki
  7. Desactivar mod proposals
  8. Desactivar mod assemblies
  9. Desactivar mod crud
  10. Desactivar mod IP Tracker

## 3. Actualización
  1. Subir la actualización con git
  2. Crear backup archivo settings.php y mover al la carpeta elgg-config
  3. Comprobar ficheros locales
  4. Ejecutar composer install dos veces
  5. Actualizar .htacces desde el nuevo htaccess_dist
  6. Ejecutar upgrade.php desde el navegador

## 4. Post Actualización
  1. Desactivar modo manteniminento  
