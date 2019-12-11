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
define( 'DB_NAME', 'u395025619_turnweldengine' );

/** MySQL database username */
define( 'DB_USER', 'u395025619_turnweldengine' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u395025619_turnweldengineers' );

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
define( 'AUTH_KEY',         '2yRl}Q)nR )A;28}+Sy^dw=K}XB({qrXnh7KD:j.+*H2*@Knph&3Bl<k?wDFO}|?' );
define( 'SECURE_AUTH_KEY',  'O|bot_ BJbs`y?]TlUgTI`$OAAfZW%rdT6r@9nP6~Iy;]ycG;0/0hdF6h>HY7noj' );
define( 'LOGGED_IN_KEY',    ';E3on7>/&DV$-|[xV$w =&D-28=-VM-x/[#]},<:Df-^YwDZX$/|k3Rh_G<QLxJD' );
define( 'NONCE_KEY',        'VjiLe{VHan{S,/s;`|Gd+R7SV:ma~ne{x|?Zc>R| .~CuwKMdY;-M||3!XQsz,,)' );
define( 'AUTH_SALT',        'd+4Yq usBBvp[f0_F;A~I<J-<>Lv_M,6F%4&yza8_rZrF7QF}WhE3Bv1w%Hvs3JP' );
define( 'SECURE_AUTH_SALT', 'gfZ@wr&?HY=*7zrD%-.:ZB`s~o;;JxyGPoVWMg:{/F/?veq-}Ze(}DK7&04zCAd[' );
define( 'LOGGED_IN_SALT',   ';?C0(7bK>).`Tf)<I@/Y0/egH_sn{#De8hJ@Cyzp4<2yrAjN[Dsf(45?+{TuJV0o' );
define( 'NONCE_SALT',       '`:EE?SWS2xT4)y[p+V;VkI?a)=To)Dvl948VIP]u92N{{QgsfGBuwX41&-(p/:)K' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
