<?php 

require_once('../../includes/functions.php'); 

$memberId = $_POST['member_id'];

$sql = "SELECT * FROM jobs WHERE id = $memberId";
$query = $mysqli->query($sql);
$result = $query->fetch_assoc();

$mysqli->close();

echo json_encode($result);

