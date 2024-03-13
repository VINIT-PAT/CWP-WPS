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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cwp' );

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
define( 'AUTH_KEY',         'yA=S%|?foI^o-F6Gv0R8<@3dSZp8BLm;oZ1OJXS6<Z?Xu#[vY%<,dFVJrN|LkK2>' );
define( 'SECURE_AUTH_KEY',  'GJFnIO?N~+TuZ6#N?A2%qRCvx[I.2CE.=xl34!T*Z5o~!2:J`6FI7+(`+-0bsF)}' );
define( 'LOGGED_IN_KEY',    '.Mi;v+i 5/xQlwpdEAZ%?`eqQ,Z2`.Q?RlPE{+9Ju{:x8=;}]MBMyo:&LdG[4>vU' );
define( 'NONCE_KEY',        'MzhB&J%q4mT!yUOP1`NFt>h1>Dtb/{O8/Fx&/=vcVgZ{rZO>0dT}>QSaO@kJQG38' );
define( 'AUTH_SALT',        'b4`^>]gX^Z^zDz!Ud&8ox2#%|ijwqMV/fPnL]&I0 f%0S+ZQ-Qq$EL);ldio#@`F' );
define( 'SECURE_AUTH_SALT', 'E;aueE@Y!VrgHP9@;u{TK|@),MVugVB1 a/1x8c@ccQSmchntC4]rJyx{-1=@Ck{' );
define( 'LOGGED_IN_SALT',   'A[iD$+ngwP[zmA8e,e2>SA<MUD8b+iVb>/NsisTJu&8DtAE})IZ{ihsOf7Rj46l~' );
define( 'NONCE_SALT',       ',_yV-NA,<,HiYzS5wm/tAsec}Lg%r7:3?w?,dwcASbIVDe0N%co:]u,.p57i>jUj' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
