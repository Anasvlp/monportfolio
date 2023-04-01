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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'uBa&dbZ7sNWeRpIb]cswP1`2:|*^:?zp8<kQ4<(d{8=9mdmWYV(KE6)k<TIaulX.' );
define( 'SECURE_AUTH_KEY',  'Ws#K]^o/!C@WK.;P<aqyvePicPHt>bc7ZPy-SnoIcIhQ=`ITTi/)Pi4d`MeAn_]z' );
define( 'LOGGED_IN_KEY',    'tFFu&4aMQwU,#G,sjwLF[42kS^,>JVD/(bD?P*39Q;.fpQ=ZqU&>EZiS{e$,E-@m' );
define( 'NONCE_KEY',        'ow(L8NK6/e/T+`([)P_Q$oRu T&KlX!Tpvy:Ug75i=8ofiiW{(r]nFU<ygo9% BO' );
define( 'AUTH_SALT',        '/wk{b Ir*e@O,<v1BW{U,P$^eMd08Tp~<V=-L$R_ZP{)H!e:d,{/dC8b;R2J- =v' );
define( 'SECURE_AUTH_SALT', '6mu(O4}C&^OTX2D1/aL$l.iXlYoWySHr+,0JZ/i=K_ *%kL~OHV)metzA [  }^n' );
define( 'LOGGED_IN_SALT',   '0f$SL<FfJES<8Bfe>/Vt>.A}:/5bhkn~ncp=<#]Y;7,=H@.2 0zK264+*!>3}|h(' );
define( 'NONCE_SALT',       '6#(+t39@GN>mV=O{EL_n^y.%zz;lmoD_wvB 7%HZLTWv<nAj=zfyeabjj=lU,JKz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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
