<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techherdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5j)a@q9&?z{<.9aZx6$&d_(m);vt[a<O[E`Qn,agc=}%/2V*t)k~fy;jvEg-`uF}' );
define( 'SECURE_AUTH_KEY',  'Eo0}]LQmz!kdzDlNU*D+a8qB$Ouc)U_] p77D,5[(QL=SvPGXQ|<d],2abIz::?g' );
define( 'LOGGED_IN_KEY',    '&ceLL(igrubMAszDIXDvg61!TZBM4Wl3h|90QiX_5`Hp[#MN}e*NSK;=TB)pfZgl' );
define( 'NONCE_KEY',        '@ta~F)UQW8J8,=O&J!zPny}q8-0f6rXSv7DpSgH4:U`*8N~3[Q*y$|IKL(Q`P|82' );
define( 'AUTH_SALT',        '}0y%h7K|7+$[4FOy|@=CW8^,=5w:9n7~gI%;CJQ#Yh]ZPX09STyiT WFJ:-?+7&S' );
define( 'SECURE_AUTH_SALT', 'QG}A4)9bM3,TBkzk<u(&:zawzy8Swreim~B+$K?%^@1/bTz404<R4S}IDfn?Qa2/' );
define( 'LOGGED_IN_SALT',   '^^CI,fAQDgY@C Y>np/z1mrwfr`Y_ T8Q5Du-Of*is$11N#~jG`WcoX=LK/{?Tw2' );
define( 'NONCE_SALT',       'hZ+3CA*8:-U:s(]J{Nxs{C0%VKPT1pI0*!Tb}FC^&c1:098dkC}0xxe!4s8N_-8v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'th_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
