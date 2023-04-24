#!/bin/sh

# Démarrer le conteneur MySQL
docker run -d --name mysql \
    -e MYSQL_ROOT_PASSWORD=your_root_password \
    -e MYSQL_DATABASE=wordpress \
    -e MYSQL_USER=wordpress \
    -e MYSQL_PASSWORD=wordpress_password \
    mysql:latest

echo "Le conteneur MySQL est en cours de démarrage..."
