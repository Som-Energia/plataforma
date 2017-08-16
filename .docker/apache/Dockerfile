FROM blackleg/elgg-apache
MAINTAINER  Som Energia

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
COPY mod/rm_group_reports /var/www/html/mod/rm_group_reports
COPY mod/somenergia-customization /var/www/html/mod/somenergia-customization
COPY mod/somenergia-theme /var/www/html/mod/somenergia-theme
COPY mod/somenergia-upgrade /var/www/html/mod/somenergia-upgrade
COPY mod/somenergia_drive /var/www/html/mod/somenergia_drive
COPY mod/somenergia_index /var/www/html/mod/somenergia_index
COPY mod/somenergia_translations /var/www/html/mod/somenergia_translations
