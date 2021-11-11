$(document).ready(function (e) {
    
    $("#reset-form").on('submit',(function(e) {
                      
            $.ajax({
                url: "user/edit.php",
                type: "POST",
                data:  new FormData($("#reset-form")[0]),//new FormData(this),
                beforeSend: function(){
                $("#message").fadeOut();
                $("#btn-submit").html('<img src="../img/processing.gif" width="30" /> &nbsp; Updating');
                },
                contentType: false,
                cache: false,
                processData: false,
                async: false,
                success: function(data)
                {
                     if(data=="updated")
                        {
                            $("#message").fadeIn(1000, function(){
                               
                                $("#message").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; Updated Successfully! </div>');
                                                          
                                   });
                                   $("#btn-submit").html('<span class="fa fa-check"></span> &nbsp; Updated');
                                   $(".stasy").load(location.href + " .stasy");
                                   $(".fileinput-remove-button").click();
                                   
                                 
                        }
                        else{
                
                            $("#message").fadeIn(1000, function(){
                
                                $("#message").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' !</div>');
                            });
                            $("#btn-submit").html('<i class="fa fa-error"></i> Failed. Retry!');
                
                        }
                
    
                },
                error: function() 
                {
                } 	        
           });
        }));
    });
	

