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
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'HUIPILLI');

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
define('AUTH_KEY',         'X@xn7pr||POHVMDXM&+OB/z%VT&:> o->1fBv##3q),fnAuqFaG~&I7mSf+6/1/H');
define('SECURE_AUTH_KEY',  'D#D+A*Nel-1^g_]B(r!2G4@J2UW.(CA*=d<B>Sa3mQ7Bdo]A=,)947ww5fMgvl1+');
define('LOGGED_IN_KEY',    '.[5E|>Bt6PR8rP-E`$v3Ydg:E;3p)4lQRqW,lQYhf.oN,hh_%}]GeH3hE7|=MxFR');
define('NONCE_KEY',        'RJw.xE),~K2$.+niOCO]E.l/#{.g02Hf<X/:M,{YOi[$wR!>[+!;3d !C~61CX8~');
define('AUTH_SALT',        '5/V[6y!mjAe1o=q_oNOZW?:[LwL+:i}x{]srSpZ%?}B5?F>HRZc*rJl}uJ^g;4/[');
define('SECURE_AUTH_SALT', 'SD[RGX(K?nL{g9VOd>TGUTg|`r]~[HSe+?G=/iQMdM%Q/!<0Dr7SC{O$7>=h:mMr');
define('LOGGED_IN_SALT',   'a4=,|e>zX}q86ld|1@N%vOfXKP1~n[GgPg-ErYFdQ]HA(EGz9dHKac4I@tGSv|yF');
define('NONCE_SALT',       '=D0Wx[|/fOD!9:fjL]}hBle=U`KVQ*v3scf<7q2q!_E^Ig?!02}]Yp_CVns%K?<~');

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
