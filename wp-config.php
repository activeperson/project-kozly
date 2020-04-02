<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WPLANG', 'ru_RU');

define('FS_METHOD', 'direct');
define( 'DB_NAME', 'kod01_kozly' );

/** MySQL database username */
define( 'DB_USER', 'kod01_kozly' );

/** MySQL database password */
define( 'DB_PASSWORD', '8SN%j0g!9c' );

/** MySQL hostname */
define( 'DB_HOST', 'kod01.mysql.tools' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dV$/i@3poh>?UVZ$b>gld,+~}Aw5s(rB/QP,%!M*qFB{ap@b@QX+W>F7hQ:&<2_Z');
	define('SECURE_AUTH_KEY',  '+}EuLqT+3m-#v-`0P&NR7WX_gdij5OJ[U{|g]z]9W~kvu_MPb+0bI6:2cm;`bwtq');
	define('LOGGED_IN_KEY',    '9rB!t`(Cod0)o.UUK#8gtsh:9nb&EfLyw~g/xw*D8vt)}& CV+3+2qCKw^|wJh3X');
	define('NONCE_KEY',        'H$:irlQI#th`ioo!2N( uS3,SsQ*|9l4^[=1+A(?}Yyy|~}^>P5kh77$L:-6!,:M');
	define('AUTH_SALT',        'Z!.8V-YmkBp_)|ITek9s:(UW0)>)$&66kWV4SD?._>Iy9OO@hDkYB!gF]jw+8LHN');
	define('SECURE_AUTH_SALT', ':nc8M#|.5)R_O2Y=8&|4@+vfrUt2ulxIPd|e-W{Fy`.Ur7lp<BP,@JWZk@H][[fL');
	define('LOGGED_IN_SALT',   'B R)}K>(}jb 2}(tMj|hoS*ALD&6~ku m|K[6a0xnry.~9d(RCXOk7Ep@nQ-A*`.');
	define('NONCE_SALT',       '~+f{@}Q#/|7of#[caToP>(40,{M9^jnI1N6lVh(+rYPY*9:Kk`.RGx)8]$u[&Z$e');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
