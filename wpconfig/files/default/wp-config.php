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


define('WP_REDIS_HOST', 'redis-ec.m3jnty.0001.use2.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_rds');

/** MySQL database username */
define('DB_USER', 'wp_rds');

/** MySQL database password */
define('DB_PASSWORD', 'aurora_wp_rds');

/** MySQL hostname */
define('DB_HOST', 'wp-rds-cluster.cluster-cztjfnxohl5z.us-east-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '1CfN72,^-r`D;hO.`^vwM8Qt{T=`3Xhu/>h&o5zGb:d>PfRA~n&e?,qsQs#1},]f');
define('SECURE_AUTH_KEY',  ']xtD4e8chj$Jr1;hTESk h;$*Pjc`)R9]4yA?o4DKQK;_p[Th{Zr9(^3GLob!uy+');
define('LOGGED_IN_KEY',    '?K&}]_iEe.Am%G*ci:?b*R2@_Pe:oQo3=`DPS14;@ HH3x)8cb#%zUk; O}E&zPk');
define('NONCE_KEY',        'ZX -qAH/LTQE.1&ZEQRYW6_,+dTBTJ6^bHN7b%jr5.F{Us&5FhEiM?0o{iisZJjA');
define('AUTH_SALT',        'vy{y ^f&d*R!z|MwhOV`Z^>1/T+V9|hF,xL_.{eSp|^;[&{^FY,lYw@a,*SVM^ec');
define('SECURE_AUTH_SALT', '*3c?okn1&.t{tJWGqL+}U>>WaV~AViW8DV|Ba|xb|ptQ8Yz,B}wK`Op! LEsIA(w');
define('LOGGED_IN_SALT',   'Sh`p$~KDlDTCzy>zUY4Xot;uB~*S<;Z?cW* jTFIH)$)!E20=Pc T#u`0?#x$w9)');
define('NONCE_SALT',       'J!6[/i4CB<~#Iw+*Yo_aH>#@.?$HAI$>8J7nAN|&$C#yaV5Fu@]5k5jaosiJ}I_?');

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
