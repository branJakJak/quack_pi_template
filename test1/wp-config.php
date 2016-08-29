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
define('DB_NAME', 'ltsmu_tst1');

/** MySQL database username */
define('DB_USER', 'ltsmu_tst1');

/** MySQL database password */
define('DB_PASSWORD', 'Wo6jKy2MmlQHvus3aiU9');

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
define('AUTH_KEY',         '[mi-dCR+kaLy6Y?NjY0S{A/-w9lOpP?n(~)H0Nq<kEaJ|O2zV>7^XRpPkvU,oI&n');
define('SECURE_AUTH_KEY',  'fqR]5tL*xkyAq^#;oVJ(luXFK)]%R4DZR6FShq[?wlcAkA15CuG6EC$VZv?6<.=b');
define('LOGGED_IN_KEY',    'V(lFf@QP&At**1x>^(G5fj9-> NNf:*7+NJYyHof4yf<.2X{m:`Rp77vp%Vn0jQS');
define('NONCE_KEY',        '%&0xw,xu~gy|KRC=>?,vOj7CL-&>=T1f+6.1q%?st~i=.tL)-DP4}d!H`DCzE^.,');
define('AUTH_SALT',        '7INZmD yJ5K_rqTApyBjSO+9L6]<ihe&S^zxm4F$V$n^imhA,SMU(4,%^d==1Utm');
define('SECURE_AUTH_SALT', '=v?qD|y|F2QLcc63VHa+ /y=nWp0v=d&joivGo6NLudf!Wmb.=H$GN8-!c)t8DsO');
define('LOGGED_IN_SALT',   'HJ4U6uVM*.v_rW]e6O%@Jh%IXx_LX+[!?)5I-N<vOCc`RM,6^(}h%DX)E`9TGM`r');
define('NONCE_SALT',       '@8T91!(bexdJnc>9.+LzVcXq=X F!7&O%W0;f0Kb%Ec{=Wqf?3dFn~U|F{hTe#gk');

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
