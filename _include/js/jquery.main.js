
function checkLogin(){
	var uname = window.localStorage.getItem('username');
	if (uname){		
		$('#profile-link a').text(uname);
		$('#profile-link a').attr("href","profile.php?" + uname);
		$('#logout-link').show();
	} else {
		$('#login-link').show();
		$('#register-link').show();
	}
}

function parseUrl( url ) {
	var a = document.createElement('a');
	a.href = url;
	return a;
}

function checkUrl(data){
	if (!data){
		var uname = window.localStorage.getItem('username');
		if (!uname) return false;
		console.log(parseUrl(window.location.href));
		window.location.replace(parseUrl(window.location.href) + "?username=" + uname);
		//return false;
	}
}

jQuery(document).ready(function() {
	$("#logout-link").on('click',function() {
		var uname = window.localStorage.getItem('username');
		window.localStorage.removeItem('username');
		console.log(uname + " logged out");
		window.location.replace("login.php");
	});
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
