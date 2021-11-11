var stuListTable;

$(document).ready(function() {
    stuListTable = $("#stuListTable").DataTable({
		"ajax": "student/retrieve.php",
		//"scrollY": 370,
        //"scrollX": true,
		"pageLength": 150,
		"order": []
	});
	
});



$(document).ready(function (e) {
    $("#student-form").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "student/student.php",
            type: "POST",
            data:  new FormData(this),
            beforeSend: function(){
            $("#message").fadeOut();
            $(".btn-student").html('<img src="../img/processing.gif" width="30" /> &nbsp; please wait');
            },
            contentType: false,
            processData:false,
            success: function(data)
            {
            if(data=="saved")
                    {
                        $("#message").fadeIn(1000, function(){
                            $("#message").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Added to database! </div>');
                                   $(".btn-student").html('<i class="fa fa-user-plus"></i> Add another student');
                   
                               });
                               $(".fileinput-remove-button").click();
							   $('input[type="text"]').val('');
							   $('input[type="number"]').val('');
							   $('input[type="email"]').val('');
							   $('input[type="password"]').val('');
							   $('input[type="file"]').val('');
							   $('textarea').val('');
                            $(".fileinput-remove-button").click();
                            $(".btn-student").html('<span class="fa fa-check"></span> &nbsp; Saved');
                            //$(".rid").load(location.href + " .rid");
                            //$(".rid2").load(location.href + " .rid2");
                            //$("#student-form")[0].reset();
                     }
                    else{
            
                        $("#message").fadeIn(1000, function(){
            
                            $("#message").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' </div>');
                            $(".btn-student").html('<i class="fa fa-user-plus"></i> Try again');
                        });
            
                    }


            },
            error: function() 
            {
            } 	        
       });
    }));
});


//Student update
$(document).ready(function (e) {
    $("#edit-student-form").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "student/edit.php",
            type: "POST",
            data:  new FormData(this),
            beforeSend: function(){
            $("#message").fadeOut();
            $(".btn-student").html('<img src="../img/processing.gif" width="30" /> &nbsp; updating');
            },
            contentType: false,
            processData:false,
            success: function(data)
            {
            if(data=="saved")
                    {
                        $("#message").fadeIn(1000, function(){
                            $("#message").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Updated Successfully! </div>');
                           
                   
                               });
                               //$('input[type="text"]').val('');
                               // $('textarea').val('');
                            $(".fileinput-remove-button").click();
                            $(".btn-student").html('<span class="fa fa-check"></span> &nbsp; Updated');
                            $(".rid").load(location.href + " .rid");
                            $(".rid2").load(location.href + " .rid2");
                            $(".rid3").load(location.href + " .rid3");
                            //$("#student-form")[0].reset();
                     }
                    else{
            
                        $("#message").fadeIn(1000, function(){
            
                            $("#message").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' </div>');
                            $(".btn-student").html('<i class="fa fa-user-plus"></i> Try again');
                        });
            
                    }


            },
            error: function() 
            {
            } 	        
       });
    }));
});


	 function getcode11(value,id) {
     var value = $('#code11_'+id).val();

            $.ajax({
                type: "POST",
                url: "update_status.php",
                data:'mystatus='+value+'&id='+id,
                success: function(data){
                    $("#stuListTable").DataTable().ajax.reload(null, false);
              }
            });
     return true;
     };

