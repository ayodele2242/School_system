$(document).ready(function() {
	$('#passwordback').click(function(){
		var email = $('.abhijitscript').val();
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (!(filter.test(email))) {
			$('.abhijitscript').css('border', '1px solid red');
			$('.error').remove();
			$('.success').remove();
			$('.abhijitscript').before("<div class='error'><h3>Email Invalid</h3></div>");
			$('.abhijitscript').focus();
			return false;
		}
		$.ajax({
			type: "post",
			url: "emp_send_password.php",
			data: {email_address:email},
			success: function(data)
			{
				$('.error').remove();
				$('.success').remove();
				$('.abhijitscript').before(data);
				
			}
		});
		return false;
	});
	$( ".abhijitscript" ).keyup(function() {
	   var email = $('.abhijitscript').val();
	   if(email.length == 0)
	   {
		$('.error').remove();
	   }
	});
});