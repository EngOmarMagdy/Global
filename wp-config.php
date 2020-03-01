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
define( 'DB_NAME', 'Global_center' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'fI,~;v*=n>IoxIcRmxRkMo{oo1Hn*4)s6/ZkGpSr[87#Tm 2 z2(X SYfrZB`G/K' );
define( 'SECURE_AUTH_KEY',  '0sqQ0SWE!~q6uVX:[|0/>(HE?(EbOuVw eVNWqZR*:h6#?l$5q&#cP@a4e.z43C+' );
define( 'LOGGED_IN_KEY',    ',p*dm>yZX}G?2{@SVEaJlm#em0Ye|xk${(UpmL!V~Y}D|b+NCm>hy[at#6(e@Acy' );
define( 'NONCE_KEY',        '+6OOqeT26zQ@2dUeZaWjDP$EKRRV~2mIG%$~L4fDCUg~OZLbXu37oHy7q?yxn%cM' );
define( 'AUTH_SALT',        '_#Wfk?Xd~XPEE*ao=;@s{&U#aJO6W%0(0$6^#ceu,]%{;jfI+,}2?:gcK{(.zITm' );
define( 'SECURE_AUTH_SALT', 'YioX||LmP$F=aD8Pq3C`Kbrl+6{/Knf](6^iAl`@P2<Ku&~I,VjU?YBk(]QfG@o*' );
define( 'LOGGED_IN_SALT',   'DE=8{fHafe[;6o#$.GzH^CZ,TU_#]KY/a_ruG,AcgH#_l#jV`lSrdMV?p<9({w6:' );
define( 'NONCE_SALT',       'Ny|)o_N&7Y.rqk.-?cIS#qqffstUXDxZAUZ 103m*g^c=-8Yi|al&eh>G*:s|(,H' );

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
