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
define( 'DB_NAME', 'altn' );

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
define( 'AUTH_KEY',         'g0=*b!LPPSO+k 08fxQ=o2@n:9%W!*L6tUHteh|MiNkoH>^E5ifPh(%:o6-&|td(' );
define( 'SECURE_AUTH_KEY',  '27H*- ^k^P0Nu|A[bDU}V]xA,dlGHkG/s]f%>ddET&!QN=6;>CYBL0fY0[/)V7wr' );
define( 'LOGGED_IN_KEY',    '&$<|1Rv6RVtOC} Jo+%+<q^Qh9Y<3Y#FZ|e.[fIz%t f2v$4cK2An>,h!~p?XPJh' );
define( 'NONCE_KEY',        '%zCf#MUz`=o?@$}[zcCU@ *NbTS%<JSNk*XYG_;3rMVe5~O`8(+CwNK?(Ztux#dO' );
define( 'AUTH_SALT',        '-khY3Y}&-kyxfx6GlFq8E`=U(}tn`rhfDpy1K.F{VXKprp6?|#)pIO<mo Jd8s>Q' );
define( 'SECURE_AUTH_SALT', ':W_}yKFGpN</Z!$5D[l(:93WNV9Fg9X|S3JLL?B$:0%8*e_u.AZ|q&ys@t`;] R}' );
define( 'LOGGED_IN_SALT',   '2(20H-!,u/*{]z<UwUsQHgBkFBn}i/NW0YD{8Sz3.ez+_fkpa:1iUJi8[*1A]nsn' );
define( 'NONCE_SALT',       'G#52e4-b![%UMQt@g?>Z#AfQg`x)?S]c6oQ:5Zv.(L=UtJK~7&*@Bl,<WcNX0by?' );

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
