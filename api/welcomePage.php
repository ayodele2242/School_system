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

$sql = "SELECT descr, img FROM slider order by id desc limit 1";

$result = mysqli_query($db, $sql);
$response = array();

while ($row = mysqli_fetch_array($result)) {
	
	
    array_push($response, 
    	array("descr" => $row['descr'],
        "img" => "http://edomonitor.com/totallight/imaging/".$row['img']
        )
    );
}

echo json_encode(array("server_response" => $response));

mysqli_close($db)



?>