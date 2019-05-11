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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f7b69cf5bb22abf8eff76fcd2c4fee3861e3bc3559eb3b0b');

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
define('AUTH_KEY',         'n>?-(1vAJVD:{uc%x2y(FZxC(Zmz[i=?w:IxQ}#g5T:/f6L<&&y@$`C,[dmP^{8J');
define('SECURE_AUTH_KEY',  '1F!v1P7pR[I0By/9c p,)Qeid2o3Ml7# 28a1GTB`]nrz:(y]@O2EKK1${TA^9Q~');
define('LOGGED_IN_KEY',    ')c##Xj9xB;<OV v=tLiU&2&ypqbnZ=Q2{,{%^IAE;}t_c&!v#wPzi[*9L6l;m]y>');
define('NONCE_KEY',        'Bq;w:?{+N9:ppVoSy>%k!zJN,6O iT+f]FwGpR=omRi31!Pb?D6FmWX7+%d00V|4');
define('AUTH_SALT',        'WY374/hB?<7n~@.0$Ai&Gv&@6zta/Q0rtaK{zk?-h<C/ls~wA{CO/sk-4V*:3G/:');
define('SECURE_AUTH_SALT', '+2J~jxX)MX@a8+P8uk%/+<@??`r{=[:}avy|#qjl62,mHFR`ht]70C0MW%BeV0kf');
define('LOGGED_IN_SALT',   'fX3%uNqi3A39QFp2 yDHt],8.&wT,PjgRvc#RHs{wS^V4SG^z8P0Lw3/#@.sGUx:');
define('NONCE_SALT',       '>i6Ao,4w(q]RB(3^tU|Z92.J(=<?*wKe$rW.n#5Ep%.Z/ejd4G=[<^5Wj]XM6|Wz');

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
