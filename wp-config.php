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
define( 'DB_NAME', 'pendaftaran_smk_elim' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hd|<.(hD[cn~GF-`Q=`1PmLld2&}#2n;+zErKCa[0M:ym^L?iI-x XzQz*Xj5[I#' );
define( 'SECURE_AUTH_KEY',  'mG#OLRCGuy_!Z{?IEoSH0.aY|72s9O=D|%,CRNL>V4zP.?=x cRR::j-BlN{Bg| ' );
define( 'LOGGED_IN_KEY',    '=g~P#esH}R#I;A~0PHsd9-K}[*f$,qcA7wP0sQhiJ8.O,W.jQEiEcSCfuL#.7rcX' );
define( 'NONCE_KEY',        '=S[V7hhIx}xel2fy$yL&tL&0@dOF*C+B_U^`59; |- Fv768C{@G_gKyMUsCd3(P' );
define( 'AUTH_SALT',        'ga!qq)~rbg5ceSknRr@Z(UtnYj|<F|jgEW<^GLP5DB_TAABNuvJN<3W%lB1F%;wN' );
define( 'SECURE_AUTH_SALT', '/W+bRP>:F7e,se91u=H7ToelNoM/ay[([5C(?F`c5PJ@NQT}4(-xDKs,8(dQEXnB' );
define( 'LOGGED_IN_SALT',   '~0WQgH O=P*2rC-Y `@gv/w;waE;!<:cr2pT/XR3/= 90jjh0CudGcF+9%3W)7 T' );
define( 'NONCE_SALT',       'xC?_*f 5*f~ck5B#?!vE|&572d8[g8So;mt+.FWRH<wO9SQ58y1.Ns]?q#b(*^pK' );

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
