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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aql' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '$~Wz)R4)xKpn1f$7ZiP+8:>(3#auV<09h|:h0@0mhHjf&o#mOV@WiUY.B,ZSOe8g' );
define( 'SECURE_AUTH_KEY',  'owaZ{p)/q9vpl[uCD7#j=?(Iq*Eegx[N{U*G5r`{!T3{U`R~kjK`0WyXBR#*L-7&' );
define( 'LOGGED_IN_KEY',    '%H>d|]U?Pqu_4`s7Im^MIW`Xg(l?#A`MiN/q^sbAeEA%IZuK%js1ccDm.ihQ_R2 ' );
define( 'NONCE_KEY',        'K*;idV5[:k9P$t*z4ltZH86drM<9qxhm@;? F1bYyYc]Eci Rs`L_[yXZ:/D0(.H' );
define( 'AUTH_SALT',        'Q>JOPz13pU3%Bq:p?zq^l@,gp8g:D#B_YbS?b .0j,+B-n{u6^?RsHNIsLC*fB(h' );
define( 'SECURE_AUTH_SALT', ')=a`XSF%]xFBIAC[1~gg6a)f-NXYTBFA_ZGqdj*X[>|FHvEvr,nG9h/SDtq6PCXx' );
define( 'LOGGED_IN_SALT',   '$,rX#RQsmq^%$XR#VONI~~#FvyiEY2B@N=O2sxt3C)mI?ZQw]o|AC%^G&G5W)PVI' );
define( 'NONCE_SALT',       'w,` (Do4*_p~$r.X&}<1AI9-h0t!y4 5nfO-_y;5/H%2sE}8eqR2%rNjI5Q/~_bM' );

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
