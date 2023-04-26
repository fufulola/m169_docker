#!/bin/sh

# Démarrer Apache
apache2-foreground &

# Vérifier si le fichier de configuration de WordPress existe
if [ ! -f /var/www/html/wp-config.php ]; then
    # Si le fichier n'existe pas, copier le fichier de configuration par défaut
    cp /var/www/html/wp-config-sample.php /var/www/html/wp-config.php

    # Définir les paramètres de configuration de WordPress
    sed -i "s/wordpress/$DB_NAME/g" /var/www/html/wp-config.php
    sed -i "s/wordpress/$DB_USER/g" /var/www/html/wp-config.php
    sed -i "s/wordpress123/$DB_PASSWORD/g" /var/www/html/wp-config.php
    sed -i "s/localhost/$DB_HOST/g" /var/www/html/wp-config.php
fi

# Attendre que MySQL soit prêt
until mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWORD -e ";" ; do
    sleep 1
done

# Démarrer MySQL
service mysql start

# Configurer WordPress
cd /var/www/html/
wp core install --url=http://localhost --title="My WordPress Site" --admin_user=wordpress --admin_password=wordpress1234 --admin_email=admin@example.com

# Garder le processus principal en cours d'exécution
tail -f /dev/null
