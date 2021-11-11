<?php
//delete.php
include('../includes/functions.php');
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM activities WHERE id = '".$id."'";
  mysqli_query($mysqli, $query);
 }
}
?>