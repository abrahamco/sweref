<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devsweref_wp2');

/** MySQL database username */
define('DB_USER', 'devsweref_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'C@qI*u3Ic231[*3');

/** MySQL hostname */
define('DB_HOST', '213.180.89.87');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2sqAbTrMGiNdTuHawEY92ggiG9Nj3ciRZuvlHZWrG05Rgnmr49fl1IxLnvkTku5O');
define('SECURE_AUTH_KEY',  '6cDheve4LpcU3dmG2oiF9nadg4It0StOiCTGMwL0ok7z6UcqRndyo1xPD5cLoPyX');
define('LOGGED_IN_KEY',    'eWAiWYu00CDBA4f2xaWIIsd9A4OOTd8JAJm5mj2ygnvB4xWfKuKT8oeI1XKHpgsU');
define('NONCE_KEY',        'jWwb3zUsh66PZuQBjMkl3hdgCm6R8tJKp9Zo0dAMGku3MEYsVtHehkHKSrGYL4VR');
define('AUTH_SALT',        'OwGiuStoeKokGpCoC5JPPlabTh7iXb0HJLPVFeELHDzhZlKmPoCHiZxFGyuJsorS');
define('SECURE_AUTH_SALT', 'dMeC0egqA0wmVHdaSOhEKWZa8VlInVa0ws7ewOQJryXwEpTFijWTXMctGoBqtI0E');
define('LOGGED_IN_SALT',   'o0fZMOefiIxPiO20gYlWTrsx8TxEKWm9p6GlyagvNI08YGdtkLtAOXCUNNTCefOK');
define('NONCE_SALT',       'l8LwupNT79DTICdx4LmNVRbQBeyMinLZHiMaiunAjYnuGrXMfQlCDDHB2laNORlI');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'DISALLOW_FILE_EDIT', true );