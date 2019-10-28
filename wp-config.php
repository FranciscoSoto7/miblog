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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miblog' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0ed00f43f572bc2ab26791a356e1830bc7710f8d456d0950' );

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
define( 'AUTH_KEY',         'ht)U?-hnazm1Cc@G<[lly?s*p[RoCKs3y?wmDS^eg8x.5<l?3~9p2xZ0[&ZG;EmG' );
define( 'SECURE_AUTH_KEY',  'Ysuu_iF-]8D@E.c*gmpL&Lg|@50|Ce:^Fnf{H~7(C=?MO&5)_`7/C0B.pjEg+_Ab' );
define( 'LOGGED_IN_KEY',    'LOkBm*NH#)8:q|V#V###?:AH5b$??<uq%R3Q)E1CL=WLykOn:t4(}}*R0$XnY$9+' );
define( 'NONCE_KEY',        'A<UJC)j^)68gYSt4QC5VAQLZ_jFI*kz(CuC3,Ah^m7>3K6yyn!bW*ot7W!E%T<$]' );
define( 'AUTH_SALT',        '{i]/8A&M xiX!Dx 9jO?JG<A.B{#qDQ7MTeS~8Y.yKVRlH%3P2*ekTJk(#-|{Rzh' );
define( 'SECURE_AUTH_SALT', 'uLl}b_IEGQXZ<c5&k$+Qx-g_LNN_)RdSr@s~~FHRkuWI`DP7hCpjWpyU%LGzf<dz' );
define( 'LOGGED_IN_SALT',   'bKv7I?Ych4E?e99{glC;hdV/>:tFC`+iO/Pxs$X5@U>Zc5n7{^]/#DcNw<Q}{}m2' );
define( 'NONCE_SALT',       'V%|+50C FD){Z,I o![UNmMq^$5L%:OeX},)dU4DbP~A-]0c-GDlTWXKVQ>rc:Pj' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
