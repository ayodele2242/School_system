<?php
//header('Content-type: application/json; charset=utf-8');
               

  require "config.php";

/*$json = array();
   //$id =  trim($_POST['one']);
   $query = "SELECT descr,img  FROM `slider` ORDER BY id DESC LIMIT 1 ";
   $statement = $db->prepare($query);
   //$statement->bind_param('s', $id);
   $statement->execute();
   $statement->bind_result($descr, $img);
   while ($statement->fetch()){
      $user=array('descr'=>$descr,'img'=>"http://localhost:83/totallight/imaging/".$img);
       array_push($json,$user);
   }
   echo json_encode($json, true);

 

mysqli_close($db);*/


$query = "SELECT descr,img  FROM `slider` ORDER BY id DESC LIMIT 1";
//$dbresult = $db->query($query);


$result = mysqli_query($db, $query);


 $response = array();


 while($row = mysqli_fetch_array($result))

{

array_push($response, array(
 "descr"=>$row['descr'], 
 "img"=>"http://edomonitor.com/totallight/imaging/".$row['img']
));

}

echo json_encode(array("data"=> $response));


mysqli_close($db);

/*while($row = $dbresult->fetch_array(MYSQLI_ASSOC)){

    $data[] = array(
        'descr' => $row['descr'],
        'img' => "http://localhost:83/totallight/imaging/".$row['img']
    );
}

if($dbresult){
 $result = "{'success':true, "data":" . json_encode($data) . "}";              
}
else {
    $result = "{'success':false}";
}*/

//echo($result);

 ?>