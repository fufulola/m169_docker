-- Cr�ation de la base de donn�es
CREATE DATABASE wordpress;

-- Utilisation de la base de donn�es
USE wordpress;

-- Cr�ation d'un utilisateur pour la base de donn�es
CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'wordpress';

-- Attribution des privil�ges � l'utilisateur
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost';

-- Mise � jour des privil�ges
FLUSH PRIVILEGES;