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
define( 'DB_NAME', 'srv173389_starcoder' );

/** MySQL database username */
define( 'DB_USER', 'srv173389_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P3EbfX4c69' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-173389.srv.hoster.ru' );

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
define( 'AUTH_KEY',         'uF?.F$os5?b;;cFs%bGfl>,L7VVTO K}AfyVDovo} v;geLosp$<31BXaW#,d,kr' );
define( 'SECURE_AUTH_KEY',  '>IO/MpKgPl%ZEei7Y9C8^q|`Oa2;H,&wdTy,np/#I^Z]}glvKw F~ymvwZ{Hk6g%' );
define( 'LOGGED_IN_KEY',    'bIJ+dbT[3[WxPexnY9W2n$4S1jF-[IHfO*m_hqCAcj^@nuH(A298_(L7Ps1TsL,z' );
define( 'NONCE_KEY',        '!,mf:&G?*P9mhY+H+CRkHW=!9y4;O.5@Ir_`OS0Jgdba1wa^q(lQHHpFq./,W}u(' );
define( 'AUTH_SALT',        'T=rPNFjNuGWrg8DK@Q``5A;q2^[OKw!pGp3o9)#I|;w;0_e)>fx11Ra^aR]XsDSs' );
define( 'SECURE_AUTH_SALT', '=<%wU02v84&2Blv@FE7HO7ykh[K0.?xOo,CbRR=3bT5E$0@GW-C<VWE6{kEFSYa6' );
define( 'LOGGED_IN_SALT',   '|i~ maN23A._ByxVv#Nim`w)#Mg>&!-L4~9-bf+[@r7m;({:H;qwSU!}wbq355SH' );
define( 'NONCE_SALT',       '2ZrSy),=_Pk.,p(Y /GPoVHFaj&(V?Xj/Y7p1I]`LYuPMw^0)]ZX%p[PzyJ<Z.^.' );

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
