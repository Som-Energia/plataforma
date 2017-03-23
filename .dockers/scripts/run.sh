#!/bin/bash

if [[ ! -d "/var/lib/mysql/${DBNAME}" ]]; then
    /usr/bin/mysqld_safe > /dev/null 2>&1 &

    RET=1
    while [[ RET -ne 0 ]]; do
        echo "=> Waiting for confirmation of MySQL service startup"
        sleep 5
        mysql -uroot -e "status" > /dev/null 2>&1
        RET=$?
    done

    mysql -uroot -e "create database ${DBNAME}"
    mysql -uroot -e "CREATE USER '${DBUSER}'@'%' IDENTIFIED BY '${DBPASS}'"
    mysql -uroot -e "GRANT ALL ON ${DBNAME}.* TO '${DBUSER}'@'%'"

    echo "# Load default database"
    mysql -uroot "${DBNAME}" < /default.sql

    mysqladmin -uroot shutdown

else
    echo "=> Using an existing volume of MySQL"
    rm /var/run/apache2/apache2.pid
fi



APPPATH='/app'
echo "# Comprobando archivo configuracion"
CONFIG="${APPPATH}/engine/settings.php"
if [ ! -f ${CONFIG} ];
then
   cp -f "${APPPATH}/.dockers/settings.php" "${CONFIG}"
fi

echo "# Comprobando archivo htaccess"
HTACCESS="${APPPATH}/.htaccess"
if [ ! -f ${HTACCESS} ];
then
   cp -f "${APPPATH}/htaccess_dist" "${HTACCESS}"
fi

exec supervisord -n -c /supervisord.conf
