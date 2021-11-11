<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());

$sql = "SELECT j.dob,j.id,j.sname,j.fname, j.mname,j.gender,j.localg,j.stateng,j.phone,j.mails,j.confirm_no,j.edate, 
GROUP_CONCAT(e.qualification SEPARATOR ', ') as qualification, GROUP_CONCAT(e.course SEPARATOR ', ') as course, GROUP_CONCAT(e.years SEPARATOR ', ') as years
 FROM jobseeker j LEFT JOIN education e ON j.id=e.fid WHERE j.training_approval_status=1 AND j.confirm_no LIKE 
'G%' GROUP BY j.id, e.qualification, e.course  ";
$query = $mysqli->query($sql);


$x = 1;
while ($row = $query->fetch_assoc()) {
 
    $chk = '<input name="mailcheckbox[]" id="mailcheck" type="checkbox" value="'.$row['id'].'"/>';
	

	$output['data'][] = array(
        $x,
        $chk,
        $row['sname'],
        $row['fname'],
        $row['mname'],
        $row['gender'],
        $row['dob'],
        $row['mails'],
        $row['phone'],
        $row['stateng'],
        $row['localg'],
        $row['confirm_no'],
        $row['qualification'],
        $row['course'],
        $row['years']
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);