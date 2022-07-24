<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blackwood-auto' );

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
define( 'AUTH_KEY',         '>Ti}+##~p:pOI8H}1:7Irwy%X36i#b;v^u[tB<ODBr@L.<48Y6:thtYK&S&~r[(-' );
define( 'SECURE_AUTH_KEY',  '.fqCHNR{LS9V?QF:Xj4+vF+A0#|# >l|&G12ej>*6pOE^S-LU0gv<k^z|H&>.~0H' );
define( 'LOGGED_IN_KEY',    'LL&EhI<uj}QOEVPLe4jCc,jY==c/dAb1BnQ3(Bgq!Fo|IVfTdkHf34aK^vIFvNCE' );
define( 'NONCE_KEY',        'xL|D_j+;I0kf{&t3o4e*-bss f7hc+]TGZddyL|Q[=dRo~x5B!_2ab8qrVuWEZaM' );
define( 'AUTH_SALT',        '&:I9Z 0znjkST-o>~R9^C,4Ud!e?WG09PWmj}>*Lc7):i!c[GoFvrKi0oc#-0~(x' );
define( 'SECURE_AUTH_SALT', '5nub3@Gfrqcegf6DDv7okftqj1{wzs1)!X6[DKpn4` i,K5Rkr/KF<iHQV&EMVSq' );
define( 'LOGGED_IN_SALT',   'IEPSf0v8`LMVk0?|W*19UM!SVH%XP7`^8EsH2.Y#p:gena#i[o50.%dbLcTP|Ku5' );
define( 'NONCE_SALT',       'p8RJ%6Mi)Ny2DB~g-$YN}L5BW *s!Gz4ny>H#(#l)_+Y8)~BE8V8~:ntHj[W<kWz' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
