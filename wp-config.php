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
define('DB_NAME', 'wp-university');

/** MySQL database username */
define('DB_USER', 'gitavares');

/** MySQL database password */
define('DB_PASSWORD', 'wp-password');

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
define('AUTH_KEY',         '-1{syaumkCuHMNh=,`mgqOR~tb+eu5%c>[|haqqW`Y&Mw}3rRu>h2KpJ23^Tt|Wi');
define('SECURE_AUTH_KEY',  '3b,VC4N;QUm=*I?K]-h@-sN5M#,ngtLX&:;ussI+LzF],2R(~:]%|qT:odO@a]V`');
define('LOGGED_IN_KEY',    'SDtIKF_.yN6SLuIUz^om(|8ETYZXXeU9u]_XB; +-_!y^MOgxk?L}zZ,b({!+L(d');
define('NONCE_KEY',        'xgdw]@MUfvAUixr2.gx3R>{skXmRES>7tkgLM^BU*)0;}U0uw)t/nD[Zk`Y+:F7Q');
define('AUTH_SALT',        'OK2]X0Lyw)vq&|~zIM2{O7)dSEW tb$6v1``l_Ykr?T[+hVk|g[O!7&U|HM_e]~z');
define('SECURE_AUTH_SALT', 'v{Wk,(%MxEA`XGOd#%pz7^ 9J7YF`2*e*1@,+efT1:|3uGCZ>>w{@KW[f{C7cDU)');
define('LOGGED_IN_SALT',   '.NB~qUC/qztEljMWY(`Yx).[|/7Bw2d[0,yZ,9y`X|)Hk8#- h m+$b2zteg`6HV');
define('NONCE_SALT',       '<638uzlvn^@Slw9PL%<_$#|Zyys4xrD>|1gaS2okt9Vr6zL2!#p8>zS5b-u27;+n');

/**#@-*/

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
