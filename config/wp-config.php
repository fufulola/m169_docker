<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wpuser');
define('DB_PASSWORD', 'wppassword');
define('DB_HOST', 'mysql');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');