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
define( 'DB_NAME', 'latrobe' );

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
define( 'AUTH_KEY',         '~b5a3uOR=9RpP_oT:m,qvWM=ltn9az|4ya{S(Rz_nc0MEb:|p69d@T?GiY:8c5n,' );
define( 'SECURE_AUTH_KEY',  'sh+Ir B*@;*E9nFe<dLd cwS~>`c|LEizT> lVc3<-2J3IMKTEB6OXK-km}tY+$w' );
define( 'LOGGED_IN_KEY',    '~]BZ2l@`Txh%/$F`xN}&1bhew2xlhr}A#O3<z~[kbt|!&m3Iy(A%PY[e|$VO{lxy' );
define( 'NONCE_KEY',        '_`XK~cQ_7n|a!9d{Yy3j|DZu6(#uazu/:^u:~-.S{^FhdS2h%En@l_-5)d>J_~;7' );
define( 'AUTH_SALT',        'w%V.. @4s&ly.F#kply4=^:Z:]cI3j:1OOH(rKB|y5oezQ62l^o]Lz_Y&)6{hw~S' );
define( 'SECURE_AUTH_SALT', 'm}[GNfOMjmz_xitkH9E9C$]}4X!p=|td+uZ*L6]6[hmePqSW&95{;y_Vl0WPOO.!' );
define( 'LOGGED_IN_SALT',   ';Xq3u**jz!6}eBEH*Z$aYM{vPi@uN&LBrpm|M~9qoCI^lb=Yeb/!p+n^Lv(Edhq)' );
define( 'NONCE_SALT',       'n~SxF+shjkl9>#FGUR!Nv3wzt;3FGIWdI8.y[`#.fl+R>;;m8q4ZI*ezaIbKCM:g' );

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
