<?php 

require_once('../../includes/config.php'); 

$id=$_POST['id'];
$delete = "DELETE FROM alumni_comments WHERE comment_id=$id";
$result = mysqli_query($mysqli, $delete);

?>