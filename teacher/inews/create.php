<?php 

require_once('../../includes/functions.php'); 

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());
	$t = $_POST['title'];
	$m = $_POST['msg'];
	$n = $_POST['sname'];
	

	$sql = "INSERT INTO news (title, creator, msg) VALUES ('$t','$n','$m')";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Successfully Added";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while adding information";
	}

	// close the database connection
	$mysqli->close();

	echo json_encode($validator);

}