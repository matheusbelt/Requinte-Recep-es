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
define('DB_NAME', 'Requinte');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rx7aBU{Tl^[oz2__L[U-9an|D#8VjL9=`@^ck*yx%hY]TQGE$LW>K~0%d0o@!27F');
define('SECURE_AUTH_KEY',  '0kn*_7w!sLYzt<^ONW?!i5X%z@;[)VaHy|W =2R_`.>h/cCpMEWt)jy4PZ hGx.6');
define('LOGGED_IN_KEY',    'Uh[)5.65NB.6^0Z0,Du[2q2dY) h6cbaRPMiTt|j# g#sv|&?yiNzj>zN:$:^*=Y');
define('NONCE_KEY',        '9-P?pjnoYlfXTB8w?e2wOP(DgaB-+<YD[7BmfEw@gTKH>Q.jh!BOhqF5XGe[O3i9');
define('AUTH_SALT',        'ca<@uJer;@A)|)iLrZ{>G YFuNkSkMcW(Y.)8z#8uScnt4{]W[c|N]1yv@wy5s_e');
define('SECURE_AUTH_SALT', 'g8c:6UbEH0X1|/u~fE,TX.${L[. R$S_G&M]6w)!7sp#FQL,1sA%w=z4on)lPaSU');
define('LOGGED_IN_SALT',   'f_l]tl`10fdP}iZ9u,UAmfrsg[kA^<%(ve }@$PD;40`2_y3`^=Mxv}u+#:>I#Vq');
define('NONCE_SALT',       'LyO27PShr$7+U4X8R$$#)I>:}VC9=J!t9Z]1JC4UOvA;N+9?pK]tM|X4yD 3QJ^:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
