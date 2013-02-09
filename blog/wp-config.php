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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '-]_KsRvY1ZbC2}|]}{U g`QThhSKA|ER6-4h$}31DN?EvyL=rzs~M<us}knx6 zI');
define('SECURE_AUTH_KEY',  'o~FY-|Z~s$`S|R9B|zKm_h4_3gh~U-q _rSu~DMV0~D2((`MP6F1HIEi(NXR?ZW0');
define('LOGGED_IN_KEY',    ':puQ!J!_AzF&IWTO8+`MJx8ZjKJ`<g]j1dD^_S3AKXfm+f3L98ba,o1E$N/S >GR');
define('NONCE_KEY',        '|3y;8?.k:]G.Ren)$#1{/x+M4iQN`-BnzGiH[e7?y_aRW)>XSw;_`.}g[&CQ1hy9');
define('AUTH_SALT',        'yj0Jk*|Dy~Do/X|@O4u4i]&Dtq>Kz/*?zZSp[X2=DX2co+ #^e]pYaGY$N|dZ{pp');
define('SECURE_AUTH_SALT', 'pd/r%SW3+#.;!g*oiPS@:F1^+fMe^4Hgx)SgG<VrrPZXk.|xkRXR=D9j5|:U>7;|');
define('LOGGED_IN_SALT',   '>m>]Y,;4z*lsmTPJQuUE@{Rg]10R-|7|8ygpWHrP.;r_rmOxt)b(H[uh.F/[Mpe~');
define('NONCE_SALT',       'bItIfz<}gkr qmOS+cwp+|4zk@Ry/2`iO58}La+d`wDOC$aE|)YKz)|7DZ9@@P3&');

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
