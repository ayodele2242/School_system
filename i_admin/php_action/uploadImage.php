<?php 
include('../../includes/functions.php');

if($_POST) {
	
	//$valid = array('success' => false, 'messages' => array());

	$name = $mysqli->real_escape_string($_POST['name']);// user name
	$dept = $mysqli->real_escape_string($_POST['dept']); 
	$desc = $mysqli->real_escape_string($_POST['description']);// user email
	$yr = $mysqli->real_escape_string($_POST['date']); 

	$fileName = $_FILES['userImage']['name'];

	$type = explode('.', $fileName);
	$type = $type[count($type) - 1];

	$url = '../user_images/' . uniqid(rand()) . '.' . $type;

	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
		if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {

				// insert into database
				$sqls = "INSERT INTO worker_of_the_month (name, dept, description, given, img) VALUES ('$name','$dept','$desc','$yr', '$url')";

				$done = mysqli_query($mysqli, $sqls);
				if($done) {

					echo "saved";
				} 
				else {
					//$valid['success'] = false;
					//$valid['messages'] = "Error while saving. " . $mysqli->error;
					echo "Query could not execute.! " . $mysqli->error;
				}



			}
			else {
				//$valid['success'] = false;
				//$valid['messages'] = "Error while saving. " . $mysqli->error;
				echo "1";
			}
		}
	}

	//echo json_encode($valid);

	// upload the file 
}