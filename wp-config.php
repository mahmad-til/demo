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
define('DB_NAME', 'demo');

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
define('AUTH_KEY',         '+du=;m1P]sJ-~:$!ZGnVBk4n:_=XTVq:GQG_!$4{Q,Kx<YB-H5d}gd:~kML)>HN#');
define('SECURE_AUTH_KEY',  'LGp}*`| !(w~Lvy)+7g0G* %UV^M_m=d`wtYX~~bA;k$v9)71][UAg<0SZhJUYSH');
define('LOGGED_IN_KEY',    '>e58QIrk*}7G_6oK9?~(XYpn , )u*wW7qGIs|WRr%Amr2VK}B$LwA)@; YB;H3x');
define('NONCE_KEY',        '[>aMs]@v]6!neXt|&tA#9ZkvPmLn{o@G*?XKNfe`VdlnXLrX/lg05{g_$)~fgE8N');
define('AUTH_SALT',        'tcWU0U)8lVZ%7Vo}c~lt(%Gq$}nL.iQi;!9l^ETDR)3*_J6K>.M,H]u[U4C:[69E');
define('SECURE_AUTH_SALT', '.iS~ci=yvxbrS&Yv`%qXhd}7+ZkWhd_-Qre$.cd$WcLD+ u;?L_9!@EbwN71#5qK');
define('LOGGED_IN_SALT',   '}L5NPse%?.y1I YN5lf~%uui 99f6E3vFYn(k3^:HF*y$B|ChVfBEQb0Xxd<~4-#');
define('NONCE_SALT',       'IA{p p]#b9b#3lHHZR@HUrEsaJ%VD^LP$F&qTbkZ[~>cGah%:w3-OS^K?V0dRzeq');

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
