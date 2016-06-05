FROM php:5-fpm
COPY ./php.ini /usr/local/etc/php/
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer