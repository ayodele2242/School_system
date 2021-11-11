<?php
		
		include('functions.php');
		
		$msgBox = '';
		$activeAccount = '';
		$nowActive = '';


		
		

		
		
		// Get Settings Data
		$setSql = "SELECT * FROM sitesettings";
		$setRes = mysqli_query($mysqli, $setSql) or die('site setting failed'.mysqli_error());
		$set = mysqli_fetch_array($setRes);
		
		//get content from mysql
		$querys = "SELECT * FROM mp_pages where nav_id='home'";
		$h = mysqli_query ($mysqli, $querys);
		$home = mysqli_fetch_array($h);



		
// Reset Account Password Form
if (isset($_POST['submit']) && $_POST['submit'] == 'resetPass') {
	// Set the email address
	$theEmail = (isset($_POST['theEmail'])) ? $mysqli->real_escape_string($_POST['theEmail']) : '';
	
	// Validation
	if ($_POST['theEmail'] == "") {
	$msgBox = alertBox($accEmailAddyReq, "<i class='fa fa-times-circle'></i>", "danger");
	} else {
	$query = "SELECT userEmail FROM users WHERE userEmail = ?";
	$stmt = $mysqli->prepare($query);
	$stmt->bind_param("s",$theEmail);
	$stmt->execute();
	$stmt->bind_result($userEmail);
	$stmt->store_result();
	$numrows = $stmt->num_rows();
	
	if ($numrows == 1){
	// Generate a RANDOM Hash for a password
	$randomPassword = uniqid(rand());
	
	// Take the first 8 digits and use them as the password we intend to email the user
	$emailPassword = substr($randomPassword, 0, 8);
	
	// Encrypt $emailPassword for the database
	$newpassword = encryptIt($emailPassword);
	
	//update password in db
	$updatesql = "UPDATE users SET password = ? WHERE userEmail = ?";
	$update = $mysqli->prepare($updatesql);
	$update->bind_param("ss", $newpassword, $theEmail);
	$update->execute();
	if($update == true){
	// Send out the email in HTML
	$installUrl 	= $set['installUrl'];
	$siteName 		= $set['siteName'];
	$siteEmail		= $set['siteEmail'];
	
	$title = $resetPassEmailTitle;
	$address = $_POST['newEmail'];
	$body = '
	<div style="padding:1px; font-size:14px; backgound:#fff; border:none;  width:600px; over-flow:hidden;">
	<div style="background:#066; font-weight:bold; text-align:center; margin-bottom:4px;">'.$subject.'</div>
	<p>'.$resetPassEmail1.'</p>
	<hr>
	<p>Your new password: '.$emailPassword.'</p>
	<hr>
	<p>'.$resetPassEmail2.'</p>
	<p>'.$resetPassEmail3.' '.$set['installUrl'].'admin/login</p>
	<p>'.$thankYouText.'<br>'.$siteName.'</p>
	</div>';
	
	echo Send_Email($body,$address,$title);
	$msgBox = alertBox($passwordResetMsg, "<i class='fa fa-check-square'></i>", "success");
	$isReset = 'true';
	$stmt->close();
	}
	} else {
	// No account found
	$msgBox = alertBox($accNotFoundMsg, "<i class='fa fa-warning'></i>", "warning");
	}
	}
	}
	
	// Create a New Account Form
			if (isset($_POST['submit']) && $_POST['submit'] == 'createAccount') {
			// User Validations
				if($_POST['name'] == '') {
					$msgBox = alertBox("Your name is required", "<i class='fa fa-times-circle'></i>", "danger");
				}
				elseif($_POST['username'] == '') {
					$msgBox = alertBox("A username is required", "<i class='fa fa-times-circle'></i>", "danger");
				}
				elseif($_POST['newEmail'] == '') {
					$msgBox = alertBox($validEmailAddyReq, "<i class='fa fa-times-circle'></i>", "danger");
				} 
				else if($_POST['password'] == '') {
					$msgBox = alertBox($newPassReq, "<i class='fa fa-times-circle'></i>", "danger");
				} else if($_POST['password'] != $_POST['passwordr']) {
					$msgBox = alertBox($passwordsNotMatchMsg, "<i class='fa fa-times-circle'></i>", "danger");
				} else if($_POST['institute_cat'] == '') {
					$msgBox = alertBox("Select school category from the drop down", "<i class='fa fa-times-circle'></i>", "danger");
				// Black Hole Trap to help reduce bot registrations
				} else if($_POST['institute_name'] == '') {
					$msgBox = alertBox("School name is required", "<i class='fa fa-times-circle'></i>", "danger");
				} 	
							
	else {
					// Set some variables
					$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
					socket_connect($sock, "8.8.8.8", 53);
					socket_getsockname($sock, $name); // $name passed by reference
					$localAddr = $name;
					gethostname();
					$host = gethostbyname(gethostname());
					$hostaddr =  gethostbyaddr($_SERVER['REMOTE_ADDR']);
					$sysinfo =  php_uname();
					$lic = $mysqli->real_escape_string($_POST['pin']);
					$newEmail = $mysqli->real_escape_string($_POST['newEmail']);
					$username = $mysqli->real_escape_string($_POST['username']);
					$password = encryptIt($_POST['password']);
					$name = $mysqli->real_escape_string($_POST['name']);
					$instc = $mysqli->real_escape_string($_POST['institute_cat']);
					$instn = $mysqli->real_escape_string($_POST['institute_name']);
					$expire = "365";
					$sta = "active";
					$joinDate = date("Y-m-d H:i:s");
							//$hash = md5(rand(0,1000));
							//$isActive = '0';
					// Check for Duplicate username
					$check = mysqli_query($mysqli, "SELECT username FROM sch_details WHERE username = '".$username."'");
					if (mysqli_num_rows($check) > 0 ) {
						// If duplicates are found
						$msgBox = alertBox("Username already exist in the database.", "<i class='fa fa-times-circle'></i>", "danger");
					}	
					$checks = mysqli_query($mysqli, "SELECT userEmail FROM sch_details WHERE userEmail = '$newEmail'");
					if (mysqli_num_rows($checks) > 0 ) {
						// If duplicates are found
						$msgBox = alertBox($duplicateAccountMsg, "<i class='fa fa-times-circle'></i>", "danger");
				}
					$mystmt = mysqli_query($mysqli,"INSERT INTO sch_details(username,password,name,userEmail,institute_cat,													institute_name,license,status,sys_ip,host_ip,sys_name,sys_info,numberdays,date_registered) VALUES ('$username','$password','$name','$newEmail','$instc','$instn','$lic','$sta','$localAddr','$host','$hostaddr','$sysinfo','$expire','$joinDate')
							");
							
							
							if($mystmt){
							$del = mysqli_query($mysqli, "delete from license_keys where license = '$lic' ");
							}
							if($del){
							$msgBox = alertBox($newAccountCreatedMsg, "<i class='fa fa-check-square'></i>", "success");
							header("refresh:2;sign-in?".randNumber());
							session_destroy();
							
							
								// destroy session
								
	
							// Send out the email in HTML
							$installUrl = $set['installUrl'];
							$siteName = $set['siteName'];
							$siteEmail = $set['siteEmail'];
							$sitePhone = $set['phone'];
							$newPass = $mysqli->real_escape_string($_POST['password']);
							$logo = $set['schoolLogo'];
	
							$title = $newAccountEmailSubject;
							
							function randNumber(){
							$length = 1000;
							return $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);	 
							 }
	
							// -------------------------------
							// ---- START Edit Email Text ----
							// -------------------------------
							$bodym = '
				  <div style="background-color: #00BCD4; padding-left: 0; max-width: 500px; margin: 5% auto; overflow-x: hidden;">
				 <div style="font-size: 36px; padding:5px; display: block; width: 100%; text-align: left; color: #fff;">
					   <span style="float:left"><img src="'.$installUrl.'logo/'.$logo.'" width="80" height="80"></span>
					   <span style="float:left">'.$title.'</span> 
				  </div>
				  
				  <div style="font-size: 14px; text-decoration: none; background:#fff; padding:2px; color: #00BCD4;">
				  <p style="margin-bottom:2px; color: #00BCD4;">
				  Thank you for subscribing to our service('.$siteName.'). We do hope you enjoy the ride with us as we try to make our service convinient and user friendly experience for you.
				  </p>
				  
				   <p style="margin-bottom:2px; color: #00BCD4;">
				   Please do find below your details:
				   </p>
				   
				   <p>
				   <strong>Name:</strong> '.$name.'<br>
				   <strong>School Name:</strong> '.$instn.'<br>
				   <strong>Username:</strong> '.$username.'<br>
				   <strong>Email Address:</strong> '.$newEmail.'<br>
				   </p>
				   <p>
				   <strong>License Key:</strong> '.$pin.'<br>
				   </p>
				   <p>
				   To login click or copy this link: '.$installUrl.'sign-in?token='.randNumber().'
				   </p>
				   
				   <p>
				   You can contact us at: '.$siteEmail.' or by phone: '.$sitePhone.'
				   </p>
				   
				   
				  <p style="color=#00BCD4; font-size:14px; text-align:center; padding:4px; ">
				  Copyright &copy; 2014 -  '.date("Y").'; Infonet Management Consultants. All Rights Reserved.
				  </p>
				  </div>
				  
				  
				  </div>
				  ';
							
							
							// -------------------------------
							// ---- END Edit Email Text ----
							// -------------------------------
	
								//echo Send_Email($bodym, $newEmail, $title);
								
								//unset($_SESSION['pin']);
							//$stmt->close();
						
					}else{
					$msgBox = alertBox($mysqli->error, "<i class='fa fa-times-circle'></i>", "danger");	
					
					}
				}
				}
		
				
				
// Validate License Key
if (isset($_POST['submit']) && $_POST['submit'] == 'validate') {
	$pin = $mysqli->real_escape_string($_POST['license']);
	if($pin == ''){
	$msgBox = alertBox("Please enter license key to continue.", "<i class='fa fa-times-circle'></i>", "danger");
	}
	elseif($pin != ''){
	$selec = mysqli_query($mysqli, "SELECT license FROM sch_details WHERE license='$pin'");
	if(mysqli_num_rows($selec)){
	$msgBox = alertBox("The license key you entered has already been registered to another user.", "<i class='fa fa-times-circle'></i>", "danger");
	}
	else{
	if(!mysqli_num_rows($selec)){
	$select = mysqli_query($mysqli, "SELECT license FROM license_keys WHERE license='$pin'");
	if(mysqli_num_rows($select) == 0){
	$msgBox = alertBox("The license key you entered is not valid. Please enter a valid license key or contact the service provider.", "<i class='fa fa-times-circle'></i>", "danger");	
	
	}
	}
	if(mysqli_num_rows($select) > 0){
	header("Location: setup?License=".$pin .'&rid='.randnumber());
	$_SESSION['pin'] = $pin;
	
	}
	
	
	} 
	}
	}
	
	
	
	
	// Edit Account
	if (isset($_POST['submit']) && $_POST['submit'] == 'editProfile') {
	if($_POST['passwordNew'] == "") {
	$msgBox = alertBox("Enter your new password", "<i class='fa fa-times-circle'></i>", "danger");
	}else  if($_POST['passwordNew'] != $_POST['passwordRepeat']) {
	$msgBox = alertBox("Both new and repeat passwords are not equal", "<i class='fa fa-warning'></i>", "warning");
	} else {
	if($_POST['currentPass'] != '') {
	$currPass = encryptIt($_POST['currentPass']);
	} else {
	$currPass = '';
	}
	
	if($_POST['currentPass'] == '') {
	$newPassword = $_POST['passwordOld'];
	
	
	
	$stmt = $mysqli->prepare("UPDATE
	users
	SET
	password = ?
	WHERE
	id = ?"
	);
	$stmt->bind_param('ss',
	
	$newPassword,
	$userId
	);
	$stmt->execute();
	$msgBox = alertBox("Updated Successfully", "<i class='fa fa-check-square'></i>", "success");
	$stmt->close();
	} else if ($_POST['currentPass'] != '' && encryptIt($_POST['currentPass']) == $_POST['passwordOld']) {
	$newPassword = encryptIt($_POST['passwordNew']);
	
	$stmt = $mysqli->prepare("UPDATE
	users
	SET
	
	password = 
	WHERE
	id = ?"
	);
	$stmt->bind_param('ss',
	$newPassword,
	$userId
	);
	$stmt->execute();
	$msgBox = alertBox("Updated Successfully", "<i class='fa fa-check-square'></i>", "success");
	$stmt->close();
	} else {
	$msgBox = alertBox("Error updating password. Check your input.", "<i class='fa fa-warning'></i>", "warning");
	}
	}
	}
	
	
	
	// Validate Pins
	if (isset($_POST['submit']) && $_POST['submit'] == 'mypin') {
	$pin = $mysqli->real_escape_string($_POST['pin']);
	if($pin == ''){
	$msgBox = alertBox("Please enter pin number to continue.", "<i class='fa fa-times-circle'></i>", "danger");
	}
	elseif($pin != ''){
	$selec = mysqli_query($mysqli, "SELECT result_pin FROM student WHERE result_pin='$pin'");
	if(mysqli_num_rows($selec)){
	header("Location: login?Pin=".$pin .'&rid='.randnumber());
	$_SESSION['pin'] = $pin;
	}
	else{
	if(!mysqli_num_rows($selec)){
	$select = mysqli_query($mysqli, "SELECT pins FROM pins WHERE pins='$pin'");
	if(mysqli_num_rows($select) == 0){
	$msgBox = alertBox("The pin you entered is not valid. Please enter a valid pin or call the school authority.", "<i class='fa fa-times-circle'></i>", "danger");	
	
	}
	}
	if(mysqli_num_rows($select) > 0){
	header("Location: login?Pin=".$pin .'&rid='.randnumber());
	$_SESSION['pin'] = $pin;
	
	}
	} 
	}
	}
	
	// Validate Student Login
if (isset($_POST['submit']) && $_POST['submit'] == 'mylogin') {
	$pin = $mysqli->real_escape_string($_POST['pin']);
	$user = $mysqli->real_escape_string($_POST['stu']);
	
	if($user == ''){
	$msgBox = alertBox("Please enter Student ID No.", "<i class='fa fa-times-circle'></i>", "danger");	
	}
	elseif($user != ''){
	$selec = mysqli_query($mysqli, "SELECT * FROM student WHERE result_pin='$pin' or regiNo = '$user'");
	if(mysqli_num_rows($selec)){
	$getu = mysqli_fetch_assoc($selec);
	if($getu['regiNo'] == $user AND $getu['result_pin'] != $pin){
	header("Location: main?Rid=".randnumber());
	mysqli_query($mysqli, "UPDATE student SET result_pin = '$pin', result_pin_count = result_pin_count + 1  WHERE regiNo='$user'");
	mysqli_query($mysqli, "delete from pins where pins = '$pin'");
	$_SESSION['id'] = $getu['id'];	
	$_SESSION['matricno'] = $getu['regiNo'];	
	}
	elseif($getu['result_pin'] == $pin AND $getu['regiNo'] != $user AND $getu['result_pin_count'] > 0){
	$msgBox = alertBox("This pin does not belong to you so you can not access result page.", "<i class='fa fa-times-circle'></i>", "danger");	
	}
	elseif($getu['regiNo'] == $user && $getu['result_pin'] == $pin && $getu['result_pin_count'] <= 3){
	header("Location: main?Pin=".randnumber());
	mysqli_query($mysqli, "UPDATE student SET result_pin_count = result_pin_count + 1  WHERE regiNo='$user' and result_pin='$pin'");
	$_SESSION['id'] = $getu['id'];	
	$_SESSION['matricno'] = $getu['regiNo'];	
	mysqli_query($mysqli, "insert into used_pins(stuId, pins)values('".$_SESSION['matricno']."','$pin')");
	}
	elseif($getu['regiNo'] == $user and $getu['result_pin'] == $pin and $getu['result_pin_count'] >= 3){
	header("Location: pin_expired?Rid=".randnumber());
	}
	}else{
	$msgBox = alertBox("Invalid Student ID No.", "<i class='fa fa-times-circle'></i>", "danger");	
	}
	
	}//if $user != '' ends here
	}
	
	
	
	// Validate scratch card renew
	if (isset($_POST['submit']) && $_POST['submit'] == 'myrenew') {
	$pin = $mysqli->real_escape_string($_POST['pin']);
	$user = $mysqli->real_escape_string($_POST['stu']);
	if($pin == ''){
	$msgBox = alertBox("Please enter the pin number on the scratch card", "<i class='fa fa-times-circle'></i>", "danger");	
	}
	elseif($user == ''){
	$msgBox = alertBox("Please enter your Student ID No.", "<i class='fa fa-times-circle'></i>", "danger");	
	}
	elseif($pin != '' && $user != ''){
		//check pin validity
	$select = mysqli_query($mysqli, "SELECT pins FROM pins WHERE pins='$pin'");
	if(!mysqli_num_rows($select)){
	$msgBox = alertBox("The pin you entered is not valid. Please enter a valid pin or call the school authority.", "<i class='fa fa-times-circle'></i>", "danger");	
	}elseif(mysqli_num_rows($select)){
	$selectu = mysqli_query($mysqli, "SELECT * FROM student WHERE regiNo='$user'");//get user details
	if(mysqli_num_rows($selectu)){
	$upcard = mysqli_query($mysqli, "UPDATE student SET result_pin = '$pin', result_pin_count  =  1  WHERE regiNo='$user'");
	if($upcard){
	header("Location: main?Rid=".randnumber());
	mysqli_query($mysqli, "insert into used_pins(regiNo, pins)values('$user','$pin'");	
	mysqli_query($mysqli, "delete from pins where pins = '$pin'");	
	//$_SESSION['id'] = $getu['id'];	
	$_SESSION['matricno'] = $user;	
	}else{
	$msgBox = alertBox("Oooops! Something went wrong. Please try again later.", "<i class='fa fa-times-circle'></i>", "danger");		
	}
	}
	elseif(!mysqli_num_rows($selectu)){
	$msgBox = alertBox("Invalid Matric No./Student ID No.", "<i class='fa fa-times-circle'></i>", "danger");	
	}
	}
	
	}
	
	}
	
	
	//School setting
	if (isset($_POST['submit']) && $_POST['submit'] == 'sedit') {
		//$una= $_SESSION['uname'];
	$addr = $mysqli->real_escape_string($_POST['addr']);	
	$con = $mysqli->real_escape_string($_POST['contact']);	
	$loc = $mysqli->real_escape_string($_POST['location']);		
	$pb = $mysqli->real_escape_string($_POST['pobox']);		
	$updateme = mysqli_query($mysqli, "update sch_details set addr='$addr', contact='$con', location='$loc', pobox='$pb' where username='".$_SESSION['uname']."'");
	if($updateme){
		$msgBox = alertBox("Updated Successfully", "<i class='fa fa-check-square'></i>", "success");
		header("Location: setting?Rid=".randnumber());
	}else{
		$msgBox = alertBox("Oooops! Something went wrong. Please try again later.", "<i class='fa fa-times-circle'></i>", "danger");
	}
	
	}
	
	?>