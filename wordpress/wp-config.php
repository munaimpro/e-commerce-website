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
define( 'DB_NAME', 'wp_learn_ecommerce' );

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
define( 'AUTH_KEY',         'BwtXy;/naO@2(>%qoQ huN_`w1{GD)?t/a):bR9.m8ng|Z{X4i.-!ndz7kgKSs,V' );
define( 'SECURE_AUTH_KEY',  'qI|l+qGV[2[d~Te)pX2s1VSzeI>F2ddVzqW~S[&IS( T&J:A;4K${xqm#4!<4r}P' );
define( 'LOGGED_IN_KEY',    '7s7@3y1j{k/y|/PAPq*>;ruS&49rtaSP)i$ n7.rT{EH#umw128eaDKWtVEPHCm_' );
define( 'NONCE_KEY',        'r|3=*i~sGVUQq[H-#,h;5:Lnx;`#W4k!2_llne=#8Gz~7_l.GAm0ge3UR7S{$-#9' );
define( 'AUTH_SALT',        'N3$DRUEn% )yFw$ 7J?Ed5P%84W`zd&dQQrYLEkdPULEsRFitW5[yH-o(]evPSqX' );
define( 'SECURE_AUTH_SALT', 'dl94z}X~Tu#3y+P%)z6,C_+;Ch/0<O]P~JV?ZgwGdh!]@L8jCf- j2aCX<;|i&M7' );
define( 'LOGGED_IN_SALT',   '})C&jV][[KSZH(%YFan>ffZ]:Ha14!7r}K3m%/w~*di`g(u9tkk%I!Vw6q8m$Q5w' );
define( 'NONCE_SALT',       'Kx2ImoWNRRIqmXRH0ajgmNeq<Y5-HAgpT}+V,tiWYlf-=w(^E75<o{x{>Z=;PJVN' );

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
