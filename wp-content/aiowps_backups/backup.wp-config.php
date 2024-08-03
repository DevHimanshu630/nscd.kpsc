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
define('DB_NAME', 'itcolvue_kpsc');

/** MySQL database username */
define('DB_USER', 'itcolvue_kpsc');

/** MySQL database password */
define('DB_PASSWORD', 'kpsc@1947');

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
define('AUTH_KEY',         'D{/QV L:6KIAa>K`IlQTAo=i;fs^5XZMKDaE>-iGA}gV`WB5w@&D`v~NzsI1LMrX');
define('SECURE_AUTH_KEY',  'bAZk@V&x22>X9///jfUcymKQJ_g[v4+~?be}G%Z>lCbr;rr9bb35:-imRbxNof1h');
define('LOGGED_IN_KEY',    '=H$Xf4bhw+#qEcNqkRvAES:s<boTNV{TUD Y8,?`|Z2QKmQ>g%U>pAPdU7Y}fIUW');
define('NONCE_KEY',        'q[fkw=|M5).MA#)Z8R|,wkkrT-}IA?&bgeakuot^FZIT&j%!! vzIEdPIa,3?I_h');
define('AUTH_SALT',        '7~qO4ly`.b(e#:#U(wV8e+l2So}J%x7N}daQ8hPPm&XJ33*[VU&u1YjV;oLhL2`1');
define('SECURE_AUTH_SALT', 'Wa[`q1;^HQ,Yw-z!yhm9LV^Sj2ms{ 3z(k)02oI^@BDh{&K)k6M6#A jNs1~T)Z7');
define('LOGGED_IN_SALT',   'O9u5Xsyi1c[[T:@wK^f-WV$~%m~PF>A<37l}>FzMelm3qS6Hi|j}#qeu:<op)YH0');
define('NONCE_SALT',       '=n60?wl*h`^;nJ6t|bGc)9WJZeIv0Prxf_X2s-?=D>zkTfXav&A^`rPlg%jLxTC=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kuru_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', false);