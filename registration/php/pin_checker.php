<?php
	require_once '../../includes/functions.php';

	if(isset($_POST['btn-pin']))
	{
		
	$pin = $mysqli->real_escape_string($_POST['pin']);
					
	$selec = mysqli_query($mysqli, "SELECT reg_pin FROM student WHERE reg_pin='$pin'");
	$row = mysqli_fetch_array($selec);

	if(mysqli_num_rows($selec)){
		echo "used";
	//header("Location: login?Pin=".$pin .'&rid='.randnumber());
	//$_SESSION['pin'] = $pin;
	}
	else{
	if(!mysqli_num_rows($selec)){
	$select = mysqli_query($mysqli, "SELECT pins FROM pins WHERE pins='$pin'");
	if(mysqli_num_rows($select) == 0){
	echo "not available";
	}
	}
	if(mysqli_num_rows($select) == 1){
	//header("Location: login?Pin=".$pin .'&rid='.randnumber());
	echo "yes";
	$_SESSION['pin'] = $pin;
	
	}
	} 

}

?>