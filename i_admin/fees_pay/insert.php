<?php
	require_once('../../includes/functions.php');

	$t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
	$uname = $_SESSION['uname'];

	$name=$mysqli->real_escape_string($_POST['name']);
	$amount=$mysqli->real_escape_string($_POST['amount']);
	$class=$mysqli->real_escape_string($_POST['class']);
	
	$b = str_replace( ',', '', $amount );

		if( is_numeric( $b ) ) {
			$amount = $b;
		}

	$sum =   convert_number_to_words($amount);		
	

	$sql2 = "SELECT * FROM  fees_payment WHERE fee_name = '$name' and class='$class'";
    $result = mysqli_query($mysqli,$sql2) or die($mysqli->error);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
    	$sql = "INSERT INTO fees_payment(fee_name,amount,sum_of,class)values('$name','$amount','$sum','$class')";
	$done =	mysqli_query($mysqli, $sql);

	if($done){
		echo "added";

		mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Added $name to Fees Categories table', '$tv', '$id', '$t', '$tv')");
   
	}else{
		echo $mysqli->error;
	}

    }else{
		echo "1";
    }
?>