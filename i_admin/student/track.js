$(document).ready(function (e) {
    $("#student-form").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "student.php",
            type: "POST",
            data:  new FormData(this),
            beforeSend: function(){
            $("#message").fadeOut();
            $(".btn-student").html('<img src="../img/processing.gif" width="30" /> &nbsp; processing ...');
            },
            contentType: false,
            processData:false,
            success: function(data)
            {
            
                if(data==1){
    
                    $("#message").fadeIn(1000, function(){
                     $("#message").html('<div class="alert alert-danger"> <span class="fa fa-info-circle"></span> &nbsp; Error while moving image to its directory. Please try again. </div>');
                            $(".btn-student").html('<i class="fa fa-user-plus"></i> Try again');
            
                        });
            
                    }else if(data=="saved")
                    {
                        $("#message").fadeIn(1000, function(){
                            $("#message").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Added to database! </div>');
                                   $(".btn-student").html('<i class="fa fa-user-plus"></i> Add another student');
                   
                               });
                               $('input[type="text"]').val('');
                                $('textarea').val('');
                            $(".fileinput-remove-button").click();
                            $(".btn-student").html('<span class="fa fa-check"></span> &nbsp; Saved');
                     }
                    else{
            
                        $("#message").fadeIn(1000, function(){
            
                            $("#message").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' !</div>');
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