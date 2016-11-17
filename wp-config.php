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
define('DB_NAME', 'wp_bj');

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
define('AUTH_KEY',         'O$hj8c%H{,`^fA;#}`^P@4E~surd!Z}H<6|&P<rMM}RNgm|2F3nxe]_2#(L(= CK');
define('SECURE_AUTH_KEY',  'qhPIq)F}#6V9f&eA+Nl)< r{;CbVv[|$6Ml%TMpTXRVd({_zJUS$=h;l9IzzMLoG');
define('LOGGED_IN_KEY',    'g]Wi(Sl[NLcuOY.SZPwnMxlS-APmF777J%K;Z@OR;Y>&jo.oz.C0nJ))vGus[N&l');
define('NONCE_KEY',        '[=GtLI!zQ5ZH]&[dZ_wh_vuPCBaAjPG3niHn_Ia;: YjT%i!&}uKD+3Fqv5/cNHI');
define('AUTH_SALT',        'Yjd{pUzv#Uv+D3cjiQEwa:rO1[]@]7|PGmZ3>/N(?;*]WOI?{X!5`/93HZLF[0nF');
define('SECURE_AUTH_SALT', '.)TWUh~wa5h4SzGER9cQ,=7e%|/*4=QZ~#/}ziY6,R(m_ju*o3`j wMYKe}5~_#x');
define('LOGGED_IN_SALT',   '+9wG[l~b<c6CLq2NAZUlM4dL(H|uq$?1`(hIcwjf~T|q>VEVu]r`6|M%qTWjh[XN');
define('NONCE_SALT',       '|PVw8j[*>b2kTB.tzX]JUyafQ.E<2mTYSFWb6^Fep|_}AW$jRqky7a%SpzqaVL;y');

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
