<?php
include_once '../includes/functions.php';

if($_POST)
{

	
	$fname = mysql_real_escape_string($_POST['fullname']);
	$username = mysql_real_escape_string($_POST['username']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$pri = mysql_real_escape_string($_POST['privilege']);
    $joining_date 	= date('Y-m-d H:i:s');
    $user_email = mysql_real_escape_string($_POST['user_email']);
	$user_password = encryptIt($_POST['password']);	
	
    try
    {
        $stmt = $db_con->prepare("SELECT * FROM portal_user_login WHERE email=:email OR username=:user " );
        $stmt->execute(array(":email"=>$user_email, ":user"=>$username));
        $count = $stmt->rowCount();
		
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO portal_user_login(fullname, username, email, password, phone, privilege, reg_date) 
			VALUES(:fame, :uame, :umail, :upwd, :ph, :pr, :dates)");
          	$stmt->bindParam(":fame", $fname);
			$stmt->bindParam(":uame", $username);
			$stmt->bindParam(":umail", $user_email);
			$stmt->bindParam(":upwd", $user_password);
            $stmt->bindParam(":ph", $phone);
            $stmt->bindParam(":pr", $pri);
			$stmt->bindParam(":dates", $joining_date);


            if($stmt->execute())
            {
                echo "reg";
            }
            else
            {
                echo "Query could not execute !";
            }

        }
        else{

            echo "1"; //  not available
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>