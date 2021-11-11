<?php include('header.php'); ?>

<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-bullhorn"></i> Announcements</h2>
            </div>

            <div class="row clearfix">
            <div id="result"></div>
            <div class="alert alert-default">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModals" style="float: right;margin: -5px 0;">
                      New Announcement
                    </button>
                    </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                <table id="announceTable" class="table table_view">
                <thead class="heading">
                 <tr>
                 <th>#ID</th>
                 <th>Title</th> 
                 <th>Content</th>  
                 <th>Date Created</th>
                 <th></th>
                

                 </tr>   
                </thead>
                </table>
		
		       </div>
                </div>
            </div>


        </div>
    </section>


    <!-- Modal -->
<div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add  Announcement</h4>
      </div>
      <div class="modal-body">
            <form id="AnnouncementForm"  name="AnnouncementForm" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                           	    
                            <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar-2" name="userImage" type="file" class="file-loading">
                            </div>
                        </div>
            <div class="form-group">
                    <label></label>                                            
            		<input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                </div>                
                <div class="form-group">
                    <label></label>                                            
            		<textarea name="msg" id="abstract" class="form-control" rows="4" placeholder="Enter Content"  required=""></textarea>
                </div>                                                                       
               <center>
                     <div id="result"></div><button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                </center>
            </form>
      </div>
    </div>
  </div>
</div>

  <!-- remove modal -->
  <div class="modal fade " tabindex="-1" role="dialog" id="classModal">
	  <div class="modal-dialog " role="document">
	    <div class="modal-content modal-col-red">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Announcement</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete this?</p>
	      </div>
	      <div class="modal-footer">
	        <!--<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>-->
	        <button type="button" class="btn btn-danger btn-md" id="removeAnnoBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->

    
<?php include('footer.php'); ?>    

   