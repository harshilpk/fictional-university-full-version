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

if(file_exists(dirname(__FILE__) . '/local.php')) {
	// Local db settings
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
} else {
	//for live db
/** The name of the database for WordPress */
define( 'DB_NAME', 'harshilp_universitydata' );

/** MySQL database username */
define( 'DB_USER', 'harshilp_user1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Leonardo@007' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
}
 

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
define('AUTH_KEY',         'cd/6IwZzoEwrEMTwIiPfc/Ww7mZE7WYLM7p53wd2GjiDk5ydVyqD+iGC+CJsN8WTqellsjIzv71fMZC0peCqxg==');
define('SECURE_AUTH_KEY',  'XCcr9Q7auZ7blbqIdVZI6stm2KrXT81+DuJV8SeX4wfneXRuazi9GWvhR9KtoAsQGNu8Otxd7F1mfdJHtBEvtQ==');
define('LOGGED_IN_KEY',    'A8W4Wk4odZW7+Z2jUNYWz6UsnUy2TyqBxe1HunDkv1i6n3O3aSiJBnE9Y6YuxAVC4BSvAIDz4SqHrEZfutzFbQ==');
define('NONCE_KEY',        'i4PFndaEM+UB95gnchYIXOT6M9lxpwc67JTXCWVGBCtfOMU2IoGgUNyHyTPj0ZK54/OU09RgORk7UrMzME+E5g==');
define('AUTH_SALT',        '6wS3PeZbOLFv86CpJ/c4CwhLMRh2jLs5SImazJI+LKDz8Xf4uieqW5KKOt+wGK537/Ck7qY00zvu/998WDE4fQ==');
define('SECURE_AUTH_SALT', 'mN44FxaCK+X2ymk+8fOKiGzSqqRrxYSmLUYpeaCpb+yqJrGwDDSo7sHUlV9tYGUG1A909l9uaYVPcQl20Hy7GA==');
define('LOGGED_IN_SALT',   'KYnxsHIXOOgKIlMlZLyzoBblABphA/oVO2C48vnip8PLIGgkrJ9LpdvvGpXmgZgO6TEHp1vJ16EMJ5ojVqIlMg==');
define('NONCE_SALT',       'pkMec13eT4mOZYFiGWbCSf+4HAJVGQ8I5cY6fRwoJYJ5zN+oVhZknygjOXOLNzLkdvanZL0/bUE4DbpvkP1Ivg==');

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
