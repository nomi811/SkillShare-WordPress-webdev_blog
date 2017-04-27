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
define('DB_NAME', 'webdev-blog');

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
define('AUTH_KEY',         'ifrRPZM(isoBLk{|n7[3+4a.%qa~aRbMI?Xe.&K7D=zPXaAuZP[mF/qKCJ|nG TV');
define('SECURE_AUTH_KEY',  '+S}DPSS?udmV`C,[l[Y4mvNJ|7Sn)kf/9=6O&|:u!aIzo@CxU!z3x/]YR6&[`aRy');
define('LOGGED_IN_KEY',    '!PV_QCm5+08#&W$A61(^O)OCYpei92aNrZQ0*4<.[|_wU>zlTD/jnlR)|G$&$NMU');
define('NONCE_KEY',        '[ MaM5F/M{P(>Sc/mc@%6K]|w!iZ_R;cv^h>xF,0?-G(|5][W4@D`g$)?4g^OZV^');
define('AUTH_SALT',        'G5lViCNRGbn7Wv]hy<g/z<Z?!)4H4vL9Rph }3{z`HVaFci@QwR{20SV7*Xq[p$t');
define('SECURE_AUTH_SALT', 'i3)@{}f`Vl3!pWr:E?P!QvyI)w6y4h;Y;Yh%`2k?,6DJ.k1PQG<]`D`0 F]F(OjK');
define('LOGGED_IN_SALT',   ':*:n(t y7DTZcKY[t`w+%D-%UO`Nr;!y0wA0W*h0#L/s[Zh%_BE2QMLBj65<1Ddl');
define('NONCE_SALT',       'A$Zlzn/9Z>UQ,ms )4c_57&`q03U5d?J@B;G!nBP.kajyh8m$:wGo=v,<B8/yb>K');

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
