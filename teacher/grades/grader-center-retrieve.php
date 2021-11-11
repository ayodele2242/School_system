<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
//$snam = $_SESSION['fname'];

$sql = "SELECT * FROM  center_coordinator order by id desc limit 30";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 

	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#graderCModal" class="btn btn-danger btn-sm" onclick="removeCGrader('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
	
	
	';
	
	$output['data'][] = array(
		$x,
		$row['confirm_no'],
		$row['interview'],
		$row['communication'],
		$row['ms_word'],
		$row['ms_excel'],
		$row['ms_powerpoint'],
		$row['average'],
		$row['date'],
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);