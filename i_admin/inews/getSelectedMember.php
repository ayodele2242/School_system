<?php 

require_once('../../includes/config.php'); 

$memberId = $_POST['member_id'];

$sql = "SELECT * FROM news WHERE id = $memberId";
$query = $mysqli->query($sql);
$result = $query->fetch_assoc();

$mysqli->close();

echo json_encode($result);

