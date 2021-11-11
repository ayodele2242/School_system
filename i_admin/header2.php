<?php
include('../includes/fetch.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Automating your school work.">
    <meta name="author" content="<?php echo $set['siteName']; ?>">
    <meta name="keyword" content="content, management, system, schools, school management system, schoool portal, chat, link, linkedln, <?php echo $set['siteName']; ?>">
    <link rel="icon"  href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" type="image/x-icon" />

    <title><?php echo $set['siteName']; ?> - <?php if(isset($_GET['p'])){ $p = $_GET['p']; echo $p; }else { echo "Sign In"; }   ?></title>

    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Core Css -->
    <link href="../afiles/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../afiles/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../afiles/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../afiles/css/style.css" rel="stylesheet">

    <script src="../afiles/js/jquery.min.js"></script>
    <script type="text/javascript" src="../afiles/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="../afiles/js/validation.min.js"></script>
    <script type="text/javascript" src="../afiles/js/signin.js"></script>

    <style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: rgb(249,249,249);
    
}

.loader p{
margin-top: 18%;
margin-left:37%;
}
    </style>

    
        <script type="text/javascript">
            $(window).load(function() {
                $(".loader").fadeOut("slow");
            });
            </script>

            <script type="text/javascript" language="javascript">
    jQuery(function() {
        jQuery('input').attr('autocomplete', 'off');
    });
</script>

<script>
	window.setTimeout(function() {
	  $(".closeit").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);
	</script>

</head>

<body class="login-page">

    <!-- Page Loader -->
    <div class="loader">
    <p>
    <div align="center"><div class="logo image">  
        <a href="javascript:void(0);"><img src="<?php echo $set['installUrl']; ?>/logo/<?php echo $set['schoolLogo']; ?>" width="100" height="100"></a>
    </div></div>
    <div align="center"><span style="font-weight:bolder; font-size:26px;"><?php echo strtoupper($set['school_name']); ?></span></div>
    <div align="center"><img src="../img/processing.gif" width="30" /> Please wait</div>
    </p>
    
    </div>
    <!-- #END# Page Loader -->

    
    