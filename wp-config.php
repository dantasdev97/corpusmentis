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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'corpus-mentis' );

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
define( 'AUTH_KEY',         '89P4W%E&:M$-5aKIR:A|WlXO|&!(D,?eP`7&|pBDhR?~%5![9$1[/e3YT4z;J6]w' );
define( 'SECURE_AUTH_KEY',  'c_gu^v^l%04aaKS%t|Xq=0$N(tV/cb)S*O8jt3P4E?&<ml/}q#r(zJ=9hQq* u>g' );
define( 'LOGGED_IN_KEY',    'u&a|EyVhn)w j<qjAk|0^a3w8k.vY!e#5v #6)i<7Ctsf-Xu!L<#64hR9cW!PL]y' );
define( 'NONCE_KEY',        '-k?{xrCej^JfJ_H[-,RiNcn-+M;Aa-(ULrF@LBc=t,|x(,nAZ4y,IQ3)G<p!M#PL' );
define( 'AUTH_SALT',        'uBJ|/;$b!$ =UiaR!Iky#vCUmIXV5U1HvUXZlEi!c8.*,V[)Z&[^tq.S(#`%Kf;v' );
define( 'SECURE_AUTH_SALT', 'z!=?EYx3pri@usiaK13+5oTOo^V!de,TdiD_U!QBZxQ$R#q}~tydJGZO}@}wNo&Y' );
define( 'LOGGED_IN_SALT',   ']4;%HH6ew20@7(6.`Yu{aH(FS8@m8Ni+*[d&2J0p*/J1M,T%bKH$T=2QAJ.]>)Ad' );
define( 'NONCE_SALT',       '5 }0%G;@-e8>Qs{RT~x@Wx!jU.gwx`8J wVz6?7i Ne.uHV/[pOm+1uA=bZY8#^Y' );

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
