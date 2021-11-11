<?php include('header.php'); ?>
<?php if($coi != ""){ ?>
<?php if ($msgBox) { echo $msgBox; } ?>

<div class="container">

<div class="alert col-lg-12" style="font-size:16px;">

<?php
// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo 'Good Morning: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo 'Good Afternoon: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo 'Good Evening: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
}
?>
</div>
<div class="removeMessages fades  col-lg-12"></div>
<div class="alert col-lg-12" style="padding:5px;">
<div class="row">

<div class="alert col-lg-3 bg-white">
<!--File update-->
<div id="body-overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
		<div class="bgColor">
			<form id="uploadForm" action="upload.php" method="post">
				 <div id="targetOuter">
					<div id="targetLayer">
                    <?php if($coi == ''){?>
                    <img src="../img/certificate.png"  style="width:100%" height="200px" class="upload-preview img-responsive" />
                    <?php }else{?>
                        <img src="../certificate/<?php echo $coi; ?>"  style="width:100%" height="200px" class="upload-preview img-responsive" />

                    <?php } ?>
                    </div>
                    <?php if($coi == ''){ ?>
					<img src="photo.png"  class="icon-choose-image"/>
					<div class="icon-choose-image" onClick="showUploadOption()"></div>
					<div id="profile-upload-option">
						<div class="profile-upload-option-list"><input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);"></input><span>Fetch Image</span></div>
						<!--<div class="profile-upload-option-list" onClick="hideUploadOption();">Cancel</div>-->
					</div>
                    <?php } ?>
				</div>	
				<div>
                    <?php if($coi == ''){ ?>
                <input type="submit" id="btn-submit" value="Upload Certificate" class="btnSubmit" onClick="hideUploadOption();"/>
                <?php } ?>
				</div>
			</form>
		</div>	
        <!--File update end-->


<div class="header"></div>
<div class"break"><i class="fa fa-envelope-open-o"></i> <?php echo $email; ?></div>
<div class"break"><i class="fa  fa-phone"></i> <?php if(empty($detail['phone'])){echo '<span class="osun">Contact number not available</span>';}else{ echo $detail['phone'];}  ?></div>
<div class"break"><i class="fa  fa-address-card"></i> <?php if(empty($caddy)){ echo '<span class="osun">Company address not available</span>';}else{ echo $caddy;}  ?></div>
</div>

<div class="alert col-lg-8 table-responsive col-md-offset-1  bg-white" >
<div class="col-lg-12 padding">
			
    <div align="right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addStu" id="addStuModalBtn">
    <span class="fa fa-briefcase"></span> Add Job</button>
    </div>
    </div><!--//Col-lg-12 ends-->


<table id="manageStuTable" class="table table_view">
					<thead>
					    <tr>
						<th>#ID</th>
						<th>Job Title</th>
                        <th>qualification</th>
                        <th>Course</th>
						<th>Closing Date</th>
						<th>Method of Application</th>
						<th>Action</th>
                     </tr>
					</thead>
					
</table>


</div>



</div>


</div>


</div><!--container end--> 




<!-- add modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addStu" data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="fa fa-briefcase"></span>	Add Job</h4>
	      </div>
	      
	     <form  action="job/create.php" method="POST" id="createStuForm" autocomplete="off">
	      <div class="modal-body">
	      	<div class="messages"></div>
			
			<div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			      <div class="col-lg-10">
                 <!-- here the text will apper  -->
			    </div>
			  </div>

			  <div class="form-group">
                                     <div class="form-line">
                                      <input name="vtitle" type="text"  id="vtitle"  placeholder="Vacancy Title" class="form-control" />
                  
                                    </div>
                             </div>       
                             
                             <div class="form-group">
                                     <div class="form-line">
                                     <input name="etype" type="text"  id="etype" placeholder="Employment Type" class="form-control"/>
                                    </div>
                             </div>  

                             <div class="form-group">
                                    <div class="form-line">
                                 <select id="qualification" name="qualification" class="form-control">
                                <option value="" >Select a qualification</option>
                            <option value="BSc">BSc - Bachelor of Science Degree</option>
                            <option value="MSc">MSc - Masters Degree</option>
                            <option value="HND">HND - Higher National Diploma</option>
                            <option value="OND">OND - Ordinary National Diploma</option>
                            <option value="HND">PGD - Post Graduate Diploma</option>
                            <option value="OND">MBA - Masters of Business Administration</option>
                            <option value="NCE">NCE</option>
                            <option value="PhD">PhD - Doctorate Degree</option>
                            <option value="SSCE">S.S.C.E</option>
                            
                            </select>
                                      </div>
                             </div>                      
                                
                           
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="course" type="text"  id="course" placeholder="Course of Study"  class="form-control"/>
                                    </div>
                                </div>
                                
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="mpeople" type="text" id="mpeople" onKeyPress="return isNumberKey(event)" placeholder="How many people do you wish to recruit for this post" class="form-control" />    
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="lwork" type="text" id="lwork" placeholder="Location of work"  class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="town" type="text" id="town" placeholder="Town"  class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="state" type="text" id="state" placeholder="State" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="wage" type="text" class="form-control" id="wage" placeholder="Wages(per month)" />
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="wdays" type="text" id="wdays" placeholder="Working Days" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="duration" type="text" id="duration" placeholder="Duration" class="form-control" />
                                    </div>
                                </div>

                                

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="cdate" type="date" id="cdate" placeholder="Closing date for application" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="moa" type="text" id="moa" placeholder="Method of Application" class="form-control" />
                                    </div>
                                </div>
              		 		
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <textarea name="jobdes"  rows="10" placeholder="Job description"  id="jobdes" class="form-control"></textarea> </div>
                                </div>  
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" >Add</button>
	      </div>
	      </form> 
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /add modal -->

<!-- remove modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="removeStuModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-user"></span> Remove Job</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" id="removeBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->

	<!-- edit modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editStuModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Job Detail</h4>
	      </div>

		<form  action="job/update.php" method="POST" id="updateStuForm">	      

	      <div class="modal-body">
	        	
	        <div class="edit-messages"></div>
			
            <div class="form-group">
                                     <div class="form-line">
                                      <input name="evtitle" type="text"  id="evtitle"  placeholder="Vacancy Title" class="form-control" />
                  
                                    </div>
                             </div>       
                             
                             <div class="form-group">
                                     <div class="form-line">
                                     <input name="eetype" type="text"  id="eetype" placeholder="Employment Type" class="form-control"/>
                                    </div>
                             </div>  

                             <div class="form-group">
                                    <div class="form-line">
                                 <select id="equalification" name="equalification" class="form-control">
                                <option value="" >Select a qualification</option>
                            <option value="BSc">BSc - Bachelor of Science Degree</option>
                            <option value="MSc">MSc - Masters Degree</option>
                            <option value="HND">HND - Higher National Diploma</option>
                            <option value="OND">OND - Ordinary National Diploma</option>
                            <option value="HND">PGD - Post Graduate Diploma</option>
                            <option value="OND">MBA - Masters of Business Administration</option>
                            <option value="NCE">NCE</option>
                            <option value="PhD">PhD - Doctorate Degree</option>
                            <option value="SSCE">S.S.C.E</option>
                            
                            </select>
                                      </div>
                             </div>                      
                                
                           
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="ecourse" type="text"  id="ecourse" placeholder="Course of Study"  class="form-control"/>
                                    </div>
                                </div>
                                
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="empeople" type="text" id="empeople" onKeyPress="return isNumberKey(event)" placeholder="How many people do you wish to recruit for this post" class="form-control" />    
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="elwork" type="text" id="elwork" placeholder="Location of work"  class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="etown" type="text" id="etown" placeholder="Town"  class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="estate" type="text" id="estate" placeholder="State" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="ewage" type="text" class="form-control" id="ewage" placeholder="Wages(per month)" />
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="ewdays" type="text" id="ewdays" placeholder="Working Days" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="eduration" type="text" id="eduration" placeholder="Duration" class="form-control" />
                                    </div>
                                </div>

                                

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="ecdate" type="date" id="ecdate" placeholder="Closing date for application" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input name="emoa" type="text" id="emoa" placeholder="Method of Application" class="form-control" />
                                    </div>
                                </div>
              		 		
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <textarea name="ejobdes"  rows="10" placeholder="Job description"  id="ejobdes" class="form-control"></textarea> </div>
                                </div>  
	      </div>
	      <div class="modal-footer editStuModal">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->
 
    <?php }else{ echo '<p class="osun header alert-warning">You can\'t access this page contents. Please upload your valid </strong>certificate of incorporation</strong> </p>';} ?>


<?php include('footer.php'); ?>    