

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
/** The name of the database for WordPress */
define('DB_NAME', getenv('WP_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('WP_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('WP_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('WP_DB_HOST'));

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
define('AUTH_KEY',         'F)]6z|>QpyG+YlwJ}mx +mg +Il:lCv5xR+-Y4MW8::d.8n;WGSKK&g*7^Rxv+E7');
define('SECURE_AUTH_KEY',  'z/HSGE+2P?D|2n(y7V(Z[[YhX9?&~nyS)(Yct6jO$,aS8+M)Aj[AQ;;#Y&]-lu(W');
define('LOGGED_IN_KEY',    'MTqU<e&zINkeZfs[ZIX,$dTkK2OB>/plFG&ox&[9|,,FciMpt=]SeJKslZ<x6.x#');
define('NONCE_KEY',        'Q6O0VZQ:sp5vqIQb6`OUqJu`xrouu-OJ+)5w4qsGifC~{qi[PLMi&i(GO&[qZ|>_');
define('AUTH_SALT',        'lpRX`ez=q(h8[L>e=8H5$/pGX H Kje2+!]+i2bd<KrS>{jj[+ut%s,kbMpe:bNy');
define('SECURE_AUTH_SALT', 'T);*Ae8]28O/*ZacDq?Z`n[,;QHMQ#pD1@;ADJRQ,<!ik_o^RwczdT8o+Gt3*=ZZ');
define('LOGGED_IN_SALT',   '|IHl|EMPcOG|4aPz`Oy|])z]oF0U)=i%q}hRc%/asxvDQmE! ])|T?CDnidgT|oI');
define('NONCE_SALT',       'N_}VvnNV=6N]2*zsbM!8.hZZ?vA3j8z(GuYj+p)hTHWW<*7V2}w3sfhCR&00r%ZC');

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
