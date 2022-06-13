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
define( 'AUTH_KEY',         '0I3y![g-|4qfQ]tew9!?jZlE2v|.R=T)JbO!(1A.v!s(~v_qyc7p@(~:*U$Lzb.F' );
define( 'SECURE_AUTH_KEY',  'iivL%5mEUm[pW-Nvk<G!WqE(^:#H`uD3- N1OpNg1]`ObvKm+`Dzb<0/J)e?bW<p' );
define( 'LOGGED_IN_KEY',    'aV#B)IUu=9qdb5<f_1z_G7Bv|CM2nW$%INdy*?45qh@!%N5R>Gq5CN>@xBNzH=a*' );
define( 'NONCE_KEY',        'C:l~p!,]LCyZ#bYrf%6VgO*$,9=/TlB?Ex}A8F>NC8L,(>V W.eMYDBG*xijbmxX' );
define( 'AUTH_SALT',        'KqLoX0`5$32hJ*%^fZU&4g0W bA2bMJL= +b:iKAmPn6^|7MCX0rMl@/Twtfu$] ' );
define( 'SECURE_AUTH_SALT', 'varSN<FSuP1PM}J4flL-(hJqR}VZ)Xe7*3dDN#>D9^v:-v^wC@lxq0u4Hme%)^Ad' );
define( 'LOGGED_IN_SALT',   'vNxt<6m9(r>z^sUP(5j)-(G=Gi)9[*Si93.CmbHryd2+]y6!%tY|?[oxvb,4?1Iz' );
define( 'NONCE_SALT',       'U7iBQLCH0d6;FQks,g!)^MlQ:Q@clZcg8M}zNdM:dpu>0F?0~@YYP$B3<xiDUBVs' );

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
