jQuery(document).ready(function() {
	$("#register-submit").on('click',function() {
		$contact_form = $('#register-form');
		console.log('submitting');
		var fields = $contact_form.serialize();
		
		$.ajax({
			type: "POST",
			url: "_include/php/contact.php",
			data: fields,
			dataType: 'json',
			success: function(response) {
				if(response.status){
					$('#register-form input').val('');
					$('#register-form textarea').val('');
				}
				
				$('#response').empty().html(response.html);
			}
		});
		return false;
	});
	
});