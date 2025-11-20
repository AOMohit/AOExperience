<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', '9YZrsAVtQX5pQTVkM0ZzuF1qBaNJ1PwesQyMZW3OaOqg1YNHDaFTjHUuA0d6VNet');
//END Really Simple Security key

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
define( 'DB_NAME', 'u679865197_KOu61' );
/** Database username */
define( 'DB_USER', 'u679865197_jh7H9' );
/** Database password */
define( 'DB_PASSWORD', 'Yf012YcgBV' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
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
define( 'AUTH_KEY',          '/We>R)3-Hw{i}c57fdeBU0`w|D.CXWCh=V[<B^=GxW9D,=U?By*pvR;ciyf/|7FN' );
define( 'SECURE_AUTH_KEY',   'xJl!0PdxRu9:?D#!)%ES-)Hsd`4q`oqgoD.OO@Zhwy-PT/bEW(n_lym8!c.&6FVU' );
define( 'LOGGED_IN_KEY',     '3n Fa e)<)M_Lt7-Aq /b/8#XR3*b!VA(+5 ioKYkMnJj3R#fXnz|/(k10qp:Qkm' );
define( 'NONCE_KEY',         '&3eGO,d.m52ia+Yn`SqQ,yP$A&<RQJV+[!CgP;;<KH{.hDz<gP!8(RmTU18DamFu' );
define( 'AUTH_SALT',         'V*[It=C`Q{m}:j$R?vgVJ{GGl%B-vfz>@9X-:=}l^lp-f<LxMbfQ9t5P3eAR>I%A' );
define( 'SECURE_AUTH_SALT',  'RS+I;XeM;#nO>bElfaC_L0v,t1>%ye)bo9Qub7d:[uMW3xc39d kMA,,&NFl~+:+' );
define( 'LOGGED_IN_SALT',    'lLe*U$*f!JRIJjyGOH&RCYWt({w=kMAuJG1Nv,o.u/{RkHC]3R<i7hXnZ@H o#Ld' );
define( 'NONCE_SALT',        'cTuoyRVcr_Lju2boMAqddAR-M 1^f>31Xss.@au$Dovw )d#h0D!/`&S0;sA)L%x' );
define( 'WP_CACHE_KEY_SALT', 'UF_H+W,{`IQON6wDFR|c6Hv~O$t}^&z/E9=E Q6`VCJsVBQI)UA%wX}+R So)MrL' );
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
define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '1f9b4ed2684a70ac96b309292cb3b3bd' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
