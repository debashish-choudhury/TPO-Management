<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <title>Student | Register</title>
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
            
            .branch-select {
                margin-top: 10px;
                width: 40%;
            }

            .year {
                float: right;
                margin-top: -14px;
                margin-right: 206px;
                margin-bottom: 0px;
            }

            .year-select {
                float: right;
                margin-right: 0px;
                margin-top: -43px;
                width: 40%;
            }

            .container-form {
                margin-top: 0; 
            }

            .date, .date-area {
                float: right;
            }

            .date {
                margin-top: -45px;
                margin-right: 144px;
            }

            input[type=date] {
                width: 40%;
                margin-top: -49px;
                margin-right: 0px;
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
                <div style="position: fixed;">
                <form method="POST" action="studsignup.php">
                    
                    <fieldset class="container-form" style="margin-right: 28%;">
                        <h2 class="header" style="margin-right: 15%;">Student Signup Page</h2><br><br><br>
                        <?php include('error.php'); ?>
                    <label>First Name</label>
                    <input type="text" name="firstname" id="fname" placeholder="Enter First Name" required="">
                    
                    <input type="text" name="lastname" id="lname" placeholder="Enter Last Name" required="">
                    <label class="lastname">Last Name</label><br>
                    <br>
                    <label>Email ID</label>
                    <input type="email" name="email" id="emailid" placeholder="Enter email id" required=""><br>
                    
                    <input type="tel" name="mobile" id="mobile" placeholder="Enter Mobile number" required="">
                    <label class="mobile">Mobile no.</label><br>
                    <br>
                    <label>Gender</label><br>
                    <input type="radio" value="Male" name="gender">
                    <label>Male</label><br>
                    <input type="radio" value="female" name="gender">
                    <label>Female</label>
                    <label class="date">Date Of Birth</label><br>
                    <input type="Date" class="date-area" name="dob" id="dob" required=""><br><br>
                    
                    <label>New Password</label><br>
                    <input type="password" name="password_1" id="passwd" placeholder="Enter Password" required=""><br>
                    
                    <input type="password" name="password_2" id="repasswd" placeholder="Re-enter Password" required="">
                    <label class="repasswd">Re-type Password</label>
                    <label class="branch">Branch</label><br>
                    <select name="branch" class="branch-select">
                        <option name="" value="">Choose...</option>
                        <option name="civil" value="civil">Civil</option>
                        <option name="computer" value="computer">Computer</option>
                        <option name="extc" value="extc">Electronics and Telecommunication</option>
                        <option name="IT" value="IT">Information Technology</option>
                        <option name="mechanical" value="mechanical">Mechanical</option>
                    </select>

                    <label class="year">Year</label><br>
                    <select name="year" class="year-select">
                        <option name="">Choose...</option>
                        <option name="first">First</option>
                        <option name="second">Second</option>
                        <option name="third">Third</option>
                        <option name="fourth">Fourth</option>
                        
                    </select><br><br>
                    <center>
                    <input class="form-button" name="studentRegister" type="submit" value="Submit">&nbsp&nbsp&nbsp&nbsp
                    <input type="reset" value="Reset"><br><br>
                    
                    <p class="signinOption" style="margin-top: 5px;">
                        Already have an account?
                        <a href="companySignin.php" style="text-decoration: none; color: #009688;">Sign in</a>
                    </p>
                    </center>
                </fieldset>
    
                </form>
            </div>
        </div>
        </div>
    </body>
</html>