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
define( 'DB_NAME', 'Home' );

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
define( 'AUTH_KEY',         'N{~So}FH$(iu2}C~z5u^gfHq_s6o7rL0=3|VqrSB?cUxR+.6(`N}UTqZJ2`u27GU' );
define( 'SECURE_AUTH_KEY',  '+|E;`U~*(A+{n2+kH@JE40o`VdKWlZu{51,k?UJ%U?,y.E9mwHDo5>z+{rPLv)#i' );
define( 'LOGGED_IN_KEY',    '-Q,u,5*wo<?{GD[3,VOx`gLleyc4dbEl<5f:gI5@YPL9Vo)&Qqg^*3fyk+;U$u/%' );
define( 'NONCE_KEY',        '1*RM;|:dSgbZ@|w`^s=4uf; 6lm9`u<!c7F,g@:S`v$|HF*R0#<VGLgE4e5;e< W' );
define( 'AUTH_SALT',        '*>8s~(,eM&dqYLY:oD3Iav;Jw:lM9/:S_VGvOwk.:9vsa(he$:^^zUT 8M]Ditms' );
define( 'SECURE_AUTH_SALT', '/QwXZS6}*iLlUn,(KvmK?nMHoJ^k+e%E5K[fJZ(O_~8rpL[ XE?j@m6] [vqaep:' );
define( 'LOGGED_IN_SALT',   '5G#}.oRx#/czu4aKPLW6.,>Q[]xgY`V;++-<5-b#*!1~r9g-S-@,sf1kT}<)<j^:' );
define( 'NONCE_SALT',       '<+,bRGL!7sta|CP]<L~oE.uJWo/bCl,ye<;nV`kFnbR(K& kkb*_y=n%-5/]p$iw' );

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
