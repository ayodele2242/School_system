<?php 

require_once('../../includes/config.php'); 

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());
	$sname = $_POST['sname'];
	$matric = $_POST['matric_no'];
	$ccode = $_POST['ccode'];
	$tscore = $_POST['tscore'];
	$escore = $_POST['escore'];
	$semester = $_POST['semester'];
	$level = $_POST['level'];
	$session = $_POST['session'];
	
	

	$sql = "INSERT INTO uni_exam (sch_name, matric_no, coursetitle, test, exam, semester, level, session) VALUES ('$sname', '$matric', '$ccode','$tscore', '$escore', '$semester','$level', '$session')";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Exam Score Added";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while adding exam mark";
	}

	// close the database connection
	$mysqli->close();

	echo json_encode($validator);

}