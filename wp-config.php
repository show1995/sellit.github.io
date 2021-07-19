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
define( 'DB_NAME', 'sellit' );

/** MySQL database username */
define( 'DB_USER', 'sellit' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qYaYQLRYMqmNEr7g' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '?muw9L:J&8?5iz_xC+H#!E{wFXl3:h0B:(GCD+O(=w)IY,#aPj2cfnm6}+Y!EF&D' );
define( 'SECURE_AUTH_KEY',  'A+j-.?,x  e_IX5JY4DD++M:4tBxu[r|US96ObFZAyBe#t;Skic+*} ]t6o1?_{N' );
define( 'LOGGED_IN_KEY',    '!Z_T Dt*x{ xcaRj+o}>1dL_XSNu8]47H*:z3[AK.)9XQ8o~R9-9y;~UV8S@:>cH' );
define( 'NONCE_KEY',        'r;CM7?KkY_,UQ)&`]+1U:wO`D8S9OM*KWul(t}`jyN/$.R)*9:kok#9ozc01pG:G' );
define( 'AUTH_SALT',        '&o]e*iDLqnJ@E~gZ^&}y_v^H:1RLLv3ydxt%bxQx3}~>t9bT0MATixVMf&Yn6+3w' );
define( 'SECURE_AUTH_SALT', 'iluK*puh*Z{/eBnG7AaI9{[;TYLzc2U-rf*i<qsaQFP*G~5G=86(]f2={{(ZObkt' );
define( 'LOGGED_IN_SALT',   'g($._MH1COsV})mqSk{-?}1Mo)cpQluL8j|n oj]rLB~Q-xFO2p#cv@y+yo`Os(#' );
define( 'NONCE_SALT',       '=,W.7?x{wiM?wuMt7@h$-V43Z7{wEw)7XR<ZI%Z^9aJD-{a:IL?&v|RO^v&%mFMI' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
