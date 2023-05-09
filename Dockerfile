FROM php:7.4-apache
RUN docker-php-ext-install mysqli
COPY /icoder_docker/ /var/www/html
EXPOSE 80