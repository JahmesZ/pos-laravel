   FROM php:8.3-cli
   RUN apt-get update && apt-get install -y git unzip libzip-dev libsqlite3-dev && docker-php-ext-install zip pdo_sqlite
   COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
   WORKDIR /app
   COPY . .
   RUN composer install --no-dev --optimize-autoloader --no-interaction
   RUN touch database/database.sqlite && chmod -R 777 storage bootstrap/cache database
   EXPOSE 10000
   CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}