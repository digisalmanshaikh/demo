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
define( 'DB_NAME', 'demowebsite' );

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
define( 'AUTH_KEY',         'x!!CO;SM|^zF_Tm$PD&${7gt3hBEsmrpH en@R7.Yqeh~+oT1owqtC<1sWAgM8*_' );
define( 'SECURE_AUTH_KEY',  'Kl/ nu5~Gg2V[~*6wHtp~g{1kb^e:y`;;V<(977:8,i,ND==YtL$Av-^NA|3K0j^' );
define( 'LOGGED_IN_KEY',    '@KiitCnh(c#BXk.WXQfk%.2E7H<zW`O*%cI1):j{H^yHP9NPBtD0Oq0NFkp/,-0S' );
define( 'NONCE_KEY',        '$R~vN;@-%).kV(!&-#_^8nnW1nSe/n`X-cEO|(?c96a//)jA2mQAA/dI9v[,}B,q' );
define( 'AUTH_SALT',        'l!x]GxJr$d_szzg0cSL@V]}utef6V(j!73uuumfE[W=6Jma* oOfF cY yz/`0q2' );
define( 'SECURE_AUTH_SALT', '2D=IA@Y;V9#75#c.gvvOx-;t<>|~[G~LKRzAT~j4(4Pfd7Vu{[D~.}|w/Fl*%?On' );
define( 'LOGGED_IN_SALT',   '~D_W/Ns7ocfkGgX;$pwUL]G:JXxt1$J4(4&:Oc9/sp<BX_|UW36?.$}=6f?@,F#a' );
define( 'NONCE_SALT',       '3+a`)-GR0?,=HWx6aC}0{~Gmt_yhz}HHc9^]wsJt<b&6eLW%MNB$Xf%ERAs%}tqj' );

/**#@-*/

/**
 * WordPress database table prefix.
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
