<!-- Footer -->
<footer class="page-footer font-small  pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

    

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Connect with us</h5>

            <ul class="list-unstyled">
            <li >
            <a href="https://www.facebook.com/<?php echo $set['facebook'];  ?>" class="nav-link waves-effect waves-light" target="_blank">
              <i class="fa fa-facebook"></i> Facebook
            </a>
          </li> 
         
          <li >
            <a href="https://www.twitter.com/<?php echo $set['twitter'];  ?>" class="nav-link waves-effect waves-light" target="_blank">
              <i class="fa fa-twitter"></i> Twitter
            </a>
          </li>
          <li >
            <a href="https://www.instagram.com/<?php echo $set['instagram'];  ?>" class="nav-link waves-effect waves-light" target="_blank">
              <i class="fa fa-instagram"></i> Instagram
            </a>
          </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Contact</h5>

            <ul class="list-unstyled">
            <li>
              <a href="#!"><i class="fa fa-phone"></i> <i style="margin-left:5px; font-weight:bolder;padding:3px; "><?php echo $set['phone']; ?></i></a>
            </li>
            <li>
            <a href="#!"><i class="fa fa-envelope"></i> <i style="margin-left:5px; font-weight:bolder;padding:3px;"><?php echo $set['siteEmail']; ?></i></a>
            </li>
            <li>
            <a href="#!"><i class="fa fa-map-marker"></i> <i style="margin-left:5px; font-weight:bolder; padding:3px; text-align:left;"><?php echo $set['address']; ?></i></a>
            </li>
            <li>
            <a href="#!"><i class="fa fa-location-arrow"></i> <i style="margin-left:5px; font-weight:bolder; padding:3px; text-align:left;"><?php echo $set['location']; ?></i></a>
            </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2010 - <?php echo date("Y");?> Copyright:
      <a href="#"> <?php echo strtoupper($set['school_name']); ?></a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
<!-- Jquery Core Js -->
<script src="<?php echo $set['installUrl']; ?>afiles/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo $set['installUrl']; ?>afiles/md/js/bootstrap.js"></script>
<!--<script src="<?php echo $set['installUrl']; ?>afiles/md/js/mdb.js"></script>-->
<script src="<?php echo $set['installUrl']; ?>afiles/plugins/node-waves/waves.js"></script>
<script type="text/javascript" src="//momentjs.com/downloads/moment-with-locales.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<!--<script src="<?php echo $set['installUrl']; ?>afiles/plugins/jquery-validation/jquery.validate.js"></script>-->

<script type="text/javascript" src="<?php echo $set['installUrl']; ?>afiles/js/bootstrap-material-datetimepicker.js"></script>
<script src="js/student.js"></script>
    <!-- Custom Js -->
    <!--<script src="<?php echo $set['installUrl']; ?>afiles/js/admin.js"></script>
    <script src="<?php echo $set['installUrl']; ?>afiles/js/forgot_pwd.js"></script>
    <script src="<?php //echo $set['installUrl']; ?>afiles/js/pages/examples/sign-in.js"></script>-->
    <!-- Demo Js -->
<!--<script src="<?php echo $set['installUrl']; ?>afiles/js/demo.js"></script>-->


<script>
    (function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
</script>

<!-- file input -->
<script src="<?php echo $set['installUrl']; ?>afiles/assets/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>	
	<script src="<?php echo $set['installUrl']; ?>afiles/assets/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>	
	<script src="<?php echo $set['installUrl']; ?>afiles/assets/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="<?php echo $set['installUrl']; ?>afiles/assets/fileinput/js/fileinput.min.js"></script>

<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script> 
  

<script type="text/javascript">
			var btnCust = '<button type="button" class="btn btn-info btn-sm" title="Add picture tags" ' + 
		    'onclick="alert(\'="<?php echo $set['installUrl']; ?>logo/692386.jpg\')">' +
		    '<i class="fa fa-tag"></i>' +
		    '</button>'; 
		$("#avatar-2").fileinput({
	    overwriteInitial: true,
	    maxFileSize: 30720,
	    showClose: false,
	    showCaption: false,
	    showBrowse: false,
	    browseOnZoneClick: true,
	    removeLabel: '',
	    removeIcon: '<i class="fa fa-trash"></i>',
	    //removeTitle: 'Cancel or reset changes',
	    elErrorContainer: '#kv-avatar-errors-2',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img src="<?php echo $set['installUrl']; ?>img/graduate.png" alt="Your Avatar" style="width:200px"><h6 class="text-muted">Click image to select profile image</h6>',
	    layoutTemplates: {main2: '{preview} '},
	    allowedFileExtensions: ["jpg", "png", "jpeg"]
		});



	</script>
<script>
$('.date').bootstrapMaterialDatePicker({ format : 'YYYY', weekStart : 0, time: false }); 
</script>    

<script>
$('.date2').bootstrapMaterialDatePicker({ weekStart : 0, time: false }); 
$('.date3').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
</script>

</body>

</html>