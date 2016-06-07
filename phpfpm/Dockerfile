FROM php:5-fpm
RUN apt-get update && apt-get -y install git zlib1g-dev
COPY ./php.ini /usr/local/etc/php/
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql zip
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer global require "laravel/installer=~1.1"