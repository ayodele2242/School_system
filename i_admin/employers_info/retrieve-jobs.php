<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());

$sql = "SELECT CONCAT(e.cperson_sname,' ',e.cperson_fname) AS name, e.cname, e.industry, j.id, j.jtitle, j.jdiscrib, j.status From employer e INNER JOIN jobs j ON e.id = j.fid ";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
    $yourString = $row['jdiscrib'];

if (strlen($yourString) > 15) // if you want...
{
    $maxLength = 14;
    $string = substr($yourString, 0, $maxLength);
}


if($row['status']=='rejected' || $row['status']=='')
	 {
	$sta = '
	<select id=code11_'.$row['id'].' onchange="getcode11(this,'.$row['id'].')" class="inactives oks">
		<option value="rejected"  selected >Rejected</option>
		<option value="accepted">Accept</option>
	</select>
	';
	}elseif($row['status']=='active' || $row['status']=='accepted')
	 {
	$sta  = '
	<select id=code11_'.$row['id'].' onchange="getcode11(this,'.$row['id'].')" class="sta-active oks">
		<option value="accepted"  selected >Accepted</option>
		<option value="rejected"  >Reject</option>
	</select>
	
	';
	 }

	
	$actionButton = '
	  
	<a type="button" data-toggle="modal" id="custId" data-target="#myModal2" class="btn btn-info btn-sm"  data-id='.$row['id'].'"> <span class="glyphicon glyphicon-zoom-in"></span> Preview</a>	    
		
	';
	
	$output['data'][] = array(
		$x,
		$row['name'],
		$row['cname'],
		$row['industry'],
		$row['jtitle'],
        $string,
		$sta,
		$actionButton
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);