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
define('DB_NAME', 'markitsi_blog');

/** MySQL database username */
define('DB_USER', 'markitsi_user');

/** MySQL database password */
define('DB_PASSWORD', 's@fowofwerf0ng9');

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
define('AUTH_KEY',         '^}Otggf`aeoCK7n4=}c15Ct0o1Q$ABy9:uG]ncJ|Jw[FoSI|bgz|@2?sq2o=IE&A');
define('SECURE_AUTH_KEY',  'VBhS:BVM($|T(vC0H|65O[2?sQ*wa/=q>w,}[p-nYUW+n:Q-%toX=) l-nx&c/`b');
define('LOGGED_IN_KEY',    'R#K`qnK^P_*6xE-Ukyf(hC&3Tp,J)ucn-[Y|B&6S]KH7NoqJlCr):=6NlKhFJL}-');
define('NONCE_KEY',        'YUC_=bK|+lQ#/,DZ ~rs,+aYy9-N/b7<Eo@e05961G/)+8p]r-3<gT:dE6`[]+S)');
define('AUTH_SALT',        'K},|OP$kk#-FdxrF4I<5iq@mz=>`PMr3#>-[2})<MxnI#$c&@{fd#Kb)NtG#Kr*>');
define('SECURE_AUTH_SALT', 'HX/-/!-/Z?P!-j0C+^+.-.3^6ws.gZJ {:QPxn ZK)m7>D%1637~ZY0c-se[y2ir');
define('LOGGED_IN_SALT',   '*tU_|Bef*s1oF?DTkh7+0]nP+:V)^C+m|-N7_~e4-1_TmW)!>)39Za@TAU<$y^}X');
define('NONCE_SALT',       'wrB_Uzc.@pjFQV.~>%GGmQL5?-L{|}]7VWw@!mx-;kIMkvCZC=[~<4c<eS:&-HJ2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
