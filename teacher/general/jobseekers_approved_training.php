<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
//$snam = $_SESSION['fname'];

$sql = "SELECT * FROM jobseeker WHERE training_approval_status=1 AND confirm_no LIKE 'A%' order by id desc";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
    $name =  $row['titles']. ' ' .$row['sname'].' ' .$row['mname'] . ' ' .$row['fname'];
    
    $c= date('Y');
    $y= date('Y',strtotime($row['dob']));
   $age =  $c-$y;
   $actionButton = '
   <a type="button" data-toggle="modal" id="custIds" data-target="#jModal" class="btn btn-info btn-sm"  data-id='.$row['id'].'"> <span class="glyphicon glyphicon-search"></span> View More</a>	    
       
   ';
	
	$output['data'][] = array(
		$x,
		$name,
		$row['gender'],
		$age,
		$row['mstatus'],
		$row['mails'],
		$row['phone'],
        $row['status'],
        $actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);