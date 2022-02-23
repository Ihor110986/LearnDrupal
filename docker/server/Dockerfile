FROM php:7.4-apache

RUN a2enmod rewrite

RUN apt-get update \
  && apt-get install -y --no-install-recommends git zlib1g-dev libzip-dev zip unzip

RUN docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN rm -rf /var/lib/apt/lists/*

RUN echo "sendmail_path=/usr/sbin/sendmail -S mailhog:1025" >> /usr/local/etc/php/conf.d/sendmail.ini


WORKDIR /var/www/html

