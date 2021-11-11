<?php
require_once('../../includes/fetch.php');

if(isset($_POST['addStudent'])){

		$t = date("Y-m-d H:i:s");
		$tv = time(); 
		//$id = $_SESSION['id'];
		//$fullname = $_SESSION['fname'] ;
		//$uname = $_SESSION['uname'];
      
       
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
		$pin = $_POST['pin'];
		$stu_sta = "Online Registered Student";
        
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
        
        $upload_dir = '../../i_admin/user_images/'; // upload directory

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
            presentAddress, parmanentAddress, status,email,reg_pin,reg_status) VALUES ('$stuid','$rollNo','$session','$class', '$group',
			 '$section', '$shift', 
            '$firstName','$middleName','$lastName','$gender', '$religion', '$bloodgroup','$nationality','$dob','$pic','$extraActivity',
            '$fatherName','$fatherCellNo','$motherName','$motherCellNo', '$localGuardian','$localGuardianCell','$presentAddress',
            '$parmanentAddress','$status','$email','$pin','$stu_sta')";

		$done = mysqli_query($mysqli, $sqls);
		$fromme = $set['siteEmail'];

		$to = $email;

		$subject = 'Registration Details for  ' .$lastName .' '.$firstName;

		$headers = "From: " . strip_tags($fromme) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($fromme) . "\r\n";
		//$headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

				
		$message = "<div style='font-size: 14px; font-family: Calibri;'>
		<p>Dear ".$lastName .' '.$firstName.".</p>
		<p>Thank you for your interest in our school. And, please find your registration details below.</p>
		<p><div align='center'>".$set['installUrl']."i_admin/user_images/".$pic."</div></p>
		<p>
		<table class='table table-striped'>
		<tr>
		tdcolspan='9'>Academic Details</td>
		<tr>
		<tr>
		<td>Class enrolling into</td>
        <td>".$class."</td>
		</tr>
		<tr>
		<td>Section</td>
        <td>".$section."</td>
		</tr>
		<tr>
		<td>Shift</td>
        <td>".$shift."</td>
		</tr>
		<tr>
		<td>Class group</td>
        <td>".$group."</td>
		</tr>
		<tr>
		<td colspan='9'>Personal Details</td>
		</tr>
		<tr>
		<td>Gender</td>
        <td>".$gender."</td>
		</tr>
		<tr>
		<td>Religion</td>
        <td>".$religion."</td>
		</tr>
		<tr>
		<td>Blood group</td>
        <td>".$bloodgroup."</td>
		</tr>
		<tr>
		<td>State of origin</td>
        <td>".$nationality."</td>
		</tr>
		<tr>
		<td>Date of birth</td>
        <td>".$dob."</td>
		</tr>
		<tr>
		<td colspan='9'>Guardians Details</td>
        
		</tr>
		<tr>
		<td>Father Name</td>
		<td>".$fatherName."</td>
		<td>Father Contact Number</td>
        <td>".$fatherCellNo."</td>
		</tr>

		<tr>
		<td>Mother Name</td>
		<td>".$motherName."</td>
		<td>Father Contact Number</td>
        <td>".$motherCellNo."</td>
		</tr>

		<tr>
		<td col='9'>Address</td>
		</tr>
		<tr>
		<td>Email address</td>
		<td>".$email."</td>
		<tr>
		<td>Present Address</td>
        <td>".$presentAddress."</td>
		</tr>
		<tr>
		<td>Permanent Address</td>
        <td>".$parmanentAddress."</td>
		</tr>

        </table>
		</p>
		<p>This message was sent to ".$email.", if you are receiving this wrongly please ignore it.<\p> 
		<p>Thanks. <br><span>TOTALLIGHT SCHOOLS Team.</span></p></div>";
		
       
		$send = mail($to, $subject, $message, $headers);
                
				if($done && $send) {

                    echo "sent";
					
					mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)
					values('$regiNo','$lastName','New student with student id $stuid registered', '$tv', '$id', '$t', '$tv')");

				session_destroy();
			     mysqli_query($mysqli,"delete from pins where pin='$pin'");
                
                   
				} 
				else if($done && !$send) {

                    echo "saved";
					
					mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)
					values('$regiNo','$lastName','New student with student id $stuid registered', '$tv', '$id', '$t', '$tv')");

				 session_destroy();
				 mysqli_query($mysqli,"delete from pins where pin='$pin'");
                   
				} 
				else {
				echo "Error: ".$mysqli->error;
				}


			
			
		
    
    

    

}


?>