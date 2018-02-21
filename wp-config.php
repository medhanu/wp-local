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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'Ohj0-!}:ss?wszy$B}nGz[$;m7dZ:%@+VdL]6AnD6?v|BVV}RO|<R{U+{M!h|q<|');
define('SECURE_AUTH_KEY',  'o#A]OchjG2:rUj.]+ ^.6zRxtRZ_@+vH^_*O=9|_-G#vN__rLEze<36KU{p~-!am');
define('LOGGED_IN_KEY',    'ZkK3-a7?~-+{|u+[.`mc>S!.uNbu30//jT$>p^{A)E+sfFW-t| +L)rF.Ez]P?Ua');
define('NONCE_KEY',        '$wC^s9</ hgh=tWO&FZ{*n <)/&vhA:`9WuVQ-q+G1-WO-I{wf#i#nfk;55K}iTa');
define('AUTH_SALT',        'aY`cK-.#24{r,=?Dj{W_S!>w2,qLYo>R%#(P,!iV+|!Ca&{A>#iIU>ko(O7{cJ,~');
define('SECURE_AUTH_SALT', 'zLW`TqHS)4giEI$_3+UWC -%F@RyzQNn@#Z-y?V-^4D{7|N+UUK>9U@V$jwD9mh,');
define('LOGGED_IN_SALT',   'QA.`NNdrPf6=]2xx*i$,LQ/Wm)|{IBHIjb2gBe2cOSuS(4Vy,rTqKcI. cJ10}@>');
define('NONCE_SALT',       'qlWRn>-i~ `ema`XpP;-zc:b,OtPQZ}/pBx?T/ub=-Re]TgT,)$H m+zDn(/k-nb');

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
