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
define( 'DB_NAME', 'theme_wordpress' );

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
define( 'AUTH_KEY',         'E; WqDTI=QdmBay;VO^[Y )LZT/hR:kP.9}k8J*`(Z-LvS{_4{MHWJ&/IogW[Day' );
define( 'SECURE_AUTH_KEY',  'LcUSU+gI~+5{z>`E<%@_@s^aea?3T@PtNGuApAE.CPXf~S=c+hb VmgJ)JE7,6(R' );
define( 'LOGGED_IN_KEY',    'h|@!7NO}O-!HJ~v~`x4ya8$%/]Gj0x>vYZ|uja|ECJI%@Hm]0%dfmRgHMrYJGvRd' );
define( 'NONCE_KEY',        '`+w`[Ir~dgy2.wj`17J;xf^Z|;c1$vD(=0G[2L2r5l+$|9BJ!gYwj3=}M_tcTT--' );
define( 'AUTH_SALT',        'rwc>Jxj{9J&S*A4xUm49lZKX 0U!&[9Y&h?z0bjBf`nPg&P_D4$LKQb?DvGJfDi{' );
define( 'SECURE_AUTH_SALT', '(B!<)!=_lTRAI@<t6M;,H8Y|-p@+D<E%RoLDO??i+Q_SAF?#so:?E:<5%!r1zS{g' );
define( 'LOGGED_IN_SALT',   '(f-Vb AWh:!v(E{rmm+a!hhmu5fTm~FmxvdIb*(x2EM{86le0);S?O8(s=Q`M49~' );
define( 'NONCE_SALT',       'kzwo0W^?&*@/{uEi`dqwVl&O>(Dr[/J8;^Tca?R#-p6eX$>0zs!oCun5QEcm{CF8' );

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
