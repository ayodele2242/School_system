<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());

$sql = "SELECT * FROM interview_invite";
$query = $mysqli->query($sql);


$x = 1;
while ($row = $query->fetch_assoc()) {
 
    $c= date('Y');
    $y= date('Y',strtotime($row['dob']));
   $age =  $c-$y;

	$output['data'][] = array(
        $x,
        $row['fullname'],
        $row['ojob_no'],
        $row['gender'],
        $age,
        $row['sentto_address'],
        $row['phone'],
        $row['stateng'],
        $row['localg'],
        $row['confirm_no'],
        $row['qualification'],
        $row['course'],
        $row['company_name'],
        $row['date'],
        $row['time'],
        $row['venue']
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);