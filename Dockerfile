FROM php:8.0-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Activer le module rewrite d'Apache
RUN a2enmod rewrite

# Copier la configuration Apache personnalisée
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Copier les fichiers du projet
COPY . /var/www/html/

# Définir les permissions
RUN chown -R www-data:www-data /var/www/html
RUN find /var/www/html -type d -exec chmod 755 {} \;
RUN find /var/www/html -type f -exec chmod 644 {} \;
RUN chmod 644 /var/www/html/.htaccess

# Créer un script entrypoint qui corrige les permissions
COPY ./docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["apache2-foreground"]
