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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'seo_1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '|xM!wN= H2^3h?u-H44`rJ@Fb-l#IA.[hOZ6m)-M)#,N!-TaoKeXJ)i*(g8f(djE');
define('SECURE_AUTH_KEY',  'uP{]hOGRE03]/3,@j*j*h OxsDKytIhQiIr0TpxBFwxRL^9!U2^|SF>y:o^#`vvY');
define('LOGGED_IN_KEY',    'jXyRxK=%=8Xr1lT|FkBgKSmU]l=o-%2^o2-H)z,3NmFQj[+13,.l%K1>Q$nQ0M$$');
define('NONCE_KEY',        'AnZ*p~V&dss_l`ht/u%vcyiL~@X];7:%+CB7Mf,0^G[kgZK&t)=]C`8n2N!qgzZ|');
define('AUTH_SALT',        '$,A.ur<#!Z!]Aj@99&X`sw=5M#>K<}nGEC`9!p)e[)<wmLRrny>z|=KZ@Iq bB+V');
define('SECURE_AUTH_SALT', 'q7G`XLtTqFTCkz5/,6|ctW!TXK]uK`E-H@Lb+;],m)C-h9k+^oMfBFH+E.:]5+78');
define('LOGGED_IN_SALT',   'KTkhp{z-Q{3CZ$?T9#jx-<:h ;8k}S<@XwuaEerq*=j;V>OSZ!zeR+?b69DBZeF]');
define('NONCE_SALT',       '*8rKHTm Lh=t;A>xa@e`r,}xRelHX mpEtCcITyP.*@(34Lv/R%`<p!4~1DVpTC2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
