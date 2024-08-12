FROM php:8.3.2-apache

WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    curl \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Copy existing application directory contents
COPY . /var/www/html

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Ensure Apache configuration allows access and sets DocumentRoot to public
RUN echo "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install Node.js and NPM
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs npm

# Create a user with UID and GID of 1000 (1000 is my current user UID and GID) in order to avoid permission issues
RUN groupadd -g 1000 hostgroup && \
    useradd -u 1000 -g hostgroup -m hostuser

# Set permissions for the application directory
RUN chown -R hostuser:hostgroup /var/www/html

# Copy entrypoint script
COPY entrypoint.sh /usr/local/bin/

# Make entrypoint script executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Switch to the new user
USER hostuser

# Set entrypoint
ENTRYPOINT ["entrypoint.sh"]

CMD ["apache2-foreground"]