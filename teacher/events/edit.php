<?php
    include "../../includes/functions.php";
    
    $t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

	$ids = $mysqli->real_escape_string($_POST['id']);
    $title = $mysqli->real_escape_string($_POST['page_title']);
    $c = $mysqli->real_escape_string(clean($_POST['details']));
    $sta = $mysqli->real_escape_string($_POST['status']);
    $date = $mysqli->real_escape_string($_POST['event_date']);
    $time = time();
    
    
    $updatedon = date('Y-m-d H:i');
    $e = "Edited";

    

	
    
    	$sql = "UPDATE events SET page_title='$title', details ='$c', status = '$sta', event_date='$date', edit_status = '$e', edit_time='$time', update_on='$updatedon' where id='$ids'" ;
		
    $update = mysqli_query($mysqli, $sql);
    
    if($update){
    echo "updated"; 

    mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Edited event title ($title)', '$tv', '$id', '$t', '$tv')");
   
    }
    else{
        echo $mysqli->error;
    }

    
?>