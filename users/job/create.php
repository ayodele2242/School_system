<?php 

//require_once('../../includes/config.php'); 
require_once('../../includes/functions.php'); 

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());
	
	$id = clean($_SESSION['id']);
	$vt =clean($_POST['vtitle']);
	$qua = clean($_POST['qualification']);
	$co = clean($_POST['course']);
	$e = clean($_POST['etype']);
	$mp =  clean($_POST['mpeople']);
	$lw = clean($_POST['lwork']);
	$t = clean($_POST['town']);
	$st = clean($_POST['state']);
	$w = clean($_POST['wage']);
	$wd = clean($_POST['wdays']);
	$du = clean($_POST['duration']);
	$cd = clean($_POST['cdate']);
	$moa = clean($_POST['moa']);
	$jod = clean($_POST['jobdes']);
	


	$sql = "INSERT INTO jobs (fid, jtitle,qualification,course, etype, mpost, lwork, town, states, wages, wdays, duration, closing, method_of_application, jdiscrib) 
	VALUES ('$id', '$vt', '$qua', '$co', '$e', '$mp', '$lw', '$t', '$st', '$w', '$wd', '$du', '$cd','$moa', '$jod')";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Successfully Added";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while adding the job";
	}

	// close the database connection
	$mysqli->close();

	echo json_encode($validator);

}