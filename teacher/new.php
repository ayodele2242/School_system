  
<?php
//Include database connection
include("../includes/functions.php");

if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
	 $query = mysqli_query($mysqli,"SELECT * FROM employee WHERE id = '$id'");
	 while($info  = mysqli_fetch_array($query)){

?>


        <div class="container-fluid">
            <div class="block-header" style="margin:0px auto;">
                <h2> <?php echo $info['surname'] .' '. $info['othername']; ?> Details</h2>
            </div>

            <div class="row clearfix">
            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="cards">

             <div class="row clearfix">
             <div class="col-md-12">
            
             <div class="row clearfix">
             <div class="col-md-12">   
             <div  align="center">
             
             <?php
										if(empty($info['photo'])){
										?>
										<p class="alert alert-warning">No image uploaded for this employee.</p> 
										<?php
										}else{
                                        ?>
                                       	<img id="profile_pics"  data-holder-rendered="true" src="user_images/<?php echo $info['photo']; ?>" width="180" height="180" alt="<?php echo $info['surname']; ?>">
                                        <?php
										}
										?>
             </div>
             </div>
             </div>




             </div>

             </div> 
              
              
              
              <div class="row clearfix">
              <div class="col-md-6">
              <label>Department</label>
              <?php echo $info['dept']; ?>
              </div>
              <div class="col-md-6">
              
                <label>Position/Role</label>
                <?php echo $info['position']; ?>
              </div>
              </div>
              <?php  if($info['position'] == "Teacher"){ ?>

             <div class="row clearfix ">
             <div class="col-md-6">
              <label>Assign Class:</label>
             <?php echo $info['class']; ?>
            
            </div>
             

             <div class="col-md-6">
             <label>Assign Subject(s):</label> 
             <?php echo $info['subject']; ?>
             </div>
             </div>
              <?php } else if($info['position'] == "Driver"){  ?>
              <div class="row clearfix ">
             <div class="col-md-6">
            
             <label>Bus/Car Number:</label><br/>
             <?php echo $info['carname']; ?>
            </div>
             

             <div class="col-md-6">
              <label>Route:</label><br/>
             <?php echo $info['route']; ?>
             </div>
             </div>
              <?php } ?>
             
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label" for="gender">Gender</label>

                   <?php echo $info['gender']; ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label" for="religion">Religion</label>
                  <?php echo $info['religion']; ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label" for="bloodgroup">Bloodgroup</label>
                  <?php echo $info['bloodgroup']; ?>
              </div>
            </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nationality">State of Origin</label>
                  <?php echo $info['nationality']; ?>
                </div>
              </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="col-md-2">
              <div class="form-group ">
                <label for="dob">Date Of Birth</label>
                <?php echo $info['dob']; ?>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group ">
                <label for="joinDate">Join Date</label>
                <?php echo $info['joinDate']; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="educationQualification">Education Certificate</label>
                <?php echo $info['educationQualification']; ?>
              </div>
            </div>


          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="form-group">
                <label for="cellNo">Emergency No </label>
                <?php echo $info['cellNo']; ?>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="presentAddress">Present Address</label>
                <?php echo $info['presentAddress']; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="parmanentAddress">Parmanent Address</label>
                <?php echo $info['parmanentAddress']; ?>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                <label for="details">Details </label>
                <?php echo $info['details']; ?>
            </div>
          </div>
        </div>


            <div class="row clearfix"> 
            <div class="form-group col-md-12">
                <label>Guarantor's Address</label>
                <?php echo $info['address']; ?>
              </div>
            </div>  

            <div class="row clearfix">
              <div class="col-md-4">
              <label>Contact Number</label>
              <?php echo $info['phoneno']; ?>
              </div>

              <div class="col-md-4">
              <div class="form-group">
              <label>Guarantor's Name</label>
              <?php echo $info['guarantor_name']; ?>
              </div>
          
              <div class="col-md-4">
              <label>Guarantor's Number</label>
              <?php echo $info['guarantor_no']; ?>
              </div>
              </div>

    
                </div>
                </div>
            </div>


        </div>
  




	
<?php
}
}
?>
