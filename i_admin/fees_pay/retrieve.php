<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
$snam = $_SESSION['fname'];

$sql = "SELECT * FROM fees_payment order by id desc";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	//$amt = number_format($row['amount']);
	$sum = $row['sum_of'] . ' naira';
	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#classModal" class="btn btn-danger btn-sm" onclick="removeFee('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
		
	';

	
	
	$output['data'][] = array(
		$x,
		$row['fee_name'],
		$row['class'],
		$row['amount'],	
		$sum,	
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);