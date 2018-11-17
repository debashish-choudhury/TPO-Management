<?php include('server.php'); ?>
<html>
<head>
<title>LOGIN FORM</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/signInValidation.js"></script>
    
    <style>
    
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
    <div class="container">
        <div class="login">
            <form method="POST" action="companySignin.php">

            <h2>COMPANY LOGIN</h2>
            <label>User Name</label>
            <input type="text" id="username" name="username" placeholder="Company ID" required="">

            <label>Password</label>
            <input type="Password" id="password" name="password" placeholder="Password" required=""><br>
            <input type="submit" name="companySignin" onclick="validate();" value="Login">

            <a class="forget" href="#">Forget Password !!!</a><br><br><br>
            <a class="new-account" href="recruitersignup.html">Create New Account</a>
        </div>
    </div>
    
</body>
</html>
