jQuery(document).ready(function($) {
	$('#username').keyup(function(event) {
		$.ajax({
			url: './ajax/user',
			type: 'POST',
			data: {username: $(this).val()},
			success: function (response) {
         if(response =='true') {
         	$('#username').css('color', 'red');
         }else {
         	$('#username').css('color', 'blue');
         }
      }
		});
	});
});