<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Ologg1-2024@' );

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
define( 'AUTH_KEY',          '`|M{;k)A*J#z5]l:qQA?YMuq1g`#1)~mHceo3B,9;UH(Gi@[<QMF<-fV`Gog[5G~' );
define( 'SECURE_AUTH_KEY',   'OeJTJ1z?u1q7S9vs:RFniQ,%zy:@=2l$G7=(B_p&6LOI:cpd/?k1ZSK?!TEyo|{J' );
define( 'LOGGED_IN_KEY',     'ca4-*MlXZGYn,W-`M$LAPY|{jPg<xfuqwvq&6,-lzlja%;-=46P`=S #ipG#HDOK' );
define( 'NONCE_KEY',         'II !$2]X>En-{ wJA8LCZ0wG1vhJbp(a7{WQ]}J:(xd@A790g]z4FQOy~8uK`+2P' );
define( 'AUTH_SALT',         '_*Rv>(]&7-1>?66~Kft!`Kfwa2HJ^5n9YnQlOa)@llGY2)A1m?szhw&W(t(X4K]M' );
define( 'SECURE_AUTH_SALT',  'j#!1%34/Y}Au2udzjgX??N4l(3Zq~u$ysg0ly|ks_7:,F[f)}&G$A*ePFsR_r#>E' );
define( 'LOGGED_IN_SALT',    '+h}2GQRp4UNYWR2+mLYx/Aw`RLRsE;85t-`-fS$H9I60:Mo!MdM;e0h!pUPigWya' );
define( 'NONCE_SALT',        '79hlBkS03F{6 fv4Arj?JvF4DY;(lZn))UU&|~}uwZCwNJ{uAfiRhu]TNl(:YslW' );
define( 'WP_CACHE_KEY_SALT', 'KX7elH06!J-~TPeQU3fdkbX5FbO.<HUYj#)0{r]d1kW=3p`YkwB)jRKF8+oL}X~B' );


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
