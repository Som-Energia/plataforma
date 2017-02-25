FROM tutum/apache-php
MAINTAINER  Som Energia
ENV ALLOW_OVERRIDE=true
RUN rm -rf /app
RUN mkdir -p /data
RUN chown :www-data /data
RUN chmod g+w /data
VOLUME ["/data"]
RUN a2dissite 000-default.conf
RUN a2enmod rewrite
# Overrride run.sh
ADD .dockers/run.sh /run.sh
RUN chmod 755 /run.sh
CMD ["/run.sh"]
