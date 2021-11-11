<?php
require_once('../../includes/functions.php');




 for($count = 0; $count < count($_POST["stuid"]); $count++)
 {  
    
    $rno = $_POST["stuid"][$count]; 
    $subid  = $_POST["sub_id"][$count];
    $fs  = $_POST["fsummary"][$count];
    $ss  = $_POST["ssummary"][$count];
    $te  = $_POST["term"][$count];
    $ste  = $_POST["sterm"][$count];
    //$ts  = $_POST["total_score"][$count];
    $sh  = $_POST["sub_pos"][$count];
    //$sl  = $_POST["sub_lowest"][$count];
    $cl  = $_POST["class_name"][$count];
    $yr  = $_POST["year"][$count];

  $query = mysqli_query($mysqli,"INSERT INTO exam_mid_term( 
  Roll_Number,
  sub_id,
  first_summary,
  second_summary,
  term_exam,
  summary_work,
  sub_position,
  Class,
  Year) 
  VALUES ('$rno','$subid','$fs','$ss','$te','$ste','$sh','$cl','$yr')");
 }

    if($query)
    {
    echo 'ok';
    }else{
        echo $mysqli->error;
    }


?>