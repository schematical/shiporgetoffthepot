<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sogotp');

/** MySQL database username */
define('DB_USER', 'sogotp');

/** MySQL database password */
define('DB_PASSWORD', 't3acht3ach');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'TsWL8Y$>U_#giifopO&xt=)Fq-I,0tt^j][eXe;1V<Eep0|h <3tb%goH^5#A:Ti');
define('SECURE_AUTH_KEY',  'QI{N=A$F{5uu1M`i]-|n;I}y+vPSyh>!Qcr5)*,U:9{^!<<;Bv`]rg#Td[Ty1omW');
define('LOGGED_IN_KEY',    'G^-}u$nD|(_%KC^,Y)GpF)oi>z(7DU_glS {4Udh*yn,,[s:H?ly|v9[<7gCvXF`');
define('NONCE_KEY',        '>w5iPK4aRI]4xR=ngg@-Jl9=J>%DHz0[M}z*3VE:ug)|C3&Unkg8qwC>LcwSyZ]`');
define('AUTH_SALT',        'Lnq+oY=y<(w=d_8%(+!+YlkE|ESvZmUG[z.s9+,yf(O:mjO(8}xR[6` oSBh8C&}');
define('SECURE_AUTH_SALT', 'xn.o/[f3~5aSjU:ds)44$iyQ/H5I&,~wr_|m|i}V{id[Gk3=_(x@Q.xh^y&-(F@O');
define('LOGGED_IN_SALT',   ')w^7~f2ITX]8mF!l3)lR.KEsTn,2|?$MOd)6xkFjm~#>X-*Oka+5CYN5GCrP :YH');
define('NONCE_SALT',       '*B8f;Y>9Cdot|J+z%ki>G:=M0}l5+[@LnDj/vg9N9/)l-*XF)xG7HS-2Il&5L}68');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


