<?php
    include "../../includes/functions.php";

if (isset($_POST['submit']) && $_POST['submit'] == 'editPwd') {

        $id = $_POST['id'];
        $password = $_POST['old_password'];
        $newpassword = $_POST['new_password'];
        $confirmnewpassword = $_POST['con_newpassword'];

        // match user id with the id in the database
        $sql = "SELECT pwd FROM employer WHERE id = '$id'";

        $get = mysqli_query($mysqli, $sql);
        $pw = mysqli_fetch_assoc($get);

        if(empty($_POST['old_password'])){
            $msgBox = alertBox( "Please type your current password", "<i class='fa fa-warning'></i>", "warning");
               
        }else if(empty($newpassword) || empty($confirmnewpassword)){
            $msgBox = alertBox( "Enter your new password and confirmed password", "<i class='fa fa-warning'></i>", "warning");
               
        }else if($pw["pwd"] != encryptIt($password)){
            $msgBox = alertBox("Current password is wrong. Try again. ", "<i class='fa fa-warning'></i>", "warning");   
        }
        else if($pw["pwd"] == encryptIt($newpassword)){
            $msgBox = alertBox( "Your new password is the same as the current one. Enter something else.", "<i class='fa fa-warning'></i>", "warning");
               
        }else if(strlen($newpassword) < 8){
            $msgBox = alertBox("Password must be 8 characters in length ", "<i class='fa fa-warning'></i>", "warning");
               
        }else{
            $ps =  encryptIt($newpassword);
            $sql = "UPDATE employer SET pwd = '$ps' WHERE id = '$id'";
            $let = mysqli_query($mysqli, $sql);
         if($let){
            $msgBox = alertBox( "Password Changed Successfully!", "<i class='fa  fa-check-square'></i>", "success");
            }else{
                $msgBox = alertBox( "Password could not be updated. ".  $mysqli->error, "<i class='fa fa-warning'></i>", "warning");
            }
        }

    }
?>