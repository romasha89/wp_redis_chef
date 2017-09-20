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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'redis.mdejzl.ng.0001.euc1.cache.amazonaws.com');

define('WP_HOME','http://d12tx514s25hdf.cloudfront.net');
define('WP_SITEURL','http://d12tx514s25hdf.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_rds');

/** MySQL database username */
define('DB_USER', 'wp_rds');

/** MySQL database password */
define('DB_PASSWORD', 'aurora_wp_rds');

/** MySQL hostname */
define('DB_HOST', 'wp-rds.csqkzhaljb0j.eu-central-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5H$9ih0fc)iRp5]V.I{Aw|zQn0~j[()q{[EY$qiXUIz-uC~nD,x0k*4*C=;Xv&+=');
define('SECURE_AUTH_KEY',  'tT*K7oN|Sj |:;wEf$6i^8kx9sT9N6WrK|gbRV}daYDL[!Nz,|Jf0>ZKoI!SQB}^');
define('LOGGED_IN_KEY',    'pMMz<v2$@x ~*R3UrT?:V~yo]TT%d{*OV4F4e|96nKseIk$;Y{<7433Q9S>4vw;5');
define('NONCE_KEY',        '2_bigms6XfL%T1hai,h}a6<}%HeD=K .Ikjs]O=&j)90qDWdb`eG+chomuqTrge<');
define('AUTH_SALT',        'o^fjZx53*~|Q)+}B!dCm*RmnudfG0f?W|++g*_ H=<|,(uXubb*o<c1~8F6*Z}51');
define('SECURE_AUTH_SALT', '#GeDKIXwklkf_G9U5= nDmoBLi1dCinI!Ev:M8EJW$1qDd.=rl97ugDHx|rq~i&v');
define('LOGGED_IN_SALT',   'AsMv/qHYcVf&32>pYu ?@V*2DpKZJeE{fYx$Lt6PvefPSkCOb7[;C&Xs?ChW^*Mp');
define('NONCE_SALT',       '~m:~:Ou_jxHQZ]uZ<M_>`Wr0Bhs(eBq=N(GGY5gi#7rpbozc5Ef&-9,-SFD`}?r2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vml_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
