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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3)uX9@~4i-^5#<5V<ev|>sH,9hiy8/>+;#*JKu,95W TDn%JLlXX-U-kKegus2/:' );
define( 'SECURE_AUTH_KEY',  '|} 2Izq76DEot@/ oF>7.$}Fae:9q5J^amgR9!1qOba4o.O*[<)yR*Uyoli)J<Ja' );
define( 'LOGGED_IN_KEY',    'mnQ#QHq3=_NvHOFCI~bh5[Q7Q..VqpQmZ qi.gex!;IB7wDN0jn<C}GRZ{k93%4e' );
define( 'NONCE_KEY',        'K0umVcy%%wOV|Qgn}1r++&L|C5y%-V|?3*+S6wr`1IC3WUd7Zj2@LJ5:U5A^u1%H' );
define( 'AUTH_SALT',        'ud5olMy.ru,0e@ObA-TBWKXMa@%#mCHPyJmm/G(pJL`PeDmHiFUF9S?Z:o/#(?%P' );
define( 'SECURE_AUTH_SALT', 'g-H/%Gihh|QB1%^W+6KP&x[CWLz:zpe{/!9<{>a58w<pn)mN:$Ftdd-.NQ$E6886' );
define( 'LOGGED_IN_SALT',   '?W?VMrnN.GlH9hN$mhfG%TzVZIex )g*el8A18L%~guMAz`V++QH:.L.D.`HQ/W`' );
define( 'NONCE_SALT',       'A gp4J_2M545JQjcf0o(Ti<CNKEdk-o}vR@d|Qo(>boNmwDEPwmH1L(-F&hQIli7' );

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
