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

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values:
 *   DB_HOST
 *   DB_NAME
 *   DB_USER
 *   DB_PASSWORD
 *   DB_CHARSET
 *   DB_COLLATE
 */

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'odgJ3V#jqFM[#D-ph+UZCnV2Q?0sP]I^[lZkwKPP$)ZNNVxs-c+C3!b04$H$zbcB');
define('SECURE_AUTH_KEY',  ',yc{<BYbPdn(T*(kP,)veb.<5kDe^+oC6ql91#a~Wi5=Xz}QC:2=^XKp]]XTu=|D');
define('LOGGED_IN_KEY',    '}*lgr%0kaFxo1C{Xmjlm?I@1^mak>r@]ih}n-r<E#4IUzD+f5Pj%UM.Sb<278rd@');
define('NONCE_KEY',        'Eu~%B5J+52GY*_;Pz%wDZ?$Tg2-Hn6^:xA5nJMRG98s%*=,TH!,{#NE6#Z<@6Lz+');
define('AUTH_SALT',        '*9J:9Nj!_M-0ck2,>kKH3CzYCgPkiKX1q-zRrME!2,8Y[V9F3s,|lEThK2C:Mbbm');
define('SECURE_AUTH_SALT', '^N2uhc;n:-t5j60w$jsui[m(*D@~]Bn.NN-MRX4u#Zr>rk;=UWpNc~PhJj^T3il}');
define('LOGGED_IN_SALT',   '6SU#{vv1apWr$A2OkbZ:brb@zfg,EG]F3~gu810T*W3#FBwS:;oxJrSj;3e;.bv+');
define('NONCE_SALT',       '+I89KR_Y4G~xqp1WJu]QVejF=u:AK;R=Y02bjTiFE5)-0ocasjN<KQm(W.mUfZBs');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
if ( ! defined( 'WP_DEBUG') ) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
