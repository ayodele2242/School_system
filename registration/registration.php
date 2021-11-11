<?php 
include('header.php'); 
/*if (!isset($_SESSION["pin"])){
	header("location: mypin.php");
}else{*/
	$query = mysqli_query($mysqli, "SELECT MAX(id) FROM student");
	$results = mysqli_fetch_array($query);
	$cur_auto_id = $results['MAX(id)'] + 1;
	//Generate number
	$string = "Masters Lighthouse Montessori School";
	$expr = '/(?<=\s|^)[a-z]/i';
	preg_match_all($expr, $string, $matches);
	$result = implode('', $matches[0]);	
?>

<style>
.dtp-btn-ok, .btn-default{
    color: #0099CC;
    
}
</style>

<main>
<div class="container mt-6">
<div style="margin-bottom:10px; padding:12px; font-weight: bolder;" class="hideme"><a href="<?php echo $set['installUrl']; ?>"> <i class="fa fa-long-arrow-left"></i> Back Home</a></div> 

<div class="registration">
<div align="center" class="animated fadeIn moblogo">
    	
	</div>
<div style="margin-bottom:10px;" class="mobile"><a href="<?php echo $set['installUrl']; ?>"> <i class="fa fa-long-arrow-left"></i> Back Home</a></div> 
<div align="center"><h3 class="text-infos"><a href="javascript:void(0);"><img src="<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>" width="50" height="50"></a> Registration Page</h3></div>
<div id="geterror" class="col-lg-12"></div>

<div class="row clearfix">
            <div id="message" class=""></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form  enctype="multipart/form-data" id="students-form">
				
			
              <div align="center" class="form-group">                  
  							<div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar-2" name="userImage" type="file" class="file-loading">
                            </div> 
                            <h5></h5>  
			 </div> 
			 
			 <div class="row">
                  <div class="col-md-12">
                      <h3 class="text-info"> Academic Details</h3>
                      <hr>
                  </div>
                

                  <div class="col-lg-6">
                          <div class="form-group">
                              <label class="control-label" for="class">Class enrolling into</label>

                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-home blue"></i></span>
                                  <select name="class" id="class" class="form-control">
                                  <option value="">Chose</option>
                                   <?php echo getClass(); ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label class="control-label" for="section">Section</label>

                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                  <select name="section" id="section" required="true" class="form-control" >
                                      <option value="First">First</option>
                                      <option value="Second">Second</option>
                                      <option value="Third">Third</option>
                                      <option value="Mid-Term">Mid Term</option>
                                     

                                    </select>


                              </div>
                          </div>
                      </div>

                     


				</div>


				<div class="row">
                  
            
                      <div class="col-md-6">
                          <div class="form-group">
                          <label class="control-label" for="shift">Shift</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                  <input type="hidden" id="rollNo" class="form-control rid2" name="rollNo" value="<?php echo $cur_auto_id; ?>" placeholder="Class roll no" readonly>
                                  <select name="shift" required="true" class="form-control" >
                        <option value="Day">Day</option>
                          <option value="Morning">Morning</option>
                     </select>
                              </div>
                          </div>
                      </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label class="control-label" for="group">Class Group</label>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                      <select name="group"  class="form-control" >
                        <option value="N/A">N/A</option>
                        <option value="Science">Science</option>
                          <option value="Arts">Arts</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Others">Others</option>

                     </select>


                  </div>
                </div>
                  </div>
</div>
            

<div class="row">
              <div class="col-md-12">
                  <h3 class="text-info"> Student's Detail</h3>
                  <hr>
              </div>
            </div>
                <div class="row">
                 
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="fname">First Name</label>
                          <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                              <input type="text" class="form-control" required name="fname" id="fname"  placeholder="First Name">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="mname">Midle Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                <input type="text" class="form-control"  name="mname" placeholder="Midle Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="lname">Last Name</label>
                          <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                              <input type="text" class="form-control" required name="lname" placeholder="Last Name">
                          </div>
                      </div>
                      </div>

                    
                </div>


 <div class="row">
                  
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                        <label class="control-label" for="gender">Gender</label>
                            <select name="gender" class="form-control" required >
                                <option value="Male">Male</option>
                               <option value="Female">Female</option>
                              <option value="Other">Other</option>
                            </select>
                        
                      </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                          <label class="control-label" for="religion">Religion</label>

                          <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                              <select name="religion" class="form-control" required >
                                    <option value="Islam">Islam</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Cristian">Cristian</option>
                                  <option value="Buddhist">Buddhist</option>
                                  <option value="Other">Other</option>
                              </select>
                          </div>
                        </div>
                          </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label" for="bloodgroup">Bloodgroup</label>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                            <select name="bloodgroup" class="form-control" required >
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

                     
                    </div>

					 <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nationality">State of Origin</label>
                              
                                  <input type="text" class="form-control" required  name="nationality" placeholder="">
                              
                          </div>
                        </div>

                          <div class="col-md-4">
                            <div class="form-group ">
                                             <label for="dob">Date Of Birth</label>
                                                 <div class="input-group">

                                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                                    <input type="text"   class="form-control date2" name="dob" required  data-date-format="dd/mm/yyyy">
                                                </div>


                                         </div>
                            </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="extraActivity">Extra Curicular Activity </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control"  name="extraActivity" placeholder="Sport,Writing,etc">
                            </div>
                        </div>

                    </div>
                  </div>


				   <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-info"> Guardians' Detail</h3>  <span class="error"></span>
                            <hr>
                        </div>
                    </div>
                        <div class="row">
                         
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="fatherName">Father's Name </label>
                                  <input type="text" class="form-control" required  name="fatherName" placeholder="">
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="fatherCellNo">Father's Mobile No </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                    <input type="text" class="form-control digit"  required name="fatherCellNo" placeholder="">
                                    
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="motherName">Mother's Name </label>
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon  glyphicon-user blue"></i></span>
                                      <input type="text" class="form-control" required  name="motherName" placeholder="">
                                  </div>
                              </div>
                              </div>
                
                </div>


				 <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="motherCellNo">Mother's Mobile No </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                <input type="text" class="form-control digit" required name="motherCellNo" placeholder="">
                               
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="localGuardian">Local Guardian Name </label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                  <input type="text" class="form-control"  name="localGuardian" placeholder="">
                              </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="localGuardianCell">Local Guardian Mobile No </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                    <input type="text" class="form-control digit"  name="localGuardianCell" placeholder="">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="localGuardianCell">Email Address </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
                                    <input type="text" class="form-control"  name="email" placeholder="" required>
                                </div>
                            </div>
                        </div>
                
                       
              </div>
             

<div class="row">
                <div class="col-md-12">
                    <h3 class="text-info"> Address Detail</h3>
                    <hr>
                </div>
              </div>
              <div class="row">
              
                          <div class="col-md-6">
                        <div class="form-group">
                            <label for="presentAddress">Present Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                                <textarea type="text" class="form-control" required name="presentAddress" placeholder=""></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="parmanentAddress">Parmanent Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                                  <textarea type="text" class="form-control" required name="parmanentAddress" placeholder=""></textarea>
                              </div>
                          </div>
                          </div>
              
            </div>

                    <div class="clearfix"></div>

                    <div class="form-group" align="center">
<input type="hidden" id="regiNo" class="form-control date" required name="regiNo" value="<?php echo date("Y") ?>" placeholder="">
<input type="hidden" id="rid"  class="form-control rid" name="rid" value="<?php echo $result; ?>" placeholder="Class roll no" readonly>
<input type="hidden" id="session"  class="form-control date" name="session" value="<?php echo date("Y") ?>" readonly>
<input type="hidden" name="pin" value="<?php //echo $_SESSION['pin']; ?>">                                     

                    <button class="btn btn-primary btn-student" type="submit" id="addSudent" name="addStudent"><i class="fa fa-user-plus"></i> Submit</button>
                    <br>
                  </div>


<span id="err" class="err_info text-danger"></span>
<div id="geterror" class="col-lg-12 "></div>
                </form>        
                
                </div>
            </div>



</div>


</div>    
</main>



<div class="mobile">
<?php include('footer.php'); ?>
</div>

<?php
	//}
	?>