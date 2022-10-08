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
define( 'DB_NAME', 'wedbancamera' );

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
define( 'AUTH_KEY',         '9Y[Q>-@F.jLg-j!QY?q0YQ{zHd&$c~AxdW%LXy c[)WGu+EeMsweN<<OI{*}-NI6' );
define( 'SECURE_AUTH_KEY',  'eco+H(mw$@+%maAXbWFb/j*N~?bO+:8h UylvN*(M]n[w4F98{RWSrO%kY9,/9>s' );
define( 'LOGGED_IN_KEY',    'ny~;3ZWUTEO`xCmT~hO>rVR2s&:J&KC$pcKF}Q^!q^0L)6FIQHE_(}u.f4lm,{7c' );
define( 'NONCE_KEY',        '! eB(kG_B9oug;A=Yt6SmmhjK<Q~juD.qQU$CC2bA5&&:L}!-_!Zsc}LJy][iV?3' );
define( 'AUTH_SALT',        'P$V8nr&b>gR@ob* W}JB4:cmRold/C=Hyc-N8no=HYB}CwF^&BV4>UdQ/AT$84Q{' );
define( 'SECURE_AUTH_SALT', '^@7I%4%D;2k)q39fZ*yn(#riRy=it6?iyr6E[L?)G0Awbr@1O,uHBD>H3^n|>x[Z' );
define( 'LOGGED_IN_SALT',   '!)poO@UD7o3>YjlxAFG~X~KXY4l?f0ABZc#=wBf]5n+c;s1H$EFOX.@u|?@:Yk{#' );
define( 'NONCE_SALT',       'P)oyBsdjRsz!_0^8C2k8u34so@NpG@Iu{DF=#9o.!esW etX&~#vRD=Zme7|_eWx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bancamera';

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
