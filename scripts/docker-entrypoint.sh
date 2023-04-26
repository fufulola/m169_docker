#!/bin/sh

# Vérifier si le dossier de données MySQL est vide
if [ -z "$(ls -A /var/lib/mysql)" ]; then
  echo "Initialisation de la base de données MySQL..."

  # Démarrer le serveur MySQL en arrière-plan pour exécuter les scripts d'initialisation
  mysqld --user=mysql --bootstrap --verbose=0 < /init.sql

  echo "Terminé."
else
  echo "La base de données MySQL est déjà initialisée."
fi

# Démarrer le serveur MySQL
exec mysqld --user=mysql --console
