FROM php:8.4.0alpha4-fpm-alpine

RUN mkdir -p /var/www/html

RUN apk --no-cache add shadow && usermod -aG www-data root

RUN docker-php-ext-install pdo pdo_mysql