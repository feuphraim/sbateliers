#!/bin/bash
set -e

# Fixer les permissions
chown -R www-data:www-data /var/www/html
find /var/www/html -type d -exec chmod 755 {} \;
find /var/www/html -type f -exec chmod 644 {} \;

# Lancer la commande donnée (apache2-foreground)
exec "$@"