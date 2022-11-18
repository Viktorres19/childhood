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
define( 'DB_NAME', 'childhood' );

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
define( 'AUTH_KEY',         '^2F2>SZ=j9G)0DN!Tb|$J~CswC3n>r3ctUR}:hMliCQ[xK-#rUu<%]0U>wbvV]7U' );
define( 'SECURE_AUTH_KEY',  '@eFzwE@9y>CWfQr!Y-`@*W9f/KLz{CGw+m`A-M15L6gmiCm=_lIre[2A%v634`u6' );
define( 'LOGGED_IN_KEY',    '=Y T0ubwa_(eO(SS$:YLbBk%Pdeq!!:m8Gssu@>w#ei267z]AuQ,u>s%yPczq-cS' );
define( 'NONCE_KEY',        'P7Y:n8d._/J]Vec4(?M&Otqf{N>:pKid(OW;@H27g&Fis-bG/Vg(Le^&r4Mf]+eE' );
define( 'AUTH_SALT',        ' XNeg^4TAQa9iVr<I6k*6xTU)GURhzMbf|E:!5{<na7Cs,zqtBLZ*]O3`}E4zDEv' );
define( 'SECURE_AUTH_SALT', '>xd$f@1hZQlH8A%rmNYZ(,k_BdM9-gMT/V<Bt&MpxwCYl<6yXVw`}y&WozZ7Q3:#' );
define( 'LOGGED_IN_SALT',   'HVXB|o:{v`a>_T;v.nS2Pk3V,7wI(z&gu* <|o0~{/r2i>i!+q=l]y*;*.I<i[T}' );
define( 'NONCE_SALT',       '0m$i$oj]dGLKM7~72D&J.0E~2>DW{?x??2oYB!v+Elh]UHG,vsF}[u%lZvuS}1Nh' );

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
