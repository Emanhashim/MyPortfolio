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
define( 'DB_NAME', 'myport' );

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
define( 'AUTH_KEY',         'R#53SZxa3vnu&QH2:Y<[^a_ViRq>V2Pov>h{p ~-pKXsvS5YR!VnC`trY-eVa*&v' );
define( 'SECURE_AUTH_KEY',  'vG!{+b?(5]e_}Z(CA|&rc&diXe%6,_=Di!,-?WcTXq:011lxD^_`7wzrqQ3L=,A;' );
define( 'LOGGED_IN_KEY',    'HmkIEF&#{#~a$$~ap?^;R[63gC;Cw#GgA3cW !pPEKm.mW-Rn_rMD8eg*e[A%=7/' );
define( 'NONCE_KEY',        'z;;[7S5K^XATcELhsGJ?5Ae90N%)FrqZ&?w`_h^Lrn986lg3y9<t+ZQ (R6g3.0M' );
define( 'AUTH_SALT',        'b,PQwP-@U%a5+H#!(&m-cY3OlnV{@_$Ixyw]dC3QhsFOFY~S&R`7[bQ5eGv(n*+7' );
define( 'SECURE_AUTH_SALT', 'VhqEId;Z?eDT:gFP5Kn(,i<:hyO$h!_Sp{  wzqm^tvl-qMwZn(Mbv+De3qzA~jc' );
define( 'LOGGED_IN_SALT',   '`xu#Y55Q}:xCdKN1k56#H`xGxo~X^8#uc1RKZ8_^&H?$vnp<A>N>Hg^w/dH]o?_ ' );
define( 'NONCE_SALT',       '.0|SPm{E15S0:r+9v$c`i)1:@vGd;LpQa7dR*^1d@7G7h.P@tS[Ru6P6o?S%}#-R' );

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
