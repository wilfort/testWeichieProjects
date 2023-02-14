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
if (file_exists(ABSPATH.'config.live.php')) {

    include ABSPATH.'config.live.php';

} elseif (file_exists(ABSPATH.'config.dev.php')) {

    include ABSPATH.'config.dev.php';

} else {

    /** The name of the database for WordPress */
    define('DB_NAME', 'wordpress');

    /** MySQL database username */
    define('DB_USER', 'wordpress');

    /** MySQL database password */
    define('DB_PASSWORD', 'wordpress');

    /** MySQL hostname |your hostname : database|my hostname : localhost|*/
    define('DB_HOST', 'localhost');

}

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
define( 'AUTH_KEY',         'g(9_nh=v^,Eq^NzhX6HRGcz4*Q16bFQQkr%>MJ69R>2O;ABr& da>eZ}4,cDZ|%:' );
define( 'SECURE_AUTH_KEY',  '1X+JgY=Rm7fhir03eb)8 IqCL1_y&)@j#DGtd(d<t79Sa}}P4:s3}%`kDj*#%9?y' );
define( 'LOGGED_IN_KEY',    '9?~g7t2WnQ944<qz?(w9-ot.3A9(Qo=gY[+5)-Yr/+ie! ~d[Q|e0`J.>ykPr`<8' );
define( 'NONCE_KEY',        'Nq&>3Z iiWF-loy`1u8q#w<,R(2FPR-pzn1+@_NaD*=O[vcGB6B*,A%il;4ZO;)3' );
define( 'AUTH_SALT',        'U8 Tn|*,AAupNysjmS>CVu6u?OfO%C~r`Bs[&V^L*Pub7>F>U~5Eo{cKcxi-PpTp' );
define( 'SECURE_AUTH_SALT', 'jTHDW0tLez_757}dHZ;6254k}@Ln4$)|T4pxGU>yN3n5i]>8!!.In$fIJ8aY`^}3' );
define( 'LOGGED_IN_SALT',   'OW0@FjWa8&z8}eFmdg!:QFmq:<NZa#ET}uJ 82C>knZ~,s!4GS0QMPuaUOd9u{i-' );
define( 'NONCE_SALT',       'Cc,(vC[Bb20rK:x/-vI*nV,Wo*>(~*97]nbeLS! T7l!8SqAQ(Y)U7+CJ@90q$M ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'weichiecom_';

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
