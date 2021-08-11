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
define( 'DB_NAME', 'andholde_emdr' );

/** MySQL database username */
define( 'DB_USER', 'andholde_emdr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gfqK@=NNi&_c' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
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
define( 'AUTH_KEY',         '@&FZp~:06VPZ{4O0O.VITs0mCtBD, tX{lSt4}#$PoeqSro{Bm/gK(@;IQk*3`3>' );
define( 'SECURE_AUTH_KEY',  'y`uSKanc``{O&y_|)ea@3i;#S>J)5,/]-K>LWd.AbiQzkN?wWa!?z0+3kD|6wPU0' );
define( 'LOGGED_IN_KEY',    'KNLeudQrS-VU_dKHC/=`RP|ivx9?@P5:*E;<V)h|c_}Tdg+_m35o*z+Z TF@A,vL' );
define( 'NONCE_KEY',        ']dB)6lQw*aj%C51r@-G/oFf8MR9d?/qWcH+1jsa%D6^*$#CcNGBVZ~]IYa/3,)h)' );
define( 'AUTH_SALT',        'n(Thea005$bK;DGFni0Wpp&+al(cRJPH+xTcm8w$8b9I{c_U4LM0o~gr#zdI6]H)' );
define( 'SECURE_AUTH_SALT', 'l|Eq)BVACVuo?1iBG5te lS#):[@+XC]]:fd0)Z<72JXZPc/a;HQtj:.NX@b6+!0' );
define( 'LOGGED_IN_SALT',   '+xHf*ZIRZW 4MD:K?+NlLn.$qy%H!^dYZ7do{l|]cw4r$i5 P{Zx*}!?u|(o1]xH' );
define( 'NONCE_SALT',       'E2n.R=1P|K|-Kw{bX]!VZQ[XCg0?>TV<!>5>Uc]CfB)fllB}7Yh+.xy$}!Gs37uP' );

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
