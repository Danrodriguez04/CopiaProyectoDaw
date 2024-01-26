# Utiliza una imagen base de PHP con Apache
#FROM php:8.3.2-fpm

#RUN mkdir /var/www/clinica


# Instala Composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# extensiones de PHP para Laravel
#RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
#    docker-php-ext-install gd pdo pdo_mysql

#RUN a2dissite 000-default.conf

# Copia el archivo 000-default.conf modificado al contenedor
#COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# Habilita el sitio 000-default
#RUN a2ensite 000-default.conf


#RUN a2enmod rewrite
#WORKDIR /var/www/clinica
#RUN composer install

#RUN cd /var/www/html && php artisan serve --host=0.0.0.0 
#--port=8000
# Expone el puerto 80 para el servidor Apache
#EXPOSE 8000
#CMD ["php-fpm"]


#CMD [ "apache2-foreground"]


# Utiliza una imagen base de PHP
FROM php:8.3.2-fpm
# Instala las dependencias necesarias



RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Instala Composer (administrador de dependencias de PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Habilita extensiones de PHP necesarias para Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql
RUN docker-php-ext-install mysqli

# Establece el directorio de trabajo
WORKDIR /var/www/clinica/clinicallevant

# Copia los archivos de tu proyecto Laravel al contenedor
#COPY . .
#COPY ./vendor /var/www/clinica/clinicallevant/vendor
COPY ./.env /var/www/clinica/clinicallevant


#RUN composer install

#RUN composer update

#RUN php artisan serve --host 0.0.0.0
# Expone el puerto 9000 para el servidor PHP-FPM
EXPOSE 8000

# Comando para iniciar el servidor PHP-FPM
CMD ["php-fpm"]

