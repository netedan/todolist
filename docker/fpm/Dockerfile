FROM php:8.3-fpm

ARG user
ARG uid

RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pdo_mysql pdo_pgsql pgsql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean

RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN apt-get update && apt-get install -y supervisor

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# создание системного пользователя для запуска команд Composer и Artisan
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
chown -R $user:$user /home/$user

COPY php_todo.ini /usr/local/etc/php/conf.d/php.ini

WORKDIR /srv
VOLUME /srv

USER $user

CMD ["php-fpm"]
