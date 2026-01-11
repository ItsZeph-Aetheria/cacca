FROM php:8.1-apache

# Aggiorna e installa le librerie di sistema necessarie
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    zip \
    unzip \
    git \
    curl

# Configura e installa le estensioni PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip intl mbstring

# Abilita il modulo rewrite di Apache (fondamentale per gli URL di NamelessMC)
RUN a2enmod rewrite

# Copia i file del tuo sito dentro la cartella web del container
COPY htdocs/ /var/www/html/

# Imposta i permessi corretti per Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Espone la porta 80
EXPOSE 80