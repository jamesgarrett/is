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
define('DB_NAME', 'garreub7_wp3');


/** MySQL database username */
define('DB_USER', 'garreub7_garrett');


/** MySQL database password */
define('DB_PASSWORD', 'caps4sale');


/** MySQL hostname */
define('DB_HOST', 'localhost');


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
define('AUTH_KEY',         '?G6z)4pChoL|^y:u?ZUjwam+3?@s|VL.J7NVbJeQ_:%31k+|u0^3 P1FP<g0_Hpu');

define('SECURE_AUTH_KEY',  'ZW+kcCNHU@JRC/}iCX>zI8sj_z(y|#=j_-qG]8Ua)S4[}|+vuxD}=?*b)Xqq=|%W');

define('LOGGED_IN_KEY',    'kiV<>M+l/-Y<9 5(wD8rL/k8U6`EEp?+y+<ZAayA^d/z(Oe#>(Os:([<z#K.Bl>Z');

define('NONCE_KEY',        '&hVlPu_(a+61UAZBGm4f6id<ndL3l}T.Q0agWDgwI3>lE|0,>[zn 4U(2ec[3h+Q');

define('AUTH_SALT',        'U?|Q%;=UO,$%D |cYM%|pVUC0_vY}LY8v)uC3D%q-VIa1@Z8Ei]L;X -6Gu!EBRx');

define('SECURE_AUTH_SALT', 'Vle6EI?i1`sd|Z?xy_Zrz$8+ka]$~FQQx?r@W(rxkj<&bf)F-8lR>t4zlu&{UaMB');

define('LOGGED_IN_SALT',   'nSD7Nff2BK)^Ut8MYd`)2okP4|d&{~w-x7^#dcNIGU/{33?1#2a@F&MJLDM>hvuY');

define('NONCE_SALT',       'xGS:(b}&}tG`?ii4VTZWYKCwVs<&moMUZ}(6H=%LfU:hWh#~5&rJ-L[d`f&M-DV=');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


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
