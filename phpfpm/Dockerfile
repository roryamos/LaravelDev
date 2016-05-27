FROM php:5-fpm
COPY ./php.ini /usr/local/etc/php/
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql
