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
define( 'DB_NAME', 'u868320945_terrasanta' );

/** MySQL database username */
define( 'DB_USER', 'u868320945_terrasanta' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Acelot.270290' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6xhhrfi6pjqx3kcky15i19qomqzbt2kej1mswh2hmnmykck19l8oe7qguasime9j' );
define( 'SECURE_AUTH_KEY',  'tg8hwaah9khpyxwff1l80qnli9qmsbzoxkacet49lyrjxeombenc3hmxzayfp2db' );
define( 'LOGGED_IN_KEY',    'ocbapkeyb3wzwqbtfgbcfbqsytd9rahynic4s16hlpvqeganquheh1ywjyoxqugx' );
define( 'NONCE_KEY',        'zdkm9waichfmp6u9ihjgrt5zr9o8psuecvffuladjibptf5sy1dced8m9pvyk6rv' );
define( 'AUTH_SALT',        'tll2uwtvewjljziypusdpmmyqcxmgprrb1pokss6tcrgvz5lmfskv3vzppcysnvy' );
define( 'SECURE_AUTH_SALT', '1prjjppytwueywlmehm3iuhcuqnemh0jano1oi4a5hiwjbfwblp6ofbwyrfbtvbs' );
define( 'LOGGED_IN_SALT',   'h5aaojpfpgchhrbcxshwu2ur4r3snwhlufibvojcr056iitrxh1fgldx4zmj22bv' );
define( 'NONCE_SALT',       'e5ebmjo1yyxo3lgbttosytw7ozg5ywewbsdlzq7bkf317jvwxn25ooeqqcvxwclk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wph9_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
