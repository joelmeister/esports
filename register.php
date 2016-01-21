<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>
<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Brushed | Responsive One Page Template</title>   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->


<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#" title="E-Sports | All things E-Sports!">Brushed Template</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li><a href="index.html" class="external">Home</a></li>
				<li><a href="lol.php" class="external">LoL</a></li>
				<li><a href="dota.php" class="external">DotA</a></li>
				<li><a href="recruit.php" class="external">Recruit</a></li>
                <li><a href="profile.php" class="external">Profile</a></li>
				
                <li id="login-link" style="display:none;"><a href="login.php" class="external">Login</a></li>
                <li id="register-link" style="display:none;"><a href="register.php" class="external">Register</a></li>
				<li class="current"><a href="javascript:void(0);" class="external">About us</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- register Section -->
<div id="register" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Register</h2>
                <h3 class="title-description">We’re currently accepting new client projects. We look forward to serving you.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- register Form -->
    <div class="row">
    	<div class="span9">
        	<form id="register-form" class="register-form" action="#">
            	<p class="register-username">
            		<input id="register-username" type="text" placeholder="Username" value="" name="username" />
                </p>
            	<p class="register-name">
            		<input id="register-name" type="text" placeholder="Name" value="" name="name" />
                </p>
                <p class="register-email">
                	<input id="register-email" type="text" placeholder="Email Address" value="" name="email" />
                </p>
				<p class="register-password">
					<input id="register-password" type="password" name="password" required="required" placeholder="Password"/> 
				</p>
                <p class="register-submit">
                	<a id="register-submit" class="submit">Register</a>
                </p>
                
                <div id="response">
                </div>
            </form>
         
        </div>
    </div>
    <!-- End register Form -->
</div>
</div>
<!-- End register Section -->


<!-- Footer -->
<footer>
	<p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

<script>
jQuery(document).ready(function() {
	$("#register-submit").on('click',function() {
		$contact_form = $('#register-form');
		var fields = $contact_form.serialize();
		if( !$('#register-username').val() ||  !$('#register-name').val() ||
			!$('#register-email').val() || !$('#register-password').val()){
			alert("Please enter all fields");
			return false;
		}
		$.ajax({
			type: "POST",
			url: "_include/php/register.php",
			data: fields,
			dataType: 'json',
			success: function(response) {
				console.log(response);
				if(response.status){
					$('#register-form input').val('');
					$('#register-form textarea').val('');
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
</script>
</body>
</html>