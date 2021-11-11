<?php 
require_once('../../includes/config.php'); 

$output = array('data' => array());

$sid = $_SESSION['class'];
$catclass = '';
$cats = explode(",", $sid);
foreach($cats as $cat) {
    $cat = trim($cat);
    $catclass .=  "'$cat',";
}
$impclass =  rtrim($catclass,',');
/*$sql = "SELECT distinct s.regiNo, s.firstName as fname, s.middleName as mname, s.lastName as lname, s.gender, s.class_group, c.subjects, 
e.First_CA, e.Second_CA, e.examid, e.scored, e.internaltype, e.Class, e.Year FROM student s, subjects c, exam e WHERE s.regiNo = e.Roll_Number 
AND e.sub_id = c.subect_code group by s.regiNo, e.Class, s.class_group, e.Year
";*/
$sql = "SELECT DISTINCT s.id, s.regiNo, s.firstName as fname, s.middleName as mname, s.lastName as lname, s.gender, s.class_group, 
c.subjects, e.first_summary, e.second_summary, e.id as eid, e.term_exam, e.summary_work, e.Class, e.Year,e.sub_highest_score,
e.sub_lowest_score,e.sub_position FROM student s inner JOIN exam_mid_term e on s.regiNo = e.Roll_Number 
inner JOIN subjects c on e.sub_id = c.subect_code WHERE e.Class IN($impclass) GROUP BY s.id, s.regiNo, s.firstName, s.middleName, s.lastName, 
s.gender, s.class_group, c.subjects, e.first_summary, e.second_summary, e.id, e.term_exam, e.summary_work, e.Class, 
e.Year,e.sub_highest_score,e.sub_lowest_score,e.sub_position";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
	
	$actionButton = '
	<!--<a type="button" data-toggle="modal"  data-target="#editGradeModals" class="text-info edit_user"  id='.$row['id'].'"> <span class="glyphicon glyphicon-search"></span></a>	-->    
	
	<a type="button" data-toggle="modal" data-target="#removeGradeModal" class="text-danger" onclick="removeGrade('.$row['eid'].')"> <span class="glyphicon glyphicon-trash"></span></a>	&nbsp;&nbsp;    
	
	';
	
	$name = $row['lname'] .' '.$row['mname'] .' '.$row['fname'];	
	//$total = $row['First_CA'] + $row['Second_CA'] + $row['scored'];

	$output['data'][] = array(
		$x,
		$actionButton,
		$name,
		$row['regiNo'],
		$row['subjects'],
		$row['first_summary'],
		$row['second_summary'],
		$row['term_exam'],
		$row['summary_work'],
		$row['sub_highest_score'],
		$row['sub_lowest_score'],
		$row['Class'],
		$row['Year']
		
		
		
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);