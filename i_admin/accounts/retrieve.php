<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
//$snam = $_SESSION['fname'];

	$sql = "SELECT * FROM account  order by accid desc limit 30";
	$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	$School_fee = $row['School_fee'];
	$Amount_paid = $row['Amount_paid'];
	$owning =  $row['Amount_Owning'];
	$owning2 =  $row['Amount_Owning'];
	$accid = $row['accid'];
	if($owning == 0){
	$get =  '<span class="text-success">Fully Paid <i class="fa fa-check"></i></span>';
	}else{
	$get = $owning;
	}

	$sf = $row['sum_of'] . '  naira';
	
	if($owning2 == 0){
		$act ='
	<a class="btn btn-sm btn-default" href="receipt2?token='.randnumber().'&id='.$accid.'" target="_blank"  title="Print"><span class="fa fa-print"></span></a>
	';
   
	}else{
	$act ='
	<a class="btn btn-sm btn-info" href="generate_receipt?id='.$row['accid'].'" title="Update"><span class="glyphicon glyphicon-pencil"></span> </a>
	<a class="btn btn-sm btn-default" href="receipt2?token='.randnumber().'&id='.$accid.'" target="_blank"  title="Print"><span class="fa fa-print"></span></a>
	';
    }
	
	$output['data'][] = array(
		$x,
		$row['Receipt_Code'],
		$row['Student_Name'],
		$row['Student_reg_code'],
		$School_fee,
		$Amount_paid,
		$get,
		$sf,
		$act
		
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);