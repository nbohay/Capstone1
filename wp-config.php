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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/srv/disk14/2119268/www/dbttherapycard.co.nf/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', '2119268_dbtwp');

/** MySQL database username */
define('DB_USER', '2119268_dbtwp');

/** MySQL database password */
define('DB_PASSWORD', 'dbtnb0hay18');

/** MySQL hostname */
define('DB_HOST', 'fdb7.biz.nf');

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
define('AUTH_KEY',         '%}_yJg3lhzbM2dj5K3OK/~q0gzA|1?,R|-%0Yj]]nc`Rx_>-rlxE5S -t R;m|/0');
define('SECURE_AUTH_KEY',  'Yll|DU#F2x@BG!w%E3J*[;HB#Htw!kmqf&W#fiD+UqxwFoB.Gp={E}+-DZ~+4W1*');
define('LOGGED_IN_KEY',    'yanq,w88o{tTXr?yC^X3Drx-,$L!Eoxd$KH&Vd{Q2;+#=_rYb| c0mcY]B3<=FRV');
define('NONCE_KEY',        'X#M=0mg{mL,fT@2W-q]d===[<{eDDKWAOj:[Br1Y58Jsk|G<?g>L1J-c]!!$uTbP');
define('AUTH_SALT',        '1:0x5pv@&e;NQa5_S2?|XW!IRa;^*|:rx{-Tc6`a)B2j[/g0Jr8d=aq)>`[5NQ!q');
define('SECURE_AUTH_SALT', '|,>YPHjxd~S *G[7xxK_EpR2|Ec|SnV8N<yfQKBSoC`<fcA--gEyUv<}==rPJUs4');
define('LOGGED_IN_SALT',   '2#qJ}n1(i6dpDBIj|!DcMkhs^/a{u&WSWmC.;xH|+m zI XWD]22a7?^ryv*4-Hu');
define('NONCE_SALT',       'Q+Bo8!Pr3p#9o{&6KPiJ!y30O-Wb*ku>6)RA0wFy-n+NfJykmt@uY_T={xh|L-hl');

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
