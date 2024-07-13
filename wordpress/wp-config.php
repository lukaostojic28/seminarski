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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME', 'http://localhost:8222');
define('WP_SITEURL', 'http://localhost:8222'); 

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
define( 'AUTH_KEY',         'eIk@,/j)bMNy?nsMta71uZ[A$4N^}KG5x}+%|wWNtHtfzpD&vsiLz1Nk$cc^sD8l' );
define( 'SECURE_AUTH_KEY',  'WvCC%{JPOef@NOQOd)n8Y!tD@1%[n)}ug.` Q72QPH)L^Na?p~e,l 3<6U7()O`d' );
define( 'LOGGED_IN_KEY',    'c#k,L9llGSZwcd}*=Hoj;U+%M5{7p9;3Vh7|Duc:0Uf.>0wA:~?$(zl31FAm#DwC' );
define( 'NONCE_KEY',        '_CP~AkQD|0/7UWErJwjrYOoUs@Wkt%TgXwYAl8fjEhn?R@>!J~RK^?0GZV[%j~p<' );
define( 'AUTH_SALT',        'T].#Z]n H3J.$@2(Cvn5ZAu<HyxGo%q+{N?K{RnolYSUVkA[A;qEJGviDWY3|eB2' );
define( 'SECURE_AUTH_SALT', 'rdBaDr?iDM=7+Lq^viBc`u3QMeB])C%jU`(Yx-F56E8LZn^a}H>)S5O$b7x~,4#0' );
define( 'LOGGED_IN_SALT',   'Uf7Vj]&-a1@|(]d]J#tXDHJ1*-X1gtsxjYGwk0ZwYm(&`cCQemkuJ9fVJQs*<0$Y' );
define( 'NONCE_SALT',       '2B*e-?`}7Cf3.H:+$__jyuZGmsgS]08g.k=y #4:[(FN(=nx84^`j8UJ,.BFx}`5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
