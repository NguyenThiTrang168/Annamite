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
define( 'DB_NAME', 'annamite' );

/** MySQL database username */
define( 'DB_USER', 'annamite' );

/** MySQL database password */
define( 'DB_PASSWORD', 'annamite@123@@' );

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
define( 'AUTH_KEY',         'L4KYi?9u?Q&Dr}>,MF+Vmdn4Rtt/}J!% JgZ;idf|=qPOPa{VdFaFK6f353Pd,^#' );
define( 'SECURE_AUTH_KEY',  'PIbo2%3EMF0_$S0>)6l3&CTOQ81#B7yCWyS6(*t~o$+?qUp]EIx4^<u>gm~2.`]|' );
define( 'LOGGED_IN_KEY',    'j7wltnCJ!Ri-F;s-/h6<>{9;A,/?0Dm0 2!c?!(B?}=GvGfQ4SfC]qx;i~T YNrj' );
define( 'NONCE_KEY',        'l:N*Q8FNv*I)[Z5CP}6 4IE;7C./?$M rE-%97mry( BFPZC#;s/lkM3U;j7dDZl' );
define( 'AUTH_SALT',        '-&]:%UkO3]wqpI@mEZz|]%}@<X^lb e.v@*F?qo3$Qz9$?!FKja}lMcDuCCS{|i2' );
define( 'SECURE_AUTH_SALT', '&6ft(G#_`8{gze-opXt]%M]o=)DW[-K^`<t9yB)QSxO<rEiID&~!Qchga}nTpc?=' );
define( 'LOGGED_IN_SALT',   '5?{L@I*)6EM}}`hBuKXMd2iYG!Xi[` Arq@y{)60,HyuqdCk4KqHKr+96Es8E|fJ' );
define( 'NONCE_SALT',       'W/T=dEzpuQ$dVMIN2L?K!B_>{nQwh/>#;S+4jgWbv<lp,lb66e,EnH)WBGV(hp~n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ite_';

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
