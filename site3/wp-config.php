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
define( 'DB_NAME', 'site3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Qassem123123' );

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
define( 'AUTH_KEY',         '`cXby+1h64&#uYi*?+T.+ D9LO{a.pU]R*{RHWHZs`@Nz#px!T8aIcN7lh{dgqGR' );
define( 'SECURE_AUTH_KEY',  '7kP4rD$YA{`3~gF[uo3f7A;J2Z,6T)Y6Cr/iXIM-H53o uMCXCdHkpjNnN[fG7; ' );
define( 'LOGGED_IN_KEY',    '&[=tPztP?3O4Qj7iZJm}e9w83!DY3-fUI:AT.W3q^*<d  4Oe#GvwC&NajtbF3Qy' );
define( 'NONCE_KEY',        '<O/HdfT*p,ls@kyI FO#nV}MpA+!0i^6IiJf)T1?10WYg<* {8YfkI-+[SLGQzl+' );
define( 'AUTH_SALT',        '<x#8P^T{X=Kjm_+#<<B%: *_yV+1aNd!L98h<$U7fH[y39]ojt|eKjpKC?czat|4' );
define( 'SECURE_AUTH_SALT', 'ob,3R[yt_7,Jat]DnyD+0;b*r/oTs5jfwY}W`>ZW;DZnR6u{&q.cSc!)1v.lQ Ry' );
define( 'LOGGED_IN_SALT',   '*H50CqmRM8(a!.U^^ty)!giKgR/!Izy}W:[S)T<CVN!wLIkaEW _6:5(`1Z &l($' );
define( 'NONCE_SALT',       'wpwA1gZ1k4pN6sCu6nG`4RT%=$F7/E{QWKe|dzvKS8$@G=^~aI~_Nfl$XI$-R8(6' );

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
