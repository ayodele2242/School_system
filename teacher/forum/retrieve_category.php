<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
$snam = $_SESSION['fname'];

$sql = "SELECT * FROM  alumni_categories  order by category_id desc limit 30";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	
if($row['category'] == 'uncategorized'){
	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#fixedModal" class="btn btn-danger btn-sm">  <span class="glyphicon glyphicon-trash"></span></a>	    
	
	';
}else{
	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#catModal" class="btn btn-danger btn-sm" onclick="removeCategory('.$row['category_id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
		
	';
}


	
	$output['data'][] = array(
		$x,
		$row['category'],
		
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);