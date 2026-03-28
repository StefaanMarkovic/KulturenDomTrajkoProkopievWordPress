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
//define( 'DB_NAME', 'user_user17' );
//
///** Database username */
//define( 'DB_USER', 'user_user17' );
//
///** Database password */
//define( 'DB_PASSWORD', 'jo%n8^grAhadCaE0' );
//
///** Database hostname */
//define( 'DB_HOST', 'localhost' );
//
///** Database charset to use in creating database tables. */
//define( 'DB_CHARSET', 'utf8mb4' );
//
///** The database collate type. Don't change this if in doubt. */
//define( 'DB_COLLATE', '' );
define('DB_NAME', 'local');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         'd0mTQY2;$z*paJk8iO%1P;=c3,(2#l)Js,b?V ~?hXM#hxTy4l=g+M[(S<U+ghlF' );
define( 'SECURE_AUTH_KEY',  'KRCHgARQ_)*|W}|)~606Qz4{0%#gMay(z5kj*5QIgc0%zdQAoMIP/%u7! p1>z]}' );
define( 'LOGGED_IN_KEY',    'dMf`/nf&~Be^:Lyq9iEpFN<2QQ{Uo!<S50,k?~P)Js9Ltr!P|>3MJ#6H07rH3*8;' );
define( 'NONCE_KEY',        'eU-<1<]Fi->G;y9+mt%QZv}$LF&OW1Ebh7>DD3kkq%BG:>z7^>j2t}/rA;6o*drU' );
define( 'AUTH_SALT',        'XEF0!Vfsr2 6~fr~q2VZg-9ufxZ(P@1C>&k}vMQjNVlE-U&yp;s8AQ]^=zwuJXI7' );
define( 'SECURE_AUTH_SALT', '3VRV3a-VXx{T(4vV^sGyi&j{4r%vl~%gW{l92I!Z1_tF|0MC*[Pg(*xC><8m_b[4' );
define( 'LOGGED_IN_SALT',   'c<$dD[.lRAY$lMc|2_.${@Xrq&t!RIMgl-m=*!4U9*A-|z|Bg/!ily.W-g@b61yO' );
define( 'NONCE_SALT',       'gSC=PNDwf6(.WT&/[e{aPqM:WNbnzE>P^zw!~`(6mXf!GLj=#R4F0-u%Cd.y,4Qx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
