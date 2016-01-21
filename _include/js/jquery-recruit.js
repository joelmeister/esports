jQuery(document).ready(function() {
	//check if logged in
	var uname = window.localStorage.getItem('username');
	checkLogin();
    $('#playersTable').dataTable();
    $('#teamsTable').dataTable();
	
	
	//build tables
	$.ajax({
		type: "POST",
		url: "_include/php/recruit_page.php",
		success: function(response) {
			console.log("result: " + response);
			jQuery("#playersTable tbody").empty();
			$('#playersTable tbody').append(response);
		},		  	
		error: function(jqXHR){
			var json=jqXHR.responseText;
			console.log(json);
		}
	});
});