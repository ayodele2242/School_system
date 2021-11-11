<?php include ('../includes/fetch.php'); 
//setcookie("pin","", time()-3600);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="<?php echo $set['siteName']; ?>" />
    <meta name="keywords" content="<?php echo $set['keywords']; ?>" />
    <meta name="author" content="<?php echo $set['siteName']; ?>" />
    <title><?php echo $set['siteName']; ?></title>
    <!-- Favicon-->
    <link rel="icon"  href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" type="image/x-icon" />


    <!-- Google Fonts -->
    <link href="<?php echo $set['installUrl']; ?>modules/css/css.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $set['installUrl']; ?>modules/css/icon.css" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" href="assets/ionicons.min.css">
    <link rel="stylesheet" href="assets/font-awesome.css">-->
    <link href="<?php echo $set['installUrl']; ?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Bootstrap Core Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo $set['installUrl']; ?>modules/css/themes/all-themes.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>modules/assets/jquery-1.10.2.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>modules/assets/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo $set['installUrl']; ?>modules/assets/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $set['installUrl']; ?>modules/assets/jquery.min.js"></script>
   	<script>
	window.setTimeout(function() {
	  $("#fades").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);
	</script>
</head>

<body class="theme-blue-grey">
<!-- Page Loader -->
   <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        
                        Infonet Management Results Manager
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>-->
    <!-- #END# Page Loader -->
    <div class="row">
    <div class="col-lg-7" style="margin-left:2%;">
   
    </div>
    
    <div class="col-lg-4">
    <div class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><img src="<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>" width="60" height="60"></a>
            <small><?php echo $set['siteName']; ?></small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" >
                    <div class="msg"><?php if ($msgBox) { echo $msgBox; } ?></div>
                     <div class="input-group">
                    <div class="form-line">
                   <input type="password" class="form-control" name="pin" placeholder="Enter Pin"  autocomplete="off">
                        </div>
                    </div>
                    
                    <div class="row">
                  <div class="col-xs-12">
                            <button name="submit" value="mypin" class="btn btn-block bg-blue waves-effect" type="submit"><i class="glyphicon glyphicon-log-in"></i>  Continue</button>
                        </div>
                    </div>
                    <!--<div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>-->
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
 </div>   
<div class="col-lg-12 alertinfo">
<p class="">Copyright &copy; 2014-<?php echo date("Y"); ?>, <?php echo $set['siteName']; ?>. All Rights Reserved.</p>
<p>
<ul class="mylist">
<li><a href="<?php echo $set['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="<?php echo $set['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="<?php echo $set['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
</ul>
</p>
</div>
    <!-- Jquery Core Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo $set['installUrl']; ?>modules/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo $set['installUrl']; ?>js/admin.js"></script>
    <script src="<?php echo $set['installUrl']; ?>js/pages/examples/sign-in.js"></script>
</body>

</html>