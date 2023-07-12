<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'training' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '8~^AzWS%0s^o8Q6zQem8J~V;=:n~Ii?kE3_lPhP7tM~M!nq2i`Nf%{S,i1SSKbQq' );
define( 'SECURE_AUTH_KEY',  '0y/R`hWt%57ANkhVe?Bx&)O-&OiNY^4}3pinGx69w3-1*d(*}tpWp5Eas&+UOO+v' );
define( 'LOGGED_IN_KEY',    'PjR?@wcl^7,})G]ABnj9SKr|tI6`nakc^%<tEyKd8x(Er6Cnh%Q([h C#z5yCT@3' );
define( 'NONCE_KEY',        'Cm2,yAO?dl9Evc$#g,!TN=qLVHciR{lh~bz]P)I<Ix{5Iwwr?@J&breV7:#^TTiY' );
define( 'AUTH_SALT',        'y]d7*du+3?Rx-T,(wy}DS=i;S%O6exL^%d(1M-2 .X}~hc~*KP?jh&Bax}#onqsa' );
define( 'SECURE_AUTH_SALT', 'oU(<:<Y<] Uti$?W;{4Q{fmRxRK@c.uR!HiP%[OaRqKw$m<P(W//65PaYb5+0O+B' );
define( 'LOGGED_IN_SALT',   'bxX;=@rAcf`0I (/^AutZx0I=WkYzZp!b^Tzz/!HFE~R5WYw rLIwYv+B;wI&bAs' );
define( 'NONCE_SALT',       '+%P$Au5LkS/E<P,up$xs7w%8[:gL41,!8zL&dP%|z:<f-<mWv9h8W=e@%9^+ ]E@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
