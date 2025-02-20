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
define( 'DB_NAME', 'gamestore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         '9V{F=VX]4!;1BX{dM8[788tJ5VuSep/+v%|sd;1RDtQm2j0I_:;*]}PFm9uk7zak' );
define( 'SECURE_AUTH_KEY',  'M*7FTG+nUvUhvRr|c/zAx|;KT&wV3b])DpO[$vDCO] ?Wc=rb.ZEx[.L``+xFWR^' );
define( 'LOGGED_IN_KEY',    'h?PY*B[R7`7`gW|2?86[x!yv48n(C9nh?WmeYv|a<c0{,6JL%nE|6-S:_z<!>0uu' );
define( 'NONCE_KEY',        '}APGb{f`dj|p3ooQiZrs?p{`oYEed*I ]SrH{B_lQA_u=M,i3@xabe7QT+AXixH1' );
define( 'AUTH_SALT',        '_y]48h:6>Z9~j;3Q=5 2yHea7#R^Hhge#P R^L~&LnfLpCD0h50N-@}6MThk&@&.' );
define( 'SECURE_AUTH_SALT', '!dkb/00QA4kccW/(v2|GKx.=A3e>@{FGaZ0j~B5*x`d+,ag9G?pF<#9JiTG9LJ)t' );
define( 'LOGGED_IN_SALT',   '>N8%*u+L:K75W6Uo{jA:t,f%EY6%K7Z@+p0-KN%ZrMI6k-4G@PB]%(nu?E6ZJq-?' );
define( 'NONCE_SALT',       'QcWUXpO.^|jnuCoyU;&q@46nNu}Tx@yuy-3fIZ03!8g7I{Lf5uvWGW$S/]:>#}A8' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
