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
define( 'DB_NAME', 'wp00' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'dev01' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         '7Q^4$CZ0L-;hSPFUOur)TV$]+:3eSF=*B;^*!;JwbT>t rP~u(B1e<Y27]B8406z' );
define( 'SECURE_AUTH_KEY',  '%*&CGs>s5Ht^}gFg~~Q;}>Cz}Fz^#*XiPWE;M`d/[0flogzm+07BEgt;AGx^Q41 ' );
define( 'LOGGED_IN_KEY',    '}91&6=ob{LTG-fR1_s+Ty%di(SNjZ-d|mFBA^5y|X%kXT*=?OZ$S*3IW *ZD%zC2' );
define( 'NONCE_KEY',        '( <ont67<OKwa#X41XY^,PZB3qln`#?Kq:(=:12$iui-/u5p!LvKY95[;Kyb8fef' );
define( 'AUTH_SALT',        'X^JwrbHu&JwKe*u@~DXAU<vif`1,2#!]BTy[C^Z=<?;T!JBH`A~4sM:O_5+,HN z' );
define( 'SECURE_AUTH_SALT', 'oMA(pZ6I.|0QM@aCkL0^k4!Xn#>&BZ*y.kN%:31,sEv#D:PyVVWVcW@?6Vlm3ind' );
define( 'LOGGED_IN_SALT',   'bD9<M6v[:Ap3+jsz(|EC/ki[jI/uX %1[6-ZG? Cz|MK%4Ecz-4G4*^2x6<q%PfR' );
define( 'NONCE_SALT',       ';V1C9;6UO42)430D>JBI5l;ScY.g^L+oud,-CUQ-TJ-[`P%+e5}V`07T|/<lH^#r' );

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
