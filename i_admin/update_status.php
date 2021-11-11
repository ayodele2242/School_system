<?php
   include("../includes/functions.php");
  $id = $_POST['id'];
  $status = $_POST['mystatus'];
  $query = "UPDATE student SET status = '$status' WHERE id = '$id'";
  $update = mysqli_query($mysqli, $query);
  ?>