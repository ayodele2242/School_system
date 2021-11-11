<?php
include('../../includes/functions.php');

if (isset($_POST['submit']) && $_POST['submit'] == 'editPwd') {

    $id = $_POST['ids'];
    $password = $_POST['old_password'];
    $newpassword = $_POST['new_password'];
    $confirmnewpassword = $_POST['con_newpassword'];

    // match user id with the id in the database
    $sql = "SELECT password FROM users WHERE userId = '$id'";

    $get = mysqli_query($mysqli, $sql);
    $pw = mysqli_fetch_assoc($get);

    if($pw["password"] != encryptIt($password)){
        echo "wrong password";   
    }
    else if($pw["password"] == encryptIt($newpassword)){
        echo "same";  
    }else{
        $ps =  encryptIt($newpassword);
        $sql = "UPDATE  users SET password = '$ps' WHERE userId = '$id'";
        $let = mysqli_query($mysqli, $sql);
     if($let){
         echo "updated";
        }else{
           echo "Password could not be updated. ".  $mysqli->error;
        }
    }

}


?>