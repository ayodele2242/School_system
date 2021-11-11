<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());

$sql = "SELECT j.dob,j.id,j.sname,j.fname, j.mname,j.gender,j.localg,j.stateng,j.phone,j.mails,j.confirm_no,j.edate, 
GROUP_CONCAT(e.qualification SEPARATOR ', ') as qualification, GROUP_CONCAT(e.course SEPARATOR ', ') as course, GROUP_CONCAT(e.years SEPARATOR ', ') as years
 FROM jobseeker j LEFT JOIN education e ON j.id=e.fid WHERE j.confirm_no LIKE 
'G%' GROUP BY j.id, e.qualification, e.course  ";
$query = $mysqli->query($sql);


$x = 1;
while ($row = $query->fetch_assoc()) {

    $c= date('Y');
    $y= date('Y',strtotime($row['dob']));
   $age =  $c-$y;

	$output['data'][] = array(
        $x,
       
        $row['sname'],
        $row['fname'],
        $row['mname'],
        $row['gender'],
        $age,
        $row['mails'],
        $row['phone'],
        $row['stateng'],
        $row['localg'],
        $row['confirm_no'],
        $row['qualification'],
        $row['course'],
        $row['years'],
        $row['edate']
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);