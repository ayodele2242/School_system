<?php include("header.php"); ?>
<?php include("top-bar.php"); ?>
<?php //include("links.php"); 

$di = $_SESSION['sid']; 
$class = $_SESSION['cl'];
$period = $_SESSION['p'];

$exam = mysqli_query($mysqli, "select distinct * from exam where Roll_Number = '$di' and Class ='$class' and internaltype= '$period'");
$namrow = mysqli_fetch_assoc($exam);
$count = mysqli_num_rows($exam);
							
$student_query=mysqli_query($mysqli, "select * from student where regiNo = '$di'")or die(mysqli_error($mysqli));
$row = mysqli_fetch_assoc($student_query);

$stuinfo=mysqli_query($mysqli, "select * from student_activities where Roll_Number = '$di' and term= '$period'")or die(mysqli_error($mysqli));
$srow = mysqli_fetch_assoc($stuinfo);
?>
<style>
.space{
    margin:40px;
    font-weight:bolder;
    margin-bottom:25px;
    margin-top:25px;
    width:140px;
}
</style>
<section class="" style="margin-top:7%; padding:20px;">
<div class="noPrint row" style="margin-bottom:20px;">


    <div class="col-lg-7"><a href="main"><i class="glyphicon glyphicon-arrow-left"></i> Back to Dashboard</a> </div>
    <div class="col-lg-4" >
 <?php include("result_menu.php"); ?>
    </div>
</div>
        <div class="container-fluid ">
        <div class="exam printableArea row" >

       <div class="col-lg-12 ">
     <div align="row">
         <div class="col-lg-4 col-md-4 col-sm-4 text-right">  

       <img src="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" alt="<?php  echo $set['siteName']; ?>" width="130" height="110" >
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 text-center">
            
       <?php 
       if($class == 'S.S 1' || $class == 'S.S 2' || $class == 'S.S 3' || $class == 'J.S.S 1' || $class == 'J.S.S 2' || $class == 'J.S.S 3'){
       echo '<span style="font-size:48px;text-align:center;font-weight:bolder">Totallight College</span><br/>'; 
       }else{
        echo '<span style="font-size:48px;text-align:center;font-weight:bolder">Totallight Children\'s School</span><br/>';  
       }
       ?>
       <p style="font-size:14px;text-align:center;"><?php  echo $set['address']; ?></p>
       <p style="font-size:14px;text-align:center;"><?php  echo $set['phone']; ?></p>
       <p style="font-size:18px;text-align:center;font-weight:bolder"><?php  echo strtoupper($period); ?> Term Result</p>
       
      <?php
    
      if($class == 'S.S 1' || $class == 'S.S 2' || $class == 'S.S 3'){
        echo '<p style="font-size:20px;text-align:center;font-weight:bolder">SENIOR SECONDARY SCHOOL REPORT & CONTINUOUS ASSESSMENT CARD/SHEET</span><p/>';
      }else if($class == 'J.S.S 1' || $class == 'J.S.S 2' || $class == 'J.S.S 3'){
        echo '<p style="font-size:20px;text-align:center;font-weight:bolder">BASIC 7-9 REPORT & CONTINUOUS ASSESSMENT CARD/SHEET</span><p/>';
      }else{
        echo '<p style="font-size:20px;text-align:center;font-weight:bolder">PRIMARY SCHOOL REPORT & CONTINUOUS ASSESSMENT CARD/SHEET</span><p/>';
      
      }
      ?>


       
       </div>


<div class="col-lg-12">
<table class="table table-striped">
    <tr>
  <td colspan="7">      
 <span class="space">Name: &nbsp;<?php echo $row['lastName'] .' '.$row['firstName']; ?></span>   
 <span class="space">Sex: &nbsp;<?php echo $row['gender']; ?></span> 
 <span class="space">Admission No.: &nbsp;<?php echo $row['regiNo']; ?></span> 
 <span class="space">Class: &nbsp;<?php echo $namrow['Class']; ?></span> 
 <span class="space">Age: &nbsp;<?php 
 $dob = $row['dob'];
 $date =date("Y-m-d", strtotime($dob));
 

 $bDObj = new DateTime($date);
 $cDate = new DateTime();


 $age = $cDate->format("Y")-$bDObj->format("Y");
  
 echo $age; ?></span>
     
 <span class="space">House: &nbsp;<?php echo $srow['house']; ?></span> 
 </td>
    </tr>
    <tr>
    <td colspan="7"> 
 <span class="space">Year: &nbsp;<?php echo $namrow['Year']; ?></span> 
 <span class="space">Weight at the end of the term: &nbsp;<?php echo $srow['weight_end']; ?></span>
 <span class="space">Height at the end of the term: &nbsp;<?php echo $srow['Height_end']; ?></span> 
 <span class="space">Time(s) Absent: &nbsp;<?php echo $srow['no_of_absent']; ?></span> 
 <span class="space">Cause of Absence: &nbsp;<?php echo $srow['cause_of_absent']; ?></span>
 <span class="space">Position: &nbsp;<?php echo $srow['Position']; ?></span>
    </td>
    </tr> 
    </table>
</div>
    </div>
       </div>

<div class="col-lg-12 ">
<table id="manageGradeTable" class="table table_view result_table">
					<thead>
                        <tr class="head" style="border:solid 1px #000;">
<td colspan="7" style="background:#666666; color:#fff;font-weight:bolder;"></td>
<td colspan="4" style="background:#a03; color:#fff;font-weight:bolder; border-left:solid 1px #000;"><span class="text-center">YEAR'S SUMMARY</span></td>
                        </tr>
					    <tr>
						<th>Subject</th>
                        <th>Mid-Term Result</th>
						<th>40% Count. Assess. Score</th>
						<th>60% Exam Scores</th>
						<th>100% Total Scores</th>
						<th>Subject Highest Score</th>
						<th>Subject Lowest Score</th>
						<th>100% 1<sup>st</sup> Term Score</th>
						<th>100% 2<sup>nd</sup> Term Score</th>
						<th>100% 3<sup>rd</sup> Term Score</th>
						<th>100% AVG. Score</th>
                     </tr>
					</thead>
<?php
$sqlme = mysqli_query($mysqli, "select distinct * from exam where Roll_Number = '$di' and Class like '%$class%' and internaltype like '%$period%'");   
								    
$counts = mysqli_num_rows($sqlme); // Get the rows count
if($counts < 1){
    echo '<tr><td colspan="11"><span class="text-danger text-center">No result available for <b>'.$class.' this time.</b></span><td><tr>';
}else{
    while($myrow = mysqli_fetch_array($sqlme)){
        $subid = $myrow['sub_id'];
        //get course		
        $result4 = mysqli_query($mysqli, "SELECT subjects FROM subjects where  Subect_code='$subid'");
        $sub= mysqli_fetch_array($result4);

    
?>

<tr>
<td><?php echo $sub['subjects']; ?></td>
<td><?php echo $myrow['mid_term']; ?></td>
<td><?php echo $myrow['count_assessment']; ?></td>
<td><?php echo $myrow['scored']; ?></td>
<td><?php echo $myrow['total_score']; ?></td>
<td><?php echo $myrow['sub_highest']; ?></td>
<td><?php echo $myrow['sub_lowest']; ?></td>
<td><?php echo $myrow['first_term']; ?></td>
<td><?php echo $myrow['second_term']; ?></td>
<td><?php echo $myrow['third_term']; ?></td>
<td><?php echo $myrow['avg_score']; ?></td>
</tr>    


<?php
}
}

?>

				</table>

<table class="table table-striped">
<tr >
<td>Overall %</td>
<td colspan="12">
<?php echo $srow['overall_perceny']; ?>    
<td>
</tr>  
<tr >
<td>Co-curriculum Activities</td>
<td colspan="12">
<?php echo $srow['co_curricular_activities']; ?>    
<td>
</tr> 
<tr >
<td>Class/Form Teachers</td>
<td colspan="12">
<?php echo $srow['class_form_teacher']; ?>    
<td>
</tr>  
<tr >
<td>House Master's/Mistress Comments</td>
<td colspan="12">
<?php echo $srow['master_comment']; ?>    
<td>
</tr> 
<tr >
<td>Principal's Comments</td>
<td colspan="12">
<?php echo $srow['principal_comment']; ?>    
<td>
</tr>  
<tr >
<td>School Term Begins</td>
<td colspan="12">
<?php echo $srow['term_begin']; ?>    
<td>
</tr>   
</table>    


</div>
        </div>    






         </div>   
    </section>
    
  
    
<?php include("footer.php"); ?>