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
define( 'DB_NAME', 'pantheon1' );

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
define( 'AUTH_KEY',         ':m4I &[DBv6/OgZf2+gbqRe$KuT)UVNN>-;RT w3NaV#_m8*TqqUh=l%Q8qr%Am[' );
define( 'SECURE_AUTH_KEY',  'OZMrja6@PCF+M6Jn=eM8cgC[0E;n~*5VC|QQjzK5a/-(8xs3J[jXdUl4BLYBFGuG' );
define( 'LOGGED_IN_KEY',    '+&D%:-Hj2$L.)?XTIrG&-B}9a07Vkg5AF u4(LPJ.pRp/3_J]8@UN}BiB2!fJ`z~' );
define( 'NONCE_KEY',        'lf{rNQ4jJ+H]>|rN5C3!703hCu!e2r$LJ>Xqz-`>Nxyq/`Nf,!F&J_:D]?gK^A_x' );
define( 'AUTH_SALT',        'TTL,(e0[>lGxYmn~R0KcX8`!&(xn_{o-_g>|I[Y9JyYx_N$dO*>CIa{@bd%0r/R*' );
define( 'SECURE_AUTH_SALT', '22X=|RJENk~hHCh4#6dsn&.Jz3dnpX@8Mh^/4;f6h(pEj=;^`<h#MY)^Z`@o@$e&' );
define( 'LOGGED_IN_SALT',   '_Z-bjS1aAOJZi>njk7^hGL!_4ivC-ctk[YnG,asB>$=Q|OdoDEequ,,[Ly~L=o!/' );
define( 'NONCE_SALT',       'aTLNYYr9x8vY(T%uSrfUY#6k#y-84p?xBRWv_?Si66sbL^=|<Rn/j*A{jB:i1N2;' );

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
