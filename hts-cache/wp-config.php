<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'textmapping');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '+Dqs~pN)/|.`}y4~<*T)Xr@#`}cL0|+ 75DiV81Fye+?Wv+bJ~4|iQ#x[X23 Y_q');
define('SECURE_AUTH_KEY',  ':X] ``Or!9tTTun=:6O~7O2<g{z?z$mm{+6X/{`!T-FYFWn&[>IfW6.^qBa*YMyc');
define('LOGGED_IN_KEY',    'YOsEnn3~8gJJ8WRNxRsM!+m+-BQr6#}i,R;RR^+,&CfXeKnMw3^wc[Y[56_ef]yy');
define('NONCE_KEY',        '|2~1)AUDr?`[-/ Z!P.)_xdQ/,2Nv>I{Y>s+u yPZmr-j={NOa:.e<&{)>C?#XH)');
define('AUTH_SALT',        '~;;`-cCbV&4!PfTZXxkHzhMg1_?(*Sol([CLmqw9y1/b].^EJeFo+|,mZ(AF~{H{');
define('SECURE_AUTH_SALT', 'ubBC=$Sd+mC+e7|ROX/cb6D<7N)6;0yNBIz2io|;2v}_GQ xm-eb`WnZ1RpmMfFJ');
define('LOGGED_IN_SALT',   '|mBH)~>I-ef%CLCU/M/D-xD5c@i@:/YJE@Z034<B!Fnl(JRn{w3D{Z6(;~x*aMh5');
define('NONCE_SALT',       'HPER+[X]eDtC*4B-F] p,|-*umR![`cPcXf}[bL|%V!CzQ5I>0[h+c/FNOWfGQl(');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
