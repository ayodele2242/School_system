<?php
	require_once('../../includes/functions.php');

	$t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];
$date = date("d/M/Y");
$rcode = $_POST['Receipt_Code'];
//$name =  $_POST['Student_Name'];
$lname=$mysqli->real_escape_string($_POST['lname']);
$mname=$mysqli->real_escape_string($_POST['mname']);
$fname=$mysqli->real_escape_string($_POST['fname']);
$name = $lname .' '.$mname.' '.$fname;
$sreg =  $_POST['Student_reg_code'];
$sfee =  $_POST['School_fee'];
$apaid = $_POST['Amount_paid'];
$sum =   convert_number_to_words($apaid);
$paidfor = $_POST['Paid_for'];
$owning = $sfee - $apaid;
	

	
    $sql = "insert into account(Receipt_Code, Student_Name, Student_reg_code, School_fee, Amount_paid, sum_of, Paid_for, Amount_Owning, date)values('$rcode', '$name', '$sreg', '$sfee', '$apaid',  '$sum', '$paidfor', '$owning', '$date')";

	$done =	mysqli_query($mysqli, $sql);

	if($done){
		echo "paid";

		mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Created Receipt For $name With Roll Number $sreg, Amount paid: $apaid, paid for: $paidfor', '$tv', '$id', '$t', '$tv')");
   
	}else{
		echo $mysqli->error;
	}

 
?>