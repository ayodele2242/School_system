<?php
	require_once('../../includes/functions.php');

	$t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];
$date = date("d/M/Y");

//$name =  $_POST['Student_Name'];
$title=$mysqli->real_escape_string($_POST['title']);
$msg=$mysqli->real_escape_string($_POST['msg']);
$upload_dir = '../user_images/'; // upload directory
    $video = '../videos/';
    $audio = '../audios/';
    
    //Image 0ne
        $imgFile = $_FILES['userImage']['name'];
		$tmp_dir = $_FILES['userImage']['tmp_name'];
        $imgSize = $_FILES['userImage']['size'];
        $imgType = $_FILES['userImage']['type'];
        


        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
            $valid_extensions = array('jpeg', 'jpg', 'png'); // image extensions
            $vid_extensions = array('avi', 'mp4', 'wav','3gp','AAC','flv','wmv'); // video extensions
            $aud_extensions = array('mp3'); // audio extensions
            
            
            
		
			// rename uploading image
            $userpic = rand(1000,1000000).".".$imgExt;
            if(!empty($imgFile)){
            $pic = $userpic;
            }else{
                $pic = '';
            }
            
           if(!empty($imgFile) && in_array($imgExt, $valid_extensions)){
                move_uploaded_file($tmp_dir,$upload_dir.$pic);
            }
            if(!empty($imgFile) && in_array($imgExt, $vid_extensions)){
                move_uploaded_file($tmp_dir,$video.$pic);
            }
            if(!empty($imgFile) && in_array($imgExt, $aud_extensions)){
                move_uploaded_file($tmp_dir,$audio.$pic);
            }



	

	
    $sql = "insert into announcement(msg_title, msg, img, img_type)values('$title', '$msg', '$pic', '$imgType')";

	$done =	mysqli_query($mysqli, $sql);

	if($done){
		echo "1";

		mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','inserted $title into announcement title', '$tv', '$id', '$t', '$tv')");
   
	}else{
		echo $mysqli->error;
	}

 
?>