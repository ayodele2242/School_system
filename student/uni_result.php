<?php include("header.php"); ?>
<?php include("top-bar.php"); ?>
<?php include("links.php"); ?>
<?php
$di = $_GET['matric']; 
$semester = $_POST['semester'];
$level = $_POST['level'];
$exam = mysqli_query($mysqli, "select distinct * from uni_exam where matric_no = '$di' and semester like '%$semester%' and level like '%$level%'");
			
					$namrow = mysqli_fetch_assoc($exam);
					$lev = $namrow['level'];
					$sems = $namrow['semester'];
					$sess = $namrow['session'];
					
					
					
					$student_query=mysqli_query($mysqli, "select * from uni_students where matric_no = '$di'")or die(mysql_error());
					$row = mysqli_fetch_assoc($student_query);
					$course = $row['course'];
					$dept = $row['department'];
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
			if(empty($sch['logo'])){
			?>
            <img src="../images/logo.png" width="80" height="80" alt="No Image" >
            <?php
			}else{
			?>
            <img src="../logo/<?php  echo $sch['logo']; ?>" alt="<?php  echo $sch['institute_name']; ?>" width="80" height="80" >
            <?php } ?>
            </p>
			<p style="font-weight:bolder; font-size:26px; text-align:center;"><?php  echo $sch['institute_name']; ?></p>
            <p style="font-weight:bold; font-size:14px; text-align:center;"><?php  echo $sch['pobox']; ?></p>
            <p style="font-weight:bold; font-size:14px; text-align:center;"><?php  echo $sch['contact']; ?></p>
            <p style="font-weight:bolder; font-size:16px; text-align:center;">Examination Result Report for <?php  echo ucwords($lev .' Level '. $sems . ' Semester'); ?></p>
            </div>
            
            </div><!--//Col-lg-12 ends-->
            
            
            <div class="col-lg-12 padding"><!--//Col-lg-12-->
            <div>
            <table class="table table-responsive">
                <tr>
               <td><strong>MATRIC NO</strong></td><td><?php echo ucwords(strtoupper($row['matric_no'])); ?></td>
               </tr>
				<tr>
                <td><strong>NAME</strong></td><td><?php echo ucwords(strtoupper($row['name'])); ?></td>
				</tr>
				<tr>
                <td><strong>COURSE</strong></td><td><?php echo ucwords(strtoupper($row['course'])); ?></td>
                </tr>
                <tr>
                <td><strong>DEPARTMENT</strong></td><td> <?php echo ucwords(strtoupper($row['department'])); ?></td>
                </tr>
                <tr>
                <td><strong>SESSION</strong></td><td> <?php echo $namrow['session']; ?></td>
                </tr>
               </table>
            </div>
            
            <div align="center">
            <table class="table table-striped table-responsive">                      
                                <thead>
                                    <tr>
                                       <th>Course Name</th>
                                      <th>Course Code</th>
                                      <th>SCORE</th>
                                      <th>GRADE</th>
                                      <th>REMARK</th>       
                                          
												<!-- 
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                        <th>Remarks</th>                                                                                 
                                        <th>Action</th>
										
										-->
                                    </tr>
                                </thead>
                                 <tbody>
								
                                  <?php 
								   $date = date("Y");
								   
								  
								 							   
								 $sqlme = mysqli_query($mysqli, "select distinct * from uni_exam where matric_no = '$di' and semester like '%$semester%' and level like '%$level%'");   
								    
									$count = mysqli_num_rows($sqlme); // Get the rows count
									while($r = mysqli_fetch_array($sqlme)){
									
									$ct = $r['coursetitle'];
									$total = $r['test'] + $r['exam'];		
									
									
									//get course		
									$result4 = mysqli_query($mysqli, "SELECT * FROM course where  coursetitle='$ct'");
								    $co = @mysqli_num_rows($result4);
    	     					    $rowa= @mysqli_fetch_assoc($result4);
  
		   
									?>
                               
									<tr>
                                    <td><?php echo $rowa['coursedescription']; ?></td> 
                                    <td><?php echo $rowa['coursetitle']; ?></td> 
                                    <td ><?php echo  $total; ?></td>
                                            
                                     <td>
                                     <?php
                                     if($total >= 70) {
                                     echo "A";
                                     }
                                     elseif($total <= 65 && $total >= 60 ){
                                    echo "B";
                                     }
                                     elseif($total <= 60 && $total >= 50){
                                     echo "C";
                                     }
                                      elseif($total <= 49 && $total >= 45  ){
                                     echo "D";
                                     }
                                      elseif($total >= 40){
                                     echo "E";
                                     }
                                     else{
                                     echo "F";
                                     }
                                    ?>
                                     
                                     
                                     </td>
                                     <td>
                                     <?php
                                     if($total >= 70) {
                                     echo "Excellent";
                                     }
                                     elseif($total <= 70 && $total >= 60 ){
                                    echo "Very Good";
                                     }
                                     elseif($total <= 60 && $total >= 50){
                                     echo "Good";
                                     }
                                      elseif($total <= 49 && $total >= 45  ){
                                     echo "Pass";
                                     }
                                      elseif($total >= 40){
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