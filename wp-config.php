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
define( 'DB_NAME', 'contoh' );

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
define( 'AUTH_KEY',         'C^{=/0!2f&:S.VTtFv<n7gCR;K] 6Ar-9?LG%}]F2UV0o)I;IJJ}zA_2zh$9yzzb' );
define( 'SECURE_AUTH_KEY',  '$*qlQNHjSC6iTx[1r>`mZTZvczT[Q7^- F63^1ftUvX3*r;[zT{mb6ywU<3[%v?W' );
define( 'LOGGED_IN_KEY',    'TlIit}e#nMpr|VBFUT_97*&[0|GKWzVV6FVSc{[Rj`VQ92DCTW#XPA4{XPvsJMGt' );
define( 'NONCE_KEY',        'DRyc[|sM8xJfjJb Hj+/g:Hz!Qocz(&K`ZQ#6gm~bsdF*4](E(R#G|mM(ZY9+~Xq' );
define( 'AUTH_SALT',        '[9yCN@98dS753db, ia13o@Q0xgO`^e>Rqm.,fZNR3kur|2.MFjBy`]8xQ;M&a|R' );
define( 'SECURE_AUTH_SALT', 'C>J+v</Z3,8Nno]7|m@Gza -X5iPRTm;W/z-1%y{W&4>A (bM~BBljCf|W6BbE(R' );
define( 'LOGGED_IN_SALT',   'sM<m| H4?[I[HmNharg~zPH3js{O;~2$ :bFu7q0x;XTF9:+:gqQRkV,7Za;ud+j' );
define( 'NONCE_SALT',       '94.r>R~9mHj$vH!xW=w%BASrmbS=IhmmjIni7,niMPCW}sZ5_v%fju`XWJL<q_12' );

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
