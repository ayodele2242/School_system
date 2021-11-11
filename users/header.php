<?php 

include('../includes/employer.php'); 

// Set your cookie before redirecting to the login page
setcookie("redirect","", time()-3600);

$current_page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$expire=time() + (86400 * 30);
setcookie("redirect", $current_page, $expire, "/");

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="School Portal">
	<meta name="author" content="Infonet">
    <link href="../imaging/logo.fw.png" rel="icon" type="image">
    

   <!-- PAGE TITLE -->
  <title><?php echo $_SESSION['email'];  ?></title>
  


    <!-- Bootstrap core CSS -->
    <link href="../file/dist/css/bootstrap.css" rel="stylesheet">
    <link href="../file/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="../files/css/main.css" rel="stylesheet">
	<link href="../files/datatables/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../file/js/jquery.js"></script>
    <script src="../file/js/jquery-1.11.2.min.js"></script>
    <script src="../file/js/jquery-1.11.1.min.js"></script>
    <script src="../files/js/upload.js"></script>
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="../afiles/plugins/tinymce/tinymce.js"></script>
	
    <script type="text/javascript">
   function changeAlias() {
        var title = $.trim($("#page_title").val());
        title = title.replace(/[^a-zA-Z0-9-]+/g, '-');
        $("#page_alias").val(title.toLowerCase());
    }
</script>

<script>
$(document).ready(function(){
setInterval(function(){
    $(".screen").load(location.href + " .screen")
}, 5000);
});
</script>

<script>
$(document).ready(function(){
setInterval(function(){
    $(".auto").load(location.href + " .auto")
}, 1000);
});
</script>

<script>
$(document).ready(function(){
setInterval(function(){
    $(".screen2").load(location.href + " .screen2")
}, 60000);
});
</script>

<script>
   $(document).ready(function(){
    $('#cModal').on('show.bs.modal', function (e) {
        var cid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'page_info.php', //Here you will fetch records 
            data :  'rowid='+ cid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

</script> 

		<script type="text/javascript">
		function showPreview(objFileInput) {
			hideUploadOption();
			if (objFileInput.files[0]) {
				var fileReader = new FileReader();
				fileReader.onload = function (e) {
					$("#targetLayer").html('<img src="'+e.target.result+'" width="500px" height="200px" class="upload-preview" />');
					$("#targetLayer").css('opacity','0.7');
					$(".icon-choose-image").css('opacity','0.5');
				}
				fileReader.readAsDataURL(objFileInput.files[0]);
			}
		}
		function showUploadOption(){
			$("#profile-upload-option").css('display','block');
		}

		function hideUploadOption(){
			$("#profile-upload-option").css('display','none');
		}

		function removeProfilePhoto(){
			hideUploadOption();
			$("#userImage").val('');
			$.ajax({
				url: "remove.php",
				type: "POST",
				data:  new FormData(this),
				beforeSend: function(){$("#body-overlay").show();},
				contentType: false,
				processData:false,
				success: function(data)
				{				
				$("#targetLayer").html('');
				setInterval(function() {$("#body-overlay").hide(); },500);
				},
				error: function() 
				{
				} 	        
			});
		}
		$(document).ready(function (e) {
			$("#uploadForm").on('submit',(function(e) {
				e.preventDefault();
				$.ajax({
					url: "upload.php",
					type: "POST",
					data:  new FormData(this),
					beforeSend: function(){
					$("#error").fadeOut();
					$("#btn-submit").html('<img src="../img/processing.gif" width="30" /> &nbsp; processing ...');
					},
					contentType: false,
					processData:false,
					success: function(data)
					{
						if(data==0){
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Invalid/Empty file uploaded. Please upload a valid file.</div>');
						$("#btn-submit").html('Upload Certificate');
					});
				}else if(data==1){
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; File too large. Compress the file before uploading. File size should not be more than 1mb.</div>');
						$("#btn-submit").html('Upload Certificate');
					});

					} else{		
					$("#targetLayer").css('opacity','1');
					setInterval(function() {$("#body-overlay").hide(); },500);
					setTimeout(' window.location.href = "main"; ',200);
					}
					},
					error: function() 
					{
					} 	        
			   });
			}));
		});
		</script>

<script type="text/javascript">
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');

    }
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
	window.setTimeout(function() {
	  $(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);
	</script>

	<script>
   $(document).ready(function(){
    $('#ceModal').on('show.bs.modal', function (e) {
        var ceid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'event_info.php', //Here you will fetch records 
            data :  'rowid='+ ceid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

</script> 

<!--<script>
$(document).ready(function() {
    var frm = $('#resetform');
    frm.submit(function(e){
        e.preventDefault();

        var formData = frm.serialize();
        formData += '&' + $('#submit_btn').attr('name') + '=' + $('#submit_btn').attr('value');
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: formData,
            success: function(data){
                $('#message').html(data).delay(3000).fadeOut(3000);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#message').html(textStatus).delay(2000).fadeOut(2000);
            }

        });
    });
});
  </script>-->



  </head>

  <body>
  <div class="loader main"></div>    
  <?php include('nav.php'); ?>

  
