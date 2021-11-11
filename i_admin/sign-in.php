<?php 
include('header2.php'); 

?>

    <div class="login-box">
   
        <div class="logo image">
        
            <a href="javascript:void(0);"><img src="<?php echo $set['installUrl']; ?>/logo/<?php echo $set['schoolLogo']; ?>" width="100" height="100"></a>
        </div>
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>

        <div class="card">

                   
            <div class="body">
                <form id="login-form" >
                    <div class="msg"><b><?php echo $set['school_name']; ?></b></div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username/Email/Phone Number" autofocus  autocomplete="off">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password"  autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-osun">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-6">
                        <a href="pwd_recovery?<?php echo randnumber(); ?>&p=Recover your password" class="osun-text">Forgot Password?</a>
                           
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-12">
                        <div align="center">
                        <button type="submit" class="btn  btn-sm main waves-effect" name="btn-login" id="btn-login">
                        <span class="fa fa-sign-in"></span> &nbsp; Sign In
                        </button>     

                    </div>
                          </div>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>

   <?php include('footer2.php'); ?>