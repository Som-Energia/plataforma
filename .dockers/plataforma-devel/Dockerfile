FROM somenergia/plataforma-core
MAINTAINER  Som Energia
VOLUME ["/app"]
ADD .dockers/devel.conf /etc/apache2/sites-available/000-plataforma-devel.conf
RUN a2ensite 000-plataforma-devel.conf
