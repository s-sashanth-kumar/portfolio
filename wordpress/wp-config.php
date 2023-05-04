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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'k5Cv_Uk|ieL33@s78Jv.YJQlBJUA{.3yZ0S~,uK7FT~B44)%V&V13Gy+!dR^0=H+' );
define( 'SECURE_AUTH_KEY',  'yc|(pe[AX`M*)Fdx<b>Rb^~hM+oR3Wh~d_.zy<i%84n4nfGj}EvJl6(=:r>M(bMY' );
define( 'LOGGED_IN_KEY',    'Yx-nKfhhC3<}<c)d4}d#-Z|1|UA|x1a+*aE|N4r&C,O`QNT0jOe6He{r-,Ch?bFC' );
define( 'NONCE_KEY',        '@4W1bSz&InRUm<LX[nY~43XpU`vM{))#WFM!]qg<PF$Gc#%1/^Xw*~s }Wwmxc^~' );
define( 'AUTH_SALT',        ']2.a7bvHs4y-KdhlY5$`:DhvQi_pO+b^RvZNEyjkKpS.Y;[mMie-2=O+Kwu9VcTH' );
define( 'SECURE_AUTH_SALT', 'H$w.I=vGu3opi1Uk+sWP R#?PltNZrEs404-c#M3[T_innucJ8ks`QSPN:+Uct)g' );
define( 'LOGGED_IN_SALT',   'WkO;ZH!r;DIv6Kp2=HC?Q,v]DaKQ=y,=Hyt!?a8_QNV8bKo5x2EL6uTDAl!r$=OO' );
define( 'NONCE_SALT',       'ANe*-^$&c)OS`#5^l0HQav2tWO0x*pjaNWFs#jKshNeh7rVPAtP@I3}3#Gpqs]S_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
