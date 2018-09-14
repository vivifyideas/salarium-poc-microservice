FROM vivifyideas/php-fpm-production

WORKDIR /app

COPY src/ .

RUN chmod -R 777 storage

EXPOSE 9000