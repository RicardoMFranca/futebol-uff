<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'futebol_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'B4rb0s4!!' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dklewb9zgnhh3qqkk1eg5dbqf39mkrewrjgjk2du0w3bwjgthg19u0wljvowo6ok' );
define( 'SECURE_AUTH_KEY',  '0wjmfrmq0ykwdm9zd895f45d7zfli5mbvr6ywz0fqko69ixeco1uo27qwwnijtsw' );
define( 'LOGGED_IN_KEY',    'lcowo0e9xcyuiwnlp61w46gbvpjc6kghbxym8kx4db9nhc2miq7f5w1mktrnip7e' );
define( 'NONCE_KEY',        '5qfvhcfougynnyjekmz7ge8crtrs0cb5rxowzp9yofrsajvdoud2vsvkwby1g4h1' );
define( 'AUTH_SALT',        'tuus5cfqupym6zgn76ootlujuxabd8k3ib9cmqdaziraabumadwkcnzbzxfidvki' );
define( 'SECURE_AUTH_SALT', 'epmqa7vyeouprw5j59bugyzjg6pqkeobjt71hafba4o4btxixfjqb7iw8da6vqxu' );
define( 'LOGGED_IN_SALT',   't6vgxwvsmk0jvqpykaeosnpmwdzjb4cy0rc0dqbrypiawtftvq2o6jynkjxl894a' );
define( 'NONCE_SALT',       'gqsioh09rwfnq7rdhpxqnh9oo9dzkitfgqktx4pyj4ipm9r5phm7ma9owqrwkzhh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq7_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
