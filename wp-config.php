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
define( 'DB_NAME', 'carriplanns' );

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
define( 'AUTH_KEY',         'Xz&c]J^6P^aFx_^:T|x[*}Z@JNAR{FL6?{5E|T|Z9S$%ci>P#1eNpdCn+q{hegzw' );
define( 'SECURE_AUTH_KEY',  ';/(>W[ )_dmMIyKb|h;=7SqYS%;te4L58omLiJCbJ_*D&rP[E6yv,0^imxl8ReS+' );
define( 'LOGGED_IN_KEY',    '82-K?sw`wm`@z4zMHz~L_`b4!UA|TRBR~Pnx}_>#u%W_i6-zVW5{Lidvv 0Q:lU:' );
define( 'NONCE_KEY',        'W:6>=}P4 D5?(]Cf3#:W0NFL|rxM~VP+=k)Vip<U2UJ,1X*pg}>k<hPP/@onDV/4' );
define( 'AUTH_SALT',        ')wwn=.L);A5/eQfG?2#Z_j}a->G*$E^K`Z&Z$1c/X/Sb=V&|M`#us6KD|a9HV^~!' );
define( 'SECURE_AUTH_SALT', '4>xKk;!t$HN:z@u@ Pb/P~uP|)S!@6m-`BfnqF3l_;]Z-3o?VF)XP55*54Ru47FI' );
define( 'LOGGED_IN_SALT',   'S++Aj~K(zTuZmBoD1uV%wPe=0A0 i&2+m$6UOkt}1M>!x/9=p;GVQU1(@wPo]1 #' );
define( 'NONCE_SALT',       'u]li%#|<3r)HzO{HbPE^o#<PxoL*LQNisXss{?oMYw0`B,@hwZ*1Zq>.Y,N|>8YQ' );

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
