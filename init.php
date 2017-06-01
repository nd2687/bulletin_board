<?php

define("_DB_USER", "root");
define("_DB_PASS", "");
define("_DB_HOST", "localhost");
define("_DB_NAME", "bulletin_board");
define("_DB_TYPE", "mysql");
define("_DSN", _DB_TYPE.":host="._DB_HOST.";dbname="._DB_NAME.";charset=utf8");

define( "_CLASS_DIR", "class/");

require_once( _CLASS_DIR    . "Base.php");
require_once( _CLASS_DIR    . "Thread.php");
require_once( _CLASS_DIR    . "Response.php");
require_once( _CLASS_DIR    . "User.php");

?>
