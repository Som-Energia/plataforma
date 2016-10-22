#!/bin/bash

/usr/bin/mysqld_safe > /dev/null 2>&1 &

RET=1
while [[ RET -ne 0 ]]; do
    echo "=> Waiting for confirmation of MySQL service startup"
    sleep 5
    mysql -uroot -e "status" > /dev/null 2>&1
    RET=$?
done
echo "=> Create database"
mysql -uroot < /schema.sql
echo "=> Schema created "
mysql -uroot plataforma < /data.sql
echo "=> Data loaded "

echo "=> Done!"

mysqladmin -uroot shutdown
