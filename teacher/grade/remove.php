<?php 

require_once('../../includes/config.php'); 

$output = array('success' => false, 'messages' => array());

$memberId = $_POST['member_id'];

$sql = "DELETE FROM exam WHERE examid = {$memberId}";
$query = $mysqli->query($sql);
if($query === TRUE) {
	$output['success'] = true;
	$output['messages'] = 'Successfully Deleted';
} else {
	$output['success'] = false;
	$output['messages'] = 'Error occured while deleting mark';
}

// close database connection
$mysqli->close();

echo json_encode($output);