jQuery(document).ready(function() {
    $("#login-submit").on('click',function() {
        $contact_form = $('#login-form');
        var fields = $contact_form.serialize();
        $.ajax({
            type: "POST",
            url: "_include/php/login.php",
            data: fields,
            dataType: 'json',
            success: function(response) {
                if(response.status){
                    $('#login-form input').val('');
                    $('#login-form textarea').val('');
                    window.localStorage.setItem("username",response.username);
                    checkUrl(response.username);
                    var url = "profile.php?username=" + response.username;
                    window.location.replace(url);
                } 
                else {
                    window.localStorage.setItem("username",'');
                }
                $('#response').empty().html(response.html);
            },		  	
            error: function(jqXHR){
               var json=jqXHR.responseText;
               console.log(json);
            }
        });
        return false;
    });
});
