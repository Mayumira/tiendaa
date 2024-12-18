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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TiendaVirtual' );

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
define( 'AUTH_KEY',         '3wz?h/@T;-6t.qG>I]GBSx&Do$))*)e#;rbZ&l7H0Y[B/{QXX{70VTa?r}Foj09N' );
define( 'SECURE_AUTH_KEY',  'NFaAY<TMa=Y5 ]#w$OkX(_Z:MnO|2k2Z$JADku/A.2gx*G!S8p~qUui)7W,U%6DM' );
define( 'LOGGED_IN_KEY',    '2qB6Tp_e|WgR{V[]A{S+yACCELA`1M{DG.X9vUVD5KCbE<Vzz0YNt-Q.fz-#/ofJ' );
define( 'NONCE_KEY',        ')1El%3K.hTBY`PK=RFHABwgJ4okB4zg|Q8VlXqwj3=awe?/wl>~3G7@.<PAj,g4-' );
define( 'AUTH_SALT',        '8>V0*do19_h>4qGi#rblrPlSS99lXwHMQdLDs=#e/fBrMFN-Ii!ILexh>;K@WF67' );
define( 'SECURE_AUTH_SALT', '.i];k91}_8e_e%oT~xff26ySt%&*`?e7#|e&Y$%v?GG!Ey0lc4jPJ}jziEuE*h#+' );
define( 'LOGGED_IN_SALT',   'n0(@C7yy)hq!b;MZUQR,|q.-J7z*!q:BK*UWSuCNy9wU{#f:!,2RGb}fJ[=z@oa,' );
define( 'NONCE_SALT',       'rg]YkSnIbH#U:>x6{;91LZhW;t!j@3kE4%fUFlkllJN<{OLqBiShcdH%@1!J5,G0' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
