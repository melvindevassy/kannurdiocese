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
define( 'DB_NAME', 'kannur_diocese' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hApqCM21*cR&Nxn=tj;iam3*:G5]3PPI>qztGGSZcD.WM$|es~Z|tb]jJx<zgM#j' );
define( 'SECURE_AUTH_KEY',  'G9W~MZMG`em7#xZmUt_gJl(zunsbfEiNR#=2lt b`oqYNay]+xPxS(_gsu#_/}!R' );
define( 'LOGGED_IN_KEY',    '@u2bv8c+:$PmRyd=Rz1cj1Bjc_U<f$}.X{^_#7Y4(6x%me8~~+hhZ V;c0HuqebV' );
define( 'NONCE_KEY',        'WxULst#Kay{21BYZ)ZIB1o%bwS8pN`dWh@}u. 5N/`,C3dC]xLCl3(}A+zY?w,5a' );
define( 'AUTH_SALT',        'Qtp5<lsh%NE$[[+xf^S;#W+g9w]A>;NfwAZO8f9c}+@7Hbo;uw86e7SvJfA? 7^D' );
define( 'SECURE_AUTH_SALT', 'bq~*<*$7Y,*pZM.y~KHi[@*;{8>9-3^(QSg{E`Vc/SqW&vhQT-QE&*&j0w;c){F-' );
define( 'LOGGED_IN_SALT',   'Xt87{+!8gzov.Yh&:w^W[p::)3B3_qZ,@|byvm:;^pGK=Xj=i[Su0-Q-$M[*K*1R' );
define( 'NONCE_SALT',       '5/v?pUE_Cdbg)!V3>j$%1J<m2C,JC`b69q}$`J~]sfFi?3ao`V249z^Agq4-e1db' );

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
