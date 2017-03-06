FROM somenergia/plataforma-core
MAINTAINER  Som Energia
ADD engine /app/engine
RUN rm -rf /app/engine/settings.php
ADD .dockers/settings.php /app/engine/settings.php
ADD actions /app/actions
ADD _graphics /app/_graphics
ADD install /app/install
ADD js /app/js
ADD pages /app/pages
ADD vendors /app/vendors
ADD views /app/views
ADD *.php /app/
ADD htaccess_dist .htaccess
ADD languages /app/languages
ADD mod /app/mod
