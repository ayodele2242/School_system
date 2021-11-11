<?php include('header.php'); ?>
<link href="../afiles/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="../afiles/js/bootstrap-toggle.min.js"></script>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-users"></i> Employees</h2>
            </div>

            <div class="row clearfix">
            <div class="removeMessages"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="message"></div>
                <div class="cards">

<div class="profile">   
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a style="color: #85144B; font-weight:bold;" data-toggle="tab" href="#sectionA">Add Employee</a></li>
<li><a style="color: #85144B; font-weight:bold;"  data-toggle="tab" href="#sectionC">Employees Activation and Control</a></li>
</ul>
<div class="tab-content">
<div id="sectionA" class="tab-pane fade in active "><!--Profile-->
<div class="bodys">
<form  enctype="multipart/form-data" id="insertEmployee">

<div class="row">
             <div class="col-md-12">
             <div class="form-group">
                                
                            <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar-2" name="userImage" type="file" class="file-loading">
                            </div>
                        </div>
             </div>
             </div> 
              
              
              <div class="row clearfix">
              <div class="col-md-3">
                <label>Title</label>
                <select class="form-control" name="title" required>
                <option value=""></option>
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
                <input type="text" name="surname" class="form-control" placeholder="Surname" required>
              </div>
              </div>
              <div class="col-md-5">
              <div class="form-group">
                <label>Other Name</label>
                <input type="text" name="othername" class="form-control" placeholder="Other Name" required>
                </div>
              </div>

              </div>
              <div class="row clearfix">
              <div class="col-md-6">
              <div class="form-group">
                <!-- <input type="text" name="dept" class="form-control" placeholder="Department" required> -->
                <label>Department</label>
                <select class="form-control" name="dept" required>
                  <option value="">Department</option>
                  <option value="Teaching">Teaching</option>
                  <option value="Hostel">Hostel</option>
                  <option value="Security Quaters">Security Quaters</option>
                  <option value="Kitchen">Kitchen</option>
                  <option value="Software">Software</option>
                  <option value="Telecom">Telecom</option>
                  <option value="Others">Others</option>
                </select>
                </div>
              </div>
              <div class=" col-md-6">
              <div class="form-group">
                <!-- <input type="text" name="position" class="form-control" placeholder="Role" required> -->
                <label>Position/Role</label>
                <select class="form-control" name="position" id="privilege" required>
                  <option value="">Role</option>
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

             <div class="row clearfix boxy Teacher">
             <div class="col-md-6">
             <div class="form-group">
             <label>Assign Class:</label><br/>
             <input type="text" class="form-control tokenfield-typeahead"  name="class"  placeholder="Type in  class: You can assign multiple classes to a teacher"/>

            <!-- <input type="text" name="class" placeholder="You can assign multiple classes to a teacher" class="typeahead tm-input form-control tm-input-info"/>-->
            </div>
            </div>
             

             <div class="col-md-6">
             <div class="form-group">
             <label>Assign Subject(s):</label><br/>
             <input type="text" class="form-control subject"  name="subject"  placeholder="Type in  subject: You can assign multiple subjects to a teacher"/>

             <!--<input type="text" name="subject" placeholder="You can assign multiple subjects to a teacher" class="subject tm-subject form-control tm-subject-info" />-->
            
             </div>
             </div>
             </div>

              <div class="row clearfix boxy Driver">
             <div class="col-md-6">
             <div class="form-group">
             <label>Bus/Car Number:</label><br/>
             <input type="text" name="carname" placeholder="Enter the car name with its plate number" class="form-control"/>
            </div>
            </div>
             

             <div class="col-md-6">
             <div class="form-group">
             <label>Route:</label><br/>
             <input type="text" name="route" placeholder="Bus/Car Route" class=" form-control"/>
             </div>
             </div>
             </div>

             
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label" for="gender">Gender</label>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                    <select name="gender" class="form-control" required >

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
                      <option value="Muslim">Muslim</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Christian">Christian</option>
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
                    <input type="text" class="form-control" value="" required  name="nationality" placeholder="State of Origin">
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
                  <input type="text"   class="form-control date2" name="dob" required>
                </div>


              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group ">
                <label for="joinDate">Join Date</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                  <input type="text"   class="form-control date2" name="joinDate" >
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="educationQualification">Education Certificate</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                  <input type="text" class="form-control"  name="educationQualification" placeholder="NTC, NCE, HND etc">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group ">
                <label for="photo">Other Photo</label>
                <input id="photo" name="photo" type="file">
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
                  <input type="text" class="form-control"  name="cellNo" placeholder="" required>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="presentAddress">Present Address</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                  <textarea type="text" class="form-control"  name="presentAddress" placeholder="Address"></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="parmanentAddress">Parmanent Address</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                  <textarea type="text" class="form-control" name="parmanentAddress" placeholder="Address"></textarea>
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
                  <textarea  class="form-control" rows="5"  name="details" placeholder="details other information"> </textarea>
                </div>
            </div>
          </div>
        </div>


            <div class="row clearfix"> 
            <div class="form-group col-md-12">
                <label>Guarantor's Address</label>
                <textarea name="address" class="form-control" placeholder="Address" ></textarea>
              </div>
            </div>  

            <div class="row clearfix">
              <div class="col-md-4">
              <div class="form-group">
                <label>Telephone No</label>
                <input type="number" name="phoneno" class="form-control" placeholder="Phone No" required>
             </div>
              </div>

              <div class="col-md-4">
              <div class="form-group">
                <label>Guarantor's Name</label>
                <input type="text" name="guarantor_name" class="form-control" placeholder="Guarantor's name" >
              </div>
              </div>
          
              <div class="col-md-4">
              <div class="form-group">
                <label>Guarantor's No</label>
                <input type="number" name="guarantor_no" class="form-control" placeholder="Guarantor's No" >
              </div>
              </div>
              </div>
             <div class="row clearfix">
              <div class="alert alert-info text-info" style="font-size:18px; font-weight:bolder; color:cyan;">Login Details and Password Recovery</div>
              </div>

              <div class="row clearfix">
              <div class="col-md-3">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="For receiving notification(Forgotten Password or activities notification) " required>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              </div>
              <div class="col-md-5">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
              </div>

              </div>

               <div class="row clearfix">
              <div class="col-md-12">
                <div align="center">
                <button type="submit" class="btn btn-sm btn-info insertButton" id="btn-submit"><i class="fa fa-user-plus"></i> Add Employee</button>
                </div>
              </div>
              </div>

            </form>

    </div>      
</div><!--Profile-->

<div id="sectionC" class="tab-pane fade in"><!--Users Details-->

          <table id="empTable" class="table table_view ">
					<thead>
					    <tr>
						<th>#ID</th>
						<th>Last name</th>
            <th>other name</th>
            <th>username</th>
            <th>email</th>
            <th>phone</th>
            <th>department</th>
            <th>position</th>
            <th>status</th>
						<th>Action</th>
            </tr>
					</thead>
					
				</table>


</div><!--Users Details end-->

</div>

</div>


                
                </div>
                </div>
            </div>


        </div>
    </section>

<div class="modal fade" id="eModal" tabindex="-1" role="dialog" aria-labelledby="eModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
            <div class="fetched-data"></div>
			</div>
			<div class="modal-footer">
           
                <!--<button type="button" class="btn btn-default print" onClick="window.print();return false">Print</button>-->
            </div>
		</div>
	</div>
</div>

    <!-- remove modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="userModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Administrator</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete this Administrator?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-danger" id="removeMeBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->

<script src="js/adduser.js"></script>
<?php include('footer.php'); ?>    

   