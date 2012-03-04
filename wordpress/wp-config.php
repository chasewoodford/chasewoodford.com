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
define('DB_NAME', 'db406261118');

/** MySQL database username */
define('DB_USER', 'dbo406261118');

/** MySQL database password */
define('DB_PASSWORD', 'apple15');

/** MySQL hostname */
define('DB_HOST', 'db406261118.db.1and1.com');

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
define('AUTH_KEY',         'Z*WTosmLD)[=a{f_l%yww.BDi{Wkmh|0zvn7m[u?7bB#N%c/=gDO@K`h-VdBXaCG');
define('SECURE_AUTH_KEY',  'id:=k6Xt7 jtu@/rY<n6H;Xz=s<7I?S)mcPyF(aQJvWd(wdo[_jw|lr18kjZ+r0m');
define('LOGGED_IN_KEY',    'HDCkF^?mMbKux]-?2EG-f; :c1P}qp0n?0+(nd{@ T78#I4sML `K$,:H0 2!XJ0');
define('NONCE_KEY',        '+L`NmR2r:]FyH8R%!Qx-=nf%,)q,r[?sr!!H4}Su7!jQ.Zh?HX(EW_9#P.[DPSmw');
define('AUTH_SALT',        '-N8AaDfpq!Y|WP-U@JwN6$ 48Ei^b{|/LWu7S^/t{hq{+orzvf[>J^a8I--2JP#Q');
define('SECURE_AUTH_SALT', '$&GPY5`pJ&Q-^mc}GTgYNdX}C5`F+ZWY_a?@qmhz2OR*;&JHn.:0itIst{U (krA');
define('LOGGED_IN_SALT',   'Ec)Hl>wg&T|cBa=y$=O@KuAvGLjyF_-Y|4m/8X;+*LkMNx!sP(d~p||g!6gl7/0+');
define('NONCE_SALT',       '9dW2f=id0o52@~JM71xch3R+6by0SBfHqKSx4wg-B0WBH7YO~uJr-!kY:R:4[bGO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cs_';

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
