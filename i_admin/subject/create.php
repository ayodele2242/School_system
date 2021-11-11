<?php 

//require_once('../../includes/config.php'); 
require_once('../../includes/functions.php'); 

//if form is submitted
if($_POST) {	

	//$validator = array('success' => false, 'messages' => array());
	
	$id = $mysqli->real_escape_string($_SESSION['id']);
	$vt =$mysqli->real_escape_string($_POST['vtitle']);
	$cn = $mysqli->real_escape_string($_POST['cname']);
	$qua = $mysqli->real_escape_string($_POST['qualification']);
	$co = $mysqli->real_escape_string($_POST['course']);
	$e = $mysqli->real_escape_string($_POST['etype']);
	$mp =  $mysqli->real_escape_string($_POST['mpeople']);
	$lw = $mysqli->real_escape_string($_POST['lwork']);
	$t = $mysqli->real_escape_string($_POST['town']);
	$st = $mysqli->real_escape_string($_POST['state']);
	$w = $mysqli->real_escape_string($_POST['wage']);
	$wd = $mysqli->real_escape_string($_POST['wdays']);
	$du = $mysqli->real_escape_string($_POST['duration']);
	$cd = $mysqli->real_escape_string($_POST['cdate']);
	$moa = $mysqli->real_escape_string($_POST['moa']);
	$jod = $mysqli->real_escape_string(clean($_POST['jobdes']));
	

	$cchk = mysqli_query($mysqli, "select * from jobs where  jtitle = '$vt' and industry='$cn' and jdiscrib='$jod'");
	
	if(mysqli_num_rows($cchk) > 0){
		echo "1";
	}else{

	$sql = "INSERT INTO jobs (jtitle,industry,qualification,course, etype, mpost, lwork, town, states, wages, wdays, duration, closing, method_of_application, jdiscrib) 
	VALUES ('$vt','$cn', '$qua', '$co', '$e', '$mp', '$lw', '$t', '$st', '$w', '$wd', '$du', '$cd','$moa', '$jod')";
	$query = $mysqli->query($sql);

	if($query === TRUE) {			
		echo "saved";		
	} else {		
		echo  "Error while adding the job. " . $mysqli->error;
	}

}
	

}