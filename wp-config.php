<?php

/** Enable W3 Total Cache */

define( 'WP_CACHE', true ); // Added by W3 Total Cache


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

define( 'DB_NAME', "wordpress-reflection" );


/** MySQL database username */

define( 'DB_USER', "admin-no-pw" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '/9#[xbi5gF,?|Y9Sc_%H?dFnm4t-l{_{^~^0]X>#`i2&e&KY 6cB-jqLuOQV#9Ak' );

define( 'SECURE_AUTH_KEY',  'toEYb (5^fqEbqwGg.$Yjw:b~2 +7%8[x#]4gNu&oC{E61{0wGt3(EM>,9K)b3JB' );

define( 'LOGGED_IN_KEY',    'Y3a%=3tm~1r{=JT=4V|+{HJ2K2w3PyR(A:PSz|LS7q?- )3mF2cVgEn69:yDy*~^' );

define( 'NONCE_KEY',        '7;(=thi]X4t>a~4`?VQB:ji.#N?3L-]O_SpdQRVQ$mK:$*dGf{cCCoGtp0QcxVi~' );

define( 'AUTH_SALT',        'w03*~9(x#ZA6rQViv3hM4`N;*jOQ6%;*>sPQgIr;VhVzAkC4L{9pKo7aOfM,fx#l' );

define( 'SECURE_AUTH_SALT', 'Uz(PLej:IRy,K7:vN7$?..(0hGX(VyN,C_8R~d=Qq9!J@5vSe4qGQ2xsW+7<rlXL' );

define( 'LOGGED_IN_SALT',   'YU#h~k?zG95gIoE_0&2+,2UG+Cz_^@abRhi4(rda x2aZ#X1XywTO=@l~@n-xD5x' );

define( 'NONCE_SALT',       'Z[|)P.4ba-ZIN5rWF(C+st]pY^[<rAL0xb86-^r<U&IP:/+P<w T5a*L?#t~|{Cp' );


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

