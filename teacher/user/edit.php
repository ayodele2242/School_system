<?php
    include "../../includes/functions.php";
    if($_POST){
    
    $t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

	$id = $_POST['sid'];
    $title = $mysqli->real_escape_string($_POST['title']);
    $photoid = $mysqli->real_escape_string($_POST['hidImg']);
	$surname = $mysqli->real_escape_string($_POST['surname']);
    $lastname = $mysqli->real_escape_string($_POST['othername']);
    $dept = $mysqli->real_escape_string($_POST['dept']);
    $position = $mysqli->real_escape_string($_POST['position']);
    if(empty($_POST['class'])){
        $class = '';
    }if(!empty($_POST['class'])){
        $class = $_POST['class'];
    }

    if(empty($_POST['subject'])){
        $sub  = '';
    }if(!empty($_POST['subject'])){
        $sub = $_POST['subject'];
    }

    if(empty($_POST['carname'])){
        $cname = '';
    }if(!empty($_POST['carname'])){
        $cname = $_POST['carname'];
    }

    if(empty( $_POST['route'])){
        $route = '';
    }if(!empty( $_POST['route'])){
        $route = $_POST['route'];
    }
    


   
    

  	$address = $mysqli->real_escape_string($_POST['address']);
	$phoneno = $mysqli->real_escape_string($_POST['phoneno']);
	$guarantor_name = $mysqli->real_escape_string($_POST['guarantor_name']);
    $guarantor_no = $mysqli->real_escape_string($_POST['guarantor_no']);
    $edu= $mysqli->real_escape_string($_POST['educationQualification']);
    $gender= $mysqli->real_escape_string($_POST['gender']);
	$religion= $mysqli->real_escape_string($_POST['religion']);
	$bloodgroup= $mysqli->real_escape_string($_POST['bloodgroup']);
	$nationality= $mysqli->real_escape_string($_POST['nationality']);
    $dob= $mysqli->real_escape_string($_POST['dob']);
    $jdate= $mysqli->real_escape_string($_POST['joinDate']);
    $cellNo = $mysqli->real_escape_string($_POST['cellNo']);
    $presentAddress= $mysqli->real_escape_string($_POST['presentAddress']);
    $parmanentAddress= $mysqli->real_escape_string($_POST['parmanentAddress']);
    $details= $mysqli->real_escape_string($_POST['details']);


$name = $surname . ' ' . $lastname;

    $upload_dir = '../user_images/'; // upload directory
    
    //Image 0ne
        $imgFile = $_FILES['userImage']['name'];
		$tmp_dir = $_FILES['userImage']['tmp_name'];
        $imgSize = $_FILES['userImage']['size'];
        


        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
		
			// rename uploading image
            $userpic = rand(1000,1000000).".".$imgExt;
            if(!empty($imgFile)){
                $pic = $userpic;
                }else if(empty($imgFile) && $photoid != ''){
                $pic  = $photoid;
                }
                else if(!empty($imgFile) && $photoid == ''){
                    $pic  = $photoid;
                    }
                else{
                    $pic = '';
                }
            
           if(!empty($imgFile)){
                move_uploaded_file($tmp_dir,$upload_dir.$pic);
            }

     /*if(empty($cname)){
         $cname = '';
     }else{
        $cname = $cname;
     }

    if(empty($route)){
        $route = '';
    }else{
       $cname = $route;
    }
    
    if(empty($class)){
        $class = '';
    }else{
        $class = $class;
    }
    if(empty($sub)){
        $sub = '';
    }else{
        $sub = $sub;
    }*/


    	$sql = mysqli_query($mysqli, "UPDATE employee SET surname = '$surname',othername ='$lastname',title='$title',dept='$dept',
        carname='$cname', route = '$route',position='$position',address='$address', phoneno='$phoneno',guarantor_name='$guarantor_name',
        guarantor_no='$guarantor_no',subject='$sub',class='$class',gender='$gender',
        religion ='$religion' , bloodgroup='$bloodgroup', nationality='$nationality',dob='$dob', joinDate='$jdate',
        educationQualification='$edu', photo='$pic', cellNo='$cellNo', presentAddress='$presentAddress', parmanentAddress='$parmanentAddress',
        details='$details' WHERE id ='$id'");
	
   if($sql){
    echo "saved"; 

    mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Edited  $name details', '$tv', '$id', '$t', '$tv')");
   
    }
    else{
        echo $mysqli->error;
    }

    }
?>