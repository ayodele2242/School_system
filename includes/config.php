<?php
ob_start();
session_start();
#error_reporting(0);
ini_set('display_errors', '0');
date_default_timezone_set('Africa/Lagos');
set_time_limit(0);

require 'en.php';

// database prefix if you use
define('DB_PREFIX', 'mp_');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');



        define('DB_HOST','localhost');
     	define('DB_USER','root');
     	define('DB_PWD','');
     	define('DB_NAME', 'totallight');

 		$dbhost = DB_HOST; 
		$dbuser = DB_USER;
		$dbpass = DB_PWD;
		$dbname = DB_NAME;
 	


    //Mysqli
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
	printf("MySQLi Database connection failed: ", mysqli_connect_error($mysqli));
	exit();
}

// Change character set to utf8
if (!$mysqli->set_charset('utf8')) {
	printf('Error loading character set utf8: %s\n', $mysqli->error);
}

//PDO
try{
		
	$db_con = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
	$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}


?>