FROM debian:jessie-backports
MAINTAINER  Som Energia

ENV DEBIAN_FRONTEND=noninteractive
ENV DBUSER="plataforma"
ENV DBPASS="plataforma"
ENV DBNAME="plataforma"
ENV DBHOST="localhost"
ENV DBPREFIX="elgg_"

RUN apt-get update && apt-get -y install syslog-ng syslog-ng-core supervisor apache2 libapache2-mod-php5 php5-mysql php5-gd php5-mcrypt php5-curl libwww-perl cron logrotate && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# installing syslog-ng, with workaround https://bugs.launchpad.net/ubuntu/+source/syslog-ng/+bug/1242173
# can't access /proc/kmsg. https://groups.google.com/forum/#!topic/docker-user/446yoB0Vx6w
RUN sed -i -E 's/^(\s*)system\(\);/\1unix-stream("\/dev\/log");/' /etc/syslog-ng/syslog-ng.conf
RUN touch /var/log/cron.log

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN a2enmod rewrite
RUN mkdir -p /app && rm -fr /var/www/html && ln -s /app /var/www/html
RUN mkdir -p /data && chown www-data:www-data /data && chmod g+w /data
VOLUME ["/data"]


COPY .dockers/supervisord/supervisord.conf /supervisord.conf
COPY .dockers/supervisord/supervisord-apache2.conf /etc/supervisor/conf.d/supervisord-apache2.conf
COPY .dockers/supervisord/supervisord-logs.conf /etc/supervisor/conf.d/supervisord-logs.conf
COPY .dockers/supervisord/supervisord-cron.conf /etc/supervisor/conf.d/supervisord-cron.conf
COPY .dockers/supervisord/supervisord-syslog.conf /etc/supervisor/conf.d/supervisord-syslog.conf

