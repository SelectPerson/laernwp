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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%0rdQp;w&)2^0V<Fk40Tikot4|V4op0.)[RI@}u`Rq^Xn+hz*N,H*vqRpe?S-t1,' );
define( 'SECURE_AUTH_KEY',  '!V fpUmde`!)SOF9t*j)hQ(DE C.#$L2v@RyE$>ku`a||,4&9C (cd+R5)oi^22}' );
define( 'LOGGED_IN_KEY',    'n9?8^Bczp%h*d@xdkZ_>H/j,`UGvBq.^jU@{D9p5(in:|cDut-m{d#eoFX1K8(RQ' );
define( 'NONCE_KEY',        '&%33!4GI~w$8#;R`*=Wrgg@3ronw!$=W}qTS],~bB&18c?X*ggRf;A@0y6p>,BJK' );
define( 'AUTH_SALT',        'wr)n8f/ku^dm*YUi2okPrX[EH:@7EV-gF=6!=u:^47uo[qu}=MQ@~kW=i=#4(2D`' );
define( 'SECURE_AUTH_SALT', 'e:1mE7qvpZ@H>M,)Mqk8tj-@<.Gls xGw]% D4&C>Pg.E:ve69ojeM=[,A<6(=bY' );
define( 'LOGGED_IN_SALT',   'ue?FFDTK%@bO!X8-jc_**?U<9Y-sf1R]}:BI :LYeL2ui6c`I7>HL5nAeWUM 2k1' );
define( 'NONCE_SALT',       't?u=-9Cge8<T0KRBn#&Tg#o|1=/MG)b(`7g?*#ufs*H(|*xJM!9&;q^k[LuR;04 ' );

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
