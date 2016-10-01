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
define('DB_NAME', 'girlsrocDB4fzcl');

/** MySQL database username */
define('DB_USER', 'girlsrocDB4fzcl');

/** MySQL database password */
define('DB_PASSWORD', 'xMx7JdLOau');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '+i2Ht.Pe]Am+HW_2BNz>Uj0Fr^Mc>7jyFQ${Xn3Iu,Qf{Am$l-GV!1Cs8NZ|4gwCR');
define('SECURE_AUTH_KEY',  'FFY,4gvBQ$}Yn3Jr^Mb>7jy_1ds8O-[Vl1Co~KZ|8gwCR@:Zo4Jv|Rg]9m+HWi;ep');
define('LOGGED_IN_KEY',    '$f{Fr^Mb<7jyET^Xm3Iu.:Co@JZ|4gwCR@}Yo4Jv|Rg}Bn@JY,4gv9O-]Wl1Gt_O');
define('NONCE_KEY',        'O1p~Ka#5hwCS~:Zp5Kl-GVfuAP+{Xm2Lx<Ti;Eq*La#6ixDT*;ap59P7Nz>Uj0Jv,');
define('AUTH_SALT',        '>rJv,Mf>7jyp*La#6l+HW_2et9O-]Wl1Htw#dh:l-GWfuAQ${Xmq6My<TiEq*Lb<');
define('SECURE_AUTH_SALT', 'VCO-[Vk0Gs!Nd}Co@JZ|4Vk0Fr!Nc>7#6i+HW_2et9O-]Wl1HKw#Sh:Dp~KZ|5hw^');
define('LOGGED_IN_SALT',   'kkvBR@}Yn4Jv,!0ds8Nz[Vo0Fv|Rg}Bo@Jg}Bn@JY,4gv~;ap5Kx#Sh:Dp~KZ-[hw');
define('NONCE_SALT',       ':wNd<6ixET*;aq6Am+HW_2it9P~;ap5Lx#Shr^Mb>7jyEIX,3fuAQ${Xm3Iu<PiE');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
