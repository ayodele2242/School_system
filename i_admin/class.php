<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
        <div class="block-header">
			<ul class="menusy"><li>
                <a href="#"><i class="material-icons">class</i>
                            <span>Class</span>
                </a>
                        
                </li></ul> 
                
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                    <div id="message" class="removeMessages"></div>
                
                <div class="row">
          <div class="col-md-5 employeeform">
            
            <form method="post" id="insertClass">
              <div class="form-group col-md-6">
               <input type="text" name="class" class="form-control" placeholder="Class Format(Primary One, J.S 1, S.S 1)" required>
              </div>
                 <div class="form-group col-md-6">
                <label style="display:block;padding:10px;"></label>
                <div align="center">
                <button type="submit" class="btn btn-md btn-info insertButton" id="btn-submit"><i class="fa fa-plus"></i> Add Class</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 viewemployee" style="display:none;"></div>
          <div class="col-md-7">
            <table id="classTable" class="table table_view">
              <thead class="heading">
                <tr>
                  <th>#No</th>
                  <th>Class Name</th>
                  <th>Action</th>
                  </tr>
              </thead>
              
            </table>
          </div>
        </div>
                </div>
            </div>


        </div>
    </section>


 <!-- remove modal -->
 <div class="modal fade " tabindex="-1" role="dialog" id="classModal">
	  <div class="modal-dialog " role="document">
	    <div class="modal-content modal-col-red">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Class</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete this Class?</p>
	      </div>
	      <div class="modal-footer">
	        <!--<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>-->
	        <button type="button" class="btn btn-danger btn-md" id="removeClassBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->


 <script src="js/class.js"></script>   

<?php include('footer.php'); ?>    

   