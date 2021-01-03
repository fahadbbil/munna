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
define( 'DB_NAME', 'munnacyo_live' );

/** MySQL database username */
define( 'DB_USER', 'munnacyo_live' );

/** MySQL database password */
define( 'DB_PASSWORD', '# \` 7& nH7WB;==*ph' );

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
define( 'AUTH_KEY',         '9j3sTJe_=:NhJ(HoHMymt%q RFwC[iQN&>qkM>Ahm ER7,xK<AxDM!=aiavjIaGx' );
define( 'SECURE_AUTH_KEY',  '2}]$xRLu|8rH&.$Jjgh}ykoR<8`6]7`Da!O<OU3:xmd(7APhd:nZ-R2)$5mBlgt`' );
define( 'LOGGED_IN_KEY',    't!fSC=B|T*s+n?Y]r^_2f,K~r@#HF3Y[5SI419&Qw2scOr_]_x^$<A0f- *H,*]n' );
define( 'NONCE_KEY',        'G#cxn^,VEM6SMRB?]+5H1%~U(K`Tmk0cwLGd[>Hn4!L8Yo,k9_:Q4*hs wT1S%Y0' );
define( 'AUTH_SALT',        'wZHmqvkj@Bss7 osxqA*_*$[.g7^.$5KK[yd8[:;RtE&$q#e7CBr S^7AN.|&30B' );
define( 'SECURE_AUTH_SALT', 'f)4P%sR1J?u e|tHw@=^_8h#3<tIPB[FENUb4(i4&eeQyxe$m4)4,ar$g)MA1HN,' );
define( 'LOGGED_IN_SALT',   'C}1&p(*r`Y7|,l3)q]//6z?)kuuMmTUsLJfDwq4I45Cv%n])E1qhf3.O~DUv8rS0' );
define( 'NONCE_SALT',       'dP7RWgKB>HR9O`:6QCxU!^arn<n.v:cP`wx|9r }l;O}/@5N:Xi2?xErjWaAI;})' );

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
