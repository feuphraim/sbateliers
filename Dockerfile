FROM php:8.0-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Activer le module rewrite d'Apache
RUN a2enmod rewrite

# Copier les fichiers du projet
COPY . /var/www/html/

# Définir les permissions
RUN chown -R www-data:www-data /var/www/html
