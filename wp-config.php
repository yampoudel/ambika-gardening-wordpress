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
define( 'DB_NAME', 'ambika_gardening_wordpress' );

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
define( 'AUTH_KEY',         '3,PGYvIJJ<]&DhCp.=/[/T&lB9}Qc4CVmu/>/Y,!V+ |5_,~GJpA=O-`SiJm2Z}Q' );
define( 'SECURE_AUTH_KEY',  'a5;_2-)x6dD6F,)O<?R}Vfx^*%uQ(O7TIaJ[NrBpn/@9=W^%w:>s0?0LsB>`=kGq' );
define( 'LOGGED_IN_KEY',    '-3)G5;yv@I[}zA]|U5Whin?U1NTzGObHwNqqEEmeC4rhY6#IParPBHnLv72P!1sb' );
define( 'NONCE_KEY',        'IT;)@SD-^ts)7$6r^wu0aBLYS_#K|7%l5!WRThI:%KLI9 .lF;P6I/?}.Y)f*Q4(' );
define( 'AUTH_SALT',        'tYL/TE&f93g-1lJM^w_.Xz1ucU#HW3rzsr<Ikr32pnft6UjD_qNwBCH .<47#k-c' );
define( 'SECURE_AUTH_SALT', '[ED8](O|QD.mEaV|&G&r*lOs{~t7q%PAQ{ahC`eK*8:jgB2Gbga#0rhtI!Cp{K6B' );
define( 'LOGGED_IN_SALT',   ' ,SZ|~VS,L![bT]Ebzz)H4l9!@H)| yj]],O8dHr,T|G/M =5pr}a8}88&|}zdIB' );
define( 'NONCE_SALT',       '*ekrU#[VvK]S(]}>|i3v(TV;{dH!s5/G,fOx-QTTr7cp[jkPz]:+0=lAPvAU@hMH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
