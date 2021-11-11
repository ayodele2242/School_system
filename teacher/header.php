<?php

include('../includes/teacher.php');  


// Set your cookie before redirecting to the login page
setcookie("redirect","", time()-3600);

$current_page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$expire=time() + (86400 * 30);
setcookie("redirect", $current_page, $expire, "/");

//$_COOKIE['redirect_to'] = $current_page;

//$cookie_name = $current_page;
//$cookie_value = $current_page;
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", "http://localhost:90/totallight/", 0); // 86400 = 1 day
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <meta name="description" content="Automating your school work.">
    <meta name="author" content="<?php echo $set['siteName']; ?>">
    <meta name="keyword" content="content, management, system, schools, school management system, schoool portal, chat, link, linkedln, <?php echo $set['siteName']; ?>">
    <link rel="icon"  href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" type="image" />
    <title><?php echo $fullname;  ?></title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="192x192"href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <meta name="theme-color" content="">

    <!-- Google Fonts -->
    <link href="../afiles/css/font.css" rel="stylesheet" type="text/css">
    <link href="../afiles/css/icon.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../afiles/css/font-awesome.min.css" rel="stylesheet"  type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../afiles/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="../afiles/css/bootstrap-material-datetimepicker.css" />
    <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css' rel='stylesheet' />
    <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.print.css' rel='stylesheet' media='print' />
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet" />
    <link href="../afiles/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
     <link href="../afiles/css/bootstrap-timepicker.min.css" rel="stylesheet" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" rel="stylesheet" />

     <!-- JQuery DataTable Css -->
    <link href="../afiles/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="../afiles/plugins/ckeditor/samples/css/samples.css">-->
	<link rel="stylesheet" href="../afiles/plugins/ckeditor/sample/toolbarconfigurator/lib/codemirror/neo.css">
   
    <!-- file input css -->
    <link rel="stylesheet" type="text/css" href="../afiles/assets/fileinput/css/fileinput.min.css">
    <link href="../afiles/css/autocomplete.css" rel="stylesheet">
    



    <!-- Waves Effect Css -->
    <link href="../afiles/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../afiles/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../afiles/css/style.css" rel="stylesheet" />
    <link href="../afiles/css/printer.css" rel="stylesheet"  />
    <!--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">-->
    

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../afiles/css/themes/all-themes.css" rel="stylesheet" />
    <!--<link rel="stylesheet" type="text/css" href="../afiles/css/tagmanager.min.css">-->
    <link rel="stylesheet" type="text/css" href="../afiles/css/tokenfield-typeahead.css">
    <link rel="stylesheet" type="text/css" href="../afiles/css/bootstrap-tokenfield.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="../afiles/js/jquery.min.js"></script>
	<script src="../afiles/js/jquery-1.11.2.min.js"></script>
    <script src="../afiles/js/jquery.min-11.1.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script src="../afiles/js/jquery-1.9.1.js"></script>
    <script src="../afiles/js/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>	
    <script src="../afiles/swal/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>
   
   <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>-->
<!-- Include Editor style. -->
  <script src="../afiles/plugins/tinymce/tinymce.js"></script>
<!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
<script>
function getSelected() {
    if (window.getSelection) {
        return window.getSelection();
    }
    else if (document.getSelection) {
        return document.getSelection();
    }
    else {
        var selection = document.selection && document.selection.createRange();
        if (selection.text) {
            return selection.text;
        }
        return false;
    }
    return false;
}

$('.content').mouseup(function() {
    var selection = getSelected();

    if (selection) {
        //alert(selection);
        swal.fire({
     text: selection,
     type: "success",
     //showCancelButton: true,
     onfirmButtonClass: "btn-success",
     //confirmButtonText: "Yes, delete it!",
     closeOnConfirm: false
   });
    }
});


</script>



    <script type="text/javascript">
   function changeAlias() {
        var title = $.trim($("#page_title").val());
        title = title.replace(/[^a-zA-Z0-9-]+/g, '-');
        $("#page_alias").val(title.toLowerCase());
    }
</script>

 <script type="text/javascript">
   function changeContent() {
        var cont = $.trim($("#ckeditor").val());
        cont = cont.replace(/[^a-zA-Z0-9-]+/g, '-');
        $("#mycont").val(cont.toLowerCase());
    }
</script>

	<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="Teacher"){
                $(".boxy").not(".Teacher").hide();
                $(".Teacher").show();
            }
            else if($(this).attr("value")=="Driver"){
                $(".boxy").not(".Driver").hide();
                $(".Driver").show();
            }
            else if($(this).attr("value")=="event"){
                $(".boxy").not(".event").hide();
                $(".event").show();
            }

            else{
                $(".boxy").hide();
            }
        });
    }).change();
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
</script>
<script>
var fade_out = function() {
  $(".removeMessages").fadeOut().empty();
}
setTimeout(fade_out, 50000);
</script>
    
		<script type="text/javascript">
		function showPreview(objFileInput) {
			hideUploadOption();
			if (objFileInput.files[0]) {
				var fileReader = new FileReader();
				fileReader.onload = function (e) {
					$("#targetLayer").html('<img src="'+e.target.result+'" width="200px" height="200px" class="upload-preview" />');
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
					$(".btn-submit").html('<img src="../img/processing.gif" width="30" /> &nbsp; processing ...');
					},
					contentType: false,
					processData:false,
					success: function(data)
					{
						if(data==0){
					$(".btn-submit").html('Try again');
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Invalid/Empty file uploaded. Please upload a valid file.</div>');
						
					});
				}else if(data==1){
					$(".btn-submit").html('Try again');
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; File too large. Compress the file before uploading. File size should not be more than 1mb.</div>');
						
					});

					} else{		
					$("#targetLayer").css('opacity','1');
					setInterval(function() {$("#body-overlay").hide(); },500);
					$(".showit").html('<img src="'+e.target.result+'"  class="img" />');
					

					$(".myimg").load(location.href + " .myimg");
					$(".myimg2").load(location.href + " .myimg2");
					$(".btn-submit").html('Updated');
					//setTimeout(' window.location.href = "main"; ',200);
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-check"></span> &nbsp; School Logo Updated Successfully.</div>');
						
					});
					}
					},
					error: function() 
					{
					} 	        
			   });
			}));
		});
		</script>
   

<script type='text/javascript'>
    $(document).ready(function() {
        $('.countit').keyup(function() {
            var len = this.value.length;
            if (len >= 60) {
                this.value = this.value.substring(0, 60);
            }
            $('#charLeft').text(60 - len);
        });
    });
  </script>
    
 
 <script>
   $(document).ready(function(){
    $('#jModal').on('show.bs.modal', function (e) {
        var jid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'jobseeker_info.php', //Here you will fetch records 
            data :  'rowid='+ jid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
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


<script>
//Preview job description
   $(document).ready(function(){
    $('#myModal2').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'preview.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

</script>  

<script>
//Preview job description
   $(document).ready(function(){
    $('#myModal2').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'preview.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

</script>  

<script>
   $(document).ready(function(){
    $('#elModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'links_preview.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
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

 <script type="text/javascript">
	 function getcode1(value,id) {
     var value = $('#code1_'+id).val();

            $.ajax({
                type: "POST",
                url: "update_user_status.php",
                data:'status='+value+'&id='+id,
                success: function(data){
                    $("#empTable").DataTable().ajax.reload(null, false);
              }
            });
     return true;
     };
    </script>
	
	<script type="text/javascript">
	 function getalumni(value,user_id) {
     var value = $('#alumni_'+user_id).val();

            $.ajax({
                type: "POST",
                url: "update_alumniuser_status",
                data:'status='+value+'&user_id='+user_id,
                success: function(data){
                    $("#alumni_users_invite").DataTable().ajax.reload(null, false);

					$(".stas").load(location.href + " .stas");

              }
            });
     return true;
     };
    </script>
    
   <script>
   function getcodes1(value,page_id) {
     var value = $('#codes1_'+page_id).val();

            $.ajax({
                type: "POST",
                url: "update_page_status.php",
                data:'status='+value+'&page_id='+page_id,
                success: function(data){
                   // $("#empTable").DataTable().ajax.reload(null, false);
                   $(".stas").load(location.href + " .stas");
              }
            });
     return true;
     };
   </script>

   <script>
   function eventcodes1(value,id) {
     var value = $('#event1_'+id).val();

            $.ajax({
                type: "POST",
                url: "update_event_status.php",
                data:'status='+value+'&id='+id,
                success: function(data){
                   // $("#empTable").DataTable().ajax.reload(null, false);
                   $(".stas").load(location.href + " .stas");
              }
            });
     return true;
     };
   </script>

<script>
function myFunction() {
    window.print();
}

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
    $(".input-data").on("change", function(){
            var id = $(".input-data").val();
            var data = 'one=' + id;
            $.ajax({
                type: "POST",
                url: "process.php",
                data: data,
                dataType: 'json',
                success: function (data) {
                    if (data) {
                        for (var i = 0; i < data.length; i++) { //for each user in the json response
                            $(".output-id").val(data[i].id);
                            //$(".feename").val(data[i].fee_name);
                            $(".amount").val(data[i].amount);
                        } // for

                    } // if
                } // success
            }); // ajax
    });
});


</script>

<script>
$(document).ready(function(){

$(".Student_reg_code").blur(function () {
        var id = $(".Student_reg_code").val();
        var data = 'name=' + id;
        $.ajax({
            type: "POST",
            url: "process.php",
            data: data,
            dataType: 'json',
            success: function (data) {
                if (Array.isArray(data) && data.length) {
                    for (var i = 0; i < data.length; i++) { //for each value in the json response
                        $(".Student_reg_code").val(data[i].id);
                        $(".regno").val(data[i].rno);
                        $(".lname").val(data[i].lname);
                        $(".mname").val(data[i].mname);
                        $(".fname").val(data[i].fname);
                    } // for

                } // if
                else {
                    $(".regno").val(id +' does not exist in the database. Enter correct student ID');
                    $(".lname").val('No value returned');
                    $(".mname").val('No value returned');
                    $(".fname").val('No value returned');
                  //alert('Empty value return for '+ id);
                }
                
            } // success
        }); // ajax
});

});

</script>

<script>

$.event.special.inputchange = {
    setup: function() {
        var self = this, val;
        $.data(this, 'timer', window.setInterval(function() {
            val = self.value;
            if ( $.data( self, 'cache') != val ) {
                $.data( self, 'cache', val );
                $( self ).trigger( 'inputchange' );
            }
        }, 20));
    },
    teardown: function() {
        window.clearInterval( $.data(this, 'timer') );
    },
    add: function() {
        $.data(this, 'cache', this.value);
    }
};

$('input.myamt').on('inputchange', function() {
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


/*$(document).ready(function(){
$(".myamt").on("input change paste keyup", function() {
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
});*/

function RemoveRougeChar(convertString){
    
    
    if(convertString.substring(0,1) == ","){
        
        return convertString.substring(1, convertString.length)            
        
    }
    return convertString;
    
}

/*$(document).ready(function(){
$(".myamt").on("change paste keyup", function() {
   alert($(this).val()); 
});
});*/
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#class').on('change',function(){
        var classID = $(this).val();
        if(classID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'class='+classID,
                success:function(html){
                    $('#student').html(html);
                    
                }
            }); 
        }else{
            $('#student').html('<option value="">Select class first</option>');
            
        }
    });
    
    /*$('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });*/
});
</script>

 <script type="text/javascript">
        function getCalendar(target_div,year,month){
            $.ajax({
                type:'POST',
                url:'function.php',
                data:'func=getCalender&year='+year+'&month='+month,
                success:function(html){
                    $('#'+target_div).html(html);
                }
            });
        }
        
        function getEvents(date){
            $.ajax({
                type:'POST',
                url:'../includes/functions.php',
                data:'func=getEvents&date='+date,
                success:function(html){
                    $('#event_list').html(html);
                    $('#event_list').slideDown('slow');
                }
            });
        }
        
        function addEvent(date){
            $.ajax({
                type:'POST',
                url:'../includes/functions.php',
                data:'func=addEvent&date='+date,
                success:function(html){
                    $('#event_list').html(html);
                    $('#event_list').slideDown('slow');
                }
            });
        }
        
        $(document).ready(function(){
            $('.date_cell').mouseenter(function(){
                date = $(this).attr('date');
                $(".date_popup_wrap").fadeOut();
                $("#date_popup_"+date).fadeIn();    
            });
            $('.date_cell').mouseleave(function(){
                $(".date_popup_wrap").fadeOut();        
            });
            $('.month_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $('.year_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $(document).click(function(){
                $('#event_list').slideUp('slow');
            });
        });
    </script>

<script>
/*$(document).ready(function(){            
$('#smode').on('change',function(){
        var confirm_no = $(this).val();
        if(confirm_no){
            $.ajax({
                type:'POST',
                url:'get_email.php',
                data:"confirm_no="+confirm_no,
                success:function(data){
                   $('#emaillist').val(data);
               } 
            }); 
        }
    });
})*/	


$(document).ready(function(){ 
    
$('#smode').change(function(){
var confirm_no = $(this).val();
$.ajax({
   type:'POST',
  data:"confirm_no="+confirm_no,
   url:'get_email.php',
   success:function(data){
       $('#emaillist').val(data);
   } 

});
});
});
</script>
<script>
$(document).ready(function(){  
    $('#sms').change(function(){
    var sms = $(this).val();
    $.ajax({
       type:'POST',
      data:"sms="+sms,
       url:'get_email.php',
       success:function(data){
           $('#phonelist').val(data);
       } 
    
    });
    });
    });
</script>

<script>
function myFunction() {
    window.print();
}

function printDiv(printableArea) {
     var printContents = document.getElementById(my div).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
    <style>
.error {
                color: #ac2925;
                margin-bottom: 15px;
            }
            .event-tooltip {
                width:150px;
                background: rgba(0, 0, 0, 0.85);
                color:#FFF;
                padding:10px;
                position:absolute;
                z-index:10001;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 11px;
            }
            .none{ display:none;}
            .dropdown{color: #444444;font-size:17px;}
            #calender_section{ width:700px; margin:30px auto 0;}
            #calender_section h2{ background-color:#fff; color:#444444; font-size:17px; text-align:center; line-height:40px;}
            #calender_section h2 a{ background: #f2f2f2 none repeat scroll 0 0;
                border: 1px solid #ccc;
                border-radius: 6px;
                color: #000;
                float: none;
                font-weight: 100;
                height: 20px;
                padding: 5px;
                text-align: center;
                text-decoration: none;
                width: 20px;}
            #calender_section_top{     background: cyan none repeat scroll 0 0;
                float: left;
                margin-top: 20px;
                padding-top: 15px;
                font-weight:bolder;
                padding-bottom: 15px;
                width: 100%;}
            #calender_section_top ul{padding:0; list-style-type:none;}
            #calender_section_top ul li{ background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border-right: 1px solid rgba(0, 0, 0, 0.2);
                box-shadow: none;
                display: block;
                float: left;
                font-size: 14px;
                margin: 0;
                min-height: 0;
                padding: 0;
                text-align: center;
                width: 99px;}
            #calender_section_top ul li:last-child { border:0px;}
            #calender_section_bot{ width:100%; margin-top:20px; float:left; border-left:1px solid #ccc; border-bottom:1px solid #ccc;}
            #calender_section_bot ul{ margin:0; padding:0; list-style-type:none;}
            #calender_section_bot ul li{ float:left; width:99px; height:80px; text-align:center; border-top:1px solid #ccc; border-right:1px solid #ccc; min-height:0; background:none; box-shadow:none; margin:0; padding:0; position:relative;}
            #calender_section_bot ul li span{ margin-top:7px; float:left; margin-left:7px; text-align:center;}
            
            .grey{ background-color:#D8F781 !important;}
            .light_sky{ background-color:#CED8F6 !important;}
            
            /*========== Hover Popup ===============*/
            .date_cell { cursor: pointer; cursor: hand; }
            .date_cell:hover { background: #d8c5d7 !important; }
            .date_popup_wrap {
              position: absolute;
              width: 143px;
              height: 115px;
              z-index: 9999;
              top: -115px;
              left:-55px;
              background: transparent url(../img/add-new-event.png) no-repeat top left;
              color: #666 !important;
            }
            .events_window {
              overflow: hidden;
              overflow-y: auto;
              width: 133px;
              height: 115px;
              margin-top: 28px;
              margin-left: 25px;
            }
            .event_wrap {
              margin-bottom: 10px; padding-bottom: 10px;
              border-bottom: solid 1px #E4E4E7;
              font-size: 12px;
              padding: 3px;
            }
            .date_window {
              margin-top:20px;
              margin-bottom: 2px;
              padding: 5px;
              font-size: 16px;
              margin-left:9px;
              margin-right:14px
            }
            .popup_event {
              margin-bottom: 2px;
              padding: 2px;
              font-size: 16px;
              width:100%;
            }
            .popup_event a {color: #d8c5d7 !important;}
            .packeg_box a {color: #a098a0;float: right;}
            a:hover {color: #f442e8;text-decoration: underline;}
            
            @media only screen and (min-width:480px) and (max-width:767px) {
            #calender_section{ width:336px;}
            #calender_section_top ul li{ width:47px;}
            #calender_section_bot ul li{ width:47px;}
            }
            @media only screen and (min-width: 320px) and (max-width: 479px) {
            #calender_section{ width:219px;}
            #calender_section_top ul li{ width:30px; font-size:11px;}
            #calender_section_bot ul li{ width:30px;}
            #calender_section_bot{ width:217px;}
            #calender_section_bot ul li{ height:50px;}
            }
            
            @media only screen and (min-width: 768px) and (max-width: 1023px) {
            #calender_section{ width:530px;}
            #calender_section_top ul li{ width:74px;}
            #calender_section_bot ul li{ width:74px;}
            #calender_section_bot{ width:525px;}
            #calender_section_bot ul li{ height:50px;}
            }
            
            
           
            
            /* The Close Button */
            .close {
                color: #f0a;
                float: right;
                font-size: 28px;
                font-weight: bolder;
            }
            .remove{
                color: #f0a;
                font-size: 18px;
                font-weight: bolder;
            }
            .remove:hover,
            .remove:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }    
            
            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }    

            .space{
                width: auto;
            }  
            .mystu{    
            float: right;
            width: 150px;
            }

            div.wrapper {
  position: relative;
  border: 2px solid cornflowerblue;
  margin-top: 20px;
  padding: 20px 10px 10px;
}
div.wrapper label {
  color: white;
  line-height: 20px;
  padding: 0px 5px;
  position: absolute;
  background-color: cornflowerblue;
  /* Adjust these values to posiytion the title or label */
  top: -10px;
  left: 10px;
}

div.loaders {
  position: relative;
  margin-top: 20px;
  padding: 20px 10px 10px;
}

div.loaders p img { 
    display: block; 
    width: 100%;
    heigth: 20px;
}
.loader{
    margin:0 auto;
    background:#0099CC;
    width:20%;
    color:#fff;
   
}
    </style>

    
</head>

<body class="theme-blue selectme">
    <!-- Page Loader -->
    <div class="page-loader-wrapper anim" style="background:none;">
        <div class="loader">
            <p>Be patient<img src="../img/processing.gif" alt="Be patient..." height="50"/></p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->