FROM php:8.0-apache
RUN cd /etc/apache2/mods-enabled \
    && ln -s ../mods-available/rewrite.load
RUN apt update \
        && apt install -y \
            g++ \
            libicu-dev \
            libpq-dev \
            libzip-dev \
            zip \
            zlib1g-dev \
        && docker-php-ext-install \
            intl \
            opcache \
            pdo \
            pdo_pgsql \
            pgsql

RUN apt-get install -y nodejs npm && npm install n -g && n 14.15.3

WORKDIR /var/www/beers_memo

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer