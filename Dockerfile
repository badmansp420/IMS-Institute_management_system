# Dockerfile
FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install dependencies (optional - like mysqli, pdo, etc.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy Apache vhost config
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Copy source code to container
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/
