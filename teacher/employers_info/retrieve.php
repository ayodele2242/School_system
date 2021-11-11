<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
//$snam = $_SESSION['fname'];

$sql = "SELECT * FROM employer order by id desc";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	$name =  $row['cperson_sname'].' ' .$row['cperson_fname'];
	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#employerModal" class="btn btn-danger btn-sm" onclick="removeEmployer('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
	<a type="button" data-toggle="modal" id="ecustId" data-target="#eModal" class="btn btn-info btn-sm"  data-id='.$row['id'].'"> <span class="glyphicon glyphicon-search"></span></a>	    
		
	';
	
	$output['data'][] = array(
		$x,
		$row['cname'],
		$row['town'],
		$row['employee'],
		$row['industry'],
		$name,
		$row['cphone'],
		$row['cmail'],
		$row['business_owner'],
		$row['confirm_no'],
		$row['edate'],
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);