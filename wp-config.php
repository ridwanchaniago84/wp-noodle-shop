<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'noodle' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '?Sh*f7]|#%=-=]TT_r[k$#;o#I.^#;!X7$j8*W21Y>{W.8.B)YY;/NvK|u>H(~NF' );
define( 'SECURE_AUTH_KEY',  'URPz$%hhfQhD~_N>qg+z@%8gBJ,H1aJRRl1Qly&o<c{{:+6pMOxY|dSbrH0;^%!P' );
define( 'LOGGED_IN_KEY',    ',N(32y3nI4,=Lo%DT)+*6l9eB+|z~XXL}s&ohr)K?G]z:VQ35h_pbyde$<gK_7!e' );
define( 'NONCE_KEY',        'agO ODW w%Y6Wc[o?3BfE?ajE5H<F}ET$+2?dJuxI*j?6n[M)g5`>$tqmkXRw&p)' );
define( 'AUTH_SALT',        '[Xbz:rt9y2_K~e+-s--d~8~v*]oaVH?.Z#LyMC>^XN7s9^@PQ><Xd4oY&zX^hYgB' );
define( 'SECURE_AUTH_SALT', '9T?AuuB@O}Fmue1smuZuby/7Gmk&f+NP8w_*4LR-|3EekY|g9B$e:gP|fWA4TtEg' );
define( 'LOGGED_IN_SALT',   '=_i5t^oDuCaZ8!NLg*n+$7HGS|W=R+e;biC|[T]>)BBFcNmx3`SGtIZ6TC= =WO>' );
define( 'NONCE_SALT',       'Y-CX}MOlQ,])^ xbACWV^9lgEgR?=}H{.g/hD;/w,uJ82)F`MqGB)N)Luk`o1)Ib' );

/**#@-*/

/**
 * WordPress database table prefix.
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
