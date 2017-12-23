<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vencanje-1017');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y.`OI+UZ{.Oa(N>UCOW^zEhO=(2.wJg1^U.-<++PPH5B>Q&Fd#!KQp*g2#Fwp(qb');
define('SECURE_AUTH_KEY',  '(BvWY2M;>~C,!_YRx }Ey4eIKhs2?pv3r#i}PmJG%oN+5(49ecO[<zO*2y51y,U/');
define('LOGGED_IN_KEY',    'tM2VxqtE fez]cov]7[[tiFdnlLNSh#yQ^!Vtw|4y_q;,fU d1C3u2v/SE>WLgt.');
define('NONCE_KEY',        'AKioqTnpOSWwER*yw;J$@#K5mHlqr{wZHmnf*_)E_r7VM[me+xdtGTHe/D|0U??~');
define('AUTH_SALT',        'XFcPFL_J72O:_SJe(e{d]X}SGr8bk5LNW+sV/7#N^x3A_>R}xT;K:*=sP~c)fJ$=');
define('SECURE_AUTH_SALT', '.f~0`WT587Cm<E,MUuSGZBH+FK[pZp|rLd<%9C{+j:1Tk!{_i2kOk%9@F~|ZPWS9');
define('LOGGED_IN_SALT',   'vl0-Lo*nodF$W11H68?K+)rcA@U]i[gm9{<`erQ`sz8R?RmR5*0gL3i6sQ#D(JCQ');
define('NONCE_SALT',       '?)@ pOqyEv9hEw,d?>)?)Wf0tA7<43vPkWCk08^zR^cib;Je/[,@;JE@NP#mcuSr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
