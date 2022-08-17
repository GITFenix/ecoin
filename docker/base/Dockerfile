FROM php:8.1-fpm-bullseye as ecoin-base

RUN apt-get update && apt-get install -y git libpq-dev libzip-dev unzip
RUN docker-php-ext-install pdo pdo_pgsql

RUN docker-php-ext-install opcache zip sysvsem

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /home/ecoin
