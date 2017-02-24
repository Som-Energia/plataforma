FROM tutum/apache-php
MAINTAINER  Som Energia
ENV ALLOW_OVERRIDE=true
RUN rm -rf /app
RUN mkdir -p /data
RUN chown :www-data /data
RUN chmod g+w /data
VOLUME ["/data"]
