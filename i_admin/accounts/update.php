<?php
	require_once('../../includes/functions.php');

	$t = date("Y-m-d H:i:s");
	$tv = time(); 
	$id = $_SESSION['id'];
	$fullname = $_SESSION['fname'] ;
    $uname = $_SESSION['uname'];
    

$pid = $_POST['uid'];    

$apaid = $_POST['Amount_paid'];

$name =  $_POST['Student_Name'];
$sreg =  $_POST['Student_reg_code'];

$f = mysqli_query($mysqli, "select * from account where accid = '$pid'");
$m = mysqli_fetch_array($f);

$ap = $m['Amount_paid'];
$b = str_replace( ',', '', $apaid );

if( is_numeric( $b ) ) {
	$apaid = $b;
}
$ao = $m['Amount_Owning'];

$sum =   convert_number_to_words($apaid);

$apay = $apaid + $ap;
$aow = $ao - $apaid;

if($apaid > $ao){
    echo "The amount you are inputting is greater than amount owing by the student";
} else{

    $sql = "update account set Amount_paid = '$apay', sum_of = '$sum', Amount_Owning='$aow' where accid ='$pid'";
    

	$done =	mysqli_query($mysqli, $sql);

	if($done){
		echo "paid";

		mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','Updated Receipt For $name whom paid the balance of $ap.', '$tv', '$id', '$t', '$tv')");
   
	}else{
		echo $mysqli->error;
	}

}
?>