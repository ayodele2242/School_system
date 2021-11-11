<?php 

require_once('../../includes/functions.php'); 

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$memberId = $_POST['member_id'];
	$vt =clean($_POST['evtitle']);
	$qua = clean($_POST['equalification']);
	$co = clean($_POST['ecourse']);
	$e = clean($_POST['eetype']);
	$mp =  clean($_POST['empeople']);
	$lw = clean($_POST['elwork']);
	$t = clean($_POST['etown']);
	$st = clean($_POST['estate']);
	$w = clean($_POST['ewage']);
	$wd = clean($_POST['ewdays']);
	$du = clean($_POST['eduration']);
	$cd = clean($_POST['ecdate']);
	$moa = clean($_POST['emoa']);
	$jod = clean($_POST['ejobdes']);
	

	$sql = "UPDATE jobs SET jtitle ='$vt',qualification='$qua',course='$co', etype='$e', mpost='$mp', lwork='$lw', 
	town='$t', states='$st', wages='$w', wdays='$wd', duration='$du', closing='$cd', method_of_application='$moa', jdiscrib = '$jod' WHERE id =	$memberId ";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Job Detail(s) Updated Successfully ";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while updating Job Detail(s)";
	}

	// close the database connection
	$mysqli->close();

	echo json_encode($validator);

}