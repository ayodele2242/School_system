<?php 
include ('../includes/fetch.php'); 
if (!isset($_SESSION["pin"])){
header("location: validator?".randnumber());
}else{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="<?php echo $setting['siteName']; ?>" />
    <meta name="keywords" content="<?php echo $setting['keywords']; ?>" />
    <meta name="author" content="<?php echo $setting['siteName']; ?>" />
    <title><?php echo $setting['siteName']; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="icon/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <link href="../css/icon.css" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" href="assets/ionicons.min.css">
    <link rel="stylesheet" href="assets/font-awesome.css">-->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
    <script type="text/javascript" src="../assets/jquery-1.10.2.min.js"></script>
    <script src="../assets/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../assets/jquery.js"></script>
	<script type="text/javascript" src="../assets/jquery.min.js"></script>
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
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <!--<div class="circle"></div>-->
                        Infonet Management Results Manager
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <div class="row">
    <div class="col-lg-7" style="margin-left:2%;">
   
    <div align="center">
    <img src="../images/expired.png" class="img-responsive"> 
    </div>
     <div class="alert-warning" style="padding:10px; text-align:center; font-size:24px; color:#f00; margin-top:10px;">
    The pin(<?php echo $_SESSION["pin"]; ?>) you entered has already been used 3 times by you. You need to purchase another scratch card from your school to be able to access your result page.
    </div>
    </div>
    
    <div class="col-lg-4">
    Your school is band from using this system.
    </div>
 </div>   
<div class="col-lg-12 alertinfo">
<p class="">Copyright &copy; 2014-<?php echo date("Y"); ?>, Infonet Management Consultants. All Rights Reserved.</p>
<p>
<ul class="mylist">
<li><a href="<?php echo $setting['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="<?php echo $setting['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="<?php echo $setting['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
</ul>
</p>
</div>
    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-in.js"></script>
</body>

</html>
<?php
}
?>