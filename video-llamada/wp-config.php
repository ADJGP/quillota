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
define( 'DB_NAME', 'tarjhgww_quillota' );

/** MySQL database username */
define( 'DB_USER', 'tarjhgww_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'metasoft123.' );

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
define( 'AUTH_KEY',         'VXUM$-h7jd.V{(!uvD1*ucURaBXL <Er<b8Eg|dO3PZ>IfpEd^hI3FTk(WYY2qQw' );
define( 'SECURE_AUTH_KEY',  '<|G{noRSyeb;%:UFsGv=v(ZmUH<C]yV(+$VX=}s#x:juKCGPHA]k80x.2PMLO8Fa' );
define( 'LOGGED_IN_KEY',    'q|s=iVq[b::ra/L2:$RQAH8FJ_7Aea]SnPY`GsI$KMFR=1u=UHG+iV:58Ns.AC!X' );
define( 'NONCE_KEY',        'K3z?$sasPBSr`bn4zh(2Mb8O]0!zQ%K^8);qAU@9HEm4BGRqcn}+M<E(cS4WNphp' );
define( 'AUTH_SALT',        '[([a,Wz4%LCSt6(p|e(cE2 dBj8J2/0*i:K(TWeBNE3Ou`c;K=l?JY[V2Up[fcO.' );
define( 'SECURE_AUTH_SALT', 'k>$e8?}yK.H$i%L)f9~-`GUA<{VSB)|NH,I`^lM)*Q[Kl$d<q><3r8yI4n>tL-#]' );
define( 'LOGGED_IN_SALT',   'OKdQqg-[Rc;B(dPn.E!7fjE3dufECjpftRX;evL`j:qZ,Dn;FBPtw/uu>@+J/hqa' );
define( 'NONCE_SALT',       'mm9k#qg%;Yw&9B_(Lh=!7Mg]l$)y6M(e{WZz02ddp#Cjq]6gL?XX8Hh+;e8ahP9|' );

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
