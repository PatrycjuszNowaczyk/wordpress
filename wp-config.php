<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mBQDJ5G23JVXEa2ik2ZPJhm89auCUX04R2xStPZpUR8LXu91DruKKfcnYTxC0CM3' );
define( 'SECURE_AUTH_KEY',  'M9WNI1xqhhS2U3rfioHN5rcc1MyMl3Cvi1M0SlnikFeB4OIKQnGWuYkFrHIjUGDJ' );
define( 'LOGGED_IN_KEY',    'KdTUIeKGJYW0CClQuF8ddvdrnmTgY555yIXHmKSnI8wRTE0GYA01xg8Ed1BamVG1' );
define( 'NONCE_KEY',        'LYxavLElhZNtRDIGAKEnEkop5cMUvvR7CnygC4LH7iRgz2lQ1uU1qhiltbJBbAvw' );
define( 'AUTH_SALT',        'U3yHTSUR3Dcbbw21usn1GCWMrAOSRKj2lZYUt7pvvThWUs3vLNgUXKerJ7kbL0Sz' );
define( 'SECURE_AUTH_SALT', '0AAsuVI1XfNGP52dKnML0yfJiobzzBM8j5Z6vYEFUyglvbmwlEzfdieCHjN0oTpu' );
define( 'LOGGED_IN_SALT',   'PLpbE3j7D3TwfHi0j1UGFINFv7tnCjAn4WRu5ZAwmeyKVCWc4oXefWRK8zVbEKld' );
define( 'NONCE_SALT',       'zAU4CsBBp0MxdK3lMraltCwj36kkApI6DM9WqTUCOCRhbAh9EPDa7iSA3HiMg34b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
