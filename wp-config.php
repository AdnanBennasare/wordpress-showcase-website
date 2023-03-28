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
define( 'DB_NAME', 'dbword' );

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
define( 'AUTH_KEY',         'm&8Fc&C{>&kO4zBzMGLD%fYgWvyPR.jL0bjPqAhXD;?4*$ZnO0LvY!C{8Nc?S j=' );
define( 'SECURE_AUTH_KEY',  'kuu@GV/vk>5d=4Q;:qpCM%Y^PtS&Ixk)ZEZe3 J(ecHg$?Mwg(3/`-iZ0AZOg}2m' );
define( 'LOGGED_IN_KEY',    ' }v0S.[$MQG0/5D~F7ce44K.Ux1*mL-.rH_^_9D1)xifskl-m9*}A{_sY%^hu}%U' );
define( 'NONCE_KEY',        '{UuvL<q]VI#s/EwSgNuN89SPMaJL(0SMpo@|i.DwphYX>09>rR~nW<Z|u)Hxqw ,' );
define( 'AUTH_SALT',        'SrQkZ0To0$oFD42sMDYxofk+hs`wJ;~J{,-RZ/R#0*,c]Z_kmw_s[3f?ARtVcPCy' );
define( 'SECURE_AUTH_SALT', '/k!W]<jYjiVT PM)*^V`EXAp`ze2i5)x,IK(d}/q%![vf/K e.*Z4.Msfm;{qk6|' );
define( 'LOGGED_IN_SALT',   '1p)d4+QbzbcHN] m1(UQ 53uY_!7Ze{S<eF{o[e}1$4e-:S^IAj9SV^RMoDYA@lt' );
define( 'NONCE_SALT',       'LyCDmayi#T!,HF0.`MXtZh>^sEN4g|}G-ReR,sic:)$S<Rk?.b;lMbJ<PMF`qejv' );

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
