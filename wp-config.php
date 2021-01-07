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
define( 'DB_NAME', 'finland' );

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
define( 'AUTH_KEY',         'ZyofxX$zVQ:v%| 1)#;pCe&#,jREn[FuekWIq~=:8j~H3;rOVIim9k}0t/kZtzFs' );
define( 'SECURE_AUTH_KEY',  'I(C(/l@R>-^B`_eV[#TiB,*i_6;dauoP(YRv0aol[~vt_;>P0^_!g3;9=2@Y(m]u' );
define( 'LOGGED_IN_KEY',    'U1(n,^9l/rH Q#~L>9lh;Q;aIF}yaS/BF|tF,d>3_,CL3^=}0P3#`EYIl~!A]lAa' );
define( 'NONCE_KEY',        'Vt]Ob_PLcFPDMs-B rE/Gb[W2lvS7TiJjb%v>a<GEq(^~CaOs)/T}q>58Zaw^nmC' );
define( 'AUTH_SALT',        ':@mTe7HS={Q!QD_<94,Q}7D.oKZ9!Ds?hy,-1rr>F2kX.8S7&B^Nm8UkkSvW[xpG' );
define( 'SECURE_AUTH_SALT', 'ft+^Jb:LF|x$0)o[IRdgLyL 1VEEG+edQjatD_QO~in1=&lZiL4)Y[L50Ww$0Igl' );
define( 'LOGGED_IN_SALT',   '*>`0-[=g[aA0RsxaE}}y>P@o 7tFCbl`fA;2%#K?3.t<]g1!GP??7Y&6PK4vq=.!' );
define( 'NONCE_SALT',       'dNT j09Aw*U;fG5,j4{EFt4;aoRUK2?&d AJ2$!J~f{2h6bHT])K:w0hvof0CDX<' );

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
