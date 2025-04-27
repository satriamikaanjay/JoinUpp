# Pakai base image PHP 8 dengan Apache
FROM php:8.2-apache

# Salin semua file ke folder web server
COPY . /var/www/html/

# Aktifkan mod rewrite untuk routing
RUN a2enmod rewrite

# Port yang digunakan (Railway menggunakan 8080 secara default)
EXPOSE 8080

# Start Apache
CMD ["apache2-foreground"]
