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
define('DB_NAME', 'glpd_db');

/** MySQL database username */
define('DB_USER', 'glpd_db');

/** MySQL database password */
define('DB_PASSWORD', 'hitman052529');

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
define('AUTH_KEY',         'TC2,fn&LhoN3l?-M?Emwtzp6sa&hMc2zqLU^?OmGdqL!b1?Dgaw`])&g3C`T!$5l');
define('SECURE_AUTH_KEY',  '.Qz`byDQ$oz>O1`AR OHjl/{X<*D%u:K_g{gs9-B2jS)D&eVJ}bV[vVD2}L6`3^E');
define('LOGGED_IN_KEY',    '0@fw|fT!hb4%k8X1`n=9bT.5<2Uz8l!aTOO-<=I/Vq7:@L8e!<8,y57@[(Nda[rm');
define('NONCE_KEY',        ':?/YHelMfCVJ218C.-w>7L}ah)[YlXB1ha4yL&8X!=jhZ!UVy_N)Fa[P3-e!d^~I');
define('AUTH_SALT',        '=M,^^0cVNE/6PB~sd}1#izwpB-DCzxLf!3._/d5f[|: rwHft0yA:U:>SD=I_TFy');
define('SECURE_AUTH_SALT', 'Oe_pk9` :8L|]k9d06A|N0 QF1[>$u/I<3Sz]HP{`lJ3ztF 91ahO$,&,a;IXQY(');
define('LOGGED_IN_SALT',   'N_JBX*mfJp4w(8%i_(1n1`C*=wH0kgk;(()$),;Z)JWmL:qqdgESh!Yoi<Jf@PKg');
define('NONCE_SALT',       'Wv($@.OQ{WZYrPH 3MTcf),ufW_vdD6.V{`QaR}$(cI,qtAh5|v;{n`D$E_H#j5(');

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
