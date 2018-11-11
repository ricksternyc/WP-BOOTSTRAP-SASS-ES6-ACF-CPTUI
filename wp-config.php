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
define('DB_NAME', 'new111018');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$*vDyV54OW:;+k(U%m4f~,,O`5wzmt#[ZwPpp[{KxD4^-z2+}g@@jsx=Wl1/5Ow(');
define('SECURE_AUTH_KEY',  'au*d^)bx4r1io/fb@w6{[qAOP,w<;SD,_;5-?YF$IKS/McXSx}d=Fyj.# 0m{ 50');
define('LOGGED_IN_KEY',    'r7sJkD B*Hy>xo-$nySoG42(EIxQqacpNS4cG9,cbxqezM>?@@kI@89l?>6lD$Sp');
define('NONCE_KEY',        ')A8#1:7>Wb[%bI#O3%Vy}AH7z>DVo<@D?QiH$9Dn;&o&jk[Sl8pm%muNivu&=$Ff');
define('AUTH_SALT',        '^/(%c)ZWrM,Jfo*F4`};^NhX|M_C}C/X=^QdBQXs[.Z7zEObDHPfqUVg<1^kl8&-');
define('SECURE_AUTH_SALT', 'psGFG%U}IDYD!C7dnL%dt)5>aun!H**Y:U {vk<}Hk2rKCt7mY~yRiD1L:(B|_Pr');
define('LOGGED_IN_SALT',   'k6 w0k4312E~e0fDiRsk7@ap{%vTsaO9JZ(}+=lZ6/Y!J@=ethD~<#XY8|-dOh:2');
define('NONCE_SALT',       'H3&$;lgjPi>j)I6M#q]q~CYPOpfJCsjYJw>&1&|kKz/{OSTSL(9*(=TfcWUlDTRe');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
