<?php include('header2.php'); ?>

    <div class="login-box">
   
    <div class="logo image">
       <a href="javascript:void(0);"><img src="<?php echo $set['installUrl']; ?>/logo/<?php echo $set['schoolLogo']; ?>" width="100" height="100"></a>
    </div>
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>

         <div class="card">
            <div class="body">
                <form id="forgot_password">
                    <div class="msg">
                        Enter your email address that you used to register. An email will be send to your email with your new password.
                    </div>
                    <div id="error"></div>
                    <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon maroon">
                            <i class="material-icons">email</i>
                        </span>
                        
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" autofocus>
                        </div>
                        </div>
                    </div>
                    <div align="center">
                    <button class="btn btn-md main waves-effect" type="submit" id="submit-btn" name="reset"><i class="fa fa-envelope-o"></i> RESET MY PASSWORD</button>
                    </div>
                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="sign-in?<?php echo randnumber(); ?>&p=Sign In">Sign In!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    </div>

   <?php include('footer2.php'); ?>