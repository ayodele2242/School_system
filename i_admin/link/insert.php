<?php
    include "../../includes/functions.php";
    
    $t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

	
    $title = $mysqli->real_escape_string($_POST['page_title']);
    $c = $mysqli->real_escape_string(clean($_POST['details']));
    $url = $mysqli->real_escape_string($_POST['url']);
    
    
    

	$sql = "INSERT INTO links(name, description, url, username)values('$title','$c','$url','$uname')";
    $insert = mysqli_query($mysqli, $sql);
    
    if($insert){
    echo "added"; 

    mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Added link title ($title)', '$tv', '$id', '$t', '$tv')");
   
    }
    else{
        echo $mysqli->error;
    }

?>