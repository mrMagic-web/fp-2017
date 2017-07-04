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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'fastpack');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'drahaslo0');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', '127.0.0.1');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lM-{</6cL[o:7HfG7|NJ{gZm!gHN;S(_fon-omRmbc.Rm [y3v |]>x!VZBSNx<,');
define('SECURE_AUTH_KEY',  '^/~>Ah9+|4>LbNw,j3hQT4ZzZ}o=eTt/a|mqN|L!QB2T+P*$W|IiO+@3O/eseN$n');
define('LOGGED_IN_KEY',    'b>QQ#f1Rz!_xT~(Rd`M+!4Ay<L~ Tr}0fTB<cL-wtU^jQgRV,8`B5 p08)(c_0I.');
define('NONCE_KEY',        'gA,D-_.d-o)5~C<`EJTHR?0}67|;BP[VtX$b S.kcwSmegg`>=,x+Cs97+&p|5Q{');
define('AUTH_SALT',        '.5*s:Qg6x(U0u8ox+u.F)J_|w8J>$3:t{q+I<n7`OYppdsD96~!>XCYn2<(t8np)');
define('SECURE_AUTH_SALT', '?|3HY5xaJFwbZA.[4(GCLA5TQ<^<IMK>L-q=>ip=oUq9j-Mq?9ti;xao%zmW<it/');
define('LOGGED_IN_SALT',   'v_9qZQLJuREf#=jfsC+l; e=1{=<t|b]_>{=~451ds}b5lWzfeC+ma>iF75}]$tW');
define('NONCE_SALT',       ';NcK)T~.etqgU!Sa[,o(N&GoYCP(}{u^IQu?VUXJ7w+jCLB4KUhg,(P-*K>68rCv');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
