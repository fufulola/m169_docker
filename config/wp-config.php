<?php
/**
 * Configuration de base de WordPress.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * Les réglages MySQL
 * * Préfixe de table
 * * (Clés secrètes à voir si on rajoute)
 * * Langue utilisée
 * * ABSPATH
 *
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. Dans notre cas c'est nous qu'avons choisi ** //
/** Nom de la base de données de WordPress */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL */
define( 'DB_PASSWORD', 'wordpress' );

/** Adresse de l'hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères de la base de données à utiliser lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données. Ne changez pas ceci si en dout. */
define( 'DB_COLLATE', '' );

// Préfixe de table pour la base de données de WordPress.
// Vous pouvez avoir plusieurs installations dans une seule base de données si vous donnez à chaque installation un préfixe unique.
$table_prefix = 'wp_';

// Clés secrètes
// Changez ces clés secrètes si elles ont été mises en production.
//define( 'AUTH_KEY',         'mettez votre propre phrase unique ici' );
//define( 'SECURE_AUTH_KEY',  'mettez votre propre phrase unique ici' );
//define( 'LOGGED_IN_KEY',    'mettez votre propre phrase unique ici' );
//define( 'NONCE_KEY',        'mettez votre propre phrase unique ici' );
//define( 'AUTH_SALT',        'mettez votre propre phrase unique ici' );
//define( 'SECURE_AUTH_SALT', 'mettez votre propre phrase unique ici' );
//define( 'LOGGED_IN_SALT',   'mettez votre propre phrase unique ici' );
//define( 'NONCE_SALT',       'mettez votre propre phrase unique ici' );

// Langue utilisée
// Remplacez la langue par défaut (en_US) par votre langue préférée si vous êtes contre la langue universelle.
define( 'WPLANG', 'fr_FR' );

// Chemin absolu vers le répertoire de WordPress.
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// Désactiver les mises à jour automatiques pour WordPress.
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// Désactiver la modification des fichiers dans l'interface d'administration de WordPress.
define( 'DISALLOW_FILE_EDIT', true );
