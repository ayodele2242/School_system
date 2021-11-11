<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <div class="block-header">
                <h2><span class="fa fa-bullhorn"></span> News/Announcement</h2>
            </div>
            </div>
            
            <div class="row clearfix">
            <div align="right" style="margin-bottom:15px;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addMember" id="addDeptModalBtn">
    <span class="glyphicon glyphicon-plus-sign"></span> Create</button>
    </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">
          <table id="manageDeptTable" class="table table_view table-responsive">
					<thead>
					    <tr>
						<th>#ID</th>
						<th>Title</th>
            <th>Created By</th>
						<th>Action</th>
                     </tr>
					</thead>
					
				</table>


                
                </div>
                </div>
            </div>


        </div>
    </section>


    <!-- add modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addMember" data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>	Add News/Announcement</h4>
	      </div>
	      
	      <form class="form-horizontal" action="inews/create.php" method="POST" id="createDeptForm">

	      <div class="modal-body">
	      	<div class="messages"></div>
			
			<div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			      <div class="col-lg-10">
                 
				 <input type="hidden" class="form-control" id="sname" name="sname" value="<?php echo $_SESSION["fname"]; ?>" readonly>
			     
				<!-- here the text will apper  -->
			    </div>
			  </div>

			  <div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			      
                <div class="form-line"> 
				  <input type="text" class="form-control" id="title" name="title" placeholder="News/Announcement Title Here">
                  </div>
				<!-- here the text will apper  -->
			  </div>
              <div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			    <div class="form-line"> 
                <textarea name="msg"  rows="10" placeholder="Content here"  id="ckeditor" class="form-control" ></textarea>
                  
                  </div>
				<!-- here the text will apper  -->
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
	<div class="modal fade" tabindex="-1" role="dialog" id="removeDeptModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete News/Announcement</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete it?</p>
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
	<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit News/Announcement</h4>
	      </div>

		<form class="form-horizontal" action="inews/update.php" method="POST" id="updateMemberForm">	      

	      <div class="modal-body">
	        	
	        <div class="edit-messages"></div>
				 <div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			     
                <div class="form-line"> 
			      <input type="text" class="form-control" id="edittitle" name="edittitle" placeholder="Title">
                  </div>
				<!-- here the text will apper  -->
			     </div>
			  
              <div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			     <div class="form-line"> 
                 <textarea name="msg"  rows="10" placeholder="Content here"  id="editckeditor" class="form-control" ></textarea>
                
                  </div>
				<!-- here the text will apper  -->
			    </div>

			  
	      </div>
	      <div class="modal-footer editMemberModal">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->


<script src="../afiles/js/pages/forms/editors.js"></script>
<?php include('footer.php'); ?>    

   