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
define( 'DB_NAME', 'premise' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VqnLn][TNW8}$)0R2nQ,XYAM8cjP rK!mJNutIyI5s>mG`z[(K7l!Z>2B5(`Io+s' );
define( 'SECURE_AUTH_KEY',  '?zBUWuEm6wt_os%c:dh^(mYH}3J,fN6?epo_$&U{;*ukICe%wcc9nKaZ{& iY>DX' );
define( 'LOGGED_IN_KEY',    'duEKdm_SP2!8fT4cgXgRkNx:2@s}kp?V=2}_q;C6qT8Nftg_c#Df|2<o:g1 lU`v' );
define( 'NONCE_KEY',        'ad)Kgc4TdB6Xk8:5$&2b_k{)O)8;>9i<IOViZJux+:[;,JNb2O-svo-<$;_P,3Bk' );
define( 'AUTH_SALT',        '4vm6 6Y6_adj[7xOdx*G&z[3njO|mfQ]mDWPx7Se+1M> )[!KVU5F$IUsjKM;q+j' );
define( 'SECURE_AUTH_SALT', 'hj_~9ZCr_%]F>QA%~Gr53A(+l`q=40dD*FMgOZ1G@7k!8xF5Vq1T|3F%_/<nVhTt' );
define( 'LOGGED_IN_SALT',   '`:!`;p|1lU$as_r*Uh]}44*b>JQS=3c2%yy?PcNsV@^NbL]+GYRkEM`]./`^iP`Z' );
define( 'NONCE_SALT',       'nZYq5fd91A1mR2W%Z@WwgGLWK.=cCa7_9)h <E?hWV{P&iXH5<Xry`K.A@![v9(M' );

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
