<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
//$snam = $_SESSION['fname'];

$sql = "SELECT j.confirm_no, j.titles, j.sname, j.mname, j.dob, j.fname, t.id, j.stateng, j.localg,  j.confirm_no,
 t.profession, t.consultant_grade, t.coordinator_grade, t.overall_grade, t.remark, t.remark, t.date FROM 
jobseeker j INNER JOIN training_exercise t ON j.confirm_no = t.confirm_no";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	$name =  $row['titles']. ' ' .$row['sname'].' ' .$row['mname'] . ' ' .$row['fname'];
	
	if($row['remark']=='successful')
	 {
	$sta = '
	<span class="label label-success">'.$row['remark'].'</span>';
	}elseif($row['remark']=='unsuccessful')
	 {
	$sta  = '<span class="label label-danger">'.$row['remark'].'</span>';
	 }
    
    $c= date('Y');
    $y= date('Y',strtotime($row['dob']));
    $age =  $c-$y;
   
	
	$output['data'][] = array(
		$x,
		$name,
		$row['confirm_no'],
		$row['stateng'],
		$row['localg'],
		$row['profession'],
		$age,
		$row['consultant_grade'],
		$row['coordinator_grade'],
		$row['overall_grade'],
        $sta,
        $row['date']
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);