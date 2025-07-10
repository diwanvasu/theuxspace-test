<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u744719264_N7TGf' );

/** Database username */
define( 'DB_USER', 'u744719264_mI7Bw' );

/** Database password */
define( 'DB_PASSWORD', 'CzZtyBwQ1g' );

/** Database hostname */
define( 'DB_HOST', '172.31.41.163' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'xf<u,>=4hP~05,@Bh=>$qNd[!;^sRV<:;zCW]8HNrt$rB^SdLR4[fJhg2*8rfIJf' );
define( 'SECURE_AUTH_KEY',   'A7F.4MmZaUn=o}s#zwA5.u 2Ot#7R)d3RzY-Rj@YJ-NLtX(Sr.#mWp0FR)Ekb3WR' );
define( 'LOGGED_IN_KEY',     'd72k;1T1mO;2XfIcPRdg$p;dmbk&;E_[gouez=+L>Dl<-I&oBtU9[~H(:tL2Ia)`' );
define( 'NONCE_KEY',         'V+i}V 8g+/4d?p.xwAW=9bAC+t)l>K9+Cy_C2ng-~K!mla;T;ZWB/^H9:GX!/3]I' );
define( 'AUTH_SALT',         'jF}FZ4?Ufn.*K!f_AbV|>t@#30&Jy3Lhxuv$~ GTvGSn0Nwmw{sm6|4 zCh[;?v8' );
define( 'SECURE_AUTH_SALT',  'U~o^`?A+v%Vt| Mc!~X,LZTD#+*i>/5eEh-7lmR$3f6ptT$CqlxafZNx *iJUDkZ' );
define( 'LOGGED_IN_SALT',    ']-V&m$u_ab:4++:c/$q4@ek&8c[:p}:(|x5HqNiBm~J4a(}xzKTOUtYM` r<2y^n' );
define( 'NONCE_SALT',        'x;KPaW`a7TEw@eu!.{.6PBh04?bOQj:J2er)6@PTo<2d^|{$AIFudY{F:&cUuPVs' );
define( 'WP_CACHE_KEY_SALT', '|%#xYWnplqbezP=32AU-42: (PhB.?Q`h-hUn/Z@fwt{gk#`ZhOV6TTuoO01& (>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '7737c689b5fed68beb32569fba34be24' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
