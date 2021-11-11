<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
$snam = $_SESSION['fname'];

$sql = "SELECT * FROM  pins order by pid desc";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	
	
	$output['data'][] = array(
		$x,
		$row['pins'],
		$row['serials']
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);