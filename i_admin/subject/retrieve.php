<?php 
require_once('../../includes/functions.php'); 

$output = array('data' => array());

$sql = "SELECT * FROM subjects order by id desc";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
	
	$actionButton = '
	<!--<a type="button" data-toggle="modal" data-target="#editSubModal" class="btn btn-info btn-sm" onclick="editSub('.$row['id'].')"> <span class="glyphicon glyphicon-edit"></span></a>-->
	<a type="button" data-toggle="modal" data-target="#removeSubModal" class="btn btn-danger btn-sm" onclick="removeSub('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
	
	
		';

	$output['data'][] = array(
		$x,
		$row['subjects'],
		$row['subect_code'],
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);