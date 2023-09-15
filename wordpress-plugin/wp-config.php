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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin-creation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#+*dAGgV:,zA|<xf0^.Nc7c8N%0>o$/ZNI;}4r.-;0Si7S|qZ3.eqK@}$Akyku$l' );
define( 'SECURE_AUTH_KEY',  'f[Y@svmz(?xJt~w$Kkb=Yz=(2eL?U%9|+LTZpLa<-DhZI&3Qm!`}l6Xo 11cFOrb' );
define( 'LOGGED_IN_KEY',    'ySuPH!d2!XXq+ET.oQTil1cSTq`dsS?m8-J|q ;`z4!y?VH=(G*yB4=0u?</E1s@' );
define( 'NONCE_KEY',        ']z$7J&;(S}0)]~@5p,)EGsX#_1gSf-JkXyuav[M]{co]Z?1(%]&tZHTZOV$9K6@s' );
define( 'AUTH_SALT',        'SkI}@q$-pGyI4th;BjR5L9(oDH@M|1V9L.ah6K$X3xcowUG}f^yc |Ly:yt<[!hi' );
define( 'SECURE_AUTH_SALT', '%.Fg%92|od<8shgGI.>]eH@_Q^ qnI f(^j&+Z0qMz*!GJrTZP7Ds2`hA+h]~}P%' );
define( 'LOGGED_IN_SALT',   '(q0,bu=I^7o2ZwclGO35TV~*LtNcP^Wgd/8=v */yK`-!Y7Z8?rzp_VXcfLvu-[0' );
define( 'NONCE_SALT',       'FZpXiO!l-SvY%~{&I+wg7x1ATk3WhGa~ifUtlS/Fw6ohc`_K,/mO/]30yl[YiV^y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
