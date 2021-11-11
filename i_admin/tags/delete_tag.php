<?
require('../../includes/functions.php');

$id = $mysqli->real_escape_string($_POST['delete_id']); 

$query = $mysqli->query("delete from tags where ID = $id");
?>