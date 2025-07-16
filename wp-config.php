<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bbdd_portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '>j4dLMzFw?!aoICj f0m3ym<;FKRh 00UImFN8~BL`,3{z(Cf;&(/V0UJ.v)trWH' );
define( 'SECURE_AUTH_KEY',  'U=M[a3L9l2pyX(@8TOH/ojWW7)J~i;onS*]h[cyM=T#A|]G*na1=wIT%~X%m_:}7' );
define( 'LOGGED_IN_KEY',    '!rV8r^4:^3MP.q)/vTJ5UB{z|$sVE=O0*P{tG*(3;V>uG[-_c2;lJEh!;v6i^U:.' );
define( 'NONCE_KEY',        '+Ohh hrVX60V>ATtXRn?emI$;`Ls81p2yRW!H#4WUt@3;.[e]5y:)lM49W@KKKl0' );
define( 'AUTH_SALT',        'Z9`y8{$QQ0r_I-[oy=:C]ZA*W5(3i>`Z1[3X.AD`irI7U`zc@qI2=!7e)59`ocqs' );
define( 'SECURE_AUTH_SALT', 'ep|X,R3_*2hRfGne|#`m64:Kl(qw5IbD~%b.f7uehusG]<bH![6U2s/=DFcd `1g' );
define( 'LOGGED_IN_SALT',   '2XC@zUeT>u`cOkT8E{SRRmW,t72_+@L9C-SFzze((oIlbp#)q.I_p7GV24B5 )&{' );
define( 'NONCE_SALT',       'ih-7-mlv1L;Vu3vPo6?T9IY429DP*m}6m0QF*+/y|`OSSevgQ /OKdL[29V*<!/9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = '78wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
