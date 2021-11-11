<?php
include('../includes/fetch.php');
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

    <!-- Custom Css -->
    
    <link href="<?php echo $set['installUrl']; ?>afiles/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>p/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>p/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>p/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>p/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>p/themes/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $set['installUrl']; ?>p/themes/menu.css" type="text/css" media="screen" />
    <!-- Fancybox CSS library -->
    <link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>afiles/fancybox/jquery.fancybox.css">


    <script src="<?php echo $set['installUrl']; ?>afiles/js/jquery.min.js"></script>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>p/coin-slider/coin-slider.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $set['installUrl']; ?>afiles/fancybox/jquery.fancybox.js">

  
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/validation.min.js"></script>
    <script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/signin.js"></script>

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


.overlayme{position: absolute; top: 24%; left: 0; right:0; max-height:30%; width: 100%;  display: block; z-index: 135; }
    </style>

<script>
$(document).ready(function(){ 
setInterval(function(){ getUsers(); }, 1000);

function getUsers()
{
  $.ajax({
    url: 'myupdate.php',
    type: 'post',
    beforeSend: function(){
					$("#error").fadeOut();
					$(".btn-submit").html('<img src="../img/processing.gif" width="30" /> &nbsp; processing ...');
					},
    success: function(data) {
      $('.htmlelement').html(data);
    }
  });
}
});
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
	  $(".closeit").fadeTo(500, 0).slideUp(500, function(){
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

<script type="text/javascript">
$(document).ready(function(){
    var maxLength = 100;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
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

    
    