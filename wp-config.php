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
define( 'DB_NAME', 'e-commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'l~ix JW_Lm`40SKjG>H]%b=E]n3,s|M>D{@R4cfE,b2)Kqv)cO#PZA}txVC)P~5%' );
define( 'SECURE_AUTH_KEY',  'y`gW4op5>B1rQ1%6>@dXvK1Du`/~H#^,^tyG/9/8f<(*C ?^!K(0M_k6.C0;WC_f' );
define( 'LOGGED_IN_KEY',    'S@k4J8&FUh)t)[KvROOMA5E1TTe`yGUlyE]QaRk~)y{4Wv.HQvB&P?KLRq/ubZ*%' );
define( 'NONCE_KEY',        '< b}ZOI}j+Z*4E`~%lLZXkI=m}w:b.Acj;UB`bt8G|rGTc:i|O@Wrc><q]|n!tZQ' );
define( 'AUTH_SALT',        '$mYQnt}h!]YU/~Jk]XZN02s.sys1TAgG}1s0;DvhgT<NR}d^99GhVV[O[1+7M.F.' );
define( 'SECURE_AUTH_SALT', '[;Brfn/]84QHj2JT)F PMZ5Tu3G$z$G;&sF3,vQ^KH{g;$}<uaL^} m<wNTz<!R1' );
define( 'LOGGED_IN_SALT',   'T0%#}MDs^QyA+/?V>NZ[!{zS^.`G.<;5ZQdKg2C~VBbx>r6I{@PSg`5L&?7&NY#V' );
define( 'NONCE_SALT',       '<4l-ATe0dQk0LNh,kD~|t.d*h9r]/5#p79fN|8O+-I4R(6dR@KhkyS>aa+j *5]p' );

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
