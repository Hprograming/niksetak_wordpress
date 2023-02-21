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
define( 'DB_NAME', 'wooden' );

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
define( 'AUTH_KEY',         '.{BwMy6D:`NZW#72hX&`?9sO[>(ZhACay`^hq{bD1iHuL8&nyNUk2jp)S<,pP?qe' );
define( 'SECURE_AUTH_KEY',  '}dYOkAfcC^4KBmVQIA/ma$g?^9t$<Ia05MmJ{C^?[(0]Zl?)+@ds|HjGZGk:+ _}' );
define( 'LOGGED_IN_KEY',    'wsY<jz1*y}8(gGTGx}h/zPcdP^K0;!]eo#e_LI+FXXiFD^Oq*4teDX3jhg*Sgp a' );
define( 'NONCE_KEY',        'BsbtC nnZHCyY.$AsJh|e XdwLG!+Qn:Ql,KrAp*1:Tv#&,:%uQNdJ/i/m%t#xWW' );
define( 'AUTH_SALT',        '}XLp1;zO=jbWP<G3:,Oa4jH#|/z2/8.LX[Y8-:j-NXNys#aMlf@CszPrMg%Hv-g&' );
define( 'SECURE_AUTH_SALT', '$p;BosbURoMLs9ttu+Dbveyc>-Vm67^:.A*PE5zV#(cgt)XoTh+,2YPRgPlyEakm' );
define( 'LOGGED_IN_SALT',   '#*L_!*Wo/,YDEBMVe#:wT4Q}IV&Z?027J]e%2!8(4|Zh!(:w;qcl[p+.rm7f+@uJ' );
define( 'NONCE_SALT',       '((9PK-9aSuXUhO#2f,l!js8fDr]|ozE4iO wT*fD{}7i:kj1E^TSU,d7QvdbN[;*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wooden_web_shop';

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
