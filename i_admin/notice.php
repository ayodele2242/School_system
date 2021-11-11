<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <ul class="menusy"><li>
                <a href="#"><i class="material-icons">create</i>
                            <span>Notice</span>
                </a>           
                </li></ul>
            </div>

            <div class="row clearfix">
                <div id="removeMessages" class=""> </div>
								<div id="message" class="message removeMessages"> </div>
					  <div class="col-lg-5">
            <form method="post" id="notice-form">
						<div class="col-md-12">
						<div class="form-group">
               <input type="text" name="code" id="code" class="form-control" placeholder="Title" />
              </div>
						</div>	
						<div class="col-md-12">
						<div class="form-group">
               <textarea name="name" rows="9" class="form-control mcomment" id="name"></textarea>
              </div>
							</div>
                 <div class="form-group col-md-12">
                <label style="display:block;padding:10px;"></label>
                <div align="center">
                <button type="submit" class="btn btn-md btn-info" id="btn-submit"><i class="fa fa-plus"></i> Add </button>
                </div>
              </div>
            </form>
            </div>

                <div class="col-lg-7">
                <table id="notice" class="table table_view">
                <thead class="heading">
                 <tr>
                 <th>#ID</th>
                 <th>Title</th> 
                 <th>Content</th>  
                 <th></th>

                 </tr>   
                </thead>
                </table>
                </div>


            </div>


        </div>
    </section>



    <!-- remove modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="removeSubModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Subject</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete it?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-warning" id="removeSubBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->

	<!-- edit modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editSubModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit</h4>
	      </div>

		<form  action="subject/update.php" method="POST" id="updateSubForm">	      

	      <div class="modal-body">
	        	
            <div class="edit-messages"></div>
            <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
				 <div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			     
                <div class="form-line"> 
			      <input type="text" class="form-control" id="editcode" name="editcode" placeholder="Subject Code">
                  </div>
				<!-- here the text will apper  -->
			     </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group padding"> <!--/here teh addclass has-error will appear -->
			     <div class="form-line"> 
                 <input type="text" class="form-control" id="editname" name="editname" placeholder="Subject Name">
                
								  </div>
				<!-- here the text will apper  -->
                </div>
</div>           

</div>
			  
	      </div>
	      <div class="modal-footer editSubModal">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Update</button>
	      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->
    <script>tinymce.init({ selector:'textarea' });</script>
<script src="js/notice.js"></script>
<?php include('footer.php'); ?>    

   