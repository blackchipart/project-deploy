<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ngobmamy_WPTNL');

/** Database username */
define('DB_USER', 'ngobmamy_WPTNL');

/** Database password */
define('DB_PASSWORD', 'dHrHwYWlOD:!Wt_nn');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '516b74e387668a8309a815ceff86d2f18b3767f4a10fffc138c9d7b548a6bec6');
define('SECURE_AUTH_KEY', '8c11888759f166524f193ced1a4abf693a50715fcc50b63e0dba7aba1b271c75');
define('LOGGED_IN_KEY', 'e7b5874714503805abec88c064d64a6555b3d4c480dd433228f584d897e4842b');
define('NONCE_KEY', 'b213b387a294e7faa8edb0fe2b953071b667dea619d221d91efc4a16d193237e');
define('AUTH_SALT', '0dc8bb876fb1eb6a0f45672be868298158708576aaaddfb816f4e9abd621723a');
define('SECURE_AUTH_SALT', '9f8c71f1ed45717ab8cfff52a4777933e156c6bcfea1a720eb90bf969f866487');
define('LOGGED_IN_SALT', '340e70ee2a73d180da2c73b93f5b644acae35deaf022d953b260b597f5b2d211');
define('NONCE_SALT', '797c4dfd276dc43817cf1650c257b9f921e19b39989dc1c8eabc2252cad80536');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rAg_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
