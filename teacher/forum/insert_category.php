<?php
	require_once('../../includes/functions.php');

	$t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

	$cat = $_POST['cat'];
	

	$sql2 = "SELECT * FROM alumni_categories WHERE category = '$cat'";
    $result = mysqli_query($mysqli,$sql2) or die($mysqli->error);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
    	$sql = "INSERT INTO alumni_categories 
		(category) 
		values('$cat')";
	$done =	mysqli_query($mysqli, $sql);

	if($done){
		echo "added";

		mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Added $cat to forum categories', '$tv', '$id', '$t', '$tv')");
   
	}else{
		echo $mysqli->error;
	}

    }else{
		echo "1";
    }
?>