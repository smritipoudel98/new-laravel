# Use the official PHP image with Apache
FROM php:8.2.12-apache

# Install PHP extensions Laravel needs
RUN apt-get update && apt-get install -y \
    zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring gd

# Enable Apache rewrite module (for Laravel routing)
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy everything from your local Laravel app into the container
COPY . .

# Change document root to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache config to use Laravel's public directory
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Set correct file permissions
RUN chown -R www-data:www-data /var/www/html
