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


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpdbpassword' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'K&CA]<4s]tBv,{3o}#RRJ_F.=DT|Ew?Suq$Ij4&gmenyD_V Ph;>8B9+-@,j{6K+');
define('SECURE_AUTH_KEY',  'L l6T.*+;}cSEJ@#GWF+{ L S_piBa.5!+mo|C7c4wAv1!M4!lyWCFf_)GssCGcQ');
define('LOGGED_IN_KEY',    'Z5P!/Nw(0-m-SI1u!<Arpo*=sH6|+jzKI(U-;h15Zg3z T|9|)MOf9s#7M`e]-(E');
define('NONCE_KEY',        'tI_f6fw,8C_Rpz.u?4f>Kq+=1jFpqD+-BITZ}~X4x +uiYx5nZG(h-rWCNekQ?b+');
define('AUTH_SALT',        '-K76:|j@z=#GW3at=<rtDsf;T!`2IpJ1RadR6wu&Ca+$)T~.HFyXC+.BbpMF=2JJ');
define('SECURE_AUTH_SALT', '.tq7G!?%PMw{.dQ2FX,zz1eO-IjKw BD}k:!~Y(FU^c~->-JGykBZ3U[Jd.KZKxy');
define('LOGGED_IN_SALT',   'EFXCroRupSm0C@(FKv{|V0xx6u:s{owxuB`A1wOv}*Hs+iI-0.ikXdRfl6[<ihBC');
define('NONCE_SALT',       'yw5FY$W)3^+ ?yf+Qw37tUP`O,){b~oY9p6 ;HFo;On|d)=ztz)~qP+0j|pGFW= ');
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
define('FS_METHOD', 'direct');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

