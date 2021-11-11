//Employer Login details
$('document').ready(function()
{ 
 /* validation */
 $("#pinForm").validate({
	rules:
	{
		  pin: {
		  required: true
		  },
		 
	 },
	 messages:
	 {
		  pin:{
			required: "Scratch card pin is required"
			}
	 },
	 submitHandler: loginForm	
	 });  
	 /* validation */
	 
	 /* login submit */
	 function loginForm()
	 {		
		  var data = $("#pinForm").serialize();
			  
		  $.ajax({
			  
		  type : 'POST',
		  url  : 'php/pin_checker.php',
		  data : data,
		  beforeSend: function()
		  {	
			  $(".err_info").fadeOut();
			  $("#err").html('<img src="../img/processing.gif" width="30" /> &nbsp; Please wait...');
		  },
		  success :  function(response)
			 {			
				if(response=="used"){
					$(".err_info").fadeIn(1000, function(){						
						//$(".err_info").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; This card as already been used to register.</div>');
													$("#err").html('<span class="glyphicon glyphicon-info-sign"></span> &nbsp; This card as already been used to register.');
					});
				}	
				else if(response=="not available"){
					$(".err_info").fadeIn(1000, function(){						
						//$(".err_info").html('<div class="alert alert-danger"> </div>');
							$("#err").html('<span class="glyphicon glyphicon-info-sign"></span> &nbsp; The pin you entered is not valid. Please enter a valid pin or call the school administrator.');
					});
				}			
				else  if(response=="yes"){
								  
					  $("#geterror").html('<div class="text-success"> <img src="../img/processing.gif" width="30" /> &nbsp;&nbsp; Please wait while we direct you to registration page.</div>');
					  setTimeout(' window.location.href = "registration"; ',4000);
				  }
				 
				
				  else{								  
					  $(".err_info").fadeIn(1500, function(){						
			  $("#err").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
										 
								  });
				  }
			}
		  });
			  return false;
      }
    });
	






//Employer Login details
$('document').ready(function()
{ 
 /* validation */
 $("#students-form").validate({
	rules:
	{
		class: {
		  required: true
		  },
		 
	 },
	 messages:
	 {
		class:{
			required: "Class applying to is required"
			}
	 },
	 submitHandler: studentForm	
	 });  
	 /* validation */
	 
	 /* login submit */
	 function studentForm()
	 {		
		  //var data = $("#students-form").serialize();
		  var data = new FormData($("#students-form")[0]);
		  $.ajax({
			  
		  type : 'POST',
		  url  : 'php/student.php',
		  data : data,
		  beforeSend: function()
		  {	
			  $(".err_info").fadeOut();
			  $("#err").html('<img src="../img/processing.gif" width="30" /> &nbsp; Please wait...');
		},
		processData: false,
		contentType: false,
		  success :  function(response)
			 {		
				if(response=="saved")
				{
					$("#err_info").fadeIn(1000, function(){
						$("#err").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Added to database! </div>');
							  
			   
						   });
						   $(".fileinput-remove-button").click();
						   $('input[type="text"]').val('');
						   $('input[type="number"]').val('');
						   $('input[type="email"]').val('');
						   $('input[type="password"]').val('');
						   $('input[type="file"]').val('');
						   $('textarea').val('');
						$(".fileinput-remove-button").click();
						//$(".btn-student").html('<span class="fa fa-check"></span> &nbsp;');
						//$(".rid").load(location.href + " .rid");
						//$(".rid2").load(location.href + " .rid2");
						//$("#student-form")[0].reset();
						setTimeout(function() {
							window.location.replace("mypin.php");
						  }, 5000);
				 }
				else if(response=="sent")
				{
					$("#err_info").fadeIn(1000, function(){
						$("#err").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Your details have been submitted and sent to the email you provided. </div>');
							  
			   
						   });
						   $(".fileinput-remove-button").click();
						   $('input[type="text"]').val('');
						   $('input[type="number"]').val('');
						   $('input[type="email"]').val('');
						   $('input[type="password"]').val('');
						   $('input[type="file"]').val('');
						   $('textarea').val('');
						$(".fileinput-remove-button").click();
						//$(".btn-student").html('<span class="fa fa-check"></span> &nbsp;');
						//$(".rid").load(location.href + " .rid");
						//$(".rid2").load(location.href + " .rid2");
						//$("#student-form")[0].reset();
						setTimeout(function() {
							window.location.replace("mypin.php");
						  }, 5000);
				 }
				  else{
            
					$(".err_info").fadeIn(1000, function(){
		
						$("#err").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> &nbsp; '+response+' </div>');
						$(".btn-student").html('<i class="fa fa-user-plus"></i> Try again');
					});
		
				}
			}
		  });
			  return false;
      }
    });
	 /* employer login submit */