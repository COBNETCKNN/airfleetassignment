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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'NtdpyjOG7m3ae4JwGcHKzCm5kLFa3WYhZH0YrcQ47g58EUlnrK2KtaPLq5m//+CZOjlg8SrwmGNmmu6lv6DQPg==');
define('SECURE_AUTH_KEY',  'W8ZxQcR6sy4N6pA8+64Q9m2sMOvczwnySXCcDmTUTHEwgl5nFXPpiHveydSyWqNRIbarYKWNNU1J8yXKefopCA==');
define('LOGGED_IN_KEY',    'yyUpFJ3XIK6bX1CrqXtqlka11V9uL2dD2ajg0ReggCUA4TQJ2ThswH2Q1FADDS0LF8Bp9TmH4q6aAsTq7YR0wA==');
define('NONCE_KEY',        'ZpYaVL2Po0l8Iml8xn+Lhimi8Fz55JGCrj0tCscXQfyZGt0ekTLMasvh1pzsqo0zEar3vf7DKQhnqLXumMPvhw==');
define('AUTH_SALT',        'msFZNety5DEecz1PDlF7YU0D14thiJ3s3nmlG1hTtHt9rhX4ygz9K5cr71ZEgfnsBrTmPv8uxPiKpqsAJke8TQ==');
define('SECURE_AUTH_SALT', 'aYHkHizNIJSosXoD20/YaXHLUBeRPZ/kCB1ABIWIbwWWHHGFHCxrRAHkIS5UP20fR5yParp7otbLE9GNoH1Cmg==');
define('LOGGED_IN_SALT',   'Hk/OyeuDgjWDwfPjleS8XD38TJZB/RRMSCnw+PvHLbjZBmwSILhTED7jrq05AqgrNrh0Vb5LoP/REnRiZABKQw==');
define('NONCE_SALT',       'zvcF6bAiV3+0Kol0s+K+RJ16NaxDN93xJqUBhL4XYQTPy6xm75BLXBME6OlbEkDqZe9zZ+vDnfG68yWAqiWVsw==');

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
