<?php 
include '../includes/fetch.php'; 
if(!isset($_SESSION['matricno'])){
	header("Location: validator?Login Error=Access denied. Enter your login details.");
}else{
	
	// User Data
	$qry = "SELECT  * FROM student WHERE regiNo = '".$_SESSION['matricno']."'";
	$res = mysqli_query($mysqli, $qry) or die('Unable to fetch users'.mysqli_error());
	$row = mysqli_fetch_array($res);
	$sname = $row['lastName'];
	$mid = $row['regiNo'];
	$fullname=  $row['lastName']. ' '.$row['firstName'];
	$class =  $row['class'];

	$splitnumber = $class;
	$splittedNumbers = explode(",", $splitnumber);
	$impclass = "'" . implode("', '", $splittedNumbers) ."'";
        
	
$acct = mysqli_query($mysqli,"SELECT * FROM account where Student_reg_code = '".$_SESSION['matricno']."' order by accid desc limit 30");
	
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="<?php echo $set['siteName']; ?>" />
    <meta name="keywords" content="<?php echo $set['keywords']; ?>" />
    <meta name="author" content="<?php echo $set['siteName']; ?>" />
    <title><?php echo $row['lastName']. ' '.$row['firstName']; ?></title>
	
    <!-- Favicon-->
    <link rel="icon" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" type="image/x-icon">

   
    <!-- Bootstrap Core Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
     <!-- Google Fonts -->
    <link href="<?php echo $set['installUrl']; ?>modules/css/css.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $set['installUrl']; ?>modules/css/icon.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $set['installUrl']; ?>modules/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>modules/assets/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>modules/assets/buttons.dataTables.min.css" />
     <link href="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/animate-css/animate.css" rel="stylesheet" />
    
        <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/waitme/waitMe.css" rel="stylesheet" />

	 <!-- JQuery DataTable Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- Custom Css -->
    <link href="<?php echo $set['installUrl']; ?>modules/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo $set['installUrl']; ?>modules/css/themes/all-themes.css" rel="stylesheet" />
    
   
   <link href="<?php echo $set['installUrl']; ?>modules/assets/css/bootstrap-imageupload.css" rel="stylesheet">
   	
    
	<!-- notification  -->
	<link href="<?php echo $set['installUrl']; ?>modules/vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
		<!-- wysiwug  -->
	<link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>modules/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="../afiles/js/jquery.min.js"></script>
	<script src="../afiles/js/jquery-1.11.2.min.js"></script>
    <script src="../afiles/js/jquery.min-11.1.js"></script>
    <script type="text/javascript" src="../i_admin/js/jquery-1.11.1.min.js"></script>
    <script src="../afiles/js/jquery-1.9.1.js"></script>
    <script src="../afiles/js/jquery-1.12.4.js"></script>
    

	<!--<link rel="stylesheet" href="<?php echo $set['installUrl']; ?>modules/jquery-ui/development/demos/demos.css">	-->
   	<script>
	window.setTimeout(function() {
	  $("#fades").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);
	</script>
	
	<script>
	window.setTimeout(function() {
	  $(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);
	</script>
	
	<script>
	window.setTimeout(function() {
	  $(".removeMessages").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);
	</script>
    
<script>
$(document).ready(function(){
$('[rel=tooltip]').bind('mouseover', function(){	  
 if ($(this).hasClass('ajax')) {
	var ajax = $(this).attr('ajax');	
			
  $.get(ajax,
  function(theMessage){
$('<div class="tooltip">'  + theMessage + '</div>').appendTo('body').fadeIn('fast');});
}else{
   var theMessage = $(this).attr('content');
	    $('<div class="tooltip">' + theMessage + '</div>').appendTo('body').fadeIn('fast');
		}
		
		$(this).bind('mousemove', function(e){
			$('div.tooltip').css({
				'top': e.pageY - ($('div.tooltip').height() / 2) - 5,
				'left': e.pageX + 15
			});
		});
	}).bind('mouseout', function(){
		$('div.tooltip').fadeOut('fast', function(){
			$(this).remove();
		});
	});
});

</script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			showButtonPanel: true
		});
		$( "#date" ).datepicker({		 
			changeMonth: true,
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			showButtonPanel: true
		});
	});	
	</script>
	<script language="javascript" >
	 function isNumberKey(evt)
	 {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	
	return false;
	return true;
	 }  
	</script>
    
    <script>
	function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
 
 
 <script>  
$(document).ready(function(){
    $('#select').bind('change', function(event) {

var i = $('#select').val();

 if(i=="Term") // equal to a selection option
  {
	  $('.boxy').show();
  }
 elseif(i=="Mid")
  {
	$('.Term').hide(); // hide the first one
	$('.Mid').show(); // show the other one

   }
});
});
</script>




    <style>
	a.dt-button.pink {
        color: #F09;
    }
.myselect{
padding:4px;
width:420px;
}
.padding{
	padding:5px;
	margin-bottom:8px;
	font-weight:bolder;
}

.tt-menu { width:300px; }
	ul.program{margin:0px;padding:10px 0px;}
	ul.typeahead.dropdown-menu li a {padding: 10px !important;	border-bottom:#CCC 1px solid;color:#FFF;}
	ul.typeahead.dropdown-menu li:last-child a { border-bottom:0px !important; }
	.bgcolor {max-width: 550px;min-width: 290px;max-height:340px;background:url("world-contries.jpg") no-repeat center center;padding: 100px 10px 130px;border-radius:4px;text-align:center;margin:10px;}
	.demo-label {font-size:1.5em;color: #686868;font-weight: 500;color:#FFF;}
	.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
		text-decoration: none;
		background-color: #1f3f41;
		outline: 0;
	}
	.tooltip{
	position:absolute;
	width:320px;
	background-image: url(images/tip-bg.png);
	background-position:left center;
	background-repeat:no-repeat;
	color:#FFF;
	padding:5px 5px 5px 18px;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;
	}
	
.tooltip-image{
	float:left;
	margin-right:5px;
	margin-bottom:5px;
	margin-top:3px;}	
	
	
	.tooltip span{font-weight:700;
color:#ffea00;}

@media print {
  body *, {
    visibility: hidden;
  }
  #printableArea, #printableArea * {
    visibility: visible;
  }
  #printableArea {
    position: absolute;
    left: 0;
    top: 0;
  }
}
.loader{
    margin:0 auto;
    background:#0099CC;
    width:20%;
    color:#fff;
   
}

  
  @media print{  

   .result_table{
	zoom:80%;
	
  }
  .table_view {
	max-width: 500px;
  }
 .noPrint{
	   display:none;
 }
 .printableArea{
	 display:block;
 }
  }

	</style>
</head>

<body class="theme-blue-grey">
<!--<div class="page-loader-wrapper anim" style="background:none;">
        <div class="loader">
            <p>Be patient<img src="../img/processing.gif" alt="Be patient..." height="50"/></p>
        </div>
    </div>-->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING<?php echo $set['installUrl']; ?>modules.">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->