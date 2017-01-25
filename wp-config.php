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
define('DB_NAME', 'wp_cerrogrande');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'LpgcLFsk[G6s|*@I`>M`1s1ZdqMMBORGqJU%;=x%Nt5%.v:If1S.PQ1IGg%W/;}I');
define('SECURE_AUTH_KEY',  's5Rhr63qaL,t@k>*tVv+O~@__ujI} f>=Hh8x4`]_2?{BvjV,ZB:jk4z;V Ctgff');
define('LOGGED_IN_KEY',    'wl;AA@{t){{|X@Z[f5vhl9^S dmh;|$!l(6APVv(#Z~<L-Y whP6EHCXpE/*U~@G');
define('NONCE_KEY',        'Ovya!wUaHG:/A)x@gfe$`-kj(ol|oAXPi7i?UFJdoAXV94;`b|>3#]_yw0!^MKW/');
define('AUTH_SALT',        '_p(N/=x5~WJwE @o~[JJ8qx%oBtm{|xEu0Bu#i2XGQ2*6:/u$!DUQ|dgHu+/We!$');
define('SECURE_AUTH_SALT', '*?z1#;Dd6U8ox.5&J>guZ=Dey&=DSo(HMkStHzR|=i-C>QJQZ&]U[nqLw(|E`7yP');
define('LOGGED_IN_SALT',   'A13B7H=}9V|H; 6U~K<Y.38~2}Pia;r brOYGO5w/7dJr4Q&vQkgwF-(nmb1pgY:');
define('NONCE_SALT',       '%-(r$ipNpZ8ZclM5]a9vEp0yPID7_nwEU$7 6s8x5G^xJf-oYhDOeE`3C4p/j})t');

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
