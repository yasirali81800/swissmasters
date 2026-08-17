<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'swissmaster' );

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
define( 'AUTH_KEY',         'O@U<CSGw^QhHcsB>+F7wyU46IoX[wOYSE|0ow,eu3;v;bl^EgzPX8MmD(hLZ*xLo' );
define( 'SECURE_AUTH_KEY',  'Xv)FGxLsukR9mASUp>2I,B:]XfEm)oe6`w4:>GPAOHv>8!dGx_/2,2hU63/h[().' );
define( 'LOGGED_IN_KEY',    'h}P[qz]^@Y}fDj+S!/F(-M*:7YM+F9$e]@/MoiAAVy]W;$t*GQQvyW;aG$Cbp;4t' );
define( 'NONCE_KEY',        ']fFF*cI0s(-z*]t]_QK]1bk*MnpeUDjbU+M1o<CR2Gh@]h+>otC,({xmVXj0YtQo' );
define( 'AUTH_SALT',        '`Kad4 Qhy`_A62Fn,4Nqw4kJj2<F%`6Ovd}<=?e#?8*`.12IlN}0Kn/psS!WGBV ' );
define( 'SECURE_AUTH_SALT', 'MK!g`4kTTe!7T[V^Z.RJ[eKkeXy~<Qj1(M;h.Kv*3/o@;s,M(_(_:e0Sa)<67LO ' );
define( 'LOGGED_IN_SALT',   '_6t!$e)-IwRv}x5/&EgANCo*HmHYN3!jOvVx?g,=F&Cn&hn-5{{ufJ=B4eUGn@Y;' );
define( 'NONCE_SALT',       '5DX7MVLVm-:)J`M8PYm<X25 ap(-eayZQG#y8em;7G*!Lgs;^1zoc2N+u9~=v}`T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
