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
define( 'DB_NAME', 'projet_zero_sdf' );

/** Database username */
define( 'DB_USER', 'ibrahim' );

/** Database password */
define( 'DB_PASSWORD', 'mdpAmodifier' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '+y4|(B=o0?44JD+>)}f#@Csv+y}=~UT }Y42vIQ;.M[U{LMV<WA)k|bkU0ao=|f+');
define('SECURE_AUTH_KEY',  'QPxX~j13lq-:r-+*M_n#BA_zr_bpdnLnpd~Tl3Twf+-Gln!v+}&9r;WGgLx)3^7a');
define('LOGGED_IN_KEY',    'se*=/is6ak$!zE{`Z&arOAa$1iyxZ#RH9~oZf#+.iCx+E.<IB}nRA@0RehJis$v$');
define('NONCE_KEY',        '`?whiVrY[[-g<H (SB*()*dm9PN(*_O--npe?&4]W<VW/Y(~YP5ur4@M7f-1}o-+');
define('AUTH_SALT',        'K!F#xI-Nn+qdo,2Nx$vb8s;]r#w,nSd@jyuXSRN<H:%.D OTUPfn]Nw-T9K#v%;q');
define('SECURE_AUTH_SALT', 'F0yu|}OEIXzZY)2Z9<M!v3<u>_n-9[Qd;r>#52-||DV%|$5+4a@-_n=o^d ctkc9');
define('LOGGED_IN_SALT',   'Mn/W.ujrf@zaM*$,-KgBi#~|N;-?7PDh,ye(t$@}h!{P(nJlOvLmtCEVV5IAZQ$c');
define('NONCE_SALT',       ',f-.eI(`BWM1D3DwO,czI.m@$)id]bvc+|(A5a>pNkR~HkpKYfLfJ}8[m,+M<61l');

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
