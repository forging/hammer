<?php
$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services,true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];

// ** MySQL settings from resource descriptor ** //
define('DB_NAME', $mysql_config["db_81f0380f"]);
define('DB_USER', $mysql_config["user_81f0380f"]);
define('DB_PASSWORD', $mysql_config["Q9FRha9g.^K$v9"]);
define('DB_HOST', $mysql_config["a.db.shared.orchestra.io"]);
define('DB_PORT', $mysql_config["port"]);

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define ('WPLANG', '');
define('WP_DEBUG', false);

require('wp-salt.php');

$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

