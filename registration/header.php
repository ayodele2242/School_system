<?php
include('../includes/fetch.php');

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

    <title> <?php if(!empty($pt['nav_id'])){ echo ucwords($pt['page_title']); }else { echo "Index Page"; }   ?></title>

    

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
      <!-- file input css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>afiles/assets/fileinput/css/fileinput.min.css">
    <link href="<?php echo $set['installUrl']; ?>afiles/css/autocomplete.css" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>afiles/css/bootstrap-material-datetimepicker.css" />
    <link href="<?php echo $set['installUrl']; ?>afiles/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>themes/menu.css" type="text/css" media="screen" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet" />
    <!-- Fancybox CSS library -->
    <link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>afiles/fancybox/jquery.fancybox.css">


    <script src="<?php echo $set['installUrl']; ?>afiles/js/jquery.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>afiles/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo $set['installUrl']; ?>afiles/js/jquery.min-11.1.js"></script>
    <script src="<?php echo $set['installUrl']; ?>afiles/js/jquery-1.9.1.js"></script>
    <script src="<?php echo $set['installUrl']; ?>afiles/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/jquery-1.11.3-jquery.min.js"></script>
   
  
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/validation.min.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>registration/js/pin_checker.js"></script>
    
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

.show-read-more .more-text{
        display: none;
    }

.dtp-btn-cancel{
    background: #ff4444;
}
.dtp-btn-ok, .btn-default{
    background: #0099CC;
}

.overlayme{position: absolute; top: 24%; left: 0; right:0; max-height:30%; width: 100%;  display: block; z-index: 135; }
    </style>

<script>
/*$(document).ready(function(){ 
setInterval(function(){ getUsers(); }, 1000);

function getUsers()
{
  $.ajax({
    url: 'myupdate.php',
    type: 'post',
    beforeSend: function(){
					$("#error").fadeOut();
					$(".btn-submit").html('<img src="<?php //echo $set['installUrl']; ?>img/processing.gif" width="30" /> &nbsp; processing ...');
					},
    success: function(data) {
      $('.htmlelement').html(data);
    }
  });
}
});*/
</script>

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
	  $(".closeit").fadeTo(1500, 0).slideUp(1500, function(){
		$(this).remove(); 
	  });
	}, 10000);
</script>

<script>

$(document).ready(function(){
    $('#myCarousel').carousel({
        pause: true,
        interval: false
    });

});
$('#myCarousel').on('slid', '', function() {
    var $this = $(this);

    $this.find('.carousel-control').show();

    if($('.carousel-inner .item:first').hasClass('active')) {
        $this.find('.left.carousel-control').hide();
    } else if($('.carousel-inner .item:last').hasClass('active')) {
        $this.find('.right.carousel-control').hide();
    }

});
</script>
<script>
   $(document).ready(function(){
    $('#inDetails').on('show.bs.modal', function (e) {
        var cid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'readmore.php', //Here you will fetch records 
            data :  'rowid='+ cid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

</script> 

<script>
$(document).ready(function(){
  $('input.mnumber').keyup(function(event){
      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var $this = $(this);
      var num = $this.val().replace(/,/gi, "").split("").reverse().join("");
      
      var num2 = RemoveRougeChar(num.replace(/(.{3})/g,"$1,").split("").reverse().join(""));
      
      console.log(num2);
      
      
      // the following line has been simplified. Revision history contains original.
      $this.val(num2);
  });
});

function RemoveRougeChar(convertString){
    
    
    if(convertString.substring(0,1) == ","){
        
        return convertString.substring(1, convertString.length)            
        
    }
    return convertString;
    
}

 $(document).ready(function () {
  //called when key is pressed in textbox
   $(".digit").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $(".derror").html("Only digits allow").show().fadeOut("slow");
               return false;
    }
   });
});

</script>



</head>

<body>

    <!-- Page Loader -->
    <div class="loader">
    <p>
    <div align="center"><div class="logos image">  
        <a href="javascript:void(0);"><img src="<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>" width="100" height="100"></a>
    </div></div>
    <div align="center"><span style="font-weight:bolder; font-size:26px;"><?php echo strtoupper($set['school_name']); ?></span></div>
    <div align="center"><img src="<?php echo $set['installUrl']; ?>img/processing.gif" width="30" /> Please wait</div>
    </p>
    
    </div>
    <!-- #END# Page Loader -->

    <div class="topdiv mobile z-depth-5" style="background:#3f51b5; color:#fff;">
    <div class="pull-left">
        <strong class="titles"><?php echo $set['phone']; ?></strong>
        <strong class="titles">|</strong>
        <strong class="titles"><?php echo $set['siteEmail']; ?></strong>
    </div>

    <div class="pull-right">
    <ul class="nav " >
            <li class="nav-item">
            <a href="https://www.facebook.com/<?php echo $set['facebook'];  ?>" class="nav-link waves-effect waves-light  text-white" target="_blank">
              <i class="fa fa-facebook"></i> 
            </a>
          </li> 
         
          <li class="nav-item">
            <a href="https://www.twitter.com/<?php echo $set['twitter'];  ?>" class="nav-link waves-effect waves-light text-white" target="_blank">
              <i class="fa fa-twitter"></i> 
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.instagram.com/<?php echo $set['instagram'];  ?>" class="nav-link waves-effect waves-light text-white" target="_blank">
              <i class="fa fa-instagram"></i> 
            </a>
          </li>
            </ul>

    </div>
 
</div>
    