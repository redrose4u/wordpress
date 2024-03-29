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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-LN6NRWXMH|H[|M~(>9 5~CW]-oSD4]=Zu%m5E{x^X C!nNt#laO~+ax5~,LxW+w');
define('SECURE_AUTH_KEY',  '0fN3-ST_Q|ZxkiZr(k2>n11NY(zXh`|<O8LQ@+<^;a/_l;S[hXv3  gJd}>CH}Na');
define('LOGGED_IN_KEY',    '`MD#|:Ur+C+OOFB*6Aki+NtKal;yXZ{ms^j6fmBUwYHTaA)0sjBNakgdy=3k-hz5');
define('NONCE_KEY',        '$[(n*KaB ezpj?-A::%)jP| =<mY|?aTClqAcT{-XtI{]jL>6`h >4Z1ide-nz:Q');
define('AUTH_SALT',        '3.(]W-_Prda{5h1&-(1f{&*UFvnwCA:]!z~J,#^)@{vW={+Z(8Gov-o*fSC69%hH');
define('SECURE_AUTH_SALT', 'nJAsmH6(G _OQIQF;K#x$A @4@+YC{/xNh8gf|@FB(OGE-:?~OE**nWrzeZX]U+P');
define('LOGGED_IN_SALT',   'Ga^@{s*5{~fSu9y#f*ZLl)nBV9Jay/tpp-{-gC}S/#LDo[v}40H21o|R!94)pflo');
define('NONCE_SALT',       '#]Uub?.F`2E{hi=.Ky@1-|@1}wY3OLiaEI%^f|6mbX4dVrToQlug][9Dacx$Vf!!');

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
