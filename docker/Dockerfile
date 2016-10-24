FROM tutum/lamp
MAINTAINER  Som Energia
RUN apt-get update && apt-get install -y nano php5-gd php5-curl phpmyadmin php5-xdebug
RUN rm -rf /app
RUN mkdir -p /app && rm -fr /var/www/html && ln -s /app /var/www/html
RUN mkdir -p /var/www/static
RUN chown www-data:www-data /var/www/static
RUN chmod 777 /var/www/static
VOLUME ["/app"]
ADD config/apache_default /etc/apache2/sites-available/000-default.conf
ENV MYSQL_PASS="plataforma"
ADD scripts/create_database.sh /create_database.sh
RUN chmod 755 /*.sh
ADD scripts/run.sh /run.sh
RUN chmod 755 /*.sh
ADD database/schema.sql /schema.sql
ADD database/data.sql /data.sql
