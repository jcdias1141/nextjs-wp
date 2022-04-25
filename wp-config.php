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
define( 'DB_NAME', 'wp_next' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+20%T^DgXKJ#^F.{B?)5le*no.*JR]3`-t7J<DZIK HB:$1U*217I+F?NJ^S=81s' );
define( 'SECURE_AUTH_KEY',  '=-%+_63x|dGn[WFjf.qyTe&dpZ4cDnr^7~!$eKPpgS|h}WX@CY{KM;meL8>C7)=?' );
define( 'LOGGED_IN_KEY',    'r2L)&Q#W<anrwYB|>CF<mvH~zxmF~UB$>jUi#(zWm2f$ W(*RuwW,zvl;yt=+v>N' );
define( 'NONCE_KEY',        'YwR#O_SL!GF3](Tg#A;do|@29cZfZO]Ym!Iuk5h/`Y:yazZIjSiKt)(|JkBmUPWC' );
define( 'AUTH_SALT',        'bc#C=2r(X<fo<&OXwCx92EJb+*,Y@CnjzFc8n<702$<hrYbx,5Hr@itt;xoVT=3W' );
define( 'SECURE_AUTH_SALT', 'Pfcf9pjH~^a!vp+~j7CnOV_iPsg77}%KPhpvAp+?)6(.P)7Y >*@Im{GWJ&Bn2ns' );
define( 'LOGGED_IN_SALT',   'ZyUCbJt]D6~Qb=ji;+rJ4C(I2X[C!a?bc~oFZ $3glP8H+*&fc:Wx9KC{GMGE5i]' );
define( 'NONCE_SALT',       'F$nNUdO7k{Be8;@Q=AG^zs06-A#nPm2gq{SZ rgy@rgp:I%Q@ UPsgKjPF.zpJ,{' );

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
