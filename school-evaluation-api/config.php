<?php
ob_start();
session_start();
#error_reporting(0);
#ini_set('display_errors', '0');
date_default_timezone_set('Africa/Lagos');
set_time_limit(0);

//require 'en.php';

function encryptIt($value) {
	// The encodeKey MUST match the decodeKey
	$encodeKey = 'swGn@7q#5y0z%E4!C#5y@9Tx@';
	$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($encodeKey), $value, MCRYPT_MODE_CBC, md5(md5($encodeKey))));
	return($encoded);
}

/*
 * Function to decrypt sensitive data from the database for displaying
 *
 * @param string	$value		The text to be decrypted
 * @param 			$decodeKey	The Key to use for decryption
 * @return						The decrypted text
 */
function decryptIt($value) {
	// The decodeKey MUST match the encodeKey
	$decodeKey = 'swGn@7q#5y0z%E4!C#5y@9Tx@';
	$decoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($decodeKey), base64_decode($value), MCRYPT_MODE_CBC, md5(md5($decodeKey))), "\0");
	return($decoded);
}


//Mysqli
#$db = parse_ini_file("../config/db.ini");
$dbhost = 'localhost'; //$db['host'];
$dbuser = 'root';//$db['user'];
$dbpass = '';//$db['pass'];
$dbname = 'school_survey';//$db['dbname'];

//Mysqli
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
	printf("MySQLi connection failed: ", mysqli_connect_error());
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


//mysql
        define("DBSERVER",$dbhost);
		define("DBNAME",$dbname);
		define("DBUSERID",$dbuser);
		define("DBPASSWORD", $dbpass);
		@mysql_connect(DBSERVER,DBUSERID,DBPASSWORD);
		@mysql_select_db(DBNAME) or die(mysql_error()); 


?>