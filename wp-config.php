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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '_NNU@]jaQgc>)+q&!02Se{Y47k#TvWZE[C`CAm}>YG#QImRy5yVNyqwwNDl+?HWb' );
define( 'SECURE_AUTH_KEY',  'FKS<X?xld[&;&~)?Wu8`S1{Vn3+`f]w9SRRJ+a%Sz)6Z6@}fjg;)X!(RhE{(iS_z' );
define( 'LOGGED_IN_KEY',    ' z-OEPtcc,4[-I(NBGZ~-|I6UFd.pkGtPJ/T2)2G.-b7Vn9R==`U<2[r(0k>RwF8' );
define( 'NONCE_KEY',        '#?x2j<~FNGK%,bgyaNPBZw}tnZr4l~mdQ@7cOWXww*$lU$CJ0qkQ|D]~mZTAA[=}' );
define( 'AUTH_SALT',        '.eg6tH+2ana~&#lB[XhfWig6A!N~$k}oX~@QU$dtmLn]=W?.@*xv%>I__3Vt62zj' );
define( 'SECURE_AUTH_SALT', 'kO#C#X.=bmXo]=Rp[Pu(5gc^cv4d/0eH,O.{wReUT$`Z];I],}H|%~EP:S[25y:,' );
define( 'LOGGED_IN_SALT',   'E?T6ZC+|k@tWW(e3cFCQXgJ?*}~&FrwU ,soGSm6@Z&WbC3w0IQJH2$rO*pYum07' );
define( 'NONCE_SALT',       '-R+$ eW=G@rTF7wg-a@%%r?E`0l!KaTtbhs*NmVpREKgO[ j|z(zd9tmt*-IwE&?' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
