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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'electronics' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5ch?DUyr5hJW`cx|%A%3wb.f*lBj@:Wi[x<]rafVGRWV.Z:Oy2T%~O?hhw[ygd2I' );
define( 'SECURE_AUTH_KEY',  'XPG]~k,3*yySYHQBa24R9Vc8#kW)voscmHD2PdH{GE8Co 38C@-f79! Q9=h~Pdt' );
define( 'LOGGED_IN_KEY',    ':6v0g2}k63& p*Ad9tT-51ym/be84[ng;<+c`@./i&5iaOM&~u(Eg/5uP^Lw=H-?' );
define( 'NONCE_KEY',        'fg]?}DlM/KNjEkyG`Xvap])0L/4BUA~5eu~gU>>Li:Yr`pCo+w@_NrkRyxb_JV!J' );
define( 'AUTH_SALT',        'I!kvMj*-AwT}!CK<eG$t;(NPtpXw&z.<;2=&K0y~]j%$L?cUBqY:3J5M{Sl$t:>E' );
define( 'SECURE_AUTH_SALT', '~3u<tN{b@m.Zg;YM,e@./$W+]}Yd!~rPnD`JYS5f& vJldZBZ>wKgSWyJML==J=|' );
define( 'LOGGED_IN_SALT',   'rI_:*}p0A@Vut]3EWxs[^xbh~S}UP]N.(;)$u!_N=~Ntzk44ajeHQi^d3`b>2m9y' );
define( 'NONCE_SALT',       'm3v3>l>9inF 7k@(?&02Euw9RP|O-LPe~{iu=rY]d_^.tRq{cZ1U$>O5-@hh-w{a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
