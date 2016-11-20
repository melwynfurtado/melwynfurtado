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
define('DB_NAME', 'melwynfurtado');

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
define('AUTH_KEY',         '8ON@Lf1yKp5pKh9mD XyRufK~sKHZ}{P^Bn[m 9[D*!pK)/&`hrfJshq#rMdX=P-');
define('SECURE_AUTH_KEY',  '7B`_N*3|^&3$q(k lyGMD}%8za)P699*ZZoYsF0hnxh0>kpDL9Gu3@1hQ-C{.xiR');
define('LOGGED_IN_KEY',    'PZ|fFG9Q3.pqF#xwmqmo{ryF-1g81o_(X!SUirTtC$Hq>sI(p9:w6bc@(,>!]Go|');
define('NONCE_KEY',        '4chL=Gk)ftH-Y82TkXwS.(cWzxD9k/rc=Q9VyYDAM~m6W`)yoP4CY_^!]RD>pfKQ');
define('AUTH_SALT',        '`Ez7(}542x:rZo3}PJhT}(nuix~KY!ioNM?hq$&Vn]`p.dv!63Q4BH2%8aCK<chR');
define('SECURE_AUTH_SALT', '|KI>PCqpuaIVm_t }UZxl]RTWr3O,g3<$1o#&OJrAk+*QcBCgJk%#!q^8*?&;g!<');
define('LOGGED_IN_SALT',   '.d~Cc$&]0rqf8:2&amQ|<([CQ27d@#26frm6Ucc4cDX?.<fJD7I7wZ_Z4=EEiat^');
define('NONCE_SALT',       'vfEw+Q{&_8,^]JyHH$Q}*(*R3O2uXPtvi5F</(^9PF(:^@nfkb [h.QOqWk#Ggie');

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
