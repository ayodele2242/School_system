<?php include('header.php'); ?>

<div class="container">

<div class="profile">   

<ul class="nav nav-tabs" id="myTab">
<li class="active"><a data-toggle="tab" href="#sectionA">Profile</a></li>
<li><a data-toggle="tab" href="#sectionC">Update Password</a></li>
</ul>

<div class="tab-content">

<div id="sectionA" class="tab-pane fade in active"><!--Profile-->

<form enctype="multipart/form-data" id="reset-form"> 
                           
                           <div class="form-group">
                              <div class=" alert alert-info" >Personal Details </div>
                            
                          </div>

            
             <div class="form-group" >
           <div class="row">
             <div class="col-lg-4">
           <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $detail['last_name']; ?>"   placeholder="Last Name" readonly>
              </div>
              <div class="col-lg-4">
           <input type="text" name="mname" id="mname" class="form-control" value="<?php echo $detail['maiden_name']; ?>"   placeholder="Maiden Name" readonly>
              </div>
              <div class="col-lg-4">
           <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $detail['first_name']; ?>"   placeholder="First Name" readonly>
              </div>
              <div class="col-lg-12">
              <input type="text" name="email" id="email" class="form-control" value="<?php echo $detail['email']; ?>"   placeholder="Email" readonly>
           
              </div>
            </div> 
             </div>

            <div class="form-group">
           <div class=" alert alert-info" >Contact Details </div>
            </div> 

            <div class="form-group" >
           <div class="row">
             <div class="col-lg-4">
           <input type="text" name="cphone" id="cphone" class="form-control" value="<?php echo $detail['cell_phone']; ?>"   placeholder="Cell Phone" >
              </div>
              <div class="col-lg-4">
           <input type="text" name="hphone" id="hphone" class="form-control" value="<?php echo $detail['home_phone']; ?>"   placeholder="Home Phone">
              </div>
              <div class="col-lg-4">
           <input type="text" name="work_phone" id="wphone" class="form-control" value="<?php echo $detail['work_phone']; ?>"   placeholder="Work Phone" >
              </div>
            </div> 
             </div>  

             <div class="form-group" >
           <div class="row">
             <div class="col-lg-6">
           <input type="text" name="city" id="city" class="form-control" value="<?php echo $detail['city']; ?>"   placeholder="City" >
              </div>
              <div class="col-lg-6">
           <input type="text" name="state" id="state" class="form-control" value="<?php echo $detail['state']; ?>"   placeholder="State">
              </div>
              <div class="col-lg-12">
           <textarea class="form-control" row="8" name="address" placeholder="Address"><?php echo $detail['address']; ?></textarea> 
          </div>
            </div> 
             </div> 

             <div class="form-group">
           <div class=" alert alert-info" >Links - this could be your website  and/or social media links </div>
            </div> 

           <div class="form-group" >
           <div class="row">
             <div class="col-lg-4">
           <input type="text" name="link1" id="link1" class="form-control" value="<?php echo $detail['link1']; ?>"   placeholder="Link 1" >
              </div>
              <div class="col-lg-4">
              <input type="text" name="link2" id="link2" class="form-control" value="<?php echo $detail['link2']; ?>"   placeholder="Link 2" >
              </div>
              <div class="col-lg-4">
              <input type="text" name="link3" id="link3" class="form-control" value="<?php echo $detail['link3']; ?>"   placeholder="Link 3" >
              </div>
            </div> 
             </div>  


			  
          <div class="form-group" align="center">
          <div id="message"></div>
          <input type="hidden" name="id" value="<?php echo $detail['user_id']; ?>" >
          
          <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-plu"></span> &nbsp; Update</button>
                            
        </div>
                      </form>


</div><!--Profile-->



<div id="sectionC" class="tab-pane fade"><!--Password update-->
<form id="Pwdresetform" method="post" action=""> 
                           
                                 <div class="form-group">
                                    <div class="alert alert-info">
                                    Change Account Password
                                
                                 </div>
                                   <!--display success/error message-->
                                   <?php if(isset($msgBox)){ echo $msgBox; } ?>
                                    </div>

                                <div class="form-group">
                                <label class="control-label"><?php echo $currentText.' '.$passwordField; ?></label>
                                <input class="form-control" type="password" autocomplete="off" name="old_password" id="old_password" value="" >

                                </div>

                                <div class="form-group">
                            <label class=""><?php echo $newPassField; ?></label>
                           
                              <input type="password" class="form-control" autocomplete="off" name="new_password" id="new_password"  value="" />
                         
                    </div>
                    
					<div class="form-group">
						<label class="control-label"><?php echo $repeatText.' '.$passwordField; ?></label>
					
							<input class="form-control" type="password" autocomplete="off" name="con_newpassword"  id="con_newpassword" value="" />
					      </div>
              
                <div class="form-group" align="center">
                   <div id="message"></div>
                
                  <button type="input" name="submit" value="editPwd" class="btn btn-primary" id="btn-submit"><span class="fa fa-lock"></span> &nbsp; Update</button>
                            
              </div>
                 
                 
                 </form>

</div><!--Password update end-->

</div>

</div>

</div><!--container end--> 
 


<?php include('footer.php'); ?>    