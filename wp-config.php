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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u758567317_utady' );

/** MySQL database username */
define( 'DB_USER', 'u758567317_ybewu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'edenaTaLyT' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '7w61{A/hk,%?mkGqghd7 ~.k bv/&fiV8d_9B/P&ddZ`0AD54P=r]fbdA#5[mo9(' );
define( 'SECURE_AUTH_KEY',   'aI^Zxbb+pt3]%ur6N|M6N<}gpi-kX/QN0SJ #D@JzJm|3k7XI2g+b{G7Bl$!1;Up' );
define( 'LOGGED_IN_KEY',     '/FR9$JgG8sVMI,woy*l2x{_h,D7;y94CPm4IS-2#E$:W/rKX4T%8g&wiU1/9SK?]' );
define( 'NONCE_KEY',         '.3O8:L# eu4p.U7Vu};Uq.r;tlmtK><sG5;vOr XWjk3l@TR>BcE>P}pvnF>+.mD' );
define( 'AUTH_SALT',         'Uvx-&08Nted4)QVr^4rYkn>u`6w_PmB?7=V#p/ 8J?~c=r-nEOr-DCQ2ohKlB93!' );
define( 'SECURE_AUTH_SALT',  'GsO2u%1/VNd,cD~!YHozSwHLUS2(Ma4+VOd,MRBV/c7tnd7I.c^u}6gCRuf=cLd}' );
define( 'LOGGED_IN_SALT',    'T*-do0gJp/4sc>zXQN3jcmU{w7xIDV14WT~T:V:p_(Q!$l?Qj$FbQEht~U1@G!+N' );
define( 'NONCE_SALT',        '286nXdlrcc5E+bQ5D/`p**U~CjdKybA^Ft*B@hSKCqQ`i;3*s)A3z5X2Ws6@.#W}' );
define( 'WP_CACHE_KEY_SALT', '$ZV?;4|BmiPlaDwv%G%b9;6[hy,>1eZ@^9btGn(+7kkh/%DzRJTpEhyIJvEy/MN/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
