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
define('DB_NAME', 'u994658404_tstdb');

/** MySQL database username */
define('DB_USER', 'u994658404_tstdb');

/** MySQL database password */
define('DB_PASSWORD', 'jevousamour7');

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
define('AUTH_KEY',         '7_Keo%pm$tk(f_$k${GISTOyEGtcJkbTXkGQ9a#yEeJ$ijtf.{}p&3oWIfP3_C{`');
define('SECURE_AUTH_KEY',  '&;C6BnYV]9A /#L-ZCbb0v&|c0hel*MhD6wArNv$=e;:xiB4J-_[h0juV@a=1f8e');
define('LOGGED_IN_KEY',    'n?A@o>m%>L!ocjbe08?:4r%e|.e:f2P1DZi|Cnu)#)~Q,45S+!jHu<b)]wavS_%w');
define('NONCE_KEY',        'pBv*4RWKPDA#[.qwKt&^XU8^{Zv>JJ_{hMkT_.G7i{(4=qTExp_&q)o|D*AXWUc6');
define('AUTH_SALT',        'XhZ]RK8mOJOsu*z~V3bF86r%jzf,$z}=!i@n:<~Hfpu39Sa#4`B:DwsD~k_qeM-u');
define('SECURE_AUTH_SALT', 'mFO*g^) jw)0YYZj* kWZI]zXowL>tB|M!|[wCO#A5A3%%FapQBkXOU3ZpSW_EYv');
define('LOGGED_IN_SALT',   '>y]2d/E0)W1PgUD}vo`eK:`hGsM:Z73d}v!MkcfbE{(O.mhS?>}q<iB;c`4PS` O');
define('NONCE_SALT',       'Zj{.U^MRI4C$g9UXa]Gx.o]1!vDh^/dFnC=4U&nw^0itsA(r@:skiO[M)!&.F35z');

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
