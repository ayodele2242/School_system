<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
$snam = $_SESSION['fname'];

$sql = "SELECT * FROM  navigation_bar  order by id desc";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	$status = $row['status'];



	if($row['status']=='inactive' || $row['status']=='')
	 {
	$sta = '
	<select id=mcode1_'.$row['id'].' onchange="mgetcode1(this,'.$row['id'].')" class="inactives oks">
		<option value="inactive"  selected >Inactivated</option>
		<option value="active">Activate</option>
		
	</select>
	';
	}elseif($row['status']=='active')
	 {
	$sta  = '
	<select id=mcode1_'.$row['id'].' onchange="mgetcode1(this,'.$row['id'].')" class="sta-active oks">
		<option value="active"  selected >Activated</option>
		<option value="inactive"  >Inactivate</option>
		
	</select>
	
	';
	 }
	

	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#classModal" class="btn btn-danger btn-sm" onclick="removeMenu('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
		
	';
	
	$output['data'][] = array(
		$x,
		$row['parent_id'],
		$row['name'],
		$row['link'],
		$row['position'],
		$sta,		
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);