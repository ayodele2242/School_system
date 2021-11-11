<?php
	require_once '../includes/functions.php';

	if(isset($_POST['btn-login']))
	{
		
		$username = $mysqli->real_escape_string($_POST['username']);
		$user_password = encryptIt($_POST['password']);
		
		$password = $user_password;
		
			$stmt = mysqli_query($mysqli, "SELECT * FROM employee WHERE username='$username' OR userEmail='$username' OR phoneno='$username' AND password='$password'");
			$row = mysqli_fetch_array($stmt);
			
			
			if($row['password']==$password AND  $row['username']==$username || $row['userEmail']==$username || $row['phoneno']==$username AND $row['status']=='active'){
				
				echo "yes"; // log in
				
				//$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
                
				$_SESSION['id'] = $row['id'];
				$d = $_SESSION['id'];
                $uname  = $row['username'];
				$fname  = $row['surname'] .' '. $row['othername'];
				$act = 'Logged in';
				$t = date("Y-m-d H:i:s");
				$tv = time();

                mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fname','$act', '$tv', '$d', '$t', '$tv')");
				
                mysqli_query($mysqli, "UPDATE employee SET lastVisited = '$t', timeVisited = '$tv' where id = '$d'");
				
			}
			else if ($row['password']==$password AND $row['username']==$username || $row['userEmail']==$username || $row['phoneno']==$username  AND $row['status'] == 'suspended') {
                // If the account is not suspended, show a message
                echo "s";
             } else if ($row['password']==$password AND  $row['username']==$username || $row['userEmail']==$username || $row['phoneno']==$username AND $row['status'] == 'inactive') {
                // If the account is not active, show a message
                echo "i";
                }
				else {
                    // No account found
                    echo "Invalid login details entered.";
                
     }
							
		
	}

?>