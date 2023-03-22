<?php
define('WP_HOME', 'https://xedep.herokuapp.com');
// define('WP_SITEURL', 'https://xedep.herokuapp.com');
define('WP_CACHE', true);
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'auto247');

// define('DB_USER', 'root');

// define('DB_PASSWORD', '');

// define('DB_HOST', 'localhost');

// define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');


define('DB_NAME', 'sd9dsvn2h1q6ojjt');

define('DB_USER', 'd8gxiihd37kmxydi');

define('DB_PASSWORD', 'cqo5gcavqsn4o8v9');

define('DB_HOST', 'q0h7yf5pynynaq54.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');

define('DB_CHARSET', 'utf8mb4');



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '<$0 ;.P|$`fk@rEW^1th7TA,v~45in;6N;+o2_>Jk;Fde;B8gZEMms]*ahyqL7p@');
define('SECURE_AUTH_KEY', 'eXK}EB^G9{OWV^Pv_kl6fQ,YyFl2=]Ta^rVV[J6s[vg)HV0Dakp;Z~xiT!F(W)5w');
define('LOGGED_IN_KEY', 'T6&M)i(9_nhTD:V+6=vz&du`e~Q=Y;iZfup+-xwoxm6K<aw`w[Y24K<6hbQaf)cg');
define('NONCE_KEY', 'jTE*U6W:Jq5V8_>:D|v%LHar@XEZ8O5-p+A0K[5BUBmeq<zPKV@5gk.naGW}Gz)I');
define('AUTH_SALT', 'c1$(gD} 6#saM=}9PiS!!;>Na6o(YsdQn1+WZB6{h&,zU{btl*XV8cl3L??{:1Lq');
define('SECURE_AUTH_SALT', '%-1cq#Rb8>Kv0$(u)Z_r6o2m)[:HxXhvayoFS&~CjQ&o| umVH*-.<3|Ce 2Ip}(');
define('LOGGED_IN_SALT', 'U<#N94D8$cA+m},% yj[~<x6(rGKCt~qDwd*y5?-rdPt!JfuEBec-f4Pf>,2]ie1');
define('NONCE_SALT', 'gqE-mY*K{rq[;7qiF~:kk*vv0uh<:{a5`T#B#|dDy^952+}&?ksR</=OS/gmMt.~');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '742_otua_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';