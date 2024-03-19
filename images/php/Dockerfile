FROM php:fpm

RUN apt-get update && \
    apt-get install -y mariadb-client git libzip-dev zip unzip supervisor && \
    docker-php-ext-install pdo_mysql zip

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN php -r "copy('https://raw.githubusercontent.com/composer/getcomposer.org/55e3ac0516cf01802649468315cd863bcd46a73f/web/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/bin --filename=composer --version=1.10.17
RUN php -r "unlink('composer-setup.php');"

CMD ["php-fpm"]
