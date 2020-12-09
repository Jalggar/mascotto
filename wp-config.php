<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jorge2_wpdb');

/** MySQL database username */
define('DB_USER', 'jorge2_wpdb');

/** MySQL database password */
define('DB_PASSWORD', '7h3lAukVhz5x');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'OG_~5e^sqJ&`;[2%/rq`E_6$MKpF9WIF16?aavRfr5w5_q>n>-_/FKKuG_Xij8-k');
define('SECURE_AUTH_KEY',  'B!D!|^F7Pm+<~j5k.o,.o>D|[I9I> M@c._fvr{{w+>OFUI4-u}[{JJLUg~jJ3:N');
define('LOGGED_IN_KEY',    'w7ji?P1;LHbOc_OD6wkS*=sK- V[?#]%RqHn%`KVvGAEAV[g[6&C4em^5*VO)2U1');
define('NONCE_KEY',        'Z&_0CP#qf)?* EvJK9[?E?Ebh-=F`})AIn=2+<K]FClk[%h0{%W%)gtW=uCqd~@F');
define('AUTH_SALT',        '*!=a8frsU$1F*KKp*QP56p~-]u_DzB0^IOF_Of1|v+AHe-~E0RF2$,bz%`H9+yd<');
define('SECURE_AUTH_SALT', 'S#~Tjh:[sX@Fsz0}[4Hh85E<~[T1,q#j5(L+HZZ;0w-tCm|(i-/U/e`zp]FQ%C 3');
define('LOGGED_IN_SALT',   '%Z-J}F{&9;wuU,8?Hb93dC+c7xtV<lZ>mwT(%|y}E1?UJPF*5^d^rqb(t@X3/..-');
define('NONCE_SALT',       's?{HR,)(~&oluv6-bh+ra>U-,Vrx,+|ujc-AYG9V>2-kw&FN-9@Tcud0M&sjb.&`');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'in_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
