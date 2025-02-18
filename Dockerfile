# imagem php
FROM php:8.2-apache 

# rodando uma instalacao extensiva, no caso o mysqli e do rewrite
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
a2enmod rewrite
