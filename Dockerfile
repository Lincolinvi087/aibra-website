# Use official PHP with Apache
FROM php:8.2-apache

# Copy project files into the Apache document root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose Render's port
EXPOSE 10000

# Change Apache to listen on Render's $PORT
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf

# Start Apache in foreground
CMD ["apache2-foreground"]
