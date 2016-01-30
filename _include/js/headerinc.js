function appendHeader(){
    var header ='<div class="sticky-nav">';
    header += '<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>';
    header += '<div id="logo">';
    header += '<a id="goUp" href="#home-slider" title="E-Sports | All things E-Sports!">E-sports hub</a>';
    header += '</div>';
    header += '<nav id="menu">';
    header += '<ul id="menu-nav">';
    header += '<li><a href="index.html" class="external">Home</a></li>';
    header += '<li><a href="lol.php" class="external">LoL</a></li>';
    header += '<li><a href="dota.php" class="external">DotA</a></li>';
    header += '<li><a href="recruit.php" class="external">Recruit</a></li>';
    header += '<li id="profile-link" class="current"><a href="javascript:void(0);" class="external">Profile</a></li>';
    header += '<li id="login-link" style="display:none;"><a href="login.php" class="external">Login</a></li>';
    header += '<li id="register-link" style="display:none;"><a href="register.php" class="external">Register</a></li>';
    header += '<li><a href="about.php" class="external">About us</a></li>';
    header += '<li id="logout-link" style="display:none;"><a class="external">Log out</a></li>';
    header += '</ul>';
    header += '</nav>';
    header += '</div>';
    $("header").append(header);
    console.log("header appended");
}
