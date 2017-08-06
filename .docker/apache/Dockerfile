FROM php:5.6-apache
MAINTAINER  Som Energia

# Install dependencies
RUN apt-get update && apt-get -y install git zlib1g-dev libpng-dev sendmail \ 
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Enable zip extension
RUN docker-php-ext-install zip mysql mysqli pdo pdo_mysql gd

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
COPY .docker/apache/php.ini /usr/local/etc/php/

# Data volume
RUN mkdir -p /var/www/data && chown www-data:www-data /var/www/data && chmod g+w /var/www/data
VOLUME ["/var/www/data"]

# Create mod folder
RUN mkdir /var/www/html/mod


ADD engine /var/www/html/engine
COPY .docker/apache/settings.php /var/www/html/engine/settings.php
ADD actions /var/www/html/actions
ADD _graphics /var/www/html/_graphics
ADD install /var/www/html/install
ADD js /var/www/html/js
ADD pages /var/www/html/pages
ADD vendors /var/www/html/vendors
ADD views /var/www/html/views
ADD htaccess_dist .htaccess
ADD languages /var/www/html/languages
ADD mod /app/mod
ADD *.php /var/www/html/

# Add composer dependencies
COPY composer.json /var/www/html/composer.json
COPY composer.lock /var/www/html/composer.lock
RUN composer install
