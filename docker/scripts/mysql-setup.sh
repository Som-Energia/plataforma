#!/bin/bash

echo "# Create elgg database"
DATABASE='elgg'
mysql -uadmin -p"$PASS" -e "create database $DATABASE"

echo "# Load default database"
mysql -uadmin -p"$PASS" "$DATABASE"  < /default.sql

APPPATH='/app'
echo "# Comprobando archivo configuracion"
CONFIG="${APPPATH}/engine/settings.php"
if [ ! -f ${CONFIG} ];
then
   cp -f "${APPPATH}/docker/settings.php" "${CONFIG}"
fi

echo "# Comprobando archivo htaccess"
HTACCESS="${APPPATH}/.htaccess"
if [ ! -f ${HTACCESS} ];
then
   cp -f "${APPPATH}/htaccess_dist" "${HTACCESS}"
fi

echo "# Change data permissions"
chown www-data:www-data /data
chmod 770 /data


