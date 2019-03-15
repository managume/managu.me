FROM php:7.3-apache-stretch

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y curl libpng-dev libzip-dev zip git gnupg
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd
RUN a2enmod rewrite

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf