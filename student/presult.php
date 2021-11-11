<?php include("header.php"); ?>
<?php include("top-bar.php"); ?>
<?php include("links.php"); ?>
<?php
$di = $_GET['Roll_Number']; 
$class = $_POST['Class'];
$period = $_POST['internaltype'];
$exam = mysqli_query($mysqli, "select distinct * from exam where Roll_Number = '$di' and Class like '%$class%' and internaltype like '%$period%'");
$namrow = mysqli_fetch_assoc($exam);
							
$student_query=mysqli_query($mysqli, "select * from student where regiNo = '$di'")or die(mysqli_error($mysqli));
$row = mysqli_fetch_assoc($student_query);
					
?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="material-icons">school</i> Result Page</h2>
                </div>
               <?php if ($msgBox) { echo $msgBox; } ?>
            <div class="row printable " style="background:#FFF; padding:10px;" id="printableArea"><!--//Col-lg-12 -->
            <div class="col-lg-12 padding">
            <div align="center">
            <p style="font-weight:bolder; font-size:26px; text-align:center;">
            <?php
			if(empty($set['siteName'])){
			?>
            <img src="../images/logo.png" width="80" height="80" alt="No Image" >
            <?php
			}else{
			?>
            <img src="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" alt="<?php  echo $set['siteName']; ?>" width="80" height="80" >
            <?php } ?>
            </p>
			<p style="font-weight:bolder; font-size:26px; text-align:center;"><?php  echo $set['siteName']; ?></p>
            <p style="font-weight:bold; font-size:14px; text-align:center;"><?php  echo $set['address']; ?></p>
            <p style="font-weight:bold; font-size:14px; text-align:center;"><?php  echo $set['phone']; ?></p>
            <p style="font-weight:bolder; font-size:16px; text-align:center;">Examination Result Report for <?php  echo strtoupper($namrow['internaltype']); ?></p>
            </div>
            
            </div><!--//Col-lg-12 ends-->
            
            
            <div class="col-lg-12 padding"><!--//Col-lg-12-->
            <div>
            <table class="table table-responsive">
                <tr>
               <td><strong>Student No/Admin. No</strong></td><td><?php echo ucwords(strtoupper($row['regiNo'])); ?></td>
               </tr>
				<tr>
                <td><strong>NAME</strong></td><td><?php echo ucwords(strtoupper($row['lastName'] .' '. $row['firstName'] )); ?></td>
				</tr>
				<tr>
                <td><strong>EXAMINATION TERM</strong></td><td><?php echo ucwords(strtoupper($namrow['internaltype'])); ?></td>
                </tr>
                <tr>
                <td><strong>YEAR</strong></td><td> <?php echo $namrow['Year']; ?></td>
                </tr>
               </table>
            </div>
            
            <div align="center">
            <table class="table table-striped table-responsive">                      
                                <thead>
                                    <tr>
                                      <th>SUBJECTS</th>
                                      <th>SUBJECT SCORE</th>
                                      <th>FIRST CA</th>
                                      <th>SECOND CA</th>
                                      <th>TOTAL SCORE</th>
                                      <th>GRADE</th>
                                      <th>REMARK</th>   
                                    </tr>
                                </thead>
                                 <tbody>
								
                                  <?php 
								   $date = date("Y");
								   
								  
								 							   
								 $sqlme = mysqli_query($mysqli, "select distinct * from exam where Roll_Number = '$di' and Class like '%$class%' and internaltype like '%$period%'");   
								    
									$count = mysqli_num_rows($sqlme); // Get the rows count
									while($row = mysqli_fetch_array($sqlme)){
									
									$subid = $row['sub_id'];
									$score = $row['scored'];		
									
									
									//get course		
									$result4 = mysqli_query($mysqli, "SELECT * FROM subjects where  Subect_code='$subid'") or die(mysqli_error($mysqli));
								    $co = @mysqli_num_rows($result4);
    	     					    $rowa= @mysqli_fetch_assoc($result4);
  									$_SESSION['Subjects'] = $rowa['subjects'];
		 							 $subof = $_SESSION['Subjects'];
		   
									?>
                               
									<tr>
                                    <td><?php echo $subof; ?></td> 
                                    <td><?php echo $score; ?></td> 
                                    <td ><?php echo  $row['First_CA']; ?></td>
									<td ><?php echo  $row['Second_CA']; ?></td>                               
                                    <td >
				<?php 
				$score =  $row['First_CA'] +  $row['Second_CA'] + $row['scored'];
				echo $score;
				 ?>
				 
				 </td>
				 <td>
				 <?php
				 if($score >= 70) {
				 echo "A";
				 }
				 elseif($score <= 70 && $score >= 60 ){
				echo "B";
				 }
				 elseif($score <= 60 && $score >= 50){
				 echo "C";
				 }
				  elseif($score <= 49 && $score >= 45  ){
				 echo "D";
				 }
				  elseif($score >= 40){
				 echo "E";
				 }
				 else{
				 echo "F";
				 }
				?>
				 
				 
				 </td>
				 <td>
				 <?php
				 if($score >= 70) {
				 echo "Excellent";
				 }
				 elseif($score <= 70 && $score >= 60 ){
				echo "Very Good";
				 }
				 elseif($score <= 60 && $score >= 50){
				 echo "Good";
				 }
				  elseif($score <= 49 && $score >= 45  ){
				 echo "Pass";
				 }
				  elseif($score >= 40){
				 echo "Pass";
				 }
				 else{
				 echo "Fail";
				 } 
				 
				 ?>
				 </td>          
                                                        
                                                        
                                                        
                                                        </tr>
                                                        <?php } 
                                                            ?>
                                                      
                                                        
                                                        
                                                    
                                                    </tbody>
                                                    
								
                            </table>
            
           </div>
            </div><!--//Col-lg-12 ends-->
            
             <div align="center">
            <input type="button" onclick="printDiv('printableArea')" value="Print!" class="btn btn-sm btn-info" />
            </div>
            </div>
           
            </div>
    </section>
    
  
    
<?php include("footer.php"); ?>