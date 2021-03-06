<?php
/*header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');*/


if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400'); // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    }
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    }
    exit(0);

}

  require "config.php";

/*$data = file_get_contents("php://input");

if (isset($data)) {
    $request = json_decode($data,true);
    $username = $request['username'];
}*/

//$sql = "SELECT * FROM staff_details order by name";
$sql = "SELECT * FROM employee order by surname";

$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);
$response = array();

 if($count == 0){
$response = "Invalid";
}else{

while ($row = mysqli_fetch_array($result)) {
	$name = $row['surname'].' '.$row['othername'];
	 if($row['photo'] == ""){
      $ml =  "http://edomonitor.com/totallight/logo/avatar.png";
    }else{
     $ml = "http://edomonitor.com/totallight/i_admin/user_images/".$row['photo'];

    }
	
    array_push($response, 
    	array(
    	"id"   => $row['id'],
    	"name" => ucwords($name),
    	"dept" => ucwords($row['dept']),
    	"img" => $ml
        )
    );
}

}

echo json_encode(array("server_response" => $response));

mysqli_close($db)



?>