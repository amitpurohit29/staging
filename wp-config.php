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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         '=09HB5:#ab?|I,~JB)j^X0UZ!DoX{CK=!7?uK;zcEZ|UTg]9Uwe}/f}XZGOJ3ry_' );
define( 'SECURE_AUTH_KEY',  'k)3^aY)Z b*ON-q`E_W_WboGre<EiZV(ZaT0wP[`I+Gz|^EYav<jviX@}=M>WN /' );
define( 'LOGGED_IN_KEY',    'qTKE|Z/M>[G-14kvr)&/I&fb+o{hEoAtnwXoO$@YNfTinZO2c3u&Uid1CH)IVuP@' );
define( 'NONCE_KEY',        'H}zI?fF;ics[a;1 T]lK^)$uN{51?LoiCM1uw~sJt-&?rNRdYefQ@vjq[?>p7_Tk' );
define( 'AUTH_SALT',        'S,7Shu<F0Nvsv$lOS+:~pR=>*28jC5Uo&r/+s7vdL])Qy:NWuTeYuQ_iO5cA2]sW' );
define( 'SECURE_AUTH_SALT', '%YzcA=@5.CQ|sm00/bNSuL&sW]CU#69iW|5sW@?B=xGb/7#O`k!q[~OBeSX-!~ob' );
define( 'LOGGED_IN_SALT',   '[9wR(xFicH2D+BLc#8iT$YJx?JR3f^t;}PTCm3{}@9{[[KBOpyS5`B+TP[jAHXs3' );
define( 'NONCE_SALT',       '=p~Q>jz|R5zq,yo&;6E[w!#&9#v:9{m/2CkjXubC-tGmWYt]Oy@t(F-.MR-1@iL[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
