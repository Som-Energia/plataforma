# Plataforma Som Energia
## Branch Status:  
- Master:
  + [![Build Status](https://travis-ci.org/Som-Energia/plataforma.svg?branch=master)](https://travis-ci.org/Som-Energia/plataforma)
- Stagging:
  + [![Build Status](https://travis-ci.org/Som-Energia/plataforma.svg?branch=stagging)](https://travis-ci.org/Som-Energia/plataforma)
- Devel: 
  + [![Build Status](https://travis-ci.org/Som-Energia/plataforma.svg?branch=devel)](https://travis-ci.org/Som-Energia/plataforma)

## Mods Som Energia
- somenergia-theme: Moc con el tema de Som Energia.
- somenergia_index: Mod con la pagina principal de la plataforma de Som Energia.
- somenergia_translations: Mod con las traducciones de la plataforma.
- somenergia-customization: Mod donde meter las "ñapas".
- somenergia-upgrade: Mod donde insertar las modificaciones en la base de datos necesarias para actualizar la plataforma.
- somenergia_calendar: Mod que muestra el calendario de Google Calendar.
- somenergia_drive: Mod que muestra el drive de Som Energia

## Scripts
- Actualizar mod somenergia_translations con las ultimas traducciones de los mods. 
```bash
php .scripts/translationsupdate.php
```
- Test traducciones mod:
```bash
php .scripts/translations.php somenergia_translations
```

## Docker Desarrollo Plataforma
- Puerto Web 8000
- Puerto Mysql 3336
- Puerto Mailcatcher 1080 (Para leer los correos) 
- Admin Plataforma: admin Passwd: adminadmin
- Admin Base datos: plataforma Passwd: plataforma

- Construir imagenes:
```bash
docker-compose build
```

- Levantar entorno desarrollo:
```bash
docker-compose up
```


- Parar entorno desarrollo:
```bash
docker-compose stop
```

## Notas
- [Elgg Cli](https://github.com/hypeJunction/elgg-cli)
- [Duplicar instalación](http://learn.elgg.org/es/1.9/admin/duplicate-installation.html)




