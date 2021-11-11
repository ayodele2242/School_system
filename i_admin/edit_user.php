<?php include('header.php'); 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $inf = mysqli_query($mysqli,"select * from employee where id = '$id'");
    $info = mysqli_fetch_array($inf);
}
?>
<link href="../afiles/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="../afiles/js/bootstrap-toggle.min.js"></script>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-pencil"></i> <?php echo $info['surname'] .' '. $info['othername']; ?> Details</h2>
            </div>

            <div class="row clearfix">
            <div class="removeMessages"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="message"></div>
                <div class="cards">

                <form  enctype="multipart/form-data" id="editEmployee">

             <div class="row">
             <div class="col-md-12">
            
             <div class="row">
             <div class="col-md-5">   
             <div class="form-group">
             <div class="kv-avatar center-block rid" style="width:200px" >
             <?php
										if(empty($info['photo'])){
										?>
										<p class="alert alert-warning">No image uploaded for this employee. Use the form to the right to update employee's profile image</p> 
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

             <div class="col-md-5">   
             <div class="form-group">
                                
                            <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar-2" name="userImage" type="file" class="file-loading">
                                <input name="hidImg" class="rid3" type="hidden" value="<?php echo $info['photo']; ?>">
                            </div>
                        </div>
             </div>
             </div>


             </div>

             </div> 
              
              
              <div class="row clearfix">
              <div class="col-md-3">
                <label>Title</label>
                <select class="form-control" name="title" required>
                  <option value="<?php echo $info['title']; ?>"><?php echo $info['title']; ?></option>
                  <option value="Mr.">Mr</option>
                  <option value="Mrs.">Mrs</option>
                  <option value="Master.">Master</option>
                  <option value="Miss.">Miss</option>
                  <option value="Sir.">Sir</option>
                </select>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                <label>Surname</label>
                <input type="text" name="surname" class="form-control" placeholder="Surname" required value="<?php echo $info['surname']; ?>">
              </div>
              </div>
              <div class="col-md-5">
              <div class="form-group">
                <label>Other Name</label>
                <input type="text" name="othername" class="form-control" placeholder="Other Name" required value="<?php echo $info['othername']; ?>">
                </div>
              </div>

              </div>
              <div class="row clearfix">
              <div class="col-md-6">
              <div class="form-group">
                <!-- <input type="text" name="dept" class="form-control" placeholder="Department" required> -->
                <label>Department</label>
                <select class="form-control" name="dept" required>
                <option value="<?php echo $info['dept']; ?>"><?php echo $info['dept']; ?></option>
                  <option value="Teaching">Teaching</option>
                  <option value="Hostel">Hostel</option>
                  <option value="Security Quaters">Security Quaters</option>
                  <option value="Kitchen">Kitchen</option>
                  <option value="Others">Others</option>
                </select>
                </div>
              </div>
              <div class=" col-md-6">
              <div class="form-group">
                <!-- <input type="text" name="position" class="form-control" placeholder="Role" required> -->
                <label>Position/Role</label>
                <select class="form-control" name="position" id="privilege" required>
                <option value="<?php echo $info['position']; ?>"><?php echo $info['position']; ?></option>
                  <option value="Principal">Principal</option>
                  <option value="Vice_Principal">Vice Principal</option>
                  <option value="Secretary">Secretary</option>
                  <option value="Teacher">Teacher</option>
                  <option value="IT Manager">IT Manager</option>
                  <option value="Cook">Cook</option>
                  <option value="Driver">Driver</option>
                </select>
                </div>
              </div>
              </div>
              <?php  if($info['position'] == "Teacher"){ ?>

             <div class="row clearfix ">
             <div class="col-md-6">
             <div class="form-group">
             <label>Assign Class:</label><br/>
             <input type="text" class="form-control tokenfield-typeahead"  name="class" value="<?php echo $info['class']; ?>"  placeholder="Type in  class: You can assign multiple classes to a teacher"/>

            <!-- <input type="text" name="class" placeholder="You can assign multiple classes to a teacher" class="typeahead tm-input form-control tm-input-info"/>-->
            </div>
            </div>
             

             <div class="col-md-6">
             <div class="form-group">
             <label>Assign Subject(s):</label><br/>
             <input type="text" class="form-control subject"  name="subject"  value="<?php echo $info['subject']; ?>" placeholder="Type in  subject: You can assign multiple subjects to a teacher"/>
             <!--<input type="text" name="subject" placeholder="You can assign multiple subjects to a teacher" class="subject tm-subject form-control tm-subject-info" />-->
           
             </div>
             </div>
             </div>
              <?php } else if($info['position'] == "Driver"){  ?>
              <div class="row clearfix ">
             <div class="col-md-6">
             <div class="form-group">
             <label>Bus/Car Number:</label><br/>
             <input type="text" name="carname" value="<?php echo $info['carname']; ?>" placeholder="Enter the car name with its plate number" class="form-control"/>
            </div>
            </div>
             

             <div class="col-md-6">
             <div class="form-group">
             <label>Route:</label><br/>
             <input type="text" name="route" placeholder="Bus/Car Route" value="<?php echo $info['route']; ?>" class=" form-control"/>
             </div>
             </div>
             </div>
              <?php } ?>
             
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label" for="gender">Gender</label>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                    <select name="gender" class="form-control" required >
                    <option value="<?php echo $info['gender']; ?>"><?php echo $info['gender']; ?></option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label" for="religion">Religion</label>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                    <select name="religion" class="form-control" required >
                    <option value="<?php echo $info['religion']; ?>"><?php echo $info['religion']; ?></option>
                      <option value="Islam">Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Cristian">Cristian</option>
                      <option value="Buddhist">Buddhist</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label" for="bloodgroup">Bloodgroup</label>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                    <select name="bloodgroup" class="form-control" >
                    <option value="<?php echo $info['bloodgroup']; ?>"><?php echo $info['bloodgroup']; ?></option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                    </select>

                  </select>
                </div>
              </div>
            </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nationality">State of Origin</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                    <input type="text" class="form-control" required   name="nationality" value="<?php echo $info['nationality']; ?>" placeholder="State of Origin">
                  </div>
                </div>
              </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="col-md-2">
              <div class="form-group ">
                <label for="dob">Date Of Birth</label>
                <div class="input-group">

                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                  <input type="text"   class="form-control date2" name="dob" value="<?php echo $info['dob']; ?>" required>
                </div>


              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group ">
                <label for="joinDate">Join Date</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                  <input type="text"   class="form-control date2" name="joinDate" value="<?php echo $info['joinDate']; ?>">
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="educationQualification">Education Certificate</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                  <input type="text" class="form-control"  name="educationQualification" value="<?php echo $info['educationQualification']; ?>" placeholder="NTC, NCE, HND etc" >
                </div>
              </div>
            </div>


          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="form-group">
                <label for="cellNo">Emergency No </label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                  <input type="text" class="form-control"  name="cellNo" placeholder=""  value="<?php echo $info['cellNo']; ?>" required>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="presentAddress">Present Address</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                  <textarea type="text" class="form-control"  name="presentAddress" placeholder="Address"> <?php echo $info['presentAddress']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="parmanentAddress">Parmanent Address</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                  <textarea type="text" class="form-control" name="parmanentAddress" placeholder="Address"><?php echo $info['parmanentAddress']; ?></textarea>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                <label for="details">Details </label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                  <textarea  class="form-control" rows="5"  name="details" placeholder="details other information"> <?php echo $info['details']; ?></textarea>
                </div>
            </div>
          </div>
        </div>


            <div class="row clearfix"> 
            <div class="form-group col-md-12">
                <label>Guarantor's Address</label>
                <textarea name="address" class="form-control" placeholder="Address"  ><?php echo $info['address']; ?></textarea>
              </div>
            </div>  

            <div class="row clearfix">
              <div class="col-md-4">
              <div class="form-group">
                <label>Telephone No</label>
                <input type="number" name="phoneno" value="<?php echo $info['phoneno']; ?>"  class="form-control" placeholder="Phone No" required>
             </div>
              </div>

              <div class="col-md-4">
              <div class="form-group">
                <label>Guarantor's Name</label>
                <input type="text" name="guarantor_name" value="<?php echo $info['guarantor_name']; ?>" class="form-control" placeholder="Guarantor's name" >
              </div>
              </div>
          
              <div class="col-md-4">
              <div class="form-group">
                <label>Guarantor's No</label>
                <input type="number" name="guarantor_no" value="<?php echo $info['guarantor_no']; ?>" class="form-control" placeholder="Guarantor's No" >
              </div>
              </div>
              </div>
            

              
               <div class="row clearfix">
              <div class="col-md-12">
                <div align="center">
                <input type="hidden" name ="sid" value="<?php echo $info['id']; ?>">
                <button type="submit" class="btn btn-sm btn-info insertButton btn-student" id="btn-submit"><i class="fa fa-user"></i> Update Employee</button>
                </div>
              </div>
              </div>

            </form>



                
                </div>
                </div>
            </div>


        </div>
    </section>


<script src="js/adduser.js"></script>
<?php include('footer.php'); ?>    

   