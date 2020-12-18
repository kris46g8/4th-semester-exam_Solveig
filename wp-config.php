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
define( 'DB_NAME', 'eltermanis_com' );

/** MySQL database username */
define( 'DB_USER', 'eltermanis_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YDM5mt8v2Ho6YEUcej62UR8F' );

/** MySQL hostname */
define( 'DB_HOST', 'eltermanis.com.mysql' );

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
define( 'AUTH_KEY',         'e;Jr/XJ%|rFh!]_e@v!{3*R_q}ie2Ex[T>]E|?znZm&E}@Fl,.;QXw8ygOTH`$pK' );
define( 'SECURE_AUTH_KEY',  '[=h-u6Fqj)h0Zrd~w^C<1az7qWJZaV6E,qr(0D&w<BMO:3zP2POk2(?;Gb%&:J=2' );
define( 'LOGGED_IN_KEY',    '|7U!+2H3=kCR+f_W1TpS*xl>,/ya_#B<L7?!gLO=Z%l~R,wG|*c<m>S1[vJq0p(T' );
define( 'NONCE_KEY',        'n;-$w$kvIy;r%xFc5N2-J*S`AB/f[Wl/l,PJRb)a-:x]#e m~P&#?D,5TLEJ1Vk6' );
define( 'AUTH_SALT',        'ZviI&fY{3F%Zk}^|WZfv$M1G98]$>l Rss.An(6z&jQVFx^5=E e7IO03Le-zhWn' );
define( 'SECURE_AUTH_SALT', '2nN -O@m]L~$vu-+,HOyQ4|_6Oo!kVr 4-ATX388#HzCY0GBoK#QbPduX6ujlH@=' );
define( 'LOGGED_IN_SALT',   '/_M{A*mLHPI2W2[*qg.rXGBnY%aEog:n0gj*(^/(YI!%4k&d1*,j8U6YJT2pVv?o' );
define( 'NONCE_SALT',       '=n_Bx+HC6>Z}9f>M]I>uMAt{>T$34oL|l)(/}N]L.<_^)qX(?z: -@*pe(N>&Jjv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sol_';

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
