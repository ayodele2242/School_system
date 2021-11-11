<?php 

require_once('../../includes/config.php'); 

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$id = $_POST['member_id'];
	$t = $_POST['edittitle'];
	$c = $_POST['msg'];
	

	$sql = "UPDATE news SET title = '$t', msg = '$c' WHERE id = $id";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Successfully Updated";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while updating information";
	}

	// close the database connection
	$mysqli->close();

	echo json_encode($validator);

}