<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dni_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         's1b|n7-Hr/bmi+@QuD9WtSLLf--7:mk/pM-X6~M+|>jDe7q%/AgJQ]K$Z/ +pX}`');
define('SECURE_AUTH_KEY',  'h7X?S3P{W4]l@{|g30#zy=?j-1Ikcpy]GDII=6#Z-fk57iHv#FM5MK:rmfj}G%Ze');
define('LOGGED_IN_KEY',    ',`>,48:*9]C,(k!{9xiLMC-Mpq[evJDxXP: %AYh5]#z14.@S^|T|w-UiKA :de]');
define('NONCE_KEY',        '98o}Wm3#zdDCIO8bzL(0TTd3fPE%]Pr/i,YmB5X(|,j)Zf2=%G>6Hos^sd2Y!i{0');
define('AUTH_SALT',        '=H+|}[hSHoxrlG?-i!UR#WC[c+%C$9 sQRMlr2<!t^haSkLV7{&O@>_K----dmF ');
define('SECURE_AUTH_SALT', 'L=Y6lNYe!%A{jM$/^i9XmUyLXpSWpi-83VpAB~y/+g&tmwr,G;PZmN,.f+i<bH*o');
define('LOGGED_IN_SALT',   '{_w>lwL<]+t_33V24bk6uJ1>>EyZ`K<:q6CWGP-iK6zmqyhs-+-ZRD<#stqT.rrT');
define('NONCE_SALT',       'Y8%$  =l/~V;75cv;jg`6&[wF$R^7I.F!| {K,vg9%jsS9>aMd7DM}^WJE6R+xu9');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
