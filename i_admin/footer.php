 <!-- Logout div starts here -->
<div class="modal fade" id="signOut" tabindex="-1" role="dialog" aria-labelledby="signOutLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<p class="lead">Hello <strong><?php echo ucwords($fullname).' </strong>'. $signOutQuip; ?></p>
			</div>
			<div class="modal-footer">
				<a href="logout?action=logout" class="btn btn-danger btn-icon-alt"><?php echo $signOutBtn; ?> <i class="fa fa-sign-out"></i></a>
				<button type="button" class="btn btn-default btn-icon" data-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo $cancelBtn; ?></button>
			</div>
		</div>
	</div>
</div><!-- Logout div ends here -->
 


 
 



 <!-- Jquery Core Js -->
 <script src="../afiles/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="../afiles/plugins/bootstrap/js/bootstrap.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.min.js'></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script>
<script src='../afiles/js/bootstrap-colorpicker.min.js'></script>
<script src='../afiles/js/bootstrap-timepicker.min.js'></script>
<!--<script type="text/javascript" src="../afiles/js/tagmanager.min.js"></script>
<script src="../afiles/js/bootstrap3-typeahead.min.js"></script> --> 


 <script type="text/javascript" src="../afiles/js/bootstrap-tokenfield.js" charset="UTF-8"></script>
  <script type="text/javascript" src="../afiles/js/typeahead.bundle.min.js" charset="UTF-8"></script>
  <script src="../afiles/js/readmore.js"></script>
 

<!-- Slimscroll Plugin Js -->
<script src="../afiles/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- Ckeditor -->
<script src="../afiles/plugins/ckeditor/ckeditor.js"></script>
<script src="js/expandcollapse.js"></script>
<!--<script type="text/javascript" src="../afiles/ckeditor/ckeditor.js"></script>-->
<script src="js/sitesetting.js"></script>
<script src="js/activities_logs.js"></script>
<script src="js/news.js"></script>
<script src="js/send_mail.js"></script>
<script src="js/send_sms.js"></script>
<script src="student/student.js"></script>
<script src="js/account.js"></script>
<script src="results/results.js"></script>
<script src="js/addpage.js"></script>
<script src="js/addevent.js"></script>
<script src="js/links.js"></script>
<script src="js/homeMessage.js"></script>
<script src="js/announcement.js"></script>
<script src='js/calendar.js'></script>
<script src='js/cards.js'></script>
<script src="js/messenger.js"></script>
<script src="js/mid_term_secondary.js"></script>
<script src='js/student_activities.js'></script>


<script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "page/insert.php",
   data: info,
   success: function(){
 }
});
  $(this).parents(".show").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>
<!--
<script src="js/artisan_report.js"></script>
<script src="js/graduate_report.js"></script>
<script src="js/approved_graduate_training_report.js"></script>
<script src="js/approved_artisan_training_report.js"></script>
<script src="js/trainee-grade.js"></script>
<script src="js/invited_interview.js"></script>*/-->

<script src="../afiles/js/admin.js"></script>

<script>
$(document).ready (function(){
	$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});

});
</script>	
<script>
$(document).ready (function(){
	$("#message").fadeTo(2000, 500).slideUp(500, function(){
    $("#message").slideUp(500);
});
});
</script>	
<script>
	window.setTimeout(function() {
	  $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
		$(this).remove(); 
	  });
	});
    </script>

 

<script>
var engine = new Bloodhound({

  datumTokenizer: function(d) {
    return Bloodhound.tokenizers.whitespace(d.value);
  },
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
        'cache': false,
        url: 'classes/getClass.php?q=%QUERY',
        wildcard: '%QUERY',
        filter: function (data) {
            return data;
        }
  }
});
engine.initialize();
$('.tokenfield-typeahead').tokenfield({
  typeahead: [null, { source: engine.ttAdapter() }]
});
</script>

<script>
var engine = new Bloodhound({

  datumTokenizer: function(d) {
    return Bloodhound.tokenizers.whitespace(d.value);
  },
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
        'cache': false,
        url: 'classes/getSubject.php?q=%QUERY',
        wildcard: '%QUERY',
        filter: function (data) {
            return data;
        }
  }
});
engine.initialize();
$('.subject').tokenfield({
  typeahead: [null, { source: engine.ttAdapter() }]
});

</script>

<script>
var engine = new Bloodhound({

  datumTokenizer: function(d) {
    return Bloodhound.tokenizers.whitespace(d.value);
  },
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
        'cache': false,
        url: 'classes/getStudent.php?q=%QUERY',
        wildcard: '%QUERY',
        filter: function (data) {
            return data;
        }
  }
});
engine.initialize();
$('.student').tokenfield({
  typeahead: [null, { source: engine.ttAdapter() }]
});

</script>


<!-- Waves Effect Plugin Js -->
<script src="../afiles/plugins/node-waves/waves.js"></script>
<!-- Jquery DataTable Plugin Js -->
    <script src="../afiles/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../afiles/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../afiles/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../afiles/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../afiles/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../afiles/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../afiles/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../afiles/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../afiles/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Custom Js -->


 <script src="../afiles/js/pages/tables/jquery-datatable.js"></script>
 


<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script type="text/javascript" src="../afiles/js/bootstrap-material-datetimepicker.js"></script>

<!-- file input -->
<script src="../afiles/assets/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>	
	<script src="../afiles/assets/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>	
	<script src="../afiles/assets/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="../afiles/assets/fileinput/js/fileinput.min.js"></script>
<!-- Demo Js -->
<!--<script src="../afiles/js/demo.js"></script>-->

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script> 
  
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

$('document').ready(function() {
    /* validation */
    $("#uploadImageForm").validate({
        rules:
        {
          
         name:{
           required: true
         },
         
         dept:{
           required: true
         },

         
        description:{
          required: true
        },
        
        date:{
          required: true
        },

        },
        messages:
        {
          name: "Worker name required",
          dept: "Worker department name required",
          description: "Enter description for this honour.",
          date: "Please select date",
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
		//var data = $("#uploadImageForm").serialize();
		
		//var form = $(this);
		//var formData = new FormData($(this)[0]);

		var form = $('#uploadImageForm')[0];    
    var data = new FormData(form);

        $.ajax({

			type : 'POST',
      url  : 'php_action/uploadImage.php',
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			//async: false,
            success :  function(data)
            {

			if(data==1){

			$("#messages").fadeIn(1000, function(){
				$("#messages").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Unknown error occured !</div>');
				$("#btn-submit").html('<span class="fa fa-exclamation-triangle"></span> &nbsp; Failed');

			});

			}

               else if(data == "saved")
                {
                   	$("#messages").html('<div class="alert alert-success alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Saved Successfully.</div>');
					   $('input[type="text"]').val('');
					   $('textarea').val('');
            $(".fileinput-remove-button").click();
            $("#btn-submit").html('<span class="fa fa-check"></span> &nbsp; Save');
                }
                else{

			$("#messages").fadeIn(1000, function(){

				$("#messages").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

				$("#btn-submit").html('<span class="fa fa-exclamation-triangle"></span> &nbsp; Error!!');

			});

			}

            }
        });
        return false;
    }
    /* form submit */

});
	</script>
<script>
$('.date').bootstrapMaterialDatePicker({ format : 'YYYY', weekStart : 0, time: false }); 
</script>    

<script>
$('.date2').bootstrapMaterialDatePicker({ weekStart : 0, time: false }); 
$('.date3').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
</script>

<script type="text/javascript">
$('.textbox').focus(function()
{
    /*to make this flexible, I'm storing the current width in an attribute*/
    $(this).attr('data-default', $(this).height());
    $(this).animate({ height: 250 }, 'slow');
}).blur(function()
{
    /* lookup the original width */
    var h = $(this).attr('data-default');
    $(this).animate({ height: h }, 'slow');
});
</script>

<script>

$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr class="tr">';
  html += '<td><a href="#" class="text-danger remove"><span class="fa fa-close"></span></a><input type="text" name="stuid[]" class="form-control stuid mystu" /></td>';
  html += '<td><select name="sub_id[]" class="form-control sub_id subject_code"><option value="">Select Subject</option><?php echo getSubjects(); ?></select></td>';
   html += '<td><input type="text" name="mid_term[]" class="form-control mid_term" /></td>';
  html += '<td><input type="text" name="count_assessment[]" class="form-control count_assessment" /></td>';
  html += '<td><input type="text" name="scored[]" class="form-control scored" /></td>';
  html += '<td><input type="text" name="total_score[]" class="form-control total_score" /></td>';
  html += '<td><input type="text" name="sub_highest[]" class="form-control sub_highest" /></td>';
  html += '<td><input type="text" name="sub_lowest[]" class="form-control sub_lowest" /></td>';
  html += '<td><input type="text" name="first_term[]" class="form-control first_term" /></td>';
  html += '<td><input type="text" name="second_term[]" class="form-control second_term" /></td>';
  html += '<td><input type="text" name="third_term[]" class="form-control third_term" /></td>';
  html += '<td><input type="text" name="avg_score[]" class="form-control avg_score" /></td>';
  html += '<td><select name="term[]" class="form-control term"><option value="">Exam Term</option><option value="First">First Term</option><option value="Second">Second Term</option></select></td>';
  html += '<td><select name="class_name[]" class="form-control class_name"><option value="">Select Class</option><?php echo getClass(); ?></select></td>';
  
  html += '<td><input type="number" min="2000" max="2099" step="1" value="<?php echo date("Y"); ?>" name="year[]" class="form-control input_yr date" /></td>';

  html += '</tr>';
  $('#item_table').append(html);
 });

 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.stuid').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p class='text-danger'>Enter Student Identity Number </p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.sub_id').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p class='text-danger'>Select Subject Code </p>";
    return false;
   }
   count = count + 1;
  });
  
     $('.scored').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Enter Exam Score </p>";
      return false;
     }
     count = count + 1;
    });

    $('.internaltype').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Enter Exam Term </p>";
      return false;
     }
     count = count + 1;
    });

    $('.class_name').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Select Student Class </p>";
      return false;
     }
     count = count + 1;
    });

    $('.term').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Select Exam Term </p>";
      return false;
     }
     count = count + 1;
    });

    

  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"results/insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      //$('#item_table').find("tr:gt(0)").remove();
      $('.sform')[0].reset();
      swal.fire(
{
  title: "Success",
  text: 'Details successfully Saved',
  type: "success",
  //showCancelButton: true,
  onfirmButtonClass: "btn-success",
  //confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
}
);
     //$('#error').html('<div class="alert alert-success">Details Saved</div>');
     }else{
        $('<audio id="chatAudio"><source src="../afiles/audio/error.mp3" type="audio/mpeg"><source src="../afiles/audio/error.wav" type="audio/wav"></audio>').appendTo('body');
 $('#chatAudio')[0].play();
 swal.fire(
{
  title: "Error Occured",
  html: '<div class="text-danger">'+data+'</div>',
  type: "warning",
  //showCancelButton: true,
  onfirmButtonClass: "btn-danger",
  //confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
}
);

      //$('#error').html('<div class="alert alert-info">'+data+'</div>');
     }
    }
   });
  }
  else
  {
   //$('#error').html('<div class="alert alert-danger">'+error+'</div>');
   $('<audio id="chatAudio"><source src="../afiles/audio/error.mp3" type="audio/mpeg"><source src="../afiles/audio/error.wav" type="audio/wav"></audio>').appendTo('body');
 $('#chatAudio')[0].play();
   swal.fire(
{
  title: "<i class='text-danger'>Error Occured</i>",
  html: error,
  type: "warning",
  //showCancelButton: true,
  confirmButtonClass: "btn-danger",
  //confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
}
);
  }
 });
 
});





$(document).ready(function(){
 
    $(document).on('click', '.add_mid', function(){
     var html = '';
     html += '<tr class="tr">';
     html += '<td><a href="#" class="text-danger remove"><span class="fa fa-close"></span></a><input type="text" name="stuid[]" class="form-control stuid mystu" /></td>';
     html += '<td><select name="sub_id[]" class="form-control sub_id subject_code"><option value="">Select Subject</option><?php echo getSubjects(); ?></select></td>';
     
     html += '<td><input type="text" name="fsummary[]" class="form-control fsummary" /></td>';
     html += '<td><input type="text" name="ssummary[]" class="form-control ssummary" /></td>';
     html += '<td><input type="text" name="term[]" class="form-control term" /></td>';
     html += '<td><input type="text" name="sterm[]" class="form-control sterm" /></td>';
     html += '<td><input type="text" name="sub_highest[]" class="form-control sub_highest" /></td>';
     html += '<td><input type="text" name="sub_lowest[]" class="form-control sub_lowest" /></td>';
     html += '<td><select name="class_name[]" class="form-control class_name"><option value="">Select Class</option><?php echo getClass(); ?></select></td>';
     
     html += '<td><input type="number" min="2000" max="2099" step="1" value="<?php echo date("Y"); ?>" name="year[]" class="form-control input_yr date" /></td>';
   
     html += '</tr>';
     $('#item_table').append(html);
    });
   
    
    $(document).on('click', '.remove', function(){
     $(this).closest('tr').remove();
    });
    
    $('#mid_form').on('submit', function(event){
     event.preventDefault();
     var error = '';
     $('.stuid').each(function(){
      var count = 1;
      if($(this).val() == '')
      {
       error += "<p class='text-danger'>Enter Student Identity Number </p>";
       return false;
      }
      count = count + 1;
     });
     
     $('.sub_id').each(function(){
      var count = 1;
      if($(this).val() == '')
      {
       error += "<p class='text-danger'>Select Subject Code </p>";
       return false;
      }
      count = count + 1;
     });
     
        $('.fsummary').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
         error += "<p class='text-danger'>Enter First Summary Score </p>";
         return false;
        }
        count = count + 1;
       });
   
       $('.ssummary').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
         error += "<p class='text-danger'>Enter Second Summary Score </p>";
         return false;
        }
        count = count + 1;
       });
   
       $('.class_name').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
         error += "<p class='text-danger'>Select Student Class </p>";
         return false;
        }
        count = count + 1;
       });
   
       $('.term').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
         error += "<p class='text-danger'>Select Exam Term </p>";
         return false;
        }
        count = count + 1;
       });
   
       
   
     var form_data = $(this).serialize();
     if(error == '')
     {
      $.ajax({
       url:"results/insert_mid_secondary.php",
       method:"POST",
       data:form_data,
       success:function(data)
       {
        if(data == 'ok')
        {

         //$('#item_table').find("tr:gt(0)").remove();
         $('.sform')[0].reset();
         swal.fire(
   {
     text: 'Details successfully Saved',
     type: "success",
     //showCancelButton: true,
     onfirmButtonClass: "btn-success",
     //confirmButtonText: "Yes, delete it!",
     closeOnConfirm: false
   }
   
   );
        //$('#error').html('<div class="alert alert-success">Details Saved</div>');
        }else{
           $('<audio id="chatAudio"><source src="../afiles/audio/error.mp3" type="audio/mpeg"><source src="../afiles/audio/error.wav" type="audio/wav"></audio>').appendTo('body');
    $('#chatAudio')[0].play();
    swal.fire(
   {
     title: "Error Occured",
     html: '<div class="text-danger">'+data+'</div>',
     type: "warning",
     //showCancelButton: true,
     onfirmButtonClass: "btn-danger",
     //confirmButtonText: "Yes, delete it!",
     closeOnConfirm: false
   }
   );
   
         //$('#error').html('<div class="alert alert-info">'+data+'</div>');
        }
       }
      });
     }
     else
     {
      //$('#error').html('<div class="alert alert-danger">'+error+'</div>');
      $('<audio id="chatAudio"><source src="../afiles/audio/error.mp3" type="audio/mpeg"><source src="../afiles/audio/error.wav" type="audio/wav"></audio>').appendTo('body');
    $('#chatAudio')[0].play();
      swal.fire(
   {
     title: "<i class='text-danger'>Error Occured</i>",
     html: error,
     type: "warning",
     //showCancelButton: true,
     confirmButtonClass: "btn-danger",
     //confirmButtonText: "Yes, delete it!",
     closeOnConfirm: false
   }
   );
     }
    });
    
   });
   




$(document).ready(function(){
 
 $(document).on('click', '.add_nur', function(){
  var html = '';
  html += '<tr class="tr">';
  html += '<td><a href="#" class="text-danger remove"><span class="fa fa-close"></span></a><input type="text" name="stuid[]" class="form-control stuid mystu" /></td>';
  html += '<td><select name="sub_id[]" class="form-control sub_id subject_code"><option value="">Select Subject</option><?php echo getSubjects(); ?></select></td>';
  
  html += '<td><input type="text" name="fsummary[]" class="form-control fsummary" /></td>';
  html += '<td><input type="text" name="ssummary[]" class="form-control ssummary" /></td>';
  html += '<td><input type="text" name="term[]" class="form-control term" /></td>';
  html += '<td><input type="text" name="sterm[]" class="form-control sterm" /></td>';
  html += '<td><input type="text" name="sub_pos[]" class="form-control sub_pos" /></td>';
  html += '<td><select name="class_name[]" class="form-control class_name"><option value="">Select Class</option><?php echo getClass(); ?></select></td>';
  
  html += '<td><input type="number" min="2000" max="2099" step="1" value="<?php echo date("Y"); ?>" name="year[]" class="form-control input_yr date" /></td>';

  html += '</tr>';
  $('#item_table').append(html);
 });

 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#nursery_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.stuid').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p class='text-danger'>Enter Student Identity Number </p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.sub_id').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p class='text-danger'>Select Subject Code </p>";
    return false;
   }
   count = count + 1;
  });
  
     $('.fsummary').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Enter First Summary Score </p>";
      return false;
     }
     count = count + 1;
    });

    $('.ssummary').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Enter Second Summary Score </p>";
      return false;
     }
     count = count + 1;
    });

    $('.class_name').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Select Student Class </p>";
      return false;
     }
     count = count + 1;
    });

    $('.term').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p class='text-danger'>Select Exam Term </p>";
      return false;
     }
     count = count + 1;
    });

    

  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"results/nursery.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {

      //$('#item_table').find("tr:gt(0)").remove();
      $('.sform')[0].reset();
      swal.fire(
{
  text: 'Details successfully Saved',
  type: "success",
  //showCancelButton: true,
  onfirmButtonClass: "btn-success",
  //confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
}

);
     //$('#error').html('<div class="alert alert-success">Details Saved</div>');
     }else{
        $('<audio id="chatAudio"><source src="../afiles/audio/error.mp3" type="audio/mpeg"><source src="../afiles/audio/error.wav" type="audio/wav"></audio>').appendTo('body');
 $('#chatAudio')[0].play();
 swal.fire(
{
  title: "Error Occured",
  html: '<div class="text-danger">'+data+'</div>',
  type: "warning",
  //showCancelButton: true,
  onfirmButtonClass: "btn-danger",
  //confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
}
);

      //$('#error').html('<div class="alert alert-info">'+data+'</div>');
     }
    }
   });
  }
  else
  {
   //$('#error').html('<div class="alert alert-danger">'+error+'</div>');
   $('<audio id="chatAudio"><source src="../afiles/audio/error.mp3" type="audio/mpeg"><source src="../afiles/audio/error.wav" type="audio/wav"></audio>').appendTo('body');
 $('#chatAudio')[0].play();
   swal.fire(
{
  title: "<i class='text-danger'>Error Occured</i>",
  html: error,
  type: "warning",
  //showCancelButton: true,
  confirmButtonClass: "btn-danger",
  //confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
}
);
  }
 });
 
});


</script>


<script> 
    $(function() {
        $( "#tag" ).autocomplete({
        source: 'tags/autocomplete.php'
        });
    });
        
    var id = 0;
    $("#addTag").click(function(){
        if($("#tag").val() ) {
            
                id++;
            var li = document.createElement("li");
                li.className = "tag";
                li.setAttribute("id", id);
            
            var i = document.createElement("INPUT"); 
                i.setAttribute("name","multiTag[]");
                i.setAttribute("type","hidden");
                i.setAttribute("id", id);
            
            var tag = document.getElementById('tag').value;
             
            li.innerHTML = " " + tag + '  <button class=\"deleteTag btn-danger btn btn-sm\" id=\"'+id+'\">X</button>' 
            i.setAttribute("value", tag);    
            
            $("#tagList").append(li)
            $("#tagList").append(i)
            $('#tag').val('');  
        }});
  
    $("#tagList").on('click', 'button.deleteTag', function() {
    
        var idDiv = this.id;
        $("#"+idDiv).remove()
        $(":input[id='"+idDiv+"']").remove();

    });

    $("#tagList").on('click', 'button.deleteTagExsit', function() {
    
        var del_id = this.id;
        var toDel = del_id.replace('id_', '');
        $("#id_"+toDel).remove();
        $.ajax({
            type:'POST',
            url:'tags/delete_tag.php',
            data:'tags/delete_id='+toDel
        });
    
    });
    </script>

<script type="text/javascript">
			//<![CDATA[

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'ckeditor',
                {
                    filebrowserBrowseUrl :'<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserImageBrowseUrl : '<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserFlashBrowseUrl :'<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/connectors/php/connector.php',
					filebrowserUploadUrl  :'<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/connectors/php/upload.php?Type=File',
					filebrowserImageUploadUrl : '<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
					filebrowserFlashUploadUrl : '<?php echo $set['installUrl']; ?>afiles/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
                });
                


			//]]>
			</script>

</body>
</html>