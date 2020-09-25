FROM php:7.4-apache
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/cftv

ENV APACHE_DOCUMENT_ROOT /var/www/cftv/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

ADD composer.json .
ADD composer.lock .
RUN composer install --prefer-dist --no-dev -o

ADD . .