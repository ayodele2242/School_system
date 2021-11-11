<?php 
require_once('../../includes/functions.php'); 

$output = array('data' => array());

$sql = "SELECT * FROM jobs order by id desc limit 20";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
	
	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#editStuModal" class="btn btn-info btn-sm" onclick="editStu('.$row['id'].')"> <span class="glyphicon glyphicon-edit"></span></a>
	<a type="button" data-toggle="modal" data-target="#removeStuModal" class="btn btn-danger btn-sm" onclick="removeStu('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
	
	
		';

	$output['data'][] = array(
		$x,
		$row['industry'],
		$row['jtitle'],
		$row['qualification'],
		$row['course'],
		$row['closing'],
		$row['method_of_application'],
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);