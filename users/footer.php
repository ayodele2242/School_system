
<!-- Logout div starts here -->
<div class="modal fade" id="signOut" tabindex="-1" role="dialog" aria-labelledby="signOutLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<p class="lead">Hello <strong><?php echo ucwords($userFullName).' </strong>'. $signOutQuip; ?></p>
			</div>
			<div class="modal-footer">
				<a href="main?action=logout" class="btn btn-danger btn-icon-alt"><?php echo $signOutBtn; ?> <i class="fa fa-sign-out"></i></a>
				<button type="button" class="btn btn-default btn-icon" data-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo $cancelBtn; ?></button>
			</div>
		</div>
	</div>
</div><!-- Logout div ends here -->








<footer class="footer main">
 <div class="container f">
© 2016 - <?php echo date("Y"); ?> <?php echo $set['siteName'];?>. All Rights Reserved.
</div>

 <div class="container f">
 Developed by: <a href="https://www.facebook.com/fagbemi.ayodele1" class="white">Fagbemi Ayodele.</a>
</div>
     
</div>
	<!-- Jquery Core Js -->
	<script src="../afiles/plugins/jquery/jquery.min.js"></script>
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../file/assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="../file/dist/js/bootstrap.min.js"></script>
	<script src="../afiles/plugins/ckeditor/ckeditor.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="../files/datatables/datatables.min.js"></script>
    
	<script src="js/job.js"></script>
	<script src="js/addevent.js"></script>
	<script src="js/updateUser.js"></script>
	<script src="js/addpage.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../file/assets/js/ie10-viewport-bug-workaround.js"></script>

	<!-- file input -->
<script src="../afiles/assets/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>	
	<script src="../afiles/assets/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>	
	<script src="../afiles/assets/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="../afiles/assets/fileinput/js/fileinput.min.js"></script>
<script type="text/javascript">
			var btnCust = '<button type="button" class="btn btn-info btn-sm" title="Add picture tags" ' + 
		    'onclick="alert(\'<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>\')">' +
		    '<i class="glyphicon glyphicon-tag"></i>' +
		    '</button>'; 
		$("#avatar-2").fileinput({
	    overwriteInitial: true,
	    maxFileSize: 30720,
	    showClose: false,
	    showCaption: false,
	    showBrowse: false,
	    browseOnZoneClick: true,
	    removeLabel: '',
	    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
	    removeTitle: 'Cancel or reset changes',
	    elErrorContainer: '#kv-avatar-errors-2',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img src="<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>" alt="Your Avatar" style="width:200px"><h6 class="text-muted">Click image to select</h6>',
	    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif", "avi", "mp3", "mp4", "wav","3gp","AAC","flv"]
		});
</script>
    
   
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>

 <script>
 
 function randomPassword(length) {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    return pass;
}

function generate() {
  formpwd.passwordNew.value = randomPassword(formpwd.length.value);
}
</script>

    
  </body>
</html>
