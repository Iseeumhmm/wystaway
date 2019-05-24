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
define( 'DB_NAME', 'wystaway' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'u7^US8!K= e-i]wf^Q4G!^>V-XizmGJ1Ms)$mAd[-p81pwLl&n^@+pFFO;H|N^2p' );
define( 'SECURE_AUTH_KEY',  'nXyX ;z{G)}-8qu](A)4FX8}D~ Yo+abqU5TYvcK!2#~CaYdH3d+sy2dYC52W*^5' );
define( 'LOGGED_IN_KEY',    '<qQu&e&&@V&*Wqx@@,7_c7*yNrYyCKadBDz)DtvM@lDj&J7}mRUmLy%n>y7y!YyK' );
define( 'NONCE_KEY',        'Aql4r?GKi5r%$^a`9C[G8w8>X<0/6dtIlud5K6M@:hye~v$@~Bo>iK(`.`w>$p!s' );
define( 'AUTH_SALT',        '}TC=W?aSU:P@`q(0Lf,r}*-Ypy3*PP#1L`5P=L]Wl<Av:wO Pu7Dy$?LEXu=?S9M' );
define( 'SECURE_AUTH_SALT', 'L>B[b,@ozVIV&8Zg?zf>hs#iAqT>r$jWXqrmMT3I/fXK}i}PM@d$`nuum,W}*V$x' );
define( 'LOGGED_IN_SALT',   '&T#k4MJMmRzyTO_*>2pHVLNY682sfN[j-3Md2]-SR.<fBT_D^cO4^8^X}ZMhq&Ca' );
define( 'NONCE_SALT',       'MXE`NA@s7c$StZNMxI q%`KDY): O:R?Yx1Uh.M]urq]y5gpU0QJg?7 H62b22s9' );

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
