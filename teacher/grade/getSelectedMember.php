<?php 

require_once('../../includes/config.php'); 


header('Content-type: application/json; charset=utf-8');

if(isset($_POST['id']){
$json = array();
$id =  trim($_POST['id']);
$query = "SELECT regiNo FROM student WHERE id = ?";
$statement = $mysqli->prepare($query);
$statement->bind_param('s', $id);
$statement->execute();
$statement->bind_result($nId);
while ($statement->fetch()){
   $user=array('regiNo'=>$nId);
    array_push($json,$user);
}
echo json_encode($json, true);

 }








/*$memberId = $_POST['member_id'];

$sql = "SELECT * FROM student WHERE id = '$memberId'";
$query = $mysqli->query($sql);
$result = $query->fetch_assoc();

$mysqli->close();

echo json_encode($result);*/

