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
define( 'DB_NAME', 'pdatabase' );

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
define( 'AUTH_KEY',         'AEQoSl^-6e;=XI9/xxWq{|}B<pl6mR*8pRV:n=8.#2z85-_-wc<ZqD!4fBg.#~8*' );
define( 'SECURE_AUTH_KEY',  'jh8I+[CL]Yw^f!,7^=~IodFU-[vL]RkcTn}UVOP84_=?MFxDx5F <eWjiV7>d15p' );
define( 'LOGGED_IN_KEY',    '=Kv0[*2JnX|@L:i2!9mOvpUJGq:%8(PX4*cUubKK0ZGc^kk,HcuV[9H1<w a9=In' );
define( 'NONCE_KEY',        '`~S?s_uR!+uU^H^(/#h=Uyx5)&:dt,=;rJIn~,@&~zpDH$Z&(:Fb`7YU_vF-a/WQ' );
define( 'AUTH_SALT',        'Yt/hXGtR[dKCMSME^OhjuE(=C+zkv$ >@v C;q<X>3(.=oqk~YeB*g )iVCmej=D' );
define( 'SECURE_AUTH_SALT', '+_SwTi[E:26DY)]aY#Uf*P<buw{oB#eTSN%[!R4>0d.FKV9GW6&!m77/X,n-s$#:' );
define( 'LOGGED_IN_SALT',   'j3BxghWim8:G##w`nR*bJn]f*<Cy*A9GC<<M1FzZ~2L)9JLtiVfJVJrVkdu9[V#x' );
define( 'NONCE_SALT',       '%${NJ{1A w(B<dML1Kk1XpD4y_uZgOIpd1#>m4kP_5TT]VwNRj6VSSL<b]dx%2Ei' );

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
