<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'AecUka#E4mYGjL0!bHOoSu8s80s^AjEEf~qincR$qK,e|tBI% 4FuFDsE&<`^c64' );
define( 'SECURE_AUTH_KEY',  'GN3G6-LR>JU^tl-LG~uKiP^MNNdM1U+mbJjcx>1Lqo+Q^Ey/o!=HGcv,uAyBa&qw' );
define( 'LOGGED_IN_KEY',    ';AXp5gMd<|b-_)]?L>U4C%.#{2ZC1 8/2Otaa}k/&,hf|E.oKN<ZU*0fY< tQA|=' );
define( 'NONCE_KEY',        '+IzN/O{igtC^!LA*f1(ww7DD14[nEkjdIfkdA`:r?kr_AekpDuw}S,G#hX1w~0Ff' );
define( 'AUTH_SALT',        'qmtPD#IX|tB9#qk|9pRMYES|?WYsE[~v&=~)*^Y;sZLIB5_b$-#;Q4[{%e`FQdy$' );
define( 'SECURE_AUTH_SALT', 'nhA03LZ0>.$!GN/Ze>4:fLCFPo;z_a_,cD~D<{<w!q64u<#P%cdc?/a,@SOz1O9p' );
define( 'LOGGED_IN_SALT',   'QjTk|*C_%=#8VVG76J$hNk8E,gl{wZ$?[RZp@p6.9=gxS O)9AfN7mu=QCC2sq/8' );
define( 'NONCE_SALT',       'DIoh{E,|^b?UOqgq@iXOi9YfL<:J4FF]eO,&}4}}T6S_#xF9euXkhxCxrOd=}Rvj' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
