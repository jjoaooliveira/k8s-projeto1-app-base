FROM php:7.2-apache

WORKDIR /var/www/html

COPY ./index.php /var/www/html
COPY ./conexao.php /var/www/html

RUN apt-get update && apt-get install -y \
		libfreetype-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd
    && docker-php-ext-install pdo pdo_pgsql
    
EXPOSE 80
