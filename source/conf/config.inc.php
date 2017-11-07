<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(1);
//error_reporting(1);
ini_set("display_errors", "On");

define("APP_PATH", "./"); 






define("BASE_URL","http://bookmydoc.techware.in/service/ui/app/");  
define("WEB_ROOT","http://bookmydoc.techware.in/");
define("SLIM_ROOT","http://bookmydoc.techware.in/");

define("DB_PREFIX", "scad_");

//Mail Server Setting
define("MAIL_USERNAME", "no-reply@bookmydoc.techware.in");
define("MAIL_PASSWORD", "no-reply-bookmydoc");
define("FROM_ADDRESS", "no-reply@bookmydoc.techware.in");
define("FROM_NAME", "BookMyDoc");
define("MAIL_HOST", "mail.bookmydoc.techware.in");
define("MAIL_PORT", "587");




$dbusername = "techwbzd_bmd_v2";
$dbpassword = "techwbzd_bmd_v2";
$hostname = "localhost";


$db = "techwbzd_bookmydoc_v2";

define("host",$hostname); 
define("dbusername",$dbusername); 
define("dbname",$db);
define("dbpassword",$dbpassword); 

include_once APP_PATH."lib/ezSQL/ez_sql_core.php";
include_once APP_PATH."lib/ezSQL/ez_sql_mysql.php";
require_once APP_PATH."service/data/class.mysqldb.php";

$scad = new mysqldb();

?>