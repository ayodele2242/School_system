var cardTable;

$(document).ready(function() {
	cardTable = $("#cardTable").DataTable({
		"ajax": "generate_cards/retrieve.php",
		"scrollY": 370,
        "scrollX": true,
		"pageLength": 150,
		"order": []
	});
	

});



function update_btn_click(param)
    {
		//$('#updatebutton').prop("disabled",true);
		var resp = $("#updatebutton");
		$.ajax({
			type: "POST", // Method type GET/POST           
			url: "generate_cards/cards.php", //Ajax Action url
			data: {},

			// Before call ajax you can do activity like please wait message
			beforeSend: function(xhr){
				resp.html('Generating <img src="../img/processing.gif" width="30" />');
			},

			//Will call if method not exists or any error inside php file
			//error: function(qXHR, textStatus, errorThrow){
				//resp.html("There are an error");
				//$("#message").html('<div class="text-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' !</div>');
                //$('#updatebutton').prop("disabled",false);
		   	//},

			success: function(data, textStatus, jqXHR){
				//resp.html(data);
				if(data=="ok"){
				$("#message").fadeIn(1000, function(){
					$("#message").html('<div class="text-success"> <span class="fa fa-check"></span> &nbsp; Successfully Generated </div>');
						   $("#updatebutton").html('<i class="fa fa-refresh"></i> Generate Cards');
		   
					   });
					   cardTable.ajax.reload(null, false);
					}
					else{
						$("#message").fadeIn(1000, function(){
						$("#message").html('<div class="text-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' !</div>');
						});
						$("#updatebutton").html('<i class="fa fa-refresh"></i> Generate Cards');
						
					}
			}
		});
     }