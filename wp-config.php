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

define( 'DB_NAME', 'db_dasher' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~?248I)1 Y>g>/b95MWvx=rS=4|3Hy[<$Bv3Z7vQ:A?Dp2wFuqWIAK@Bco1_kBMn' );
define( 'SECURE_AUTH_KEY',  '>5wb&;Pst&~rIw;(w94pkL%#<@ML&VCMKDqm,nHvO$p)Qsh+!t[s=`_6no5izkbQ' );
define( 'LOGGED_IN_KEY',    'G=h(E.<o*/6.eLR)PN5-)Af<3E[<gCPvPap?0um?ZuiUIoWFI,,8jaRhF9PNUN:6' );
define( 'NONCE_KEY',        '| i@eHDfYlANf0[l3>G#?riuCCYiFaPLTm{[u=:{iod:@Sa@i_ap!b-q8V1AT)4*' );
define( 'AUTH_SALT',        'a_Qs0Lj?1jjNtLlw9eSv7benybtL2w{d/IT8-Vsi`jZ]}U9)vwKyQYb^P%TGoAC<' );
define( 'SECURE_AUTH_SALT', '{C%wOS3//zoN&g@+aO?]Ji}ln6TwP$r9mjY(G:{5O.|~q51C0{VphS`~HXM?n^[2' );
define( 'LOGGED_IN_SALT',   'k%be,MPffh_yIrEH9z?!9(<-C;R0dE.Bw$mt lhT7D]I/=xTG2[ZWPT~+[Y0camV' );
define( 'NONCE_SALT',       'yM?gh4EgkK_7*u/%wHO+xQr#}d~gz7JPc*1Jkq(PX0Dp2g>HVcg.N![~`K2MEG`{' );

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

