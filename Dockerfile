FROM richarvey/nginx-php-fpm:latest

# Copy all files to the container
COPY . .

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV WEBROOT /var/www/html/public

# PHP configuration
RUN echo "memory_limit = 1024M" > /usr/local/etc/php/conf.d/memory-limit.ini

# Ensure the correct permissions for storage and cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html

# Skip composer installation as you're handling it
ENV SKIP_COMPOSER 1
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Start the container
CMD ["/start.sh"]
