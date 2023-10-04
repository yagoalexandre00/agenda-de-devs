FROM php:8.1-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN rm /usr/local/etc/php/php.*
COPY php.ini /usr/local/etc/php/php.ini
WORKDIR /var/www/html
COPY app/ .
