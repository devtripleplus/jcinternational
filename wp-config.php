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
define('DB_NAME', 'jcinternational');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'JV|nfXG4L%IVluzECc3~5aD<4 W076]|}XS~W[BS}+<Y*Q_-Fz~6}t<PM}k H^xd');
define('SECURE_AUTH_KEY',  'wpq9eVu;ji]q1d@3h__A)(Tt%$8M8ETY&akN6qK1t(;#54%;b8MUg}suQAfv@@*G');
define('LOGGED_IN_KEY',    'xSCdEUQx-I3si$!{0!ZMM3fc(QZztJ/13pmZa9vvzW|Xa[ejuw;Fr>bF.FZU=G,I');
define('NONCE_KEY',        '6&v(c{T8ju@8#>|&28Cljm*ghE_j$_VY4:rgJ|9D0rM:|wYh-F&ms}/P}:vavU;2');
define('AUTH_SALT',        's@L+>I!/%@7>;}42idpD=FCZ6eJw_QyIzTAm1@9R5Fqaozck&#Q-mTE-9P7kx`0P');
define('SECURE_AUTH_SALT', 'q0M pUW8O%9u1vH*AI,L!#{>-C`(r;@o.gG&= ud48^tC(Jr^~.7lt?]z|Q} ,5=');
define('LOGGED_IN_SALT',   '@75pW`#lw76|kj51$ a[6L),qQFy90p/h&+b*::oWcz695NwE;Dz$OYcnP3-R@&+');
define('NONCE_SALT',       '{kFP(x.fZm lNa<&`c}>G+9QnW.j9u_2H^5zRw.k[nHX0DCINpo;<Q#.qBSzWePK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jcinter_';

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
