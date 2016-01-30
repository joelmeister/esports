jQuery(document).ready(function() {
	var data = parseUrl(window.location.href).search.replace('?','');
	loadProfile(data);
	function loadProfile(data){
		$.ajax({
			type: "GET",
			url: "_include/php/load_profile.php",
			contentType : "application/json", 
			dataType: 'json',
			data: data,
			cache: false,
			success: function(data){
				displayPage(data);
			},
			error: function(jqXHR){
				var json=jqXHR.responseText;
			}
		});
	}
	
	function displayPage(data){
		$('h1#profile-name').html(data.username);
		$('.overlay-text-thumb').html(data.username);
		$('.profile-title').html(data.username);
		
		$('p#about').html(data.about);
		$('.profile-title-description').html(data.about);
		if (data.avatar)
			$('img.profile').attr('src','_include/img/' + data.avatar);
		else
			$('img.profile').text("No image found");
		
		//social
		if (data.twitter) 
			$('li#twitter-link a').attr('href','http://twitter.com/' + data.twitter);
		else 
			$('li#twitter-link').hide();
		
		if (data.facebook) 
			$('li#facebook-link a').attr('href','https://www.facebook.com/' + data.facebook);
		else 
			$('li#facebook-link').hide();
		
		if (data.linkedin) 
			$('li#linkedin-link a').attr('href','https://www.linkedin.com/in/' + data.linkedin);
		else 
			$('li#linkedin-link').hide();
		
		if (data.google) 
			$('li#google-link a').attr('href','plus.google.com/' + data.google);
		//<li id='google-link'><a href="plus.google.com/108713380785575315626">
		else 
			$('li#google-link').hide();
		
		if (data.email) 
			$('li#email-link a').attr('href','mailto:' + data.email);
		else 
			$('li#email-link').hide();
		
		if (data.vimeo) 
			$('li#vimeo-link a').attr('href','http://vimeo.com/' + data.vimeo);
		else 
			$('li#vimeo-link').hide();
		
		if (data.dribbble) 
			$('li#dribbble-link a').attr('href','http://dribbble.com/' + data.dribbble);
		else 
			$('li#dribbble-link').hide();
		
		//games
		if(data.lol){
			$('li#lol-game-link').html(
				'<a href="http://matchhistory.na.leagueoflegends.com/en/#match-history/' +
				data.lol + '">LoL</a>');
		}else {
			$('li#lol-game-link').hide();
		}
		if (data.dota){
			$('li#dota-game-link').html(
				'<a href="http://blog.dota2.com/' +
				data.lol + '">LoL</a>');
		}else {
			$('li#dota-game-link').hide();
		}
		if (data.csgo){
			$('li#csgo-game-link').html(
				'<a href="http://blog.counter-strike.net/' +
				data.lol + '">LoL</a>');
		}else{
			$('li#csgo-game-link').hide();
		}
		
		return false;
	}
});
