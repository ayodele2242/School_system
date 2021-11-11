<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <ul class="menusy"><li>
                <a href="#"><i class="material-icons">people_outline</i>
                            <span>Manage Students</span>
                </a>           
                </li></ul>
            </div>

            <div class="row clearfix">

            <div id="allstudents" class="alert alert-default"></div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <table id="stuListTable" class="table table_view ">
			<thead>
			<tr>
			<th>#ID</th>
            <th>Img</th>
			<th>Surname</th>
            <th>Middle Name</th>
            <th>First Name</th>
            <th>Student Reg. #ID</th>
            <th>gender</th>
            <th>session</th>
            <th>class</th>
            <th>class group</th>
            <th>section</th>
            <th>shift</th>
            <th>religion</th>
			<th>blood group</th>
            <th>State of Origin</th>
            <th>dob</th>
            <th>Father's Name</th>
            <th>Father's Contact Number</th>
            <th>Mother's Name</th>
            <th>Mother's Contact Number</th>
            <th>Present Address</th>
            <th>Permanent Address</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
			</thead>
					
			</table>


                
                </div>
            </div>


        </div>
    </section>



    
    <div class="modal fade" id="eModal" tabindex="-1" role="dialog" aria-labelledby="eModalLabel" aria-hidden="true">
	<div class="modal-dialog">
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


    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2Label" aria-hidden="true">
	<div class="modal-dialog">
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
<div class="modal fade" tabindex="-1" role="dialog" id="employerModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Student</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete it? All the student records will be deleted and there is no retrive after deletion.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-danger" id="removeBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->

<?php include('footer.php'); ?>    

   