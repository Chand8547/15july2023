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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chand_practical' );

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
define( 'AUTH_KEY',         'ZPig;:s]mf*EDqad-`)rh=G{cT?PQH90=JN#S5gvPfv%yUunT,jfS08GS f[|fnB' );
define( 'SECURE_AUTH_KEY',  'H8OB28xZVqJZO&As5hcFR)Y`,T;n+CUJ%0t*Xi-UwsNN``UZ^ah3nmwI-5w1d!gp' );
define( 'LOGGED_IN_KEY',    '8<bVqJn+M[CYHU=bjO3Zi2E`@TGtA?{Adc=AU+a4,u-Z:DL[jA`lXuZ,@xt/v/v|' );
define( 'NONCE_KEY',        'eQXe]KN3mzROml@},rpYrM&~NaFrW@vZR9dl>tB&Ybl_{QYhkEyiZYr~TLV?:fDJ' );
define( 'AUTH_SALT',        '+dEYn?3weV^,1hIIn0. ~`QA~rPr7I=w{`2<T_R{G(+?E-i5[&xONE2IMGVvHbat' );
define( 'SECURE_AUTH_SALT', '_=cACEs&4q:r#iSsBRtg&%R$,uNt_,I,ItM7$?F0;7Uf+Q1dWoF81??UITg#kiY;' );
define( 'LOGGED_IN_SALT',   '.c5{KR..(m`heDI[H|mv/uWKf_9*z_q$i7{smP:OT0mok!)Sn?9V,f$qW&G*2][r' );
define( 'NONCE_SALT',       '2%=Ze_hjMgbj+c9Y8oGhl)Zii&?EcM~ij-oauEa-hBemf`Iw@FfNp2*>kxW:qdPW' );

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
