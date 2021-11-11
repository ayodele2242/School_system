<?php
   include("../includes/functions.php");
  $id = $_POST['user_id'];
  $status = $_POST['status'];
  $query = "UPDATE alumni_users SET status = '$status' where user_id ='$id'";
  $update = mysqli_query($mysqli, $query);
  ?>