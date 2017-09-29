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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '} {C~:x`DNW].^eBKvw-[,&o7T^@W4-U!ZD5t*+H>^w%Yt|RzY|<;rs%KR#`;fY(');
define('SECURE_AUTH_KEY',  '?8L/X@`[BYs]{j=m.^JXD!fnWc)XgB0|het+4p7fYiTCQaFp|WR<=Jw++!eE#:tw');
define('LOGGED_IN_KEY',    't@awoZjS`H0Y;5L##,*w#TCHh2ds3;H1/K?t42ZK@G^Z4rxkWSsGg3&OSoy:=|hj');
define('NONCE_KEY',        'qAq9.S}aqQB?RG;>5hkM~%CUbe%gIQ3}26Z.=fn;}L_nXN.y]n(fV$3)xN4vvVtk');
define('AUTH_SALT',        '$|~epP8YVl7+6w`%c`z|S^nqB-yF)V;CZlmf%rR4^QS`F.9)pMq!5:5Ba<YqoJ,.');
define('SECURE_AUTH_SALT', 'smM=5QLy~|&Ly5g!|@,~aD12HP9dml6o9hXxsBEQiSzvb m2@7h &N^c,_:HSL&e');
define('LOGGED_IN_SALT',   'evUSjX<?&Nw|JH)rGY:zfg%>xZ@&lxuMP`My*c<yk3$J^^A48=*K,ot$rk<= vZX');
define('NONCE_SALT',       'o3&8`EA{+Gl|T` > 9Hn9aDn`%%xtc%zw=h.inlf mf7gkk_q?<jz.6j^L;B[RL;');

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
