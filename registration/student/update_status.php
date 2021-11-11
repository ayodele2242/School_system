<?php
   include("../includes/functions.php");
  $id = $_POST['id'];
  $status = $_POST['status'];
  $query = "UPDATE student SET status = '$status' where id =".$id;
  $update = mysqli_query($mysqli, $query);
  ?>