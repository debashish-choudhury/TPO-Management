<!doctype html>
<html lang="en">
<head>
     <title>SIGNUP PAGE | TPO MANAGEMENT</title> 
    <link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <style>
		body {
			margin: 0%;
			background-color: #1D2530;
		}
		.signin-box {
		    width: 320px;
		    height: 320px;
		    padding-top: 20px;
		    position: absolute;
		    left: 38%;
            top: 30%;
		    background: #1D2530;
		    text-align: center;
		    border-radius: 4%;

		}

		.signin-box h2{
			color: white;
			text-transform: uppercase;
			font-weight: 500;
		}

		.signin-box h3 a {
			border: 0;
			background: none;
		    display: block;
		    text-decoration: none;
		    margin: 20px auto;
		    text-align: center;
		    border: 2px solid #3498db;
		    padding: 14px 10px;
		    width: 250px;
		    color: #95A1B0;
		    border-radius: 24px;
		    transition: 0.25s;
		}

		.signin-box h3 a:hover {
		    width: 280px;
		    background: #008080;
		    color: white;
		}

	</style>


</head>
<body>
	<nav>
        <ul class="topnav" >
            <li class="logo"><a href="index.php">TPO MANAGEMENT LOGO</a></li>
            <li class="topnav-right"><img id="userLogin" src="img/user.svg"></li>
            <li class="topnav-right"><a href="studentSignin.php">Online Resume</a></li> 
            <li class="topnav-right"><a href="">About</a></li>
            <li class="topnav-right"><a href="">Contact</a></li>
            <li class="topnav-right"><a href="">News</a></li>
            <li class="topnav-right"><a href="index.php">Home</a></li>
            <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>
    <nav>
        <ul class="topnav responsive" id="dropdownClick">
            <li class="logo"><a href="index.php">TPO MANAGEMENT LOGO</a></li>
            <li class="topnav-right" id="signup"><a href="index.php">Home</a></li>
            <li class="topnav-right" id="signin"><a href="">News</a></li>  
            <li class="topnav-right"><a href="">Contact</a></li> 
            <li class="topnav-right"><a href="">About</a></li>
            <li class="topnav-right"><a href="studentSignin.php">Online Resume</a></li>
            <li class="topnav-right"><a href="signin.php">Sign In</a></li>
            <li class="topnav-right"><a href="signup.php">Sign Up</a></li>
            <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>

    <div class="arrow-up"></div>
    <div class="dropdownUser">
        <img src="img/dropdownUser.jpg">
        <p class="dropdownLabel">Welcome to our website.</p>
        <a href="signup.php"><input type="button" class="dropdownButtonSignup" value="Sign Up"></a>
        <a href="signin.php"><input type="button" class="dropdownButtonSignin" value="Sign In"></a>
    </div>
	<div>
	<div class="recruiter-slider">
        <figure>
            <div class="recruiter-slide slide1">
            <img src="img/studentSignup1.jpg">
            </div>
            <div class="recruiter-slide slide2">
                <img src="img/studentSignup2.jpg">
            </div>
            <div class="recruiter-slide slide3">
                <img src="img/studentSignup3.jpg">
            </div>
        	<div class="recruiter-slide slide4">
                <img src="img/studentSignup4.jpg">
            </div>
            <div class="recruiter-slide slide5">
                <img src="img/studentSignup5.jpg">
            </div>
        </figure>
    </div>
	<div style="position: fixed; background-color: #f2f2f2; opacity: 0.9" class="signin-box">
		<h2 style="color: black;">Sign In</h2>
    	<h3><a href="tpoSignin.php">TPO Admin Sign In Page</a></h3>
    	<!-- <h3><a href="companySignin.php">Company Sign In Page</a></h3> -->
    	<h3><a href="studentSignin.php">Student Sign In Page</a></h3>
	</div>
	
	</div>
</body>    
</html>