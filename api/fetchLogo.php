<?php
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


$sql = "SELECT schoolLogo FROM sitesettings";

$result = mysqli_query($db, $sql);
$response = array();

while ($row = mysqli_fetch_array($result)) {

    if($row['schoolLogo'] == ""){
      $ml =  "http://edomonitor.com/totallight/logo/avatar.png";
    }else{
     $ml = "http://edomonitor.com/totallight/logo/".$row['schoolLogo'];

    }

   
    array_push($response, 
    	array("clogo" => $ml
        )
    );
}

echo json_encode(array("server_response" => $response));

mysqli_close($db)



?>