<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
$snam = $_SESSION['fname'];

$sql = "SELECT * FROM  portal_user_login  order by id desc limit 30";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	$status = $row['status'];



	if($row['status']=='inactive' || $row['status']=='')
	 {
	$sta = '
	<select id=code1_'.$row['id'].' onchange="getcode1(this,'.$row['id'].')" class="inactives oks">
		<option value="inactive"  selected >Inactivated</option>
		<option value="active">Activate</option>
		<option value="suspended">Suspend</option>
	</select>
	';
	}elseif($row['status']=='active')
	 {
	$sta  = '
	<select id=code1_'.$row['id'].' onchange="getcode1(this,'.$row['id'].')" class="sta-active oks">
		<option value="active"  selected >Activated</option>
		<option value="inactive"  >Inactivate</option>
		<option value="suspended" >Suspend</option>
	</select>
	
	';
	 }
	elseif($row['status']=='suspended')
	 {
	$sta  = '
	<select id=code1_'.$row['id'].' onchange="getcode1(this,'.$row['id'].')" class="suspend oks">
	   <option value="suspended"  selected >Suspended</option>
		<option value="active"  >Activate</option>
		<option value="inactive" >Inactivate</option>
	</select>
	';

	 }

	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#userModal" class="btn btn-danger btn-sm" onclick="removeUser('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>	    
	
	
	';
	
	$output['data'][] = array(
		$x,
		$row['fullname'],
		$row['username'],
		$row['email'],
		$row['phone'],
		$row['lastVisited'],
		$sta,
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);