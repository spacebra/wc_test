<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wc_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'e6eLRJcFbkD^qly0`~M=n#yY2r-r@-0i[PHg**sLSbTZ%di  E_P!hyM`rJnPdcf');
define('SECURE_AUTH_KEY',  'h0nkMEW=wEz1shE:) XOMwcx;`j7iX5?n8.{>NoP.-big0.]Qyw+WcXl|7zahxWp');
define('LOGGED_IN_KEY',    'ejbz+`poh=]@R]:$mX^!,HOegeDkA|[%VhV/SUw@1zHl*n U*D|]-r_^AJM_GWy9');
define('NONCE_KEY',        'EodQyC3j*Xf><mz[qb-4s@aYQlg?$iChz7QjZeS+#^:li+%-??8o-=rz0*<+BY/l');
define('AUTH_SALT',        'c{pI,EZ-fa@Gu=D NGdQT) - u&R%@#0]>I79|Fun>FL-)R<]Z_RY7^O4o$]|^CW');
define('SECURE_AUTH_SALT', '_<f#@|y*?_U*(SiP<qAT?bH.dSVJ^;gSV/-!TU!ug5j1O*C%)X1-&`|_H^7Hf(x~');
define('LOGGED_IN_SALT',   'kO-`rmNSQuxDhpTDq&GN{ 3!nl3r.SM--VyrxNQM)aH-]-F[J)Tk_1?Y]Q5yE|dS');
define('NONCE_SALT',       '^/pgJ457|e]@7W^L4Jqj^%zhgiUy`p6C3Flu-GT|<{ss[/L8QK=MXYTLJ&|IDv6U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
