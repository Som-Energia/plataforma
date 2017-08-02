FROM php:7.0-apache
MAINTAINER  Som Energia

# Install dependencies
RUN apt-get update && apt-get -y install git zlib1g-dev libpng-dev sendmail \ 
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Enable zip extension
RUN docker-php-ext-install zip pdo pdo_mysql gd

# Install composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
     && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \ 
     && composer self-update \ 
     && composer global require "fxp/composer-asset-plugin:~1.1.4" \
     && rm -rf composer-setup.php

# Change listen port to 8000
EXPOSE 8000
RUN echo "Listen 8000" >> /etc/apache2/ports.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
COPY .docker/apache/default.conf /etc/apache2/sites-available/000-default-8000.conf
RUN a2ensite 000-default-8000.conf

# Enable mod rewrite
RUN a2enmod rewrite

# Data volume
RUN mkdir -p /var/www/data && chown www-data:www-data /var/www/data && chmod g+w /var/www/data
VOLUME ["/var/www/data"]

# Add docker settings file
COPY .docker/apache/settings.php /var/www/html/elgg-config/settings.php

# Create mod folder
RUN mkdir /var/www/html/mod

# Add core files
COPY index.php /var/www/html/index.php
COPY install.php /var/www/html/install.php
COPY upgrade.php /var/www/html/upgrade.php

# Add composer dependencies
COPY composer.json /var/www/html/composer.json
COPY composer.lock /var/www/html/composer.lock
RUN composer install

# Add somenergia mods
COPY mod/export_users_csv /var/www/html/mod/export_users_csv
COPY mod/rm_group_autosubscription /var/www/html/mod/rm_group_autosubscription
COPY mod/rm_group_default_fields /var/www/html/mod/rm_group_default_fields
COPY mod/rm_group_reports /var/www/html/mod/rm_group_reports
COPY mod/somenergia-customization /var/www/html/mod/somenergia-customization
COPY mod/somenergia-theme /var/www/html/mod/somenergia-theme
COPY mod/somenergia-upgrade /var/www/html/mod/somenergia-upgrade
COPY mod/somenergia_drive /var/www/html/mod/somenergia_drive
COPY mod/somenergia_index /var/www/html/mod/somenergia_index
COPY mod/somenergia_translations /var/www/html/mod/somenergia_translations
