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
define( 'DB_NAME', 'newic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'F9f~I>3KkY14Vu9qBB6wKu{%C~f`Tt$QrQTB3lLuUb+&7X?9; n#^6b_gs~H>dPD' );
define( 'SECURE_AUTH_KEY',  'z;)r,%k&/}{*#TY3!gm9}qJR|^]%|8,7YT-S9fsi6`n*4m3d=0DR|w1sXjwTS&Ho' );
define( 'LOGGED_IN_KEY',    'V,C}e<4?z58/m*[9SPafS@qe&$2_}uLxf_RLq~uZ`=9Jbn:*PiY^Ea]nAU.0dGoI' );
define( 'NONCE_KEY',        'v8-OT>CL7!|w,$:ZZYk9Xlg{H@u?{RtFSyZQMeD`LThBQWtz+dPX8%K3@87T*{>q' );
define( 'AUTH_SALT',        'J%tLrvew@P1y5._ ~ZMU[q`c {(;5m`OpZ}5HY(+f;l,[0qNh2Rq`O0MDk$25Va:' );
define( 'SECURE_AUTH_SALT', 'Na6eHKjn#K1W@,h!.[V;F,pnZj#Y-~S?I}g$Vrwy.^+khfj_#R1R?<e4zZm3F)uG' );
define( 'LOGGED_IN_SALT',   'e<rGnlM1|PZxfu^Pktmv1Szkf@28tQ8m+0DIJU6Fz30bnH};w_P2Z&LP/g@Q[&Ib' );
define( 'NONCE_SALT',       '}:DTtD(.MQy_ c^3:^ayo9^.J)Dql;|Cj3[SX0zBR{+YL@CmxGt~;YP)!eD!:zbk' );

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
