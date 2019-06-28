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
define( 'AUTH_KEY',         'D8cD4*t}*{3p?noyl>(b*`Oead e$Hz=5D(VE5tkehb(GeU!1j1^6l9Q/`e.ch=j' );
define( 'SECURE_AUTH_KEY',  'A(AsJ*]&,a&ZS9c?D}6XTN7dbD3)/uiy7J/+A@oWm8P<@eR}4ow(=n>FQoT~eDtC' );
define( 'LOGGED_IN_KEY',    'U2[T*p=sWj*$ws?7-MhCm=xR)}9Jaa+=|$tV@.NgaIn?qp]*5Y.p.1r}W[o}PSTA' );
define( 'NONCE_KEY',        '%^6~37IY88e0g9nd|y*m[iq?%oS(?8>^LK5^,dJz:^Wg|WwvghX #pp67M+OGDz*' );
define( 'AUTH_SALT',        '$z!=e|sBQAf:OW.2<x4S5b$&=l/D; 0wqe;:2S:;cg-F$ewKtT&B|;Mk|p?$C7mb' );
define( 'SECURE_AUTH_SALT', '8=Ki&ah*&^W4/2A12yx<eFJ[O~Z@NIw^,2M.P6!:k2~P)=sP7zI+MQM(N#`2|}%g' );
define( 'LOGGED_IN_SALT',   'ps0,AI{[KhxS&jq(G@8Yz*3lxOz1YBPwld%+kHgCMSxO1:;YH4)|>TK4+UO1YTJ#' );
define( 'NONCE_SALT',       'L-^j45$Nb8G2QZzH^+oGN,#TEpuw6+.exj5<q1xWVAV1sR$JLy!^h}I!,LB$.%xD' );

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
