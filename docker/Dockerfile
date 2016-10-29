FROM tutum/lamp
MAINTAINER  Som Energia
RUN apt-get update && apt-get install -y nano php5-gd php5-curl phpmyadmin php5-xdebug
RUN rm -rf /app
RUN mkdir -p /app && rm -fr /var/www/html && ln -s /app /var/www/html
VOLUME ["/app"]
RUN mkdir -p /data
VOLUME ["/data"]
ADD config/apache_default /etc/apache2/sites-available/000-default.conf
ADD config/supervisord.conf /etc/supervisor/supervisord.conf
ADD config/supervisord-apachelogs.conf /etc/supervisor/conf.d/supervisord-apachelogs.conf
ADD config/default.sql /default.sql
ADD scripts/mysql-setup.sh /mysql-setup.sh
ADD scripts/run.sh /run.sh
RUN chmod 755 /*.sh
ENV MYSQL_PASS="plataforma"
