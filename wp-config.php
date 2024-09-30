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
define( 'DB_NAME', 'pharma-web' );

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
define( 'AUTH_KEY',         'ygq7LrJ>i;S]5F*LdWUD)5fzY__lQ=Q2</l~a4;i44}g]tBF2OoX*c8SEp[t!JW ' );
define( 'SECURE_AUTH_KEY',  '6v8ngrgqqg2q7$^g>cC)Hl 9##|lQ7U#YC@6=T#X@PN*FK#MJf/uLPeFY4:jVfz ' );
define( 'LOGGED_IN_KEY',    ' t^TaJ>jo#s^Hg19E+{fER]7{UFR-<>;Q^ERK/T{,HmK=;vTg?Kc=xks#|7?dfo+' );
define( 'NONCE_KEY',        'V( ddz40)K#iA>}YhDu_hLVUer&gAH`5x<cc4fs2B83PoxNR$7L>Qrfw/sid/qWx' );
define( 'AUTH_SALT',        '-jQZ*hb6o`lB`h-,Yb@V01Kr{z7$in/P]e@BI-4$3m]hf4S`#@K-?%YLW,Kd/~YW' );
define( 'SECURE_AUTH_SALT', 'Sv *Xg qM6v<ZqXW4qrynN)te ;q(J-G}PQ2.jU=#=A@MCS_bCmzw[M%+?01([J5' );
define( 'LOGGED_IN_SALT',   '>5dE`q]+i$Dr:+-Z0Z(N/#m|Ea~dJ-G<;u]8C1&n=u]6eAx|rO^N4qTMS3Oh:IYs' );
define( 'NONCE_SALT',       'p$M(A+WD~va27}FV;O_<J10yEuboYB![m#!0 Hm5}pw 2~MviKcF[qD1Dn{*17XF' );

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
