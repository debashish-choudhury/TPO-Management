<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/signup.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <meta charset="UTF-8">
        <style>
            .header {
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
                font-weight: 500;
                font-size: 25px;
                right: 26%;
                margin-top: 0;
                margin-right: 0;
                position: fixed;
                color: #009688;
            }

        </style>
    </head>
    <body>
        <div class="container">
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
                            <img src="img/office-background1.jpg">
                        </div>
                        <div class="recruiter-slide slide2">
                            <img src="img/office-background2.jpg">
                        </div>
                        <div class="recruiter-slide slide3">
                            <img src="img/office-background3.jpg">
                        </div>
                        <div class="recruiter-slide slide4">
                            <img src="img/office-background4.jpg">
                        </div>
                        <div class="recruiter-slide slide5">
                            <img src="img/office-background5.jpg">
                        </div>
                    </figure>
                </div>
                <center>
                <div style="position: fixed;">
                <form method="POST" action="recruitersignup.php">
                    <fieldset class="container-form">
                        <?php include('error.php'); ?>
                        <h2 class="header">Recruiter Signup Page</h2><br><br><br>
                    <label>First Name</label>
                    <input type="text" name="firstname" id="fname" placeholder="Enter First Name" required="">
                    
                    <input type="text" name="lastname" id="lname" placeholder="Enter Last Name" required="">
                    <label class="lastname">Last Name</label><br>
                    <label>Post</label><br>
                    <input type="text" name="post" id="post" placeholder="Enter your post" required=""><br>
                    <label>Email ID</label>
                    <input type="email" name="email" id="emailid" placeholder="Enter email id" required=""><br>
                    
                    <input type="tel" name="mobile" id="mobile" placeholder="Enter Mobile number" required="">
                    <label class="mobile">Mobile no.</label><br>
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male">
                    <label>Male</label><br>
                    <input type="radio" name="gender" value="Female">
                    <label>Female</label><br><br>
                    <label>Company Id</label><br>
                    <input type="text" name="companyId" id="uid" placeholder="Create company id" required=""><br>
                    <label>New Password</label><br>
                    <input type="password" name="password_1" id="passwd" placeholder="Enter Password" required=""><br>
                    
                    <input type="password" name="password_2" id="repasswd" placeholder="Re-enter Password" required="">
                    <label class="repasswd">Re-type Password</label><br>
                    <br>
                    <center>
                    <input class="form-button" name="companyRegister" type="submit" value="Submit">&nbsp&nbsp&nbsp&nbsp
                    <input type="reset" value="Reset"><br>
                    <br>
                    <p class="signinOption">
                        Already have an account?
                        <a href="companySignin.html" style="text-decoration: none; color: #009688;">Sign in</a>
                    </p>
                    </center>
                    </fieldset>

                </form>
            </div>
            </div>  
                 
        </div>
        
    </body>
</html>