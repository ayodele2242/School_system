<?php
   include("../includes/functions.php");
   header('Content-type: application/json; charset=utf-8');

   if(isset($_POST['one'])){
   $json = array();
   $id =  trim($_POST['one']);
   $query = "SELECT id, fee_name, sum_of, amount FROM fees_payment WHERE fee_name = ?";
   $statement = $mysqli->prepare($query);
   $statement->bind_param('s', $id);
   $statement->execute();
   $statement->bind_result($nId, $nName, $nSum, $nAmount);
   while ($statement->fetch()){
      $user=array('id'=>$nId,'fee_name'=>$nName,'sum_of'=>$nSum,'amount'=>$nAmount);
       array_push($json,$user);
   }
   echo json_encode($json, true);
   
    }

    if(isset($_POST['name'])){
      $json = array();
      $id =  trim($_POST['name']);
      $query = "SELECT regiNo, firstName, middleName, lastName FROM student WHERE regiNo = ?";
      $statement = $mysqli->prepare($query);
      $statement->bind_param('s', $id);
      $statement->execute();
      $statement->bind_result($rno, $fname, $mname, $lname);
      while ($statement->fetch()){
         $user=array('rno'=>$rno,'fname'=>$fname,'mname'=>$mname,'lname'=>$lname);
          array_push($json,$user);
      }
      echo json_encode($json, true);
      
       }


    




  ?>