<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('AUTH_KEY',         'ZpX;cKxu+@wkUOd3Gx{x%[X!Oe,o,zJe$}v;?P}:PD8q$|p&dQ-j0<&f?-$s:+od');
define('SECURE_AUTH_KEY',  't|RZpjFC[DA&rE9 UhRfIVg|ZcBym0a|G>/+X@Pc1{GDSm/C-**h2QIBup?e7r2m');
define('LOGGED_IN_KEY',    'Rtf2$;ozE:,lR}3?ma-ep7sx$@$YFwY=.F&,S:yaLd=m?W00$9C!O+1rVM/7.zj+');
define('NONCE_KEY',        'ZT2 ]4(<bD*931[k&.Yc-%K[r6:}ui.-!,A,u5N[A4xGN2wSZBtd^|&c3jZt|v:o');
define('AUTH_SALT',        '~#j<9H31M~|(J_Fq!eG8D3huiDVCGsfn]8;899*Y7pojy(<eH,Y)rybR{]E{0{/%');
define('SECURE_AUTH_SALT', '53D| gz1YM#adgGdm@k3~>b&|{I^?^6>R!AV7EH5h2!a[k;.35BrHXCjDGI&j%)i');
define('LOGGED_IN_SALT',   '~chSh{|5ZJ*m=|f^]@HIRl&(n/[]Q~E,6[c@?^<[rIS|bvG#SH)4NtT6[[UhX+?O');
define('NONCE_SALT',       'Q[.`c/fnW7LqTk:  ^a*8y9tl|an!UTVbW3CO3fY`jLllDuS~7fsF~V(G8Dj;V~4');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
