<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());

$sql = "SELECT * FROM interview_invite WHERE confirm_no LIKE 'A%'";
$query = $mysqli->query($sql);


$x = 1;
while ($row = $query->fetch_assoc()) {
 
    $chk = '<input name="mailcheckbox[]" id="mailcheck" type="checkbox" value="'.$row['id'].'"/>';
	

	$output['data'][] = array(
        $x,
        $chk,
        $row['fullname'],
        $row['ojob_no'],
        $row['gender'],
        $row['dob'],
        $row['sentto_address'],
        $row['phone'],
        $row['stateng'],
        $row['localg'],
        $row['confirm_no'],
        $row['qualification'],
        $row['course'],
        $row['company_name'],
        $row['date'],
        $row['venue'],
        $row['time'],
        $row['venue'],
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);