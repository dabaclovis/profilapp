FROM php:8.2.10-fpm

WORKDIR /var/www/laravel

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    libzip-dev \
    unzip \
    libonig-dev \
    curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install extensions for php
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php --  --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/laravel/
RUN composer install
ENTRYPOINT [ "Docker/entrypoint.sh" ]
CMD ["php","artisan","serve","--host=0.0.0.0"]
