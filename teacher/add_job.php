<?php include('header.php'); ?>

	
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><span class="fa fa-briefcase"></span> Add Job <a href="jobs_ins?a=jobs_in"><i class="fa fa-long-arrow-left"></i> Back to Jobs List</a></h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                
 <!-- add -->
 
	    <div class="modal-content">
	           
	     <form  id="job-form" autocomplete="off">
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
                                      <input name="cname" type="text"  id="cname"  placeholder="Industry/Company Name" class="form-control" />
                  
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
                            <option value="Any field">Any</option>
                            
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
                                    <input name="lwork" type="text" id="lwork" placeholder="Location of work (Address).  if none, type nil"  class="form-control"/>
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
                                    <textarea name="jobdes"  rows="10" placeholder="Job description"  id="ckeditor" class="form-control" ></textarea> </div>
                               
                                </div>  
                                
	      </div>
	      <div class="form-group" align="center">
          <div id="error"></div>
	        
	        <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-plus"></span> &nbsp; Create</button>
	      </div>
	      </form> 
	    </div><!-- /.modal-content -->
	 
    <!-- /add modal -->
    
                </div>
                </div>
            </div>


        </div>
    </section>
   
    <script src="../afiles/js/pages/forms/editors.js"></script>

<?php include('footer.php'); ?>    

