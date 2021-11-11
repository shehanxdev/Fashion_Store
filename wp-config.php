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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u957977747_5dJkG' );

/** MySQL database username */
define( 'DB_USER', 'u957977747_TxXZ0' );

/** MySQL database password */
define( 'DB_PASSWORD', 'em4wqoZ6Po' );

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
define( 'AUTH_KEY',          '9n4tw^D@~EJS!@#NDxm!?(.GyF.}sfto=4?6va:]1o{(LrE`E|W`5Qqry>,9ZAfi' );
define( 'SECURE_AUTH_KEY',   'O6@|B<*AV21|46A||U-U?qoBKRQjNj,mofrO5;8l;.xuout}a#s^>Xs^++VCo HQ' );
define( 'LOGGED_IN_KEY',     'L{qY6bNZ1je!6H6OcX>%FCiywS$?V$iDRS$yBT)ZL~&9=}]T4@C/l)q1cxh@#!2y' );
define( 'NONCE_KEY',         '%q0;v0@q~lD;#!v>H@AacmBSN(G=Mq?,[aU;gryT:Vg.oC?O!C/GLX^AcHN3oz+t' );
define( 'AUTH_SALT',         '<k%ow^;*#RXDe+#x(f2hJCxN<!cBkI:nrQs4m.a!I=6+RNUJ-#;2[(UBq>XU_zu4' );
define( 'SECURE_AUTH_SALT',  'F:ibS[){+>|e!^$Qp1D#|YqTEU{WPEJ@P]E;#8ymC`fj.e}AQj>E~{XIG- iOY`~' );
define( 'LOGGED_IN_SALT',    'qt/3x<L{z(CqE$AXlKXY[MIG7FCvZc5#lr]@(j^_hWd-/<yw{,AcJv.So=1#[>tm' );
define( 'NONCE_SALT',        'oB<%=m<KS.[{q}Kd%vYnR ]K^Ug2URdX!Ono31 iXt}|!2(l(ch`a`iu#5575R`8' );
define( 'WP_CACHE_KEY_SALT', 'L2}q#]y?s,-ywxl,Nvg-&M6qLv{nlX(9&&aHrlnZ_R[DMpaZgcP(p sA3LOMp!gN' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
