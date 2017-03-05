FROM somenergia/plataforma-core
MAINTAINER  Som Energia

RUN apt-get update && apt-get -y install phpmyadmin php5-xdebug mysql-server ruby-full build-essential sqlite3 libsqlite3-dev && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN a2dissite 000-default.conf
ADD .dockers/apache/devel.conf /etc/apache2/sites-available/000-plataforma.conf
RUN a2ensite 000-plataforma.conf

ADD .dockers/mysqld/devel.cnf /etc/mysql/conf.d/devel.cnf
COPY .dockers/supervisord/supervisord-mysqld.conf /etc/supervisor/conf.d/supervisord-mysqld.conf

RUN gem install mailcatcher --no-ri --no-rdoc
COPY .dockers/supervisord/supervisord-mailcatcher.conf /etc/supervisor/conf.d/supervisord-mailcatcher.conf
RUN echo "sendmail_path = /usr/bin/env $(which catchmail) -f test@local.dev" > /etc/php5/mods-available/mailcatcher.ini
RUN cat /etc/php5/mods-available/mailcatcher.ini
RUN php5enmod mailcatcher

VOLUME ["/app"]
EXPOSE 8000 3336 1080

ADD .dockers/default.sql /default.sql
ADD .dockers/cron/devel /etc/cron.d/elgg
RUN chmod 0644 /etc/cron.d/elgg
RUN touch /var/log/cron.log

ADD .dockers/scripts/run.sh run.sh
RUN chmod 755 /run.sh
CMD ["/run.sh"]
