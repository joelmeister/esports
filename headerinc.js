jQuery(document).ready(function() {
$'header').append('<div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="E-Sports | All things E-Sports!">E-sports hub</a>
        </div>
        <nav id="menu">
        	<ul id="menu-nav">
		<li><a href="index.html" class="external">Home</a></li>
		<li><a href="lol.php" class="external">LoL</a></li>
		<li><a href="dota.php" class="external">DotA</a></li>
		<li><a href="recruit.php" class="external">Recruit</a></li>
		<li id="profile-link" class="current"><a href="javascript:void(0);" class="external">Profile</a></li>
		<li id="login-link" style="display:none;"><a href="login.php" class="external">Login</a></li>
		<li id="register-link" style="display:none;"><a href="register.php" class="external">Register</a></li>
		<li><a href="about.php" class="external">About us</a></li>
		<li id="logout-link" style="display:none;"><a class="external">Log out</a></li>
            </ul>
        </nav>
    </div>
');
console.log("test");
});
