#!/bin/sh

# Démarrer le conteneur Apache avec PHP et WordPress
docker run -d --name wordpress \
    --link mysql:mysql \
    -p 80:80 \
    -v /path/to/your/wordpress:/var/www/localhost/htdocs/index.php \
    -v /path/to/your/httpd.conf:/etc/apache2/httpd.conf \
    -v /path/to/your/wp-config.php:/var/www/htmdocs/wp-config.php \
    php:8.2.5-apache
    
echo "Le conteneur WordPress est en cours de démarrage..."
