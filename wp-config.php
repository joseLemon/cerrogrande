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
define('DB_NAME', 'wp_cerro_grande');

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
define('AUTH_KEY',         '9anra7hzag2ydcchx8idndnbiumlhxonakgsfcrbwhaupbnfvvxjjmzz3ndrwllj');
define('SECURE_AUTH_KEY',  'in63avsxly9uffjwiz3asu9xbszsnd46fh8tkzem5brwiuvt2mcpmesvdyhlzc29');
define('LOGGED_IN_KEY',    '39fvufz1omjycfnggh9lzorlq7m9wgj1as48ynot4g38rhxpk0krqzwy0taupf1a');
define('NONCE_KEY',        'ri0pfctzelkhrjrgxldwaksi6a4iudtpdhcmldy52qzzttel6xktklkumktchtss');
define('AUTH_SALT',        'garoatbt6ndxctghmmgygxf3ghbyelutmvex0ynfeohld9ip1phwgbdqtohcc2tm');
define('SECURE_AUTH_SALT', 'avmx6cmqr0qkxk6nxvguuchr9owiathsltvgl7htex9jy9j6qrwusvliupckk0xy');
define('LOGGED_IN_SALT',   'tzu3miikbuvlcmk2himczfw4uwbyuybpnjva6v8laoyaefmr0r7ijxvbifvtlg1u');
define('NONCE_SALT',       'iparzxg50lum7olresxtui1kedftadvrqgpw6ymhgruykarrqgazfmm5itz70bwg');

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
