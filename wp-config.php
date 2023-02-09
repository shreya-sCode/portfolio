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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'fMm=le%722*?TERj#Y8gq80fO2fLk%$>Dn1{HwF#)P8Ympxa{gS~UKb3qgTD>]0&' );
define( 'SECURE_AUTH_KEY',  '!V}EXbMl(8&?g;+`*0{il[P6ic8d0hO`]yI>8J*^0Z^602FG.GAsi**ad1ZHtaD9' );
define( 'LOGGED_IN_KEY',    '1TGndY[fI$-h1f2RBzlHTTSq?3z1b1G&jdiqS CaMn80Jn+$lJ>[=Ko`8;CYam(m' );
define( 'NONCE_KEY',        'os/q 8NP_|ApB2SvZLd{*WhdQ=*A-OlP{2jss 266v_;BLd@EX+BTi6q@#ZD0$*!' );
define( 'AUTH_SALT',        'VH/c:PU>[i>?GTAIiH=8%Cs&iMHHd3C5q5;pvYl#~^<Gs,,7MuwJ4vv/7}oghA|N' );
define( 'SECURE_AUTH_SALT', 'Wl?CLBcl-Qi2{h_^$^c$,&S]Ha|&uZ*ja)/ I)Qj;aS|qGIIByir~x{- fd$#E)M' );
define( 'LOGGED_IN_SALT',   '|KB4*$~{OsXA;`ifxv%NtP>kDyc/<XVa{&_WV)yX]~M)uJ&w{S8IVzr:^hbXw3Lq' );
define( 'NONCE_SALT',       'iQHXkdd=QQp>Ai;_K!U2#lGP)FQsbW?rv}t@Decl9)V.SE%Czd#!cpRI_`NI9rB_' );

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
