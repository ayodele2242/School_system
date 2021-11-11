<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());

$sid = $_SESSION['class'];
$catclass = '';
$cats = explode(",", $sid);
foreach($cats as $cat) {
    $cat = trim($cat);
    $catclass .=  "'$cat',";
}
$impclass =  rtrim($catclass,',');

$sql = "SELECT * FROM student WHERE class IN($impclass)";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
	
	$name = $row['lastName'] .' '. $row['middleName'] .' '. $row['firstName'];
	
	$status = $row['status'];



	if($row['status']=='inactive' || $row['status']=='')
	 {
	$sta = '
	<select id=code11_'.$row['id'].' onchange="getcode11(this,'.$row['id'].')" class="inactives oks">
		<option value="inactive"  selected >Inactivated</option>
		<option value="active">Activate</option>
		<option value="suspended">Suspend</option>
	</select>
	';
	}elseif($row['status']=='active')
	 {
	$sta  = '
	<select id=code11_'.$row['id'].' onchange="getcode11(this,'.$row['id'].')" class="sta-active oks">
		<option value="active"  selected >Activated</option>
		<option value="inactive"  >Inactivate</option>
		<option value="suspended" >Suspend</option>
	</select>
	
	';
	 }
	elseif($row['status']=='suspended')
	 {
	$sta  = '
	<select id=code11_'.$row['id'].' onchange="getcode11(this,'.$row['id'].')" class="suspend oks">
	   <option value="suspended"  selected >Suspended</option>
		<option value="active"  >Activate</option>
		<option value="inactive" >Inactivate</option>
	</select>
	';

	 }
	$img = '<img src="user_images/'.$row['photo'].'" width="40" height="40"/>';
	$actionButton = '
	<a href="edit_student?id='.$row['id'].'" class="btn btn-warning" title="Edit/name/'.$name.'"><span class="glyphicon glyphicon-pencil"></span></a>
	
	<!--<a type="button" data-toggle="modal" id="ecustId" data-target="#eModal" class="btn btn-info btn-sm"  data-id='.$row['id'].'"> <span class="glyphicon glyphicon-search"></span></a>    
	
	<a type="button" data-toggle="modal" data-target="#employerModal" class="btn btn-danger btn-sm" onclick="removeEmployer('.$row['id'].')"> <span class="glyphicon glyphicon-trash"></span></a>-->    
	

	<a href="print_result?'.$row['regiNo'].'"   class="btn btn-info btn-sm" > <span class="glyphicon glyphicon-print"></span> Print Result</a>   
	
		';

	$output['data'][] = array(
		$x,
        $img,
		$row['lastName'],
		$row['middleName'],
		$row['firstName'],
		$row['regiNo'],
	    $row['gender'],
		$row['session'],
		$row['class'],
		$row['class_group'],
		$row['section'],
		$row['shift'],
		$row['religion'],
		$row['bloodgroup'],
		$row['nationality'],
		$row['dob'],
		$row['fatherName'],
		$row['fatherCellNo'],
		$row['motherName'],
		$row['motherCellNo'],
		$row['presentAddress'],
		$row['parmanentAddress'],


		$sta,
        $actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);