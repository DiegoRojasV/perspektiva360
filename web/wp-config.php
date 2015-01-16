<?php

/** Include Genesis to use with WordPress */
require_once(dirname(__FILE__) . '/../bower_components/genesis-wordpress/src/Genesis.php');

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
define('DB_NAME', 'u716753302_wpweb');

/** MySQL database username */
define('DB_USER', 'u716753302_admin');

/** MySQL database password */
define('DB_PASSWORD', 'P2VgDJe8AB');

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
define('AUTH_KEY',         '(POW9wI+PV&|rlsH#o,{+cSY>n+xm${i~POjV6po*vOdX+.+$c|eqQJU|B5-Sc]k');
define('SECURE_AUTH_KEY',  'GGD-=MraNfEptx#y0}<hrc_|&(b-,A&xyk-~zE^ ;gbDd3?rD~PnG.7%WDi2)Y&h');
define('LOGGED_IN_KEY',    'Ji#}tU~7=~o|;_8W#UG,<Nn7!AQ)gE3O&VYuLH )0[iD(c%:m%4ev*%eY(.2{L@_');
define('NONCE_KEY',        '.#|m=Nz]!FN!^c[-7EID@:>-<Gf{ww#^C+mdKWy1$UiLG;rxff&I0vCGS/U@{Qjd');
define('AUTH_SALT',        'v*6-C1[/_`+1-IG}UV<mwt+}Tmdg5/6tnl+dWL~Jekn@(o,.6v9~-Ag%f+W>}zM.');
define('SECURE_AUTH_SALT', 'kpN8Ws8$)~E8lo8ln+tLG)2`=b]Ti~bNcPFciJWQkr4`z8uJ_[bonexvhM`1OpwF');
define('LOGGED_IN_SALT',   'yG8wyI*I7S.V=pC*{x]$Oo]u`O4OB$y~NNHjPV]fQ-ESXF5|P?b9ICNARBP7rfb}');
define('NONCE_SALT',       'WPR:Av4D-)fd.AU*]KL14>iFwlX&0_7%B=!)x70jjWTl-];|KznV!W8%zT|<tQw/');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', WP_ENV === 'local');

define('WP_POST_REVISIONS', 5);

define('WP_AUTO_UPDATE_CORE', false);

define('FS_METHOD', 'direct');

/*That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if (WP_ENV !== 'www') {
  Genesis::rewriteUrls();
}
