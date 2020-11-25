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
define( 'DB_NAME', 'wesushi' );

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
define( 'AUTH_KEY',         'F~Zfdax$G&M sN=u[mS?WDDbk>mYX+$XhlKM]P^$mKxHN9XTJ]Mx}.Ry1bd~uJ=q' );
define( 'SECURE_AUTH_KEY',  'w/8^z-0YKEl<V_kY,DlEzy^C<*68;~;#lGFbC26c7zh4Xv|LwMmhb9.usze[_=5E' );
define( 'LOGGED_IN_KEY',    '`otC@w2DyDt~6%I8+BD`kA8 vqkg[s#,hQ,,4Js$efu+nKyF#B1y4{UYTJtKYQ.4' );
define( 'NONCE_KEY',        'UlP2<S~80I[{}Mds!ilCv+qR5bbAVvR}plDR[!u|l,&4${,^mR#bf%z;o_Uad%*k' );
define( 'AUTH_SALT',        ';m7J)3%h<iS+ys>(Iy.Fy;jW^5<C}0kF~jWc&x^mH|4hi`Ip3tt|Duh*?-3eCHU8' );
define( 'SECURE_AUTH_SALT', '8N&]hznv}2J?]|Or|e.:B/?5Y-dUI)M[9-i>wJm*]Wuj)oU|<zC/Mv!$d`!)fj8Y' );
define( 'LOGGED_IN_SALT',   'fzWe4[9o8O%k:E$P(Gh-?(2r6Ss]=@-K@`?pQp^T^tZ5HSO}l:]wVzM>!hrcVTk&' );
define( 'NONCE_SALT',       'l%+{T%M;ZG_p51T(tWR<_g<BE+.f-CGnmvLD3/enNs+23R&GNCG,9_6c!))_FDb+' );

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
