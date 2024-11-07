# Use an official PHP image with Apache
FROM php:8.0-apache

# Install the SQLite3 development package
RUN apt-get update && apt-get install -y libsqlite3-dev

# Enable PDO and PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite

# Set the working directory to the web server's document root
WORKDIR /var/www/html

# Copy the application files to the web server directory
COPY public /var/www/html/public
COPY src /var/www/html/src
COPY view /var/www/html/view
COPY config /var/www/html/config
COPY db /var/www/html/db
COPY img /var/www/html/img
COPY index.php /var/www/html/index.php

# Set an environment variable for the SQLite database path
ENV DB_PATH /var/www/html/db/db.sqlite
ENV DB_PATH2 /var/www/html/db/users.sqlite

# Set the necessary permissions for the db folder
RUN chmod -R 777 /var/www/html/db

# Expose port 80 for HTTP traffic
EXPOSE 80
