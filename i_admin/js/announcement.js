var announceTable;

$(document).ready(function() {
    announceTable = $("#announceTable").DataTable({
		"ajax": "announcements/retrieve.php",
		"scrollY": 370,
        "scrollX": true,
		"pageLength": 150,
		"order": []
	});
	
});



    $(document).ready(function (e){     
        
        $("#AnnouncementForm").on('submit',(function(e){
            e.preventDefault();
            $.ajax({
            url: "announcements/insert.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function() {
				console.log(new FormData(this));
               $('#result').html("<center><img src='../img/bx_loader.gif' /><br /><b class='text-info'>Data is saving. Please wait...</b></center>");;
            },
            success: function(data){
                //alert(data);
                 if(data == '1')
                {
                    $('#result').html("<p class='bg-success error_pgr text-info'>Record is saved sucessfully..!!</p>");
                    //document.getElementById("AnnouncementForm").reset();
					announceTable.ajax.reload(null, false);
					$('input[type="text"]').val('');
                    $('input[type="file"]').val('');
					$("#avatar-2").val('');
					$(".fileinput-remove-button").click();

					 // close the modal
					 $("#myModals").modal('hide');
                }
                else
                {
                    $('#result').html("<p class='bg-warning error_pgr text-danger'>Record is not saved. "+data+"</p>");
                } 
            },
            error: function(){}             
            });
        }));
    });


		function removeAnnouncement(id = null) {
			if(id) {
				// click on remove button
				$("#removeAnnoBtn").unbind('click').bind('click', function() {
					$.ajax({
						url: 'announcements/remove.php',
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
								menuTable.ajax.reload(null, false);
		
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



