 // Insert class
 $('#schactivities').submit(function(event){
	event.preventDefault();
	//var data = $("#register-form").serialize();
	$.ajax({
	  url: "student/student_activities.php",
	  method: "post",
	  data: $('form').serialize(),
	  //dataType: "text",
	  beforeSend: function()
	  {
		  $("#message").fadeOut();
		  $("#btn-submit").html('<img src="../img/processing.gif" width="30" /> &nbsp; please wait');
	  },
	  success: function(data){
		//$('#message').html(strMessage);
		//$('#feeform')[0].reset();
		//feesTable.ajax.reload(null, false);
		 if(data=="saved")
		{
			$("#message").fadeIn(1000, function(){
				$("#message").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Added to database! </div>');
					   $("#btn-submit").html('<i class="fa fa-plus"></i> Submit');
	   
				   });
				    $('#schactivities')[0].reset();
					//feesTable.ajax.reload(null, false);
					//$(".stas").load(location.href + " .stas");
		}
		else{

			$("#message").fadeIn(1000, function(){

				$("#message").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' !</div>');
				$("#btn-submit").html('<i class="fa fa-plus"></i> Add Again');
			});

		}

	  }
	})
  })

