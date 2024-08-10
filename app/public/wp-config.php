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
define('AUTH_KEY',         'Uz6o84YUK+qwTBkiCKdZwTCoqLAXuvYtKSwJ9/aq2JWEK6Sh0l/dNM0R1B304iAy3nX5JlOAw5GfY0B/+BKYhg==');
define('SECURE_AUTH_KEY',  'BiW9YHC4DuESi0WLO1yJOQNaZip1Q5EtGsLIeIJqxn/qYlE/iv9Vd09sh92F/yc2eotFuH2n7GOsKnBq7tTtag==');
define('LOGGED_IN_KEY',    'vxar8mtRkXs9O6JOPYP6DtOHnT3hdE2KPUNPzOR2aPQhCB1gNYii663gr+udES0RBUTDTbv8llGKQlh4wpf5wA==');
define('NONCE_KEY',        'Hqtg++QMEvc3TdWUj5U11MlvhM3nCyWibVQUzemNBIa7QzfIVjJ58XpQ5YIkc6teiRvwWj1HnAUhPLTTmG0+vg==');
define('AUTH_SALT',        '1k4nAoMOO1BGugwJSearK6D0xlO71VH1uzX7UUAl3xFOtIr0leriHFlRpJ115B5DuEZhguOn8cT13WOD1j2BDg==');
define('SECURE_AUTH_SALT', 'PCQCUGiZrOET1dI53nqE0OQQxqZ1Ehb/EHZgdMwNA9T8aWGIVjsIjgW2dN62yJOLV60wsWol42ueQV+SJwrv0w==');
define('LOGGED_IN_SALT',   'fXRv1ERfR6ntcHMNndMmtjLgJ5cP7o/kVBlaepphk5FcHbcas6JI2fNK4FZyJEWRGFBDgZJOOfsxdR8AO1//YA==');
define('NONCE_SALT',       'NnRUrFKa9LQCQAUlzVDlIor+PLMPrzfmI2+RXlDw5lfr6eglHQX6VfLa/laVA+VwOPz/B8CQ92VMCZ1SX6DVug==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
