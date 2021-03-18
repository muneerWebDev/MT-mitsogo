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
define( 'DB_NAME', 'mitsogo-mt' );

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
define( 'AUTH_KEY',         'RO&g9Sst,=M|;(z;ml]E5G6:*tsw8$G[``jY!_OAJ:>VRHTbM`ulSW>YPAUM?G-g' );
define( 'SECURE_AUTH_KEY',  '|^.5uV4vYL{!W,}n~=PL~x ]Jj&Gyp^>E#I~=[`Wo:U9jmGk~Rd%{W<26a#$IWBM' );
define( 'LOGGED_IN_KEY',    'n~6-9};#yS^eNZ6[GzMllt1Y]#Jo[4KMP)dGZw.{jQ1.ZW!!=R`zPQ}g8$6Z?Ud7' );
define( 'NONCE_KEY',        'klQsNLr/Ub1{/nxm41bIguwT>f&,I54}Nd.a8w3xvgYN#vgOK2d8p:2kec0u`#%!' );
define( 'AUTH_SALT',        '7}HoNf+L<V:qf(94yR%nI{gk-u,k>>@-b+RPw c_o$P)a$*syL7yfFOY(NH4Rc{a' );
define( 'SECURE_AUTH_SALT', 'g-6K:.)^@H%3U!+}Yv~we#Sc}Sgm(DM~O)oT!f3zMKt8eH*3@pDQKgk6r23)>WmH' );
define( 'LOGGED_IN_SALT',   '#@VgE&KESt,Uy4gs2,e-Qyc~u<Qj{Al}!KhY</.FYQCO5G2@8H @r )Q.YkL;hlF' );
define( 'NONCE_SALT',       '-x6rV9#`{5j74g,f1Dn4z_l 4m&s0%%2d+#=( ExXU$<$6pUua/?Z&K/ZeqSg)K<' );

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
