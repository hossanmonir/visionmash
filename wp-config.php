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
define( 'DB_NAME', 'visionmash' );

/** MySQL database username */
define( 'DB_USER', 'mash_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '1128' );

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
define( 'AUTH_KEY',         'Wk0eDYlhstKn~5%5dueY@O9$;X1|z}K!]H?+mT]I>(V(<MxD?T9DK6&bAk9]Wi90' );
define( 'SECURE_AUTH_KEY',  '+2Oejql7ysvtrB<r{-!-9[%y2v{%^jp&Qh^*50ImEMc^CQ~v}JZPtO-rCp@EV9_i' );
define( 'LOGGED_IN_KEY',    '.]iqW>9YmBayn]5QJWvDm|eF*7mYWszQWNa x1,l>wS&->8iBDz;PQm{^VSBvKOR' );
define( 'NONCE_KEY',        'U24}.*^NEn~^uiponE%1={D#zQ<CWS+;3^<+~HS)7dy~oLlLV}8V3?B=k.pd{|(r' );
define( 'AUTH_SALT',        'jM,GmAy4j{i,]bWnF!Iw`^P4W1lj($vtU<y}.,Bhk2^({bNVU?ldRNc#lC6A Oq|' );
define( 'SECURE_AUTH_SALT', 'HaF_wZ.JT6bqPzIL}f&mz?Ydi,ahs[/8yaeHSN)5)3=Fbq{WSI}i{@(KG]$DJB=E' );
define( 'LOGGED_IN_SALT',   '(B2M![_`)tb/;U mm,vI=>:N .]:@evrbND^Toy::h@LaX1/#30O<OJGz|CjIutG' );
define( 'NONCE_SALT',       '?DSbw4p3Z|6F_Giti]o(bd*uzsCg`.&G5^U?}k|Aw<^vdQ9;bl~FFqQ>rc0`o$+L' );

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
