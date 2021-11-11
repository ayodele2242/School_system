<?php 

require_once('../../includes/functions.php'); 

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$memberId = $_POST['member_id'];
	$c = clean($_POST['editcode']);
	$n = clean($_POST['editname']);
	
	

	$sql = "UPDATE subjects SET subect_code = '$c', subjects = '$n'  WHERE id = '$memberId' ";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = " Updated Successfully ";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while updating";
	}

	// close the database connection
	$mysqli->close();

	echo json_encode($validator);

}