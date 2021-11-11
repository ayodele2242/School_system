<?php include('header.php'); 
$query = mysqli_query($mysqli, "SELECT MAX(id) FROM student");
$results = mysqli_fetch_array($query);
$cur_auto_id = $results['MAX(id)'] + 1;
//Generate number
$string = $_SESSION['sch_name'];
$expr = '/(?<=\s|^)[a-z]/i';
preg_match_all($expr, $string, $matches);
$result = implode('', $matches[0]);
?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <ul class="menusy"><li>
                <a href="#"><i class="material-icons">people_outline</i>
                            <span>Add Student(s)</span>
                </a>           
                </li></ul>
            </div>

            <div class="row clearfix">
            <div id="message" class=""></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form  enctype="multipart/form-data" id="student-form">
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


                <div class="row">
                  <div class="col-md-12">
                      <h3 class="text-info"> Academic Details</h3>
                      <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label" for="class">Class</label>

                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-home blue"></i></span>
                                  <select name="class" id="class" class="form-control" required>
                                   <?php echo getClass(); ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
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
                      <div class="col-md-4">
                          <div class="form-group ">
                              <label for="session">session</label>
                              <div class="input-group">

                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                  <input type="text" id="session"  class="form-control date" name="session" required  data-date-format="yyyy">
                              </div>
                          </div>
                      </div>




                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="regiNo">Registration No</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                  <input type="text" id="regiNo" class="form-control date" required name="regiNo" value="" placeholder="Enter year of admission, system auto generate it">
                                  <input type="hidden" id="rid"  class="form-control rid" name="rid" value="<?php echo $result; ?>" placeholder="Class roll no" readonly>
                                 
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
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
                <div class="col-md-4">
                  <div class="form-group">
                  <label class="control-label" for="group">Class Group</label>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                      <select name="group"  class="form-control" >
                        <option value="N/A">N/A</option>
                        <option value="Science">Science</option>
                          <option value="Arts">Arts</option>
                            <option value="Commerce">Commerce</option>


                     </select>


                  </div>
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
                  <div class="col-md-12">
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
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label" for="gender">Gender</label>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-intersex blue"></i></span>
                            <select name="gender" class="form-control" required >

                                <option value="Male">Male</option>
                               <option value="Female">Female</option>
                              <option value="Other">Other</option>
                            </select>
                        </div>
                      </div>
                        </div>
                        <div class="col-md-4">
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
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nationality">State of Origin</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                  <input type="text" class="form-control" required  name="nationality" placeholder="Nationality">
                              </div>
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
                            <h3 class="text-info"> Guardian's Detail</h3>  <span class="error"></span>
                            <hr>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-12">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="fatherName">Father's Name </label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                  <input type="text" class="form-control" required  name="fatherName" placeholder="Name">
                              </div>
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
                                      <input type="text" class="form-control" required  name="motherName" placeholder="Name">
                                  </div>
                              </div>
                              </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">

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
                                  <input type="text" class="form-control"  name="localGuardian" placeholder="Name">
                              </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="localGuardianCell">Local Guardian Mobile No </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                    <input type="text" class="form-control"  name="localGuardianCell" placeholder="">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="localGuardianCell">Email Address </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
                                    <input type="text" class="form-control"  name="email" placeholder="">
                                </div>
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
                <div class="col-md-12">
                          <div class="col-md-6">
                        <div class="form-group">
                            <label for="presentAddress">Present Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                                <textarea type="text" class="form-control" required name="presentAddress" placeholder="Address"></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="parmanentAddress">Parmanent Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                                  <textarea type="text" class="form-control" required name="parmanentAddress" placeholder="Address"></textarea>
                              </div>
                          </div>
                          </div>
              </div>
            </div>

                    <div class="clearfix"></div>

                    <div class="form-group" align="center">
                    <button class="btn btn-primary btn-student" type="submit" id="addSudent"><i class="fa fa-user-plus"></i> Add Student</button>
                    <br>
                  </div>
                </form>        
                
                </div>
            </div>


        </div>
    </section>

<?php include('footer.php'); ?>    

   