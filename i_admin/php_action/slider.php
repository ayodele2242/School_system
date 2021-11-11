<?php 
include('../../includes/functions.php');

if($_POST) {
	
	//$valid = array('success' => false, 'messages' => array());

	     $name =$_POST['name'];
	     $desc = $_POST['description'];

	
    	$imgFile = $_FILES['userImage']['name'];
		$tmp_dir = $_FILES['userImage']['tmp_name'];
        $imgSize = $_FILES['userImage']['size'];
        
        $upload_dir = '../../imaging/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
		
			// rename uploading image
            $userpic = rand(1000,1000000).".".$imgExt;
            if(!empty($imgFile)){
            $pic = $userpic;
            }else{
                $pic = '';
            }
            
           if(!empty($imgFile)){
                move_uploaded_file($tmp_dir,$upload_dir.$pic);
            }
            
            
            	// insert into database
				$sqls = "INSERT INTO slider (name, descr,  img) VALUES ('$name', '$desc', '$pic')";

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

