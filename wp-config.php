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
define( 'DB_NAME', 'wp_frontend' );

/** Database username */
define( 'DB_USER', 'jarek' );

/** Database password */
define( 'DB_PASSWORD', 'jarek' );

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
define( 'AUTH_KEY',         '!p$BAo;[[ZmA17r&)By>kAifm1e&O6=Ho9KKD+XNHwJWE WWk@LnN8~{nJ#8a?81' );
define( 'SECURE_AUTH_KEY',  'O&PZvF_ |,sH{/4>o!7@&1GY]^F xm[VR[-O&$7f<gg&!Y-0X.`rL|g&cpS>KW|q' );
define( 'LOGGED_IN_KEY',    '4/QKZMcU3o!/aif$-O5r(^KwWrw|b81t*vOCE8/LX~+S5&YPww 7Iac}D#j&alT;' );
define( 'NONCE_KEY',        'P3QJKUR1H6G;Q_kR ;`||{mEaNeB3 *noh*xG7l^sU!IT^+99=VfD%#R?z P|f]R' );
define( 'AUTH_SALT',        '?bRZiI!zdaAefPG 9HXYK2Tiiu@:FS`~Y]03.FXe)!3|04qEDzrrcmg=wKr*HB5%' );
define( 'SECURE_AUTH_SALT', '<m$N}Ie^htT)C9+u>(GWw.+Uq}OQtw?RkE5Bc-n$ZLVi8p):s%?@xkV,x`Sf_Ao1' );
define( 'LOGGED_IN_SALT',   '0[KuY7]{Pm[94XKiJ!jfajST;bB5EC=*N9auevSt!H~9:T)hJ08;5 r9%tfbinZm' );
define( 'NONCE_SALT',       'Klyy%7fw4$4MbSf;@B #7RH.4Jz9#=D~^`J_/VO&c9M`} Jh1?lm.kJ vR4n7M>H' );

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
