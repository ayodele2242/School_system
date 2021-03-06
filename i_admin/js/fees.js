var feesTable;

$(document).ready(function() {
	feesTable = $("#feesTable").DataTable({
		"ajax": "fees_pay/retrieve.php",
		"scrollY": 330,
        "scrollX": true,
		"pageLength": 150,
		"order": []
	});
	

});

 // Insert class
 $('#feeform').submit(function(event){
	event.preventDefault();
	//var data = $("#register-form").serialize();
	$.ajax({
	  url: "fees_pay/insert.php",
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
		if(data==1){

		$("#message").fadeIn(1000, function(){
     	$("#message").html('<div class="alert alert-danger"> <span class="fa fa-info-circle"></span> &nbsp; Dupliate entry. Category name already exist for that class in the database! </div>');
				$("#btn-submit").html('<i class="fa fa-plus"></i> Add Menu');

			});

		}else if(data=="added")
		{
			$("#message").fadeIn(1000, function(){
				$("#message").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Added to database! </div>');
					   $("#btn-submit").html('<i class="fa fa-plus"></i> Add Menu');
	   
				   });
				    $('#feeform')[0].reset();
					feesTable.ajax.reload(null, false);
					$(".stas").load(location.href + " .stas");
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

function removeFee(id = null) {
	if(id) {
		// click on remove button
		$("#removeClassBtn").unbind('click').bind('click', function() {
			$.ajax({
				url: 'fees_pay/remove.php',
				type: 'post',
				data: {member_id : id},
				dataType: 'json',
				success:function(response) {
					if(response.success == true) {						
						$(".removeMessages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
							'</div>');

						// refresh the table
						feesTable.ajax.reload(null, false);

						// close the modal
						$("#classModal").modal('hide');

					} else {
						$(".removeMessages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
							'</div>');
					}
				}
			});
		}); // click remove btn
	} else {
		alert('Error: Refresh the page again');
	}
}

function mgetcode1(value,id) {
     var value = $('#mcode1_'+id).val();

            $.ajax({
                type: "POST",
                url: "fees_pay/update_menu_status.php",
                data:'status='+value+'&id='+id,
                success: function(data){
                    //$("#empTable").DataTable().ajax.reload(null, false);
					feesTable.ajax.reload(null, false);
              }
            });
     return true;
     };