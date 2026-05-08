FROM php:8.2-fpm

WORKDIR /var/www

# install dependency + langsung bersihkan cache (PENTING)
RUN apt-get update \
    && apt-get install -y zip unzip curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# composer dari image resmi (lebih ringan)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN chown -R www-data:www-data /var/www

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
