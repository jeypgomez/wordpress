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
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'B2 JZ4SP?8,fX(+`7k)iXE$y?b+j`J%4MGuD~>]KQ5a]s>$}PaqVsne|Y|4gHpC#');
define('SECURE_AUTH_KEY',  'i^M6XLyXR:5xn8E6jhQewN(]+4M3rX@wV^6-1|9E*rsXxRSJBN4}[d8m_n4{E#xy');
define('LOGGED_IN_KEY',    'ZNq36L!KZI^9o-k78+mVE.2.q^;{f-g!74`R-P2Rp!4^Bh5ynQeJ9yDxR4^FRk]U');
define('NONCE_KEY',        ' 21;EN2Tv3nAJm{(|h/}=u(KbcE*+Qot!)~KcMmyF`9D78^!_Bne8;(bzX@}4W<E');
define('AUTH_SALT',        'abg;~|zyl:#Z)oyz3@7>HCzbI+22Wv`rl:gpmV6YrBM(T!66-Z8;#,hZLJ9s%?p;');
define('SECURE_AUTH_SALT', '7F>RWK-N=zYE;~}@T&G9xXPSpeMBCY#1if+OqFp.;ho^}A46&zvg]{_y,t=#Sj!l');
define('LOGGED_IN_SALT',   'B6(2ud2<?)z=e^&;R+w0%-$Kw*ODwas=OxzZ8ABrCq(L=}SG/$/&b*;x>Qc{Qla2');
define('NONCE_SALT',       '3!+t8[6gKLO|c;<e_^~KMJk$w7T>HIQ#x_PF}Sa(U%]b>vmvvlxcq2O*=lty!?a&');

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
