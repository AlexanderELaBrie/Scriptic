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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ox1SjffWNniv3vc9jWiX0ShH5gfXLYnloMid56ge0A3jNtt5twLxih2QYPJhEwCTnNn9glF5eBQhTSXf14oo1Q==');
define('SECURE_AUTH_KEY',  '1KBFHrGaN1OY4E5q3UtMOLZB3bBcYSufh40Yi7zDqyNAoYTj26U4vjrnwfjjsXuv+da0v8BKUMXA4O1veLJniQ==');
define('LOGGED_IN_KEY',    '1N8YbOAJX0pVb8iEnR/6u94Vt4Fruz07IoC/5HBYo6ffzutBFQItf/BeOUTs8BYC6Fu/SYZCPgYSIHR/mU4DOA==');
define('NONCE_KEY',        'AsS5lmLsF903XD1sNumK9IjElXWXiCWCbrNjFDQakFxw0x8451kb/r/eYguMkm2Wqd07gpPIUzO6QWYTAJNsVA==');
define('AUTH_SALT',        'ES0p3HBQrhfGZ/5cWqH1cH2FCmGhsR0RMShQQsNNRcIhm7a48skz6298ckVW1yLE36cETtTRj7B6pl8UZ9+mHQ==');
define('SECURE_AUTH_SALT', 'RdyIdhekgsygAKJNRVqTg8EIZp4TKYu3cZyyIBkauQA952LINjBf6Iu/kfk3vy6Qt5ZB/Ak/5J2WrnmYP8QHMw==');
define('LOGGED_IN_SALT',   'cPJ3tBffVTqOO+Qf/ONux6+z0GUxAcOC+ZgXDRFFNLYG74kdu7KDW4kpXEUywxrhVbruaJBGi9NjHs14NfKiTg==');
define('NONCE_SALT',       'RCjlJOCc9nPzU1dGJO2njMlTH5Kt5Mumu2PyTgDWFTw5pNOeZQLnKDt7wMtRO/lOrc9YoczbNsT9u2+ygYOcYw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
