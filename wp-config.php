<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flutter_app' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LOPzK8^(rY}[l#n_:Eq8)`<zjGDL2A2;s;A(rTm4]Wez7.YUb]K}4UWmJ&krQcoW' );
define( 'SECURE_AUTH_KEY',  '$LzIdkwU0{}6(`()^`n`GPtB..0`8Y{)XjMjq=6c$|P,gxh$EnuxZ[+e}a:F]Io`' );
define( 'LOGGED_IN_KEY',    '&YE)ZTnVe@lll:Ubp[8]7AXo1 <bd!S olgiU&YC=D ,)!SchXB7wgno&@r>sGD6' );
define( 'NONCE_KEY',        'Ti(8V-}~!zqs/_t!hp;.zX`Q+[LYI[Gzgj>LePI&X=mB?6Kw:ED:~*7|8uK[Ps13' );
define( 'AUTH_SALT',        '%zcTar%W4H@BC3NLkCVru))O3&m-PW*}POwAd5P*ajE5[p&Wu=Jxval*0tfi-aDc' );
define( 'SECURE_AUTH_SALT', 'JUx<wrh sP05q5KpMO |>}Qg/Kb9^Mwh7S+,cto;<J(N/i(uA~[aHqK8^|(c)E/f' );
define( 'LOGGED_IN_SALT',   '!Kvlici2pw}A44E7N{)rn(LaL19-6u.@ey?Y%h0k?k_}klVwvLn-lc^o)JqLy++:' );
define( 'NONCE_SALT',       '~:{B6J1DZ[Qm[dzP7(FkdE9tR-Q*|:0rQgx$ #xUE/ijEdDDxoJYW;)mg^d^WQ|9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
