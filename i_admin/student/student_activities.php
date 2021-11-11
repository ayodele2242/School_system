<?php
require_once('../../includes/functions.php');

if($_POST) {

		$t = date("Y-m-d H:i:s");
		$tv = time(); 
		$id = $_SESSION['id'];
		$fullname = $_SESSION['fname'] ;
		$uname = $_SESSION['uname'];
      
       
		$regiNo= $mysqli->real_escape_string($_POST['student']);
		$we= $mysqli->real_escape_string($_POST['weight_end']);
		$he= $mysqli->real_escape_string($_POST['height_end']);
		$noa= $mysqli->real_escape_string($_POST['no_of_absent']);
		$coa= $mysqli->real_escape_string($_POST['cause_of_absent']);
		$p= $mysqli->real_escape_string($_POST['position']);
		$op= $mysqli->real_escape_string($_POST['overall_perceny']);
		$coca= $mysqli->real_escape_string($_POST['co_curricular_activities']);
		$cft= $mysqli->real_escape_string($_POST['class_form_teacher']);
		$mc= $mysqli->real_escape_string($_POST['master_comment']);
		$tb= $mysqli->real_escape_string($_POST['term_begin']);
		$chp= $mysqli->real_escape_string($_POST['class_highest_percentage']);
		$clp= $mysqli->real_escape_string($_POST['class_lowest_percentage']);
		$honor= $mysqli->real_escape_string($_POST['honor']);
		$house= $mysqli->real_escape_string($_POST['house']);
		$term= $mysqli->real_escape_string($_POST['term']);
		
			// insert into database
				$sqls = "INSERT INTO student_activities(Roll_number, weight_end, height_end,  no_of_absent, cause_of_absent, Position, 
				overall_perceny, co_curricular_activities, class_form_teacher, master_comment,term_begin,
				class_highest_percentage, class_lowest_percentage,honor,house,term) VALUES ('$regiNo','$we','$he','$noa', '$coa', 
				'$p', '$op', '$coca','$cft','$mc','$tb', '$chp', '$clp','$honor','$house','$term')";

                $done = mysqli_query($mysqli, $sqls);
                
				if($done) {

                    echo "saved";
					
					mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Added activities for student id $regiNo to Student activities list', '$tv', '$id', '$t', '$tv')");
   
                   
				} 
				else {
				echo $mysqli->error;
				}


			
			
		
}


?>