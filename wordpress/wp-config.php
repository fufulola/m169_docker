<?php
/**
 * Configuration de base de WordPress.
 *
 * Ce fichier contient les configurations suivantes�:
 *
 * * Les r�glages MySQL
 * * Pr�fixe de table
 * * (Cl�s secr�tes � voir si on rajoute)
 * * Langue utilis�e
 * * ABSPATH
 *
 */

// ** R�glages MySQL - Votre h�bergeur de base de donn�es doit vous fournir ces informations. Dans notre cas c'est nous qu'avons choisi ** //
/** Nom de la base de donn�es de WordPress */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de donn�es MySQL */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de donn�es MySQL */
define( 'DB_PASSWORD', 'wordpress' );

/** Adresse de l'h�bergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caract�res de la base de donn�es � utiliser lors de la cr�ation des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de donn�es. Ne changez pas ceci si en dout. */
define( 'DB_COLLATE', '' );

// Pr�fixe de table pour la base de donn�es de WordPress.
// Vous pouvez avoir plusieurs installations dans une seule base de donn�es si vous donnez � chaque installation un pr�fixe unique.
$table_prefix = 'wp_';

// Cl�s secr�tes
// Changez ces cl�s secr�tes si elles ont �t� mises en production.
//define( 'AUTH_KEY',         'mettez votre propre phrase unique ici' );
//define( 'SECURE_AUTH_KEY',  'mettez votre propre phrase unique ici' );
//define( 'LOGGED_IN_KEY',    'mettez votre propre phrase unique ici' );
//define( 'NONCE_KEY',        'mettez votre propre phrase unique ici' );
//define( 'AUTH_SALT',        'mettez votre propre phrase unique ici' );
//define( 'SECURE_AUTH_SALT', 'mettez votre propre phrase unique ici' );
//define( 'LOGGED_IN_SALT',   'mettez votre propre phrase unique ici' );
//define( 'NONCE_SALT',       'mettez votre propre phrase unique ici' );

// Langue utilis�e
// Remplacez la langue par d�faut (en_US) par votre langue pr�f�r�e si vous �tes contre la langue universelle.
define( 'WPLANG', 'fr_FR' );

// Chemin absolu vers le r�pertoire de WordPress.
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// D�sactiver les mises � jour automatiques pour WordPress.
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// D�sactiver la modification des fichiers dans l'interface d'administration de WordPress.
define( 'DISALLOW_FILE_EDIT', true );
