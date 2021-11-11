<?php
include('includes/fetch.php');
if(isset($_GET['pid'])){
     $p = $_GET['pid'];
		$qu = mysqli_query ($mysqli,"SELECT * FROM mp_pages where nav_id='$p'");
		$getc = mysqli_num_rows($qu);
        $pt = mysqli_fetch_array($qu);   
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Totallight - The school for tomorrow's leaders.">
    <meta name="author" content="<?php echo $set['siteName']; ?>">
    <meta name="keyword" content="content, management, system, schools, school management system, schoool portal, chat, link, linkedln, <?php echo $set['siteName']; ?>">
    <link rel="icon"  href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" type="image/x-icon" />

    <title> <?php if(!empty($pt['nav_id'])){ echo ucwords($pt['page_title']); }else { echo "Totallight Schools"; }   ?></title>

    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo $set['installUrl']; ?>afiles/md/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Core Css -->
    <link href="<?php echo $set['installUrl']; ?>afiles/md/css/mdb.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?php echo $set['installUrl']; ?>afiles/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?php echo $set['installUrl']; ?>afiles/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    
    <link href="<?php echo $set['installUrl']; ?>afiles/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/menu.css" type="text/css" media="screen" />
    <!-- Fancybox CSS library -->
    <link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>afiles/fancybox/jquery.fancybox.css">


    <script src="<?php echo $set['installUrl']; ?>afiles/js/jquery.min.js"></script>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>coin-slider/coin-slider.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>afiles/fancybox/jquery.fancybox.js">

  
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/validation.min.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/signin.js"></script>

    <style>


.show-read-more .more-text{
        display: none;
    }
    .loader{
    margin:0 auto;
    background:#0099CC;
    width:20%;
    color:#fff;
   
}

.overlayme{position: absolute; top: 24%; left: 0; right:0; max-height:30%; width: 100%;  display: block; z-index: 135; }
   
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(img/processing.gif) center no-repeat #f1f1f1;
} 
   </style>



<script>
  var js = ["<?php echo $set['installUrl']; ?>jsScript.js"];
  var $head = $("head");
  for (var i = 0; i < js.length; i++) {
    $head.append("<script src=\"" + js[i] + "\"></scr" + "ipt>");
  }
</script>

<script>
$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
 </script>   



</head>

<body>

  <!-- <div class="page-loader-wrapper anim" style="background:none;">
        <div class="loader text-center">
            <p><img src="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" height="50" width="60"> Be patient<img src="img/processing.gif" alt="Be patient..." height="50"/></p>
        </div>
    </div>-->
    <!-- #END# Page Loader -->
    <!--<div class="se-pre-con"></div>-->
    
    