<?php
include_once '../../includes/functions.php';


	$lname = $mysqli->real_escape_string($_POST['lastname']);
	$fname = $mysqli->real_escape_string($_POST['firstname']);
	$gender = $mysqli->real_escape_string($_POST['gender']);
	$gy = $mysqli->real_escape_string($_POST['grad_year']);
	$joining_date 	= date('Y-m-d H:i:s');
	$user_email = $mysqli->real_escape_string($_POST['user_email']);
	$password = encryptIt($_POST['password']);	
	$user_ip = $_SERVER['REMOTE_ADDR'];
	$sta=$_POST['status'];

	$stmt = mysqli_query($mysqli,"SELECT * FROM alumni_users WHERE email='$user_email'");
	$count = mysqli_num_rows($stmt);
	if($count==0){
		$query = "INSERT INTO alumni_users (first_name, last_name, gender, grad_year, password, email, status, remote_addr,  date_created)
							 VALUES ('$fname', '$lname', '$gender', '$gy', '$password', '$user_email', '$sta',  '$user_ip',  NOW())"; 
		
		$suc = mysqli_query($mysqli, $query);
		if($suc){
			echo "added";
		}else{
			echo 'Error occured: ' . $mysqli->error;
		}

	}else{
		echo "1"; //exist
	}



?>