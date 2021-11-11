<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-users"></i> Users</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="removeMessages"></div>
                <div class="cards">

<div class="profile">   
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a data-toggle="tab" href="#sectionA">New User</a></li>
<li><a data-toggle="tab" href="#sectionC">Users List</a></li>
</ul>

<div class="tab-content">
<div id="sectionA" class="tab-pane fade in active"><!--New member-->
<form method="post" id="aregister">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" >
                                   
                                </div>
                                <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control"  >
                                </div>
                                    <div class=" form-group">
                                    <label class="form-label">Gender</label>
                                    <select name="gender"  id="gender" class="form-control">
                                    <option value="">Gender</option>
                                    <option value="Male">Male </option>
                                    <option value="Female">Female </option>
                                    </select>
                                    </div>
                                    <div class=" form-group">
                                    <label class="form-label">Access Status</label>
                                    <select name="status"  id="status" class="form-control" required>
                                    <option value="">Access Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive </option>
                                    </select>
                                    </div>  
                                <div class="form-group ">
                                <label class="form-label">Graduation Year</label>
                                    <input name="grad_year"  id="grad_year" type="number" class="form-control date" >
                                </div>
                                <div class="form-group ">
                                <label class="form-label">Email Address</label>
                                <input type="text" name="user_email" id="user_email" class="form-control">
                                <span id="check-e"></span>
                                </div>
                                <div class="form-group ">
                                <label class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"  >
                                </div>
                                <div class="form-group ">
                                <label class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" id="cpassword" class="form-control"  >
                                </div>
                                
                                <div class="form-group " align="center">
                                <div id="error"></div>
                                <button class="btn btn-primary waves-effect" type="submit" id="btn-submit"><i class="fa fa-user-plus"></i> Add User</button>
                                </div>
                            </form>
          
</div><!--#END New member-->
<div id="sectionC" class="tab-pane fade"><!--MEMBERs LIST-->
<div class="alert" id="alertms"></div>

<form class="stas" action="sendinvite" method="post" onsubmit="if(document.getElementById('mailcheck').checked==false){return alert('Kindly select at least one jobseeker.');}">
<table id="alumni_users_invite" class="table table_view ">
                     <thead class="heading">
							<tr>
								<th>S/N</th>
                                <th><input name="checkbox" type="checkbox" value="" class="checkall  checkbox" onClick="selectAll(this)"/></th>
								<th>Name</th>
								<th>Gender</th>
                                <th>Email</th>
							   	<th>Phone Numbers</th>
                                <th>Class of</th>   
                                <th>Address</th>   
                               	<th>State</th>
                                <th>City</th>
								<th>Links</th>
                                <th>Status</th>
								<th>Actions</th>
                                
							</tr>
							</thead>
                            </table>
							<div align="center">
							<input class="btn btn-primary" value="Send Message" type="submit" name="invite"/>
							</div>
							</form>
							

</div><!--#END MEMBERs LIST-->

</div>

</div>
                
</div>
                </div>
            </div>


        </div>
    </section>
	
	
	
<!-- remove modal -->
<div class="modal fade removem" tabindex="-1" role="dialog" id="auserModal" aria-labelledby="auserModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete User</h4>
	      </div>
	      <div class="modal-body">
          <!--<div class="removeMessages"></div>-->
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

<script src="js/alumni_user.js"></script>
<?php include('footer.php'); ?>    