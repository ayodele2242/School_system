<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-star"></i> Results</h2>
            </div>

            <div class="row clearfix">
            <div class="removeMessages"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="profile">   
				<ul class="nav nav-tabs" id="myTab">
				<li class="active"><a data-toggle="tab" href="#sectionA">Terms Result</a></li>
				<li><a data-toggle="tab" href="#sectionC">Mid Terms/Kindergarten</a></li>
				</ul>
				<div class="tab-content">
				<div id="sectionA" class="tab-pane fade in active"><!--Terms Result-->
                <table id="manageGradeTable" class="table table_view table-responsive">
					<thead>
					    <tr>
						<th>#ID</th>
						<th></th>
						<th>Student Name</th>
						<th>Identify Number</th>
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
						<th>Term</th>
						<th>Class</th>
						
						<th>Exam Year</th>
						
                     </tr>
					</thead>
					
				</table>
				</div><!--Terms-->
<div id="sectionC" class="tab-pane fade"><!--Mid-Terms-->
<table id="midGradeTable" class="table table_view table-responsive">
					<thead>
					    <tr>
						<th>#ID</th>
						<th></th>
						<th>Student Name</th>
						<th>Identify Number</th>
						<th>Subject</th>
                        <th>1<sup>st</sup> Summary</th>
						<th>2<sup>nd</sup> Summary</th>
						<th>Term's Exam</th>
						<th>Summary of Term's Exam</th>
						<th>Subject Highest Score</th>
						<th>Subject Lowest Score</th>
						<th>Class</th>
						<th>Exam Year</th>
						
                     </tr>
					</thead>
					
				</table>
</div><!--Mid-Terms-->

</div>

</div>


                </div>
            </div>


        </div>
    </section>


    <!-- remove modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="removeGradeModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Result</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete this result ?</p>
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
	<div class="modal fade" tabindex="-1" role="dialog" id="editGradeModals">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Member</h4>
	      </div>

		<form action="grade/update.php" method="POST" id="updateGradeForm">	      

	      <div class="modal-body">
		  	      	<div class="edit-messages"></div>
	        	
	        <div class="form-group form-float">
                                    <div class="form-line">
									 
                                        <input type="text" id="stuNo" name="regiNo" class="form-control" placeholder="Student Matric Number">
                                        
                                    </div>
                                </div>
                                                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="eccode" name="ccode" class="form-control" placeholder="Course Code">

                                    </div>
                                </div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="etscore" name="tscore" class="form-control" placeholder="Test Score">
                                        
                                    </div>
                                </div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="eescore" name="escore" class="form-control" placeholder="Exam Score">
                                        
                                    </div>
                                </div>
              		 		
							<div class="form-group form-float">
                                    <div class="form-line">
									 <input type="text" id="esemester" name="semester" class="form-control" placeholder="Semester">
                                        
                                    </div>
                                </div>
							
							<div class="form-group form-float">
							  <div class="form-line">
                                        <input type="text" id="esession" name="session" class="form-control" placeholder="Session">
                                        
                                    </div>
                                </div>

			  
	      </div>
	      <div class="modal-footer editGradeModal">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->
    

    <script src="js/grade.js"></script>  
	<script src="js/grade_mid.js"></script>  
<?php include('footer.php'); ?>    

   