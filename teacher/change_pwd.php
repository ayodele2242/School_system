<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Change Password</h2>
            </div>

 <!-- Basic Validation -->
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <?php 
                        if (isset($_GET['action'])) {
                            $action = $_GET['action'];
                            if ($action == 'done') {
                                echo  alertBox( "Password Changed Successfully!", "<i class='fa  fa-check-square'></i>", "success");
                            }
                        }else if ($msgBox) { echo $msgBox; }
                       ?>
                         <div class="body">
                            <form action="" id="form_validation" method="post">
                                
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" autocomplete="off" name="old_password" id="old_password">
                                        <label class="form-label">Current Password</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" autocomplete="off" name="new_password" id="new_password">
                                        <label class="form-label">New Password</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" autocomplete="off" name="con_newpassword"  id="con_newpassword">
                                        <label class="form-label">Confirm New Password</label>
                                    </div>
                                </div>

                               <div class="form-group" align="center">
                                   <input type="hidden" name="ids" value="<?php echo $ids; ?>">
                                <button type="input" name="submit" value="editPwd" class="btn btn-success btn-md btn-icon  waves-effect" id="submit_btn" ><i class="fa fa-check-square-o"></i> <?php echo $saveChangesBtn; ?></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->


        </div>
    </section>

<?php include('footer.php'); ?>    

   