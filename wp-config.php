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
define('DB_NAME', 'hermitasia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '}!Ni5MTJ%/(uxfXk;;D=,Wm=tU5w2UHty(kJbW]3di-T$[L}6?:aqY)3~&_|eB`_');
define('SECURE_AUTH_KEY',  'Ckf&L45;Zlo*Woh4%[VnM}V8Hc8|Id7Y*F^<2zta>h.KYo?d2,sBud|/;(?0#.K,');
define('LOGGED_IN_KEY',    'Xz._UG.U2ychX56djQEfiuV AIRfFAO8wiC2$p},&84NOpx$M=#`g1`O<fx>653d');
define('NONCE_KEY',        'tvSR4:UN`F[wntRIOAN <9`Z_-^@lF$ep&yq/tzd+~WB=mA;H%U7>E85w-pf F=w');
define('AUTH_SALT',        'A}@|r@-k0j+_%$/`o<,zTg-2%J_7/:I(;Ncf4XvBH)n hr{b,H{1`a$BZT2H#/5L');
define('SECURE_AUTH_SALT', '+W_~(1[:8*8Q,B,CvHq=H!r elcVu^D_8`>t!vV|*aEnX&W1mHd9WJ@F?W5T}YL$');
define('LOGGED_IN_SALT',   'j,wgPj@~<k]t+tkYI<B~ [kQYg`MkXCc<dbxkk:&DM@v}|^nG9rDO=6f*&tMAQ-V');
define('NONCE_SALT',       'q0ou)eS$NPkqUX=ogIT_|/?j+^ N4vYU}z1CDHR)S&&@$T(;eh-FAFtQw-]lAN[a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vn_';

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
