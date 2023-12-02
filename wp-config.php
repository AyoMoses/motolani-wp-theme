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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'tShoY-wIV5+`+-C-df)4-4f+^ZrvgN k&- BIbV&q]9vxe$sC5,)0IU4G9{:9[YF' );
define( 'SECURE_AUTH_KEY',   'xw!{?C<o2zxsqE}G1C0i=R=6UB5/Sz.s7CB41mK~:Mn<%=,1k5AmJHqdKCny=T=I' );
define( 'LOGGED_IN_KEY',     'mta@q%.A6bu)m`/uedz*lV.<99c_)GTsc$Q*)bz!w6M{?i<?h3,yCtQi-H=B_ EG' );
define( 'NONCE_KEY',         'YE8/$KNjB!-K8q6gCivQi:^MYO$V#,P.d!OqAG(fgXZ+d`gwBM+=P#F?jXD#fZHx' );
define( 'AUTH_SALT',         'b/~ N>Ku%=h}#&!?p*PQ&z?La[2(lAK{72apduxg<2cP<m:+!nG=xdWwJu,]f*MJ' );
define( 'SECURE_AUTH_SALT',  'unqaP&HIw2>mP6Fdkw=p4Bl!g@S`0{,y;;kJs#@dofCY2#e<tN[{i0JR|+%nq~rs' );
define( 'LOGGED_IN_SALT',    '6+UsRSZ}EKC3(/e,VnjsoLF(lgU.[<tn!+@@9z-NUgkykX}|wX<40DhcO//F*Fx;' );
define( 'NONCE_SALT',        '9!xb0y^>r8l tN>p690cKD/^}|:/0Y<PPV;5B l*RhBs*WG*fXNwT#,(le5yQi~<' );
define( 'WP_CACHE_KEY_SALT', ' yM!I df(g7nW/tEN@qn1}uufiT`yDX)Uj!Hns1>GGMpjSgV[|%x(n_78kd,1Hcq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
