FROM vivifyideas/php-fpm-production

WORKDIR /app

COPY src/composer.json .

COPY src/composer.lock .

COPY src/database database

COPY src/tests tests

RUN composer install --no-scripts

COPY src/ .

RUN chmod -R 777 storage

COPY src/.env.example .env

RUN php artisan swagger-lume:generate

EXPOSE 9000