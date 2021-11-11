<?php
    include "../../includes/functions.php";
    
    $t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['name'];
	$uname = $_SESSION['email'];

	
    $title = $mysqli->real_escape_string($_POST['page_title']);
    $c = $mysqli->real_escape_string(clean($_POST['details']));
    $sta = 'pending';
    $date = $mysqli->real_escape_string($_POST['event_date']);
    $time = time();
    
    
    $postedon = date('Y-m-d H:i');

    

	$sql2 = "SELECT * FROM events WHERE  page_title  = '$title' ";
    $result = mysqli_query($mysqli, $sql2) or die($mysqli->error);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
    	$sql = "INSERT INTO events(uid, username, page_title, details, status, event_date, etime) 
		values('$id','$uname','$title', '$c', '$sta','$date','$time')";
    $insert = mysqli_query($mysqli, $sql);
    
    if($insert){
    echo "added"; 

    mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Created event title ($title)', '$tv', '$id', '$t', '$tv')");
   
    }
    else{
        echo $mysqli->error;
    }

    }else{
    	 echo "1";
    }
?>