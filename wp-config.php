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
define( 'DB_NAME', 'ffestiitop' );

/** Database username */
define( 'DB_USER', 'admindldb' );

/** Database password */
define( 'DB_PASSWORD', 'R#7hT9pKwE' );

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
define( 'AUTH_KEY',         'Nbnqa*;5i+AC(h5g.c52rDc}X.?WvH_l*w DB.Z4.,$,[FA9LMVW*E5?P-0TLx9x' );
define( 'SECURE_AUTH_KEY',  ')@E^Wrc)]WuR}/%i&fq~JDE1N2##YP7&xaMJ1(R7bcxOk,j*%bj{V^P>vK<4sI3~' );
define( 'LOGGED_IN_KEY',    '<pi;@CY%2SKIP/+7Cp@1pEQS~mqK.f8&frk_=4fE|mS|NEE!m&qRC)ScpZQ3J+jz' );
define( 'NONCE_KEY',        'sdVsz%Hhsaqh6m#[05Mn1j4-Ncn$3xmTSqkmd96g&XW:xK-hu#( yLR8hW1c4DbY' );
define( 'AUTH_SALT',        'Q6g]9*wCvon@jm}@fI~gaga1~~hEml=dRqOnip]T|x;5Bz!~_4~Y]q7Ij/jLHSGn' );
define( 'SECURE_AUTH_SALT', 'YEz( &+pNmYp3<R{==_yVXt<)9Cb@OMuH[{9BfD@aE[UwWu[LcoxN[}0{SCC{cp>' );
define( 'LOGGED_IN_SALT',   'm;})V5N$=OIHv98S/!pZ_.H?O5:TfK.`%;#5S![8s}AfE:vIrkG(!x}`~A c/]&o' );
define( 'NONCE_SALT',       's#`dlSl<%v.n#t<Fv[W9,pcAyJTdkGc7$og2:S/=j.ho=xE@w^*WT7 3ta+/16Ll' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fe';

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
