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
define( 'DB_NAME', 'wptatto' );

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
define( 'AUTH_KEY',         'Ro~B40! 3D4}Bjdf,yGC7/2r@W>yPpAAt:p30IC-[g{oQE=z6J(JesbbrLr&8mtl' );
define( 'SECURE_AUTH_KEY',  'A,FvOB>:rY0}Hs3Q*SjS`9_YHvlL e*%)Lom6hAk!*u%=aYZ2mszT&,*&*;dV}{y' );
define( 'LOGGED_IN_KEY',    '58^@W[qza=.vP-Z%EhB/|3UR[E_RJTZjNLvi<4`mu|)iZN|s;`Gj+[..R>2{gi_}' );
define( 'NONCE_KEY',        '-Xnuyy1+5.5yB.yq6$_y_]VJEyb+gyy*lHbGWO9W|dQ61^&RYs?*q1G]d8rRG:uG' );
define( 'AUTH_SALT',        '0MsiqH|)DvY~9=KWy{0I{8]^g2q,D6N@32`N0rbo0TG+;iA;Fql{^QRJi!nqi3+@' );
define( 'SECURE_AUTH_SALT', 'Mg+$T)q-w0Y)Cqp=e1}J)l1[O1G{bDu^UBbN|9lC(5RuUfk`%=>6w^OFS!oO,/jo' );
define( 'LOGGED_IN_SALT',   'uc@sfvSDi9aAPP9n/=dSJEdYh|a/G(LYZ:+*K)[lB*#0a-mWuq7k$I`oa+!so^4[' );
define( 'NONCE_SALT',       'S` rE^R[Pt.4%^RaDzOP}g=IvS3uIIzUB9w7fvU>h6wes<-@D2X2:Z1YNh^JbIN)' );

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
