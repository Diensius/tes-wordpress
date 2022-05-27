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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tes-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7kU.RxOXU5  gE hVx[at)?*,w75E|[N}oZ3V:pu:O93# |R93ZaAJj-i5R,uonE' );
define( 'SECURE_AUTH_KEY',  'Upu_2yyAj?]Fk%NLi]aGCy=BK%Kp)G_QO1I{j9h~Ze}Q4wY>W(9fpsx8@D4r4W@I' );
define( 'LOGGED_IN_KEY',    'D783d|(C8XM>Ex=62o*Verq$Qo;lj#6%O^-x%4N,Ai +}Io|M+~yuXettL{m^2cC' );
define( 'NONCE_KEY',        '7MR9<U.45:XBGiYQQ=vj4z/jC7?_mfm4#r)I0Y=@HA/c zdja6/q.Y_aC`ZX/JZa' );
define( 'AUTH_SALT',        '[7::}?Y/kM/rI|Sv};h0G?D2Pk>hYhf4L@^RLNNm;-Nm+(D(_oF*lv{{Xi`6v/YK' );
define( 'SECURE_AUTH_SALT', 'Z5:y+W(|y4%r?A*^Tl/Mo0J$/capm[[GpVCGZB/r/L>?52FtC2{2_.4}BY8!BEOu' );
define( 'LOGGED_IN_SALT',   '3)#r@HN@W48P)QO2+c)[AyKjR!G~kGcC_qB%.O4df9cfWus3{mxvN2D(T!3^_2()' );
define( 'NONCE_SALT',       '(qd ;=IGW60g6GHxG/@tl_b*SDPi^3}h>);fehXV?%n6:+ri[#6zVI>djN5B>qZ]' );

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
