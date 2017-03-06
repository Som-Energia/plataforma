FROM debian:jessie-backports
MAINTAINER  Som Energia

ENV DEBIAN_FRONTEND=noninteractive
ENV DBUSER="plataforma"
ENV DBPASS="plataforma"
ENV DBNAME="plataforma"
ENV DBHOST="localhost"
ENV DBPREFIX="elgg_"

RUN apt-get update && apt-get -y install supervisor apache2 libapache2-mod-php5 php5-mysql php5-gd php5-mcrypt php5-curl libwww-perl cron && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN a2enmod rewrite
RUN mkdir -p /app && rm -fr /var/www/html && ln -s /app /var/www/html
RUN mkdir -p /data && chown www-data:www-data /data && chmod g+w /data
VOLUME ["/data"]


COPY .dockers/supervisord/supervisord.conf /supervisord.conf
COPY .dockers/supervisord/supervisord-apache2.conf /etc/supervisor/conf.d/supervisord-apache2.conf
COPY .dockers/supervisord/supervisord-apachelogs.conf /etc/supervisor/conf.d/supervisord-apachelogs.conf
COPY .dockers/supervisord/supervisord-cron.conf /etc/supervisor/conf.d/supervisord-cron.conf

