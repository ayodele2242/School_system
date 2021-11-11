<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
//$snam = $_SESSION['fname'];

$sql = "SELECT * FROM announcement order by id desc limit 30";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	
	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#classModal" class="btn btn-danger btn-sm" onclick="removeAnnouncement('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
		
	';
	
	
	$output['data'][] = array(
		$x,
		$row['msg_title'],
		$row['msg'],
		$row['date'],
		$actionButton
		
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);