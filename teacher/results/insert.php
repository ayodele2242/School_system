<?php
require_once('../../includes/functions.php');




 for($count = 0; $count < count($_POST["stuid"]); $count++)
 {  
    
    $rno = $_POST["stuid"][$count]; 
    $subid  = $_POST["sub_id"][$count];
    $mt  = $_POST["mid_term"][$count];
    $ca  = $_POST["count_assessment"][$count];
    $s  = $_POST["scored"][$count];
    $ts  = $_POST["total_score"][$count];
    $sh  = $_POST["sub_highest"][$count];
    $sl  = $_POST["sub_lowest"][$count];
    $ft  = $_POST["first_term"][$count];
    $st  = $_POST["second_term"][$count];
    $tt  = $_POST["third_term"][$count];
    $as  = $_POST["avg_score"][$count];
    $ints  = $_POST["term"][$count];
    $cl  = $_POST["class_name"][$count];
    $yr  = $_POST["year"][$count];

  $query = mysqli_query($mysqli,"INSERT INTO exam( Roll_Number,
  sub_id,
  mid_term,
  count_assessment,
  scored,
  total_score,
  sub_highest,
  sub_lowest,
  first_term,
  second_term,
  third_term,
  avg_score,
  internaltype,
  Class,
  Year) 
  VALUES ('$rno','$subid','$mt','$ca','$s','$ts','$sh','$sl','$ft','$st','$tt','$as','$ints','$cl','$yr')");
 }

    if($query)
    {
    echo 'ok';
    }else{
        echo $mysqli->error;
    }


?>