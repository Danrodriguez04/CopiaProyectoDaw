# Utiliza una imagen base de PHP con Apache
FROM php:8.0.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli pdo pdo_mysql

# Instala las dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# extensiones de PHP para Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

RUN a2dissite 000-default.conf

# Copia el archivo 000-default.conf modificado al contenedor
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Habilita el sitio 000-default
RUN a2ensite 000-default.conf

RUN a2enmod rewrite

# Expone el puerto 80 para el servidor Apache
EXPOSE 8000

CMD [ "apache2-foreground"]
