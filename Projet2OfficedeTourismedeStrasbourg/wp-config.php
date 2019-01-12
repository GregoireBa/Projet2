<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db735477804' );

/** MySQL database username */
define( 'DB_USER', 'dbo735477804' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vUaKkwTGacpRXCFdlpxV' );

/** MySQL hostname */
define( 'DB_HOST', 'db735477804.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=4}%1Tefr0)ekuw*-`vaM%aotW9Y.+N@{^=ueZ?@235+g0-J5%pIlTi/5Y*oGEB5');
define('SECURE_AUTH_KEY',  'd+y|2$mf8<W:{1};CB1JX)5^>Gnhl]Dd}BTg3F?(ym+)*(&{)Pf ?m~(N#wEMI8A');
define('LOGGED_IN_KEY',    'H}2U<qmcj3Z0dV:6N|>=,1`;C>8*=mJgvaL< Y#R%vjg9j+8xT|ERg+Tqz5bbw@[');
define('NONCE_KEY',        'k#3u}MdPgH-IW?c_ ?XJL=v{1}+_m!-6v!dREb%8^e>#@z}.CWlNX@JO4RV3@$,F');
define('AUTH_SALT',        '+~N4|4FKXt*-bUrQ/X@;F+A%nf7/KVtSP4E-Z2:MQ ZL%av_|P&x7!N>5yljK{d@');
define('SECURE_AUTH_SALT', '=CF%ZqqJEIZ=8%rdWVx/+8){$B7?cX|+KD>f$cs~[,O!6eH3|?:4C`-#{-2]-sxI');
define('LOGGED_IN_SALT',   '1!|oT8vRewkM<E}=VvdV-z3(V|e@xt2V_c!MC-(zKq@-d&(_pQ+Y@0UCD^TJI#vy');
define('NONCE_SALT',       '~6Fun:&-p> ,jE|0]#dS<G<>X+1Pv3 2c%wMT(X1)+lI.7WV])$$26fL8imndX.7');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'LRxTmTIU';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
