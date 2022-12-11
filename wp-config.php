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
define( 'DB_NAME', 'office' );

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
define( 'AUTH_KEY',         'S|Zb^oGts~]+k8u$gs8a]2/S6(SvlDT%BWF}Ape+ir70+$63?WL2CthK3Q]C<+H!' );
define( 'SECURE_AUTH_KEY',  'Y2?&9OLcTEH-z@Kv>}.:Ze|Dlf^6=C6(/?D)OCVwz</ Xf8u7B!D?+FMASWj)O,?' );
define( 'LOGGED_IN_KEY',    'qJ cLiT1<M9#kjhfU6-Y3V.9I%wNB!(%ZGect/H:I$0qe:<@]#b,y?uTDY&OmHp|' );
define( 'NONCE_KEY',        '@5$,ECHiquo<5HQ|.Daa[7Pw!:ZVnBG&ukx,QegX%8q<4]PaK]^o5RRf*cn?6x9~' );
define( 'AUTH_SALT',        'o8ShYb4.A$4vi|J-]`E  w|-I~tHIS9=Iz86OT{*nvw;+D3{*N7aaL(>)N`MY0PK' );
define( 'SECURE_AUTH_SALT', 'D0T#O{f>l1$gCv&:kXyY_$RC]pp7<C97G=lgF?QR=Mu73_=At3(n[ITK^H4/vah|' );
define( 'LOGGED_IN_SALT',   'j6vPMl0_L-ILNTZ#*Q*RO7XcIGAZ.kYXm51LgV xs6+W:P-G6Fn&!hg*+0/}HZ%-' );
define( 'NONCE_SALT',       'Ea)(Gld?rW9)D KZ`.>3yp<Md{jz^|UuXFMAvkVdFAWU6Iv&@1V[(ZJP9yC|HC&=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


