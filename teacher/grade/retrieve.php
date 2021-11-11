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
$sql = "SELECT distinct s.id,s.regiNo, s.firstName as fname, s.middleName as mname, s.lastName as lname, s.gender, s.class_group, c.subjects,
e.mid_term, e.count_assessment, e.examid, e.scored, e.internaltype, e.Class, e.Year,e.total_score,e.sub_highest,e.sub_lowest,e
.first_term,e.second_term,e.third_term,e.avg_score FROM student s inner join exam e on s.regiNo = e.Roll_Number 
inner join subjects c on e.sub_id = c.subect_code WHERE e.Class IN($impclass) group by s.regiNo, s.firstName, s.middleName, s.lastName, s.gender, s.class_group, c.subjects,
e.mid_term, e.count_assessment, e.examid, e.scored, e.internaltype, e.Class, e.Year,e.total_score,e.sub_highest,e.sub_lowest,
e.first_term,e.second_term,e.third_term,e.avg_score,s.id";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
	
	$actionButton = '
	<!--<a type="button" data-toggle="modal"  data-target="#editGradeModals" class="text-info edit_user"  id='.$row['id'].'"> <span class="glyphicon glyphicon-search"></span></a>	 -->   
	
	<a type="button" data-toggle="modal" data-target="#removeGradeModal" class="text-danger" onclick="removeGrade('.$row['examid'].')"> <span class="glyphicon glyphicon-trash"></span></a>	&nbsp;&nbsp;    
	
	';
	
	$name = $row['lname'] .' '.$row['mname'] .' '.$row['fname'];	
	//$total = $row['First_CA'] + $row['Second_CA'] + $row['scored'];

	$output['data'][] = array(
		$x,
		$actionButton,
		$name,
		$row['regiNo'],
		$row['subjects'],
		$row['mid_term'],
		$row['count_assessment'],
		$row['scored'],
		$row['total_score'],
		$row['sub_highest'],
		$row['sub_lowest'],
		$row['first_term'],
		$row['second_term'],
		$row['third_term'],
		$row['avg_score'],
		$row['internaltype'],
		$row['Class'],
		
		$row['Year']
		
		
		
	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);