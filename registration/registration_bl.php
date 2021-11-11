
<!DOCTYPE HTML>
<html>
<head>
	<link href="../wchs/admin/images/logo.png" rel="icon" >
	<title>Wesley Application Page</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link href="../reg/confirm.css" rel="stylesheet" type="text/css"/>
	
	
	
	
	
</head>
<body>
<div id="logo"><img src="../wchs/images/slogo.fw.png" title=""/></div>
<div id="main">

	<div id="header" class="ctrdiv">
		<h2 id="hdr_title">Wesley Confirmation Page</h2>
	</div>
	
<div id="content" class="ctrdiv">
<div>


<?php
session_start(); 
include '../db/library.php';


/*This code block is for checking if the email is already taken.
 This will be called through ajax*/
if (isset($_GET['chktype']))
{
	if(is_email_exist($_GET['regemail']))
	{
		echo 'true';
	}else{
		echo 'false';
	}
	exit();
}

function is_email_exist($usremail)
{
	global $link;
	$email = mysqli_real_escape_string($link, $usremail);

	$sql = "select email from members where email='$email'";
	$result = mysqli_query($link, $sql);
	if (mysqli_num_rows($result) > 0)	
	{	
		//email is taken.
		return true;
	}
	else
	{
		//email is availabe
		return false;
	}
}

//Server side validation
$validation_msg = '<ul type = "none" >';
function ValidateUserInput()
{

	global $validation_msg;
	$is_valid = true;

	$fname = strip_tags($_POST['fname']);
	if (trim($fname) == ''){
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>First Name is required.</li>';
	}

	$lname = strip_tags($_POST['lname']);
	if (trim($lname) == ''){
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Last Name is required.</li>';
	}
	
	$username = strip_tags($_POST['username']);
	if (trim($username) == ''){
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Username is required.</li>';
	}
	

	$email = strip_tags($_POST['uemail']);
	if (trim($email) == ''){
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Email is required.</li>';
	}
	
	if (is_email_exist($email))
	{
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Email is already taken.</li>';	
	}

	$month = $_POST['lMonth'];
	$dDay = $_POST['txtDay'];
	$dYear = $_POST['txtYear'];
	$contact = $_POST['txtContactNo'];
	$birthdate = $month . '/' .$dDay . '/' . $dYear;
	if (trim($birthdate) == ''){
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Birthdate is required.</li>';
	}

	if (is_date($birthdate) == false)
	{
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Invalid birthdate format.</li>';
	}

	$upassword = $_POST['upassword'];
	if (trim($upassword) == ''){
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Password is required.</li>';
	}

	if (strlen(trim($upassword)) < 8 or strlen(trim($upassword)) > 16)
	{
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Password must be 8 to 16 characters.</li>';
	}
	
	$txtContactNo = strip_tags($_POST['txtContactNo']);
	if (trim($txtContactNo) == ''){
		$is_valid = false;
		$validation_msg  = $validation_msg  . '<li>Your contact number is required.</li>';
	}
	
	$validation_msg = $validation_msg . '</ul>';
	return $is_valid;
	
}//End server side validation

//Date validator
function is_date($date){ 
    if(strlen($date) == 10) {
        $pattern = '/\.|\/|-/i';    // . or / or -
        preg_match($pattern, $date, $char);
        
        $array = preg_split($pattern, $date, -1, PREG_SPLIT_NO_EMPTY); 
        
        if(strlen($array[2]) == 4) {
            // dd.mm.yyyy || dd-mm-yyyy
            if($char[0] == "."|| $char[0] == "-") {
                $month = $array[1];
                $day = $array[0];
                $year = $array[2];
            }
            // mm/dd/yyyy    # Common U.S. writing
            if($char[0] == "/") {
                $month = $array[0];
                $day = $array[1];
                $year = $array[2];
            }
        }
        // yyyy-mm-dd    # iso 8601
        if(strlen($array[0]) == 4 && $char[0] == "-") {
            $month = $array[1];
            $day = $array[2];
            $year = $array[0];
        }
		if (is_numeric($month) == true && is_numeric($day ) == true && is_numeric($year)){
			if(checkdate($month, $day, $year)) {    //Validate Gregorian date
				return true;
			
			} else {
				return false;
			}	
		}else{
			return false;
		}

    }else {
        return false;    // more or less 10 chars
    }
}

//Saving the data for registration
if (isset($_POST['register_member']) and $_POST['register_member'] == 'true')
{
	$is_data_valid = ValidateUserInput();
	if ($is_data_valid == true)
	{
		$fname = mysqli_real_escape_string($link, strip_tags($_POST['fname']));
		$lname = mysqli_real_escape_string($link, strip_tags($_POST['lname']));
		$username = mysqli_real_escape_string($link, strip_tags($_POST['username']));
		$gender = mysqli_real_escape_string($link, strip_tags($_POST['gender']));
		$email = mysqli_real_escape_string($link, strip_tags($_POST['uemail']));
		$month = mysqli_real_escape_string($link, $_POST['lMonth']);
		$session = mysqli_real_escape_string($link, $_POST['txtSession']);
		$dDay = mysqli_real_escape_string($link, $_POST['txtDay']);
		$dYear = mysqli_real_escape_string($link, $_POST['txtYear']);
		$question = mysqli_real_escape_string($link, $_POST['txtQuestion']);
		$answer = mysqli_real_escape_string($link, $_POST['txtAnswer']);
		$contact = mysqli_real_escape_string($link, strip_tags($_POST['txtContactNo']));
		$course = mysqli_real_escape_string($link, $_POST['txtCourse']);
		$state = mysqli_real_escape_string($link, $_POST['txtState']);
		$home_address = mysqli_real_escape_string($link, $_POST['txtHomeAddress']);
		$birthdate = $month . '/' .$dDay . '/' . $dYear;
		$birthdate = date('Y-m-d',strtotime($birthdate));
		$upassword = sha1($_POST['upassword']);
		$upassword = mysqli_real_escape_string($link, $upassword);

		$sql = "INSERT INTO members SET
				
					fname = '$fname',
					lname = '$lname',
					username = '$username',
					gender = '$gender',
					email = '$email',
					birth_date = '$birthdate',
					question = '$question',
					answer = '$answer',
					contact = '$contact',
					password = '$upassword',
					state = '$state',
					session = '$session',
					course = '$course',
					home_address = '$home_address',
					registered_date = CURRENT_TIMESTAMP";
					
		if (!mysqli_query($link, $sql))
		{
				echo 'Error Saving Data. ';
				exit();	
		}
		$post_id = mysqli_insert_id($link);
		 
		
		
		
		$_SESSION['member_id'] = $post_id;
		
		 $encrypt = "fgfdsgkdjgerjgiuergjerio8599mihpoiethtrihrejotiryeklypotiyrtkyoekyroeertyjghjghrufuerugherguegwerhgujrhghhjftg";
		
		
		header('Location: mem_profile.php? user='. $encrypt.'&id='. @$_SESSION['pins']);
		exit();
	}else{
		
	    
		
		echo $validation_msg .'<font color="red">Click on the back button in your browser tab to go back to your registration page</font>';
		exit();
	}
	
}

?>
</div>
</div>
</div>
