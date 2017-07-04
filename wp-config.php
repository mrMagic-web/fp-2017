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
define('AUTH_KEY',         'j,6otV$~rDz*H#vF,5 8]1N$-/M?+l{sa_T~ZMm:3 AGU2*?N|5La4)Zus?zY*HO');
define('SECURE_AUTH_KEY',  'lLTh-RqF?KL}|P-1PZo57MsJTXtqY3qHM!kz6c@XO*v_uN7V`lA!9u(rA=z|+0fS');
define('LOGGED_IN_KEY',    'PZW1?cC1qp`=kG|chHY:.B.&CJik/<_ u$#RVRam`[-Iv@I|ep):|}=JoYmGW`v ');
define('NONCE_KEY',        '0o k&%l6ev 8!.=(pJ_&@{l&oJ#q ~-$+Mv-PW`x]i64TA&c9G}VV|Lnh2}$+Km}');
define('AUTH_SALT',        'U$Jv-sV9wq[P[|^>)U*-5OrnJ!}dr.J=kP0-a6QGQ|k/Y-4PNcZ[GBmXXurFEn|,');
define('SECURE_AUTH_SALT', 'f-A!_i]pmc.g.H=/lq(H80tx1}.rR@+754vR~+KmPNs1Cr|Ggv8I|ZEY_Et ;>^k');
define('LOGGED_IN_SALT',   'hG<^8%dKynZ}b9Rvf;+I?;IB8ff&L_lr;yN|UG_d/{8D`sNaT_(qcnH)*|^4M3nD');
define('NONCE_SALT',       ':@n%PU8P^-VzQ#aO#A+qYX$O(Zn0b@Xq0|%O:x|*`.bjIamS:t+:Tb@;11w}<Ez[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fp_';

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
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':1234/content');
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
