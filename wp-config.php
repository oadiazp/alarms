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
define('DB_NAME', 'alarms');

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
define('AUTH_KEY',         'GzcSFQ- ,>4q`K~iT5ccgV Cw#mL5C=g|YhOJ?8~(eF}v%C1J`^}-H9fEWO81jO9');
define('SECURE_AUTH_KEY',  '!n&o-P>hKo.c{tq*{> +*v~ofd 8N>kGY#@Gf`IcOD%vZGw?*/)m`&GMerWifvql');
define('LOGGED_IN_KEY',    'x5HO3Gp6sRc93it?J[iUh{)@y]}6?@qEtJPPgys,>|c`l2U$!%6%~HGB6e%cl4m3');
define('NONCE_KEY',        'A!*2X2hzk>q_;x9W}I6<k4v3WwXbo4sR@:/W-m35 4**5^vV|kuV.#AQ@yG,~vS3');
define('AUTH_SALT',        '2L~XQgirMc&jx& Y8>.z6AZ^vV;wUa]iK(<5PrYE3=v!:-ozi]}St1|m*`t+q33m');
define('SECURE_AUTH_SALT', 'hh<;W-:Kb`1T_}QQdn,hK>51:.r:YGE75) @xy=2{4AqEgR9Mt@U/0{FszFXW`T`');
define('LOGGED_IN_SALT',   '+G[u%!NwpHrsg4{Wc^@-FQ-7SrFx0y+59qerEJ>NjRXn|P<)l0`+fT2Ms6,r>n@V');
define('NONCE_SALT',       'wf/+h}R>})Fl{]X&,_?xwC#C5K>X28:)7L3f7mW|>pL}3<RgPgV%0`45(Vu?nhTq');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
