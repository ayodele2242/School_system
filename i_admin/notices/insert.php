<?php
	require_once('../../includes/functions.php');

	$t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

	$c = $_POST['code'];
	$n = $_POST['name'];
	
	

	$sql2 = "SELECT * FROM notice WHERE title = '$c'";
    $result = mysqli_query($mysqli,$sql2) or die($mysqli->error);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
    	$sql = "INSERT INTO notice(title, contents)values('$c', '$n')";
	$done =	mysqli_query($mysqli, $sql);

	

	if($done){
		echo "added";

		mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Added $n to notice', '$tv', '$id', '$t', '$tv')");
   
	}else{
		echo $mysqli->error;
	}

    }else{
		echo "1";
    }
?>