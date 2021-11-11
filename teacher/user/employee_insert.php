<?php
    include "../../includes/functions.php";
    
    $t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

	
	$title = $mysqli->real_escape_string($_POST['title']);
	$surname = $mysqli->real_escape_string($_POST['surname']);
    $lastname = $mysqli->real_escape_string($_POST['othername']);
    $dept = $mysqli->real_escape_string($_POST['dept']);
    $position = $mysqli->real_escape_string($_POST['position']);
    $class = $mysqli->real_escape_string($_POST['class']);
    $sub = $mysqli->real_escape_string($_POST['subject']);
    $uname = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $cname = $mysqli->real_escape_string($_POST['carname']);
    $route = $mysqli->real_escape_string($_POST['route']);
  	$address = $mysqli->real_escape_string($_POST['address']);
	$phoneno = $_POST['phoneno'];
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

	$password = encryptIt($_POST['password']);
    $joined = date('Y-m-d H:i');

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
            }else{
                $pic = '';
            }
            
           if(!empty($imgFile)){
                move_uploaded_file($tmp_dir,$upload_dir.$pic);
            }

     //Image two
    $imgFile2 = $_FILES['photo']['name'];
    $tmp_dir2 = $_FILES['photo']['tmp_name'];
    $imgSize2 = $_FILES['photo']['size'];
    
    $upload_dir = '../user_images/'; // upload directory

    $imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION)); // get image extension
    
        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
    
        // rename uploading image
        $userpic2 = rand(1000,1000000).".".$imgExt2;
        if(!empty($imgFile2)){
        $pic2 = $userpic2;
        }else{
            $pic2 = '';
        }
        
       if(!empty($imgFile2)){
            move_uploaded_file($tmp_dir2,$upload_dir.$pic2);
        }

	$sql2 = "SELECT * FROM employee WHERE username = '$uname' or userEmail = '$email'";
    $result = mysqli_query($mysqli, $sql2) or die($mysqli->error);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
    	$sql = "INSERT INTO employee 
		(surname,othername,username,password,userEmail,title,dept,carname,route,position,address,
        phoneno,guarantor_name,guarantor_no,subject,class,gender,religion , bloodgroup, nationality,dob, joinDate,educationQualification, 
        photo, other_img , cellNo, presentAddress, parmanentAddress,details, joined) 
		values('$surname','$lastname','$uname','$password','$email','$title','$dept','$cname','$route',
         '$position', '$address', '$phoneno', '$guarantor_name', '$guarantor_no', '$sub','$class','$gender','$religion','$bloodgroup',
         '$nationality','$dob','$jdate','$edu','$pic','$pic2','$cellNo','$presentAddress','$parmanentAddress','$details', '$joined')";
    $insert = mysqli_query($mysqli, $sql);
    
    if($insert){
    echo "added"; 

    mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Added $name to Employees', '$tv', '$id', '$t', '$tv')");
   
    }
    else{
        echo $mysqli->error;
    }

    }else{
    	 echo "1";
    }
?>