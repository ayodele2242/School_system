<?php
require_once('../../includes/functions.php');

if($_POST) {

		$t = date("Y-m-d H:i:s");
		$tv = time(); 
		$id = $_SESSION['id'];
		$fullname = $_SESSION['fname'] ;
		$uname = $_SESSION['uname'];
      
       
		$regiNo= $mysqli->real_escape_string($_POST['regiNo']);
		$firstName= $mysqli->real_escape_string($_POST['fname']);
		$middleName= $mysqli->real_escape_string($_POST['mname']);
		$lastName= $mysqli->real_escape_string($_POST['lname']);
		$gender= $mysqli->real_escape_string($_POST['gender']);
		$religion= $mysqli->real_escape_string($_POST['religion']);
		$bloodgroup= $mysqli->real_escape_string($_POST['bloodgroup']);
		$nationality= $mysqli->real_escape_string($_POST['nationality']);
		$dob= $mysqli->real_escape_string($_POST['dob']);
		$session= $mysqli->real_escape_string($_POST['session']);
		$class= $mysqli->real_escape_string($_POST['class']);
		$section= $mysqli->real_escape_string($_POST['section']);
		$group= $mysqli->real_escape_string($_POST['group']);
		$rollNo= $mysqli->real_escape_string($_POST['rollNo']);
		$shift= $mysqli->real_escape_string($_POST['shift']);
		//$nationality= $mysqli->real_escape_string($_POST['nationality']);
		$extraActivity= $mysqli->real_escape_string($_POST['extraActivity']);
		//$remarks= $mysqli->real_escape_string($_POST['remarks']);
		$fatherName= $mysqli->real_escape_string($_POST['fatherName']);
		$fatherCellNo= $mysqli->real_escape_string($_POST['fatherCellNo']);
		$motherName= $mysqli->real_escape_string($_POST['motherName']);
		$motherCellNo= $mysqli->real_escape_string($_POST['motherCellNo']);
		$localGuardian= $mysqli->real_escape_string($_POST['localGuardian']);
		$localGuardianCell= $mysqli->real_escape_string($_POST['localGuardianCell']);
		$presentAddress= $mysqli->real_escape_string($_POST['presentAddress']);
		$parmanentAddress= $mysqli->real_escape_string($_POST['parmanentAddress']);
		$email= $mysqli->real_escape_string($_POST['email']);
        $status= "active";
        
        $id = $_POST['rid'];
       
        if($rollNo <= 99){
            $newroll = "00".$rollNo;
        }else{
            $newroll = $rollNo;
        }
		
		$stunmae = $lastName .' '. $middleName .' '. $firstName;  
        //Generate student Identification number
        $stuid = $id.$regiNo.$newroll;
        

        $imgFile = $_FILES['userImage']['name'];
		$tmp_dir = $_FILES['userImage']['tmp_name'];
        $imgSize = $_FILES['userImage']['size'];
        
        $upload_dir = '../user_images/'; // upload directory

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
			          
				// insert into database
				$sqls = "INSERT INTO student (regiNo, rollNo, session,  class, class_group, section, shift, firstName, middleName, lastName,
                 gender, religion, bloodgroup, nationality, dob, photo, extraActivity, fatherName, fatherCellNo, 
                 motherName, motherCellNo, localGuardian, localGuardianCell,
            presentAddress, parmanentAddress, status,email) VALUES ('$stuid','$rollNo','$session','$class', '$group', '$section', '$shift', 
            '$firstName','$middleName','$lastName','$gender', '$religion', '$bloodgroup','$nationality','$dob','$pic','$extraActivity',
            '$fatherName','$fatherCellNo','$motherName','$motherCellNo', '$localGuardian','$localGuardianCell','$presentAddress',
            '$parmanentAddress','$status','$email')";

                $done = mysqli_query($mysqli, $sqls);
                
				if($done) {

                    echo "saved";
					
					mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Added $stunmae with student id $stuid to Students list', '$tv', '$id', '$t', '$tv')");
   
                   
				} 
				else {
				echo $mysqli->error;
				}


			
			
		
    
    

    

}


?>