<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-money" aria-hidden="true"></i> Add Fees</h2>
            </div>

            <div class="row clearfix">

                <div id="message" class="removeMessages"></div>
                <div class="col-lg-5 col-md-5"><!--col-6-->

                <form autocomplete="off" id="feeform" class="">
                <div class="form-group">
                    <label>Fee Name</label>
                <input type="text" name="name"  required="required" class="form-control">
                </div>

                <div class="form-group">
                    <label>Amount</label>
                <input type="text" name="amount"  required="required" class="form-control digit mnumber">
                <span class="derror text-danger"></span>
                </div>

                <div class="form-group stas" >
                  <label>Class</label>  
                <select name="class" class="form-control">
                <option value="General">General</option>
                        <?php 
                        echo getClassN();
                        ?>
                        </select>
                </div>
                
                <!--<div class="form-group">
                    <label>School Session</label>
                <input type="text" name="session"  class="form-control date">
                </div>-->

                <div class="form-group">
                <div align="center">
                <button type="submit" class="btn btn-md btn-info insertButton" id="btn-submit"><i class="fa fa-plus"></i> Add Menu</button>
                </div>
                </div>

                </form>
                </div><!--#END col-6-->


                <div class="col-lg-7 col-md-7"><!--col-6-->

              <table id="feesTable" class="table table_view">
              <thead class="heading">
                <tr>
                  <th>#No</th>
                  <th>Fee Name</th>
                  <th>Class</th>
                  <!--<th>Session</th>-->
                  <th>Amount</th>
                  <th>In words</th>
                  <th>Action</th>
                  </tr>
              </thead>
              
            </table>


               </div><!--#END col-6-->



            </div><!--#END row-->


        </div>
    </section>


     <!-- remove modal -->
 <div class="modal fade " tabindex="-1" role="dialog" id="classModal">
	  <div class="modal-dialog " role="document">
	    <div class="modal-content modal-col-red">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Menu</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to delete this Menu?</p>
	      </div>
	      <div class="modal-footer">
	        <!--<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>-->
	        <button type="button" class="btn btn-danger btn-md" id="removeClassBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->


 <script src="js/fees.js"></script>   


<?php include('footer.php'); ?>    

   