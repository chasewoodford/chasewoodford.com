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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'dbo421787423');

/** MySQL database password */
define('DB_PASSWORD', '&mdash;heT');

/** MySQL hostname */
define('DB_HOST', 'db421787423.db.1and1.com');

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
define('AUTH_KEY',         '$~hj]0R?O QFdI@L8L^O`*6o3fl!X&+J>%`_GQs-#R0_D|>-xzpt~tV(Z72G^6kr');
define('SECURE_AUTH_KEY',  ',qnsQfURwT;Nz+Orf%NOd5g%h:!`+g[U0yi}}bgP{$li|lonO(dG-L.<EigEsp5r');
define('LOGGED_IN_KEY',    'Ln7G:AyM4D[?@gcX }G.&<lF}72.5P)x,(LR`of=ao(R,Ws!d6nPIm*%QVdE@LE(');
define('NONCE_KEY',        'Sx!IA{zX[g?OG9V@}qqO_t [^RFf`/E-~@_=RYMpgQ4Hnr/3I0+aw7$n0ew/0Q!|');
define('AUTH_SALT',        '|102|[%(7t3&/9u|@LyprZYAh_mu@:%y-=?AWz2Cz?j:gA9OVyH5CV6ILu!(AYZC');
define('SECURE_AUTH_SALT', 'p-aA|l/D%i?Muj-|vXlzwQ%T!+A!MJ-b=[QPQ**?f%|NZrt5r{Oe!f`M;XUd>8`W');
define('LOGGED_IN_SALT',   '}ip2KeoTs$+?sq|~2l:94|C1t`8JHcQ]SYK;sMT>=#i(|f:J3Na-NVo`!d,+Qhcm');
define('NONCE_SALT',       '*rTcZ[PT%~C~zVVN3C$H-+i2#dX?%L&2 -pl,%K!JB7vf-mW*Y#:OeYnnkz>U#vw');

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
