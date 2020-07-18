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
define( 'DB_NAME', 'thaajwer' );

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
define( 'AUTH_KEY',         '0r-DT;p$/zD.##(<=.7- $0AkMfK*<5R.$hGsA]MMoNiHDBP>g%3eX6H7@#L~w,/' );
define( 'SECURE_AUTH_KEY',  'Kaz;&Ajx^6#,%R`iI_P 6I;@V-N60Ti[fD,vi=s-Lm>`/!6p:U/sab!,}NEsL,*I' );
define( 'LOGGED_IN_KEY',    ' S+w9$HnRy%U``)gkK0T&=f59HJxW7un%ZZ213NBROV5qj-&t&8~0-xcL9yvtY*B' );
define( 'NONCE_KEY',        'Tk}*Jx&lz>J.9EaIP-ez?;s@nroS){0dy.L=Ogp8iID$/#(v ~w/Ow6P/wKG/h>L' );
define( 'AUTH_SALT',        '[Vf=SZxEfOp?Zo_U3|YAP6(2mc1pb}?U5tu{.L*KLoCzYO_1_`Y3(Vy_*A&3[cg3' );
define( 'SECURE_AUTH_SALT', '/,U`i|$M/l^rs~uY^(aPay+>5@5*FR:)rN,lz4@7Z%xa-?(]zof <%s{wY^4(0uZ' );
define( 'LOGGED_IN_SALT',   'WBg4b=;u/5Dxw2s8$I{`ipPh*w]Maxtj]r:m[*z2,}*tTXo >?BQJ0<ITd1LvcVp' );
define( 'NONCE_SALT',       'buQjs4?`FA,},JL[k%Oq!nDz8$>gC$?l5eINmP$n;TdE_qUY#4/c$9%,zy3]zG8O' );

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
