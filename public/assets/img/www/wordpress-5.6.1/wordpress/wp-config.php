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
define( 'DB_NAME', 'amap' );

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
define( 'AUTH_KEY',         '3/#D:A)/:0yiWyD%{b=4]No3K@4(ltwD@yN5X:K6[wRItSC:aF?8[3f(0Vgm[3n ' );
define( 'SECURE_AUTH_KEY',  '/R1*/!._Tgg~zw./D^6s!JmXGG2%ze; isTF|!+!pqJ`6)+)2U]Cw%Y#;IsBl%W#' );
define( 'LOGGED_IN_KEY',    '44x6FUg&]ubk<17#t;IIp&JJq3Xx]H-S/@<zj-fs#TZHyiU:j,e;H4Smv/,{:sG{' );
define( 'NONCE_KEY',        'bw XiL*}14OB^3yj12%/?}hjNK!=SwN_KOcSH4!|SCnybx{,`%}RB`V@1e0L4.`4' );
define( 'AUTH_SALT',        '90>#+Srp)YA}lZ(/%Fwoy=,PD(Z@Q}hu5Yb#OJXGH1/K)3>CpF$x5PIKT[<3BPQ_' );
define( 'SECURE_AUTH_SALT', 'NiDmD=HQ|Csrl}LSTFac]TJh<+s=kgF&{{yF[=aFu wr>9,[# aTld;K+Lj2H--@' );
define( 'LOGGED_IN_SALT',   'vp{)*`wWr-EWfkA&<IHjeK_B9lMcoEhS0H#kwO4frI2^*Nl6;oQGq_*j_,{N2NYX' );
define( 'NONCE_SALT',       '4[MB-Sljvb0bk8mxI6k.RN+<V ~RSzLol3`)8o:S]m&2NY^_G5GG}uf/z!ey$3j=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_amap';

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
