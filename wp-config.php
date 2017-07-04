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
	define('DB_NAME', 'yeopress');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'yeopress');
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
define('AUTH_KEY',         'ax%rzm`XDUzhl,,3@6])~UYt[&+{U~?hL(!|HX|i$;R+glH&t>mu)iw`nQO[>_V,');
define('SECURE_AUTH_KEY',  'Z*GA-;QWaOA.VHG@O-T 9R9=lD^Lah;8ex7!y_,%?Y^l/5&~M+1@f}h#q||G__J|');
define('LOGGED_IN_KEY',    'H=c-4| wJ0)Hs?igCdSP-Mrn5.^|PQ~-|2#.V$qic=2:@KtHYm#yA@d|0D6!B.Xl');
define('NONCE_KEY',        'BY~h.On&C^=O{9w!l>JkD9TEK6Y*MBG5sD~Ia.IXZllo 7=h48lgIL4_|QYhh>IB');
define('AUTH_SALT',        'NG]gjICLnZF8AR@Vd-Uo}Jt{}VSGhcd7gU o4I^k{#Xtin+LNC>Y@-X]7H)w%Yt|');
define('SECURE_AUTH_SALT', 'pH[~9QxofB7uN[HABj5$znA.Gmz7Ol8S[oDSmR4:~}m-sN9}IBZ9 @So^-|8-*H3');
define('LOGGED_IN_SALT',   '$U8OLe1e1 Z!=*J22X!/Oml@`r7,bHz^]c85c5Ei2-Fb>ECyqM1uY*bW,Me}- %D');
define('NONCE_SALT',       'fHhnKt`U dKGF?g$c6V#maA4Oc(^I{J]2OK,0r9NNQLeg](:h`(n4iZ+:waG^!.d');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':1234/cms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . ':1234');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':1234/wp-content');
}


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
