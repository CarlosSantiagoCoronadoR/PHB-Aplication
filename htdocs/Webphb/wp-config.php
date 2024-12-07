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
define( 'DB_NAME', 'base1' );

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
define( 'AUTH_KEY',         'WkeV)..dV)ezx}JKMl1P JCAI6^&dk%:VpY{dn*`taXGe?m}&@H|wb}Z}24U;Q#X' );
define( 'SECURE_AUTH_KEY',  'k8afajKuXqN,T;2GD:=[%SbJM:bQy}7+l)z^V5}JT:bQM5I{xk:-k:*5#aZQ%Usy' );
define( 'LOGGED_IN_KEY',    ' 9M&p$~-a:l@Sp_6uA!F-#tm6AsYXmN|i0OLpG3a)c=FVdfwc*10eed}K}4J@(im' );
define( 'NONCE_KEY',        'wN%,qq#F?kP.+{Y.:l$^sq^7a`;YlsO=i<+MqGh~c1PA]MTl s?nr~C3hT-=++UH' );
define( 'AUTH_SALT',        ']/$n-u3+03qp3OnqQ{ye`ji{?bkxbmMQnb=ur5n`!#tIK(^N9xEUx+2IU@l<[(2k' );
define( 'SECURE_AUTH_SALT', '=eo|LD{jkex|.AQmRc=x8E7Im}Pz6h*u^bz*{RyJ;`O]cs*3onHmm%BQ_.,SQuce' );
define( 'LOGGED_IN_SALT',   '0EYMA{]%>PMW)bR~ (.|3^9w2l+4/VEp*$Nr!b#% (E;N+r+x4a-Upj?x3nYn0!1' );
define( 'NONCE_SALT',       '1C35f5y|u)^ ]<DfmHZ@AFV/y:W^/_(0RS*1yX~}y)2+!lH/u8ly&Yy4xjJ5|N@X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
