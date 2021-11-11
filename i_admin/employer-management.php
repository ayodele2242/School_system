<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><span class="fa  fa-users"></span> Employers Information and Jobs Posted</h2>
            </div>

            <div class="row clearfix">
            <div class="removeMessages"></div>
			
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="cards table-responsive">
                <div class="profile">   
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a data-toggle="tab" href="#sectionA"   style="font-weight:bolder; color: #800000;">Employers Details</a></li>
<li><a data-toggle="tab" href="#sectionC"  style="font-weight:bolder; color: #800000;">Jobs Posted</a></li>
</ul>
<div class="tab-content">
<div id="employs" class="alert alert-default"></div>
<div id="sectionA" class="tab-pane fade in active"><!--Profile-->

                <table id="sempTable" class="table table_view ">
						<thead class="heading">
                       
							<tr>
								<th>
									 S/N
								</th>
								<th>
									 Company Name
								</th>
								<th>
									 Company Location
								</th>
								<th>Company Size</th>
								<th>Company Sector/Industry</th>
								<th>
									 Contact Person</th>
								
								<th>
									 Telephone Number</th>
								<th>
									 Company Email
								</th>
                                <th>
									 Business Owners
								</th>
                                <th>
									 Confirmation Number
								</th>
								<th>Registration Date</th>
                                <th>Action</th>
							</tr>
							</thead>
							</table>
                            </div><!--Profile-->

                            <div id="sectionC" class="tab-pane fade"><!--Jobs-->
                            <table id="jobsTable" class="table table_view ">
						     <thead class="heading">
                             <tr>
								<th>
									 S/N
								</th>
                                <th>Name</th>
                                <th>
								 Company Name
								</th>
                                <th>Industry</th>
                                <th>Job Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                             </head>
                             </table>

                            </div><!--Jobs end-->

                             </div>

</div>

                
</div>
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
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Employer</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete it?</p>
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

   