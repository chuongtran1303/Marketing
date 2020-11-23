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
define( 'DB_NAME', 'deliportal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'qA1zt^>mt/]5oK IbQa7Q#mCB^2OGMQ5.}{GW-h5htE(ZT51XrDKqc*>1r]V;C.y' );
define( 'SECURE_AUTH_KEY',  'IR/Z>3Dhj^WduQew3Z9}6iP`I`+)[`FYF%uDb5q+Jm{q|SD.4TB4=R%pkM3ef{s+' );
define( 'LOGGED_IN_KEY',    'guIfbk@~M+n#tOAL;T$F<Fs;QAEG:{;dxOS0h=kDeqXIuEsv-(@.qd%)DnR%d2fB' );
define( 'NONCE_KEY',        'vxZt;%:NE+qnZ5MDJ`;^z;) $5Z3KKv~jx>AHG#(XLIxp{POI#[*l@41%nDU*_9~' );
define( 'AUTH_SALT',        'UXMQ(3+r(l;E]{z4/IAgS3 cDB{6f}9Ss0Rw@npfVHkw&3XQS^bS!yMM<u#W*oG/' );
define( 'SECURE_AUTH_SALT', 'DSH^fL@14/L}V!Hj3(S#B9_,~_+T0p0JXk<Yjig~-bq!CQk?kDSK046(Y:q:.hh,' );
define( 'LOGGED_IN_SALT',   's.+bXh3!D_7F9Jdm5Y[P=mlyQ9d=_-?hL%h<*ArA23-ksj1DGK5iq@0`h7zEEoU_' );
define( 'NONCE_SALT',       'T&<B?2hEa5;Du~80q>Q#B?Y&aMzS{<> {08mLy?tUY6c^u`xD;AK!3aby<E.dV5K' );

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
