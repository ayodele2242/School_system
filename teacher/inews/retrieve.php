<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
$snam = $_SESSION['fname'];

$sql = "SELECT * FROM news  order by id desc limit 30";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
	
	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#editMemberModal" class="btn btn-info btn-sm" onclick="editMember('.$row['id'].')"> <span class="glyphicon glyphicon-edit"></span></a>
	<a type="button" data-toggle="modal" data-target="#removeDeptModal" class="btn btn-danger btn-sm" onclick="removeMember('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
	
	
		';

	$output['data'][] = array(
		$x,
		$row['title'],
		$row['creator'],
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);