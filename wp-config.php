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
define( 'DB_NAME', 'wordpress3b_20232024' );

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
define( 'AUTH_KEY',         '`X6TD]$wtcR}w_D9++DqKzv-aD$Ff7:H6x3`+NyhekYV_wMC-Nec[,[j!>6pmrL&' );
define( 'SECURE_AUTH_KEY',  'UZ?)~sY%Go05`G1]3l:|g*<>Y6Z={>?BD]NF<=T~ZeMBE2pJ@t#:0924o!#s8*tk' );
define( 'LOGGED_IN_KEY',    'No_&_+Gz,?Kza|cAa+OwonC%</TcibKyi$>wbBdN;HiWu+`u4v.E%^%>mE}nUcZ0' );
define( 'NONCE_KEY',        'uJ8;Y-Tv,*EqdJri.vQ`XFJ;TLb.A+O~e(]UX?SIj#~3:69$| OygD&_x?5`KG^[' );
define( 'AUTH_SALT',        'N-~c,11TZ180Ck{~O,@-tLTDExO|1c6u>r8*vUN&nN9EavawwKc|C<(fS=8zss)B' );
define( 'SECURE_AUTH_SALT', 'Zlz/spd3L =D;/ZCm$D7bmq|CEuSuY#tKa<T])V[NmR?<xOUfKC_n2Hb|dgE),}&' );
define( 'LOGGED_IN_SALT',   'Js9b+Y2SLZ<l3v;r/aw)iSGGE?<KtJq%1$}Ht7cq~mH>;IaUa|%hDPnYmPBQBC8!' );
define( 'NONCE_SALT',       'Ju^ih;J1cKYQprt|L%9u6PweT=h_4k~zJ7#{@0TEIi^$Re?He1cOA?#wYQs/F<Kl' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
