<?php 

require_once('../includes/config.php'); 

/*if(isset($_GET['id']))
{
     $sql = "DELETE FROM alumni_comments WHERE comment_id=".$_GET['id'];
    $mysqli->query($sql);
	 echo 'Deleted successfully.';
}*/

$id = $_POST['del_id'];
$delete = "DELETE FROM alumni_comments WHERE comment_id = '$id'";
$result = mysqli_query($mysqli, $delete);
if($result) {
    echo "YES";
 } else {
    echo $mysqli->err;
 }
?>