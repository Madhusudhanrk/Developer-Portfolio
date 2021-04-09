<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u234292144_z3TRS' );

/** MySQL database username */
define( 'DB_USER', 'u234292144_qmd9q' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xAaWn8dIcZ' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '~#,cKVrq[ha5a&(4A4BLezB_^DA1HM1FzirPJ xGlzS=* d0*1.pNSa/vb8`qF)f' );
define( 'SECURE_AUTH_KEY',   '[l<>zV.hC9uzG-ktve}#*7yJ}0vgaBYU/ PIEDo#{)XxzZP[<xpt>:y4D2j$E3GI' );
define( 'LOGGED_IN_KEY',     'XKKLF{.PrW<>]jt0JWE1F{C>VVHL4-~B>E-lbknv5#zBN~xCQmAwu_B:zKGN>|N2' );
define( 'NONCE_KEY',         'Hr*5_5lHOc/}7d~9o)[9z$+q(`;`!FSGf<]8_)~knb&|y<s#9{d=D;Z`!hLUu&S>' );
define( 'AUTH_SALT',         'P&zICotke<SH=V60$n+<w<7R+YoC*qTREh=&wRbROe-MQq:|=6=S POyK46loazL' );
define( 'SECURE_AUTH_SALT',  '[Q,j|CCht+{!)V^Y/$3mKk#uv[uREL=N/%pC9EHI9}fi8gu:lzZF^Z.G4tBvmi^4' );
define( 'LOGGED_IN_SALT',    'YTbI6kS:7wznFPnUK&t5qJ(zJ,w&^CFc.&eS!j*{!?#f< ))L0%*!LDe`EG C;WD' );
define( 'NONCE_SALT',        '.i`I}Q3*9F/SyzakMLC`${QIpv{Rsw=`14>*SE5}r[vxsU(=M)S@jZfCBp~g3A?m' );
define( 'WP_CACHE_KEY_SALT', 'm%+r-ph](1C8>]4ih;yutF`<e:gZky,/$[JssQsisD|:w7`iw-l1c}l,?lO3Gc3Y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
