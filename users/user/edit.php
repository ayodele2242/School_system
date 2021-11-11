<?php
    include "../../includes/functions.php";
    
    $t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

    $ids = $mysqli->real_escape_string($_POST['id']);
    $cp = $mysqli->real_escape_string($_POST['cphone']);
    $hp = $mysqli->real_escape_string($_POST['hphone']);
    $wp = $mysqli->real_escape_string($_POST['work_phone']);
    $c = $mysqli->real_escape_string($_POST['city']);
    $s = $mysqli->real_escape_string($_POST['state']);
    $a = $mysqli->real_escape_string($_POST['address']);
    $lk1 = $mysqli->real_escape_string($_POST['link1']);
    $lk2 = $mysqli->real_escape_string($_POST['link2']);
    $lk3 = $mysqli->real_escape_string($_POST['link3']);


    $time = time();
    
    
    $updatedon = date('Y-m-d H:i');
    $e = "Edited";

    

	
    
    	$sql = "UPDATE alumni_users SET cell_phone='$cp', home_phone='$hp', work_phone='$wp', city='$c', state ='$s', address='$a', link1='$lk1', link2='$lk2', link3='$lk3' where user_id='$ids'" ;
		
    $update = mysqli_query($mysqli, $sql);
    
    if($update){
    echo "updated"; 

    mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Updated profile', '$tv', '$id', '$t', '$tv')");
   
    }
    else{
        echo $mysqli->error;
    }

    
?>