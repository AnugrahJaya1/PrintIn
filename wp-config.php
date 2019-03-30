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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PrintIn' );

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
define( 'AUTH_KEY',         'L1jx3g|O:QGlM%6m1yo]||X3>E]}J=Rzwv.N 6u<l?}o|CrAiup@?W:h1/$U]Rzf' );
define( 'SECURE_AUTH_KEY',  'rq9|TX,U+!AN{p.(APiF+DrE@j};l&ei>;V~h^uaJJ6BZZf<{pn*,pF:5:o7-oTw' );
define( 'LOGGED_IN_KEY',    '!_h1e+h-e,!ZTLV;*C^To<qVDY0oQoi4FeP@ZP8!w(d~PJX5B qsj|wpcoqaJmjg' );
define( 'NONCE_KEY',        '}L#;hHu}pijVev_&G<7KX|AEXLxflB64I!(8n_|rupuG2n.Q1L]RMYZ5+Dxdqnfk' );
define( 'AUTH_SALT',        ';ajEsL,79NIb,9JeE(!jNQ;<Q+7Da8:766#Iq)@4S XqMkVC&(Nxj~f&^wj{>`!}' );
define( 'SECURE_AUTH_SALT', 'Cul!zVw&A):Qf2g&l%mBm6El2.M2cJqj^1QZ:[_<G!YS?M0)]6X`kjmHu7J`J5ST' );
define( 'LOGGED_IN_SALT',   'ZU+l^jU]V(c<(1e_J7Biq{DdGi@M#G%uksY%jU60B(rcW=h|=|rzkd+ojlH0p,Vy' );
define( 'NONCE_SALT',       '.[}kTS-Ju9dy**}BjLCt0<*b~/{eLAj511!3ppnmC~&(c-2(Mb1:K2 nX?z A6:,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
