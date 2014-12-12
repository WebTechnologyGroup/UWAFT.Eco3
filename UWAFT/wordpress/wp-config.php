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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'EA-}f*9X!1]TkD[~GAyk~ StX#45Y1PO#vP3R77#=n)U;A[X9=6z{SZiT-(uT@G-');
define('SECURE_AUTH_KEY',  '84;]55u7A0_-6Dm)*%szV IjKok_4*rh$1QZ&LSCbR]BH[NGwXn[]bVNT3=g|]Y+');
define('LOGGED_IN_KEY',    '0qzL6=T2]<=7Lnh(|)X8FdYS*19i:>]TZz9E +e5CwR9C|:fMFi*+i,*+SY9:u&T');
define('NONCE_KEY',        'I48,]$|G~%cK-42fe,d++[(wVW$u$1~rW</zE_8RT:0x*FIaeU-7.N<6Q.kGK+Ds');
define('AUTH_SALT',        'v*AN+I,P|@KjpL=x&(F/un[2u[W26T7|Wiu}fFnUMuMkV3/|jDcNAud,qS3IbHo(');
define('SECURE_AUTH_SALT', '5Z7q*~ ay4z[-&&vwL ^Ka7X}%.+W%INSn`BTi;nDOXV~pTW$Q|7=HzJY?9L4q[E');
define('LOGGED_IN_SALT',   '7taP+#5U?CbNn)uP?2+-qceV^o-Ld9+Z1{/}%YFR-`#+Q9*+aF8l</1w (3Q*,p?');
define('NONCE_SALT',       '~]cXfR>,&qn(+-v(p-dq3^n4-YS]M+|Dk~ryf,:mv(DYR43?VC+MfsZs_|(t0@h_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

