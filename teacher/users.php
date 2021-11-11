<?php include('header.php'); ?>
<link href="../afiles/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="../afiles/js/bootstrap-toggle.min.js"></script>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-users"></i> My Profile</h2>
            </div>

            <div class="row clearfix">
            <div class="removeMessages"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="message"></div>
                <div class="cards">



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
						<th>Action</th>
            </tr>
					</thead>
					
				</table>


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

   