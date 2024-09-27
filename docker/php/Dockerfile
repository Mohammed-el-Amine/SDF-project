FROM php:8.2-fpm-alpine

# Installer les extensions PHP requises
RUN apk update && apk add --no-cache \
    php-gd \
    php-mysqli \
    php-curl \
    php-imap \
    php-mbstring \
    php-xml \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    unzip \
    mariadb-client \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Configurer PHP-FPM pour écouter sur le port 9000
RUN sed -i 's/^;listen = 127.0.0.1:9000/listen = 0.0.0.0:9000/' /usr/local/etc/php-fpm.d/www.conf && \
    sed -i 's/^pm = .*/pm = dynamic/' /usr/local/etc/php-fpm.d/www.conf && \
    sed -i 's/^pm.max_children = .*/pm.max_children = 5/' /usr/local/etc/php-fpm.d/www.conf && \
    sed -i 's/^pm.start_servers = .*/pm.start_servers = 2/' /usr/local/etc/php-fpm.d/www.conf && \
    sed -i 's/^pm.min_spare_servers = .*/pm.min_spare_servers = 1/' /usr/local/etc/php-fpm.d/www.conf && \
    sed -i 's/^pm.max_spare_servers = .*/pm.max_spare_servers = 3/' /usr/local/etc/php-fpm.d/www.conf

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port par défaut pour PHP-FPM
EXPOSE 9000

# Commande par défaut pour démarrer PHP-FPM
CMD ["php-fpm"]
