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
define( 'DB_NAME', 'gimbagsite' );

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
define( 'AUTH_KEY',         '};#U_F}0p}L)mx)j`1T!];4TY4J$NLGgh{ X{E9oo:}CLVJ N1FF{bZr7=Nq*nWl' );
define( 'SECURE_AUTH_KEY',  'pQW<q|(c=F%%ZlZ=PBk _G6D2?Y!2#ph~ORh;|HSq-mAwij,{Fwt,]FVRzneKios' );
define( 'LOGGED_IN_KEY',    'dDI+aevVQI([:FmUh(J5X:g6FiCa.jK~S-pnTlh!CCG9.w6<}Ja>N_pA:**S`!D`' );
define( 'NONCE_KEY',        'Y5*s2S;84.F@w$.=iP>2>4;+4Bm1A`a%L,2P/(yoE/nAnZ^_~qOn~3@1vy|B-X$^' );
define( 'AUTH_SALT',        'm410GZ])z/,}xsaR|IzSQi~btq1L;*VaxZGAw@L:3rnOvv2JRh ].P,8`}GuZ#Uc' );
define( 'SECURE_AUTH_SALT', 'Qz=IFB1%3m5u/=<&l;9<Q,01RgG`ra5N~k7hEzT@sU)WnrkuGm:sEF)-qdpo8s&V' );
define( 'LOGGED_IN_SALT',   'cYC|SjD>6f+Ha[dwrfPl3Z0 7J*[mOi.xo?zI#<7k>w`6}uFP7gw4%s<lDo&>cx@' );
define( 'NONCE_SALT',       'j=ZkSw.tq^CBY>67aV[YDj%!By~yPU7IgI+H|odZ*@UbjgD+)wnp6W]QU!!w0#)D' );
define( 'FS_METHOD', 'direct' );

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

