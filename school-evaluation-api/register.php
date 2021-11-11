<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {

        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

        header('Access-Control-Allow-Credentials: true');

        header('Access-Control-Max-Age: 86400');    // cache for 1 day

    }

    // Access-Control headers are received during OPTIONS requests

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))

            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");        

       if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))

            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);

    }

  require "config.php";

    $data = file_get_contents("php://input");

    if (isset($data)) {

        $request = json_decode($data);

        $name= $request->name;
        $gender = $request->gender;
        $phone = $request->phone;
        $emailadd = $request->email;
        $sname = $request->schoolname;
        $username = $request->username;
        $password = $request->password;

      
                                }

$username = stripslashes($username);

$passwords = encryptIt($password);

$sql = "INSERT INTO user (name, gender, phone, email, sch_name, username, password)

VALUES ('$name', '$gender', '$phone', '$emailadd', '$sname', '$username', '$passwords')";

if ($mysqli->query($sql) === TRUE) {

                $response= "Registration successfull";

} else {

   $response= "Error: " . $sql . "<br>" . $mysqli->error;

}

 echo json_encode( $response);

?>