<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'reklams' );

/** MySQL database username */
define( 'DB_USER', 'reklams' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         '5{`&S|zf$43-N*$UD+A2al;xI&bkgat|ltJd}zb$leT(OWj7sE)HmmrsupJyk2=1' );
define( 'SECURE_AUTH_KEY',  'eFv+.5S/Iyz!_!~ePB}Yk.Pv=p^>x|/=*/B!I!C#JDezrG9#vl(?[(AQ<4x%=j_{' );
define( 'LOGGED_IN_KEY',    '3]lzAsn/At%w#AE,J[e>MhjV_t9R[Y2q)ru8gJ>Ci6*9L[;B-|k<;z(TF, 3,+Hv' );
define( 'NONCE_KEY',        '}VTw*C4|0}OZ7jDa-v;u%HM+oxE2`lVDKQO*BE1N!H3GjigG`{F_KE?BtQ`7*;-3' );
define( 'AUTH_SALT',        '9|,q&}j&zpD%K=L5OuEI5|97Hg|l[+nb1B}:*A2U{elnRL;vM.ZV;B[[!)4@:6W!' );
define( 'SECURE_AUTH_SALT', '3fo9b9!rPI:rKTigb=QW4#R?el~~xKzWO,);1q=?gBjK6%N]JDn$qQS,2K0y1A}?' );
define( 'LOGGED_IN_SALT',   'p4[#Cn:>qFNpL=V8J|GJz$k?~uA}nvO(A+%k2aEOtU!CbMTloC.!/CV-eXG,c?;n' );
define( 'NONCE_SALT',       '&T]Q6w,@cYCJL[(wL3$AlUp[UngYplaTyoYh>`yTf{)}4g!/>ARS$]ApGzdXP;(]' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
