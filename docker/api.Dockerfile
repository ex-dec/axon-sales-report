FROM php:8.1

RUN apt update && apt install -y libzip-dev zip
RUN docker-php-ext-install pdo pdo_mysql mysqli zip

WORKDIR /var/www/html

VOLUME [./app:/var/www/html]
