<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());

$sql = "SELECT user_id, CONCAT(last_name,' ', maiden_name, ' ', first_name)  name, CONCAT(home_phone,', ', cell_phone,', ', work_phone)  phone,
CONCAT(link1,', ',link2,', ', link3)  links, gender, email, address, state, city, status, photo, grad_year from alumni_users order by user_id desc ";
$query = $mysqli->query($sql);


$x = 1;
while ($row = $query->fetch_assoc()) {
 
    $chk = '<input name="mailcheckbox[]" id="mailcheck" type="checkbox" value="'.$row['user_id'].'"/>';
    $status = $row['status'];



	if($row['status']=='inactive' || $row['status']=='')
	 {
	$sta = '
	<select id=alumni_'.$row['user_id'].' onchange="getalumni(this,'.$row['user_id'].')" class="inactives oks">
		<option value="inactive"  selected >Inactivated</option>
		<option value="active">Activate</option>
		
	</select>
	';
	}elseif($row['status']=='active')
	 {
	$sta  = '
	<select id=alumni_'.$row['user_id'].' onchange="getalumni(this,'.$row['user_id'].')" class="sta-active oks">
		<option value="active"  selected >Activated</option>
		<option value="inactive"  >Inactivate</option>
		
	</select>
	
	';
	 }
	

	$actionButton = '
	<a type="button" data-toggle="modal" data-target="#auserModal" class="btn btn-danger btn-sm" onclick="removeAUser('.$row['user_id'].')"> <span class="fa fa-trash"></span></a>	    
	
	
	';
	
	

	$output['data'][] = array(
        $x,
        $chk,
        $row['name'],
        $row['gender'],
        $row['email'],
        $row['phone'],
        $row['grad_year'],
        $row['address'],
        $row['state'],
        $row['city'],
        $row['links'],
        $sta,
        $actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);