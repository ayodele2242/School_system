<?php 

require_once('../../includes/config.php'); 

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$id = $_POST['member_id'];
	$matric = $_POST['matric_no'];
	$ccode = $_POST['ccode'];
	$tscore = $_POST['tscore'];
	$escore = $_POST['escore'];
	$semester = $_POST['semester'];
	$session = $_POST['session'];
	

	$sql = "UPDATE uni_exam SET matric_no = '$matric', coursetitle = '$ccode', test = '$tscore', exam = '$escore', semester = '$semester', session='$session' WHERE id = '$id'";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Successfully Updated";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while updating mark";
	}

	// close the database connection
	$mysqli->close();

	echo json_encode($validator);

}