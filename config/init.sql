-- Création de la base de données
CREATE DATABASE wordpress;

-- Utilisation de la base de données
USE wordpress;

-- Création d'un utilisateur pour la base de données
CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'wordpress';

-- Attribution des privilèges à l'utilisateur
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost';

-- Mise à jour des privilèges
FLUSH PRIVILEGES;