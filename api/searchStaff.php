<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400'); // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    }
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    }
    exit(0);

}

//$_POST['querystr'] = "fagbemi";
if(isset($_POST['querystr'])){

	require "config.php";



		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT surname, othername, photo FROM employee WHERE surname LIKE '%$querystr%' OR othername LIKE '%$querystr%' ORDER BY surname";

			$sqlquery = $db->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){
				     if($ldata['photo'] == ""){
                          $ml =  '<img src="http://edomonitor.com/totallight/logo/avatar.png" width="100" height="100" />';
                        }else{
                         $ml = '<img src="http://edomonitor.com/totallight/i_admin/user_images/'.$ldata['photo'].'" width="100" height="100" />';
                        
                        }  

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".ucwords($ldata['surname'])." ".ucwords($ldata['othername'])."'>".$ml . "  &nbsp;&nbsp; ".ucwords($ldata['surname'])." ".ucwords($ldata['othername'])."</li>

					";

				}

			}

			else{

				$results['data'] = "

					<li class='list-gpfrm-list'>No found data matches Records</li>

				";

			}

		}

 

		echo json_encode($results);

	}




/*if(isset($_GET["term"]))
{
  require "config.php";

 $query = "
 SELECT surname, othername, photo FROM employee 
 WHERE surname LIKE '%".$_GET["term"]."%' OR other LIKE '%".$_GET["term"]."%' 
 ORDER BY surname
 ";

 $statement = $db->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $total_row = $statement->rowCount();

 $output = array();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
    $name = $row['surname'].' '.$row['othername'];
	 if($row['photo'] == ""){
      $ml =  '<img src="http://edomonitor.com/totallight/logo/avatar.png" width="70" height="70" />&nbsp;&nbsp;&nbsp;'.$name.'';
    }else{
     $ml = '<img src="http://edomonitor.com/totallight/i_admin/user_images/'.$row['photo'].'" width="70" height="70" />&nbsp;&nbsp;&nbsp;'.$name.'';
    
    }  
      
   $temp_array = array();
   $temp_array['value'] = $name;
   $temp_array['label'] = $ml;
   $output[] = $temp_array;
  }
 }
 else
 {
  $output['value'] = '';
  $output['label'] = 'No Record Found for '.$_GET["term"];
 }

 echo json_encode($output);
}*/

?>
