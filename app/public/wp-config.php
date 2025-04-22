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
define( 'AUTH_KEY',          '`J*:W4>H,6Nrdp{;VR9GbaJ)aT}mAF`=Dp,MwBLdBQ>%a@2H>K.u8q!:Fjo70ikS' );
define( 'SECURE_AUTH_KEY',   '%[Np~R4h=$E!bMOy-r~/B3)BH?D!G9L./A=.L$eV7:?uc~2KZ|8NlG2OXB(mRD[n' );
define( 'LOGGED_IN_KEY',     'W8n*(Y9D./p*.>&xN.%Hz*0{Wd6`H]ddGbKB/4*PI@ CH&pQ{L~2WljokMM#$x#7' );
define( 'NONCE_KEY',         'B.}_>OBZ_}hrL| ]-0:ExtAw3:=j$|9;|bs0JX3$S2$JF;bR-/4P2AK4>jueTxZh' );
define( 'AUTH_SALT',         'UToEX.dMhSl}6wb5]y$sp3iqFxcID!<U98G}2w=Z.c7wIAk?O$>hk5^T=EM+wk{S' );
define( 'SECURE_AUTH_SALT',  'hz;[66FS<LzIaH(SQ84UP8ky&E8ly0p4P9gYpaVk7N$*<W>ySEZCZq{mH<yH8< Q' );
define( 'LOGGED_IN_SALT',    '=*U_N:yPM&Q@g4IdAZ2]|u7>f2lJEc#SwK^UzU8iQU %u}n=X`|p=ae.:L;K7l/U' );
define( 'NONCE_SALT',        'sC(`oM.oUFRLU0^YJG%u0<c*`w-}&1{4L5z`UF-{/ueK{gLC8YvEq!Qj21gjhhsM' );
define( 'WP_CACHE_KEY_SALT', '1cY(1PF]d)%1u5Jyk&!S#Mh[z X~F0] HrB 6o~HMfBMTm;vUhJ.dt|9k/-|y%W>' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
