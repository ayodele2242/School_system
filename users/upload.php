<?php
include_once '../includes/functions.php';
if(!isset($_SESSION['id'])){
	header("Location: ../login?Action=Access denied. Enter your login details.");
}
if(is_array($_FILES)) {
	
	    $imgFile = $_FILES['userImage']['name'];
		$tmp_dir = $_FILES['userImage']['tmp_name'];
		$imgSize = $_FILES['userImage']['size'];
		//$user = $_POST['user'];
		
			
			$upload_dir = '../uploads/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
			$pic = clean($userpic);
				
			// allow valid image file formats
			if(!in_array($imgExt, $valid_extensions)){
				echo "0";
			}
			elseif(in_array($imgExt, $valid_extensions)){			
				// Check file size '1MB'
				if($imgSize <= 1000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$pic);
					?>
					<img src="../uploads/<?php echo $pic; ?>" width="200px" height="200px" class="upload-preview" />

					<?php

					$sql_update = "UPDATE alumni_users set photo = '$pic' where user_id='".$_SESSION['id']."'";			
					mysqli_query($mysqli, $sql_update) or die("database error:". mysqli_error($mysqli));
					//unlink("../logo/'".$row['logo']."'");
				}
				else{
					echo "1";
				}
			}
		
	

	
	
	
	
	
	
	
	
	

}


?>