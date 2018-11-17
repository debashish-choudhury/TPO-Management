<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <title>TPO | Resume form</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

        <style>
            .addButtonColor{
                color: blue;
                padding-top: 2px;
                align-content: center;
/*                margin-left: 60%;*/
                border-radius: 50%;
            }
            .container {
                margin: 0;
                padding-right: 10%;
                padding-left: 10%;
                padding-top: 7%;
            }
            .multiInput{
                width: 25%;
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
    
        <div class="container">
            
        <h2>RESUME FORMAT</h2>
            <hr>
            <hr>
        <h4>QUALIFICATION DETAILS</h4>
            <hr>
        <div class="form-group">
            <label>10 th MARKS</label>
            <input style="width: 25%;" type="number" class="form-control" id="exampleFormControlInput1" placeholder="In Percentage" required="">
        </div>
        <div class="form-group">
            <label>12 th MARKS</label>
            <input style="width: 25%;" type="number" class="form-control" id="exampleFormControlInput1" placeholder="In Percentage" required="">
        </div>
        <div class="form-group">
            <label>CAREER OBJECTIVE</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>TECHNICAL SKILLS</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PLC & SCADA, Proteus, Eagke, Matlab, C, IE3D, MS Office" required="">
        </div>
        <div class="form-group">
            <label>EXPERIENCE</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Working Experience" required="">
        </div>
        <div class="form-group">
            <label>ACADEMIC PROJECT</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Project Name And Description" row="3" required=""></textarea>
        </div>
        <div class="input_fields_wrap">
            <label>CERTIFICATION COURSES</label><br>
            <div class="multiInput"><input type="text" name="mytext1[]">
            <button type="button" class="btn btn-default btn-sm add_fields_button addButtonColor">
                <span  class="glyphicon glyphicon-plus"></span>&#43; Add
            </button>
            </div>
        </div>
        <br>
        <div class="input_fields_wrap2">
            <label>EXTRA CARRICULAR ACTIVITIES</label><br>
            <div class="multiInput"><input type="text" name="mytext1[]">
            <button type="button" class="btn btn-default btn-sm add_fields_button2 addButtonColor">
                <span class="glyphicon glyphicon-plus"></span>&#43; Add
            </button>
            </div>
        </div>
        <br>
        <hr>
        <h4>PERSONAL DETAILS</h4>
        <hr>
        <label>DATE OF BIRTH</label>
        <input style="width: 24.8%;" type="date" id="dob" required=""><br>
        <label>GENDER</label>
        <select style="width: 25%;" id="inputState" class="form-control" required="">
            <option value="-1">-Select Gender-</option>
            <option value="0">Male</option>
            <option value="1">Female</option>
            <option value="2">Others</option>
        </select>
        <br>
        <div class="input_fields_wrap3">
            <label>LANGUAGES</label>
            <div class="multiInput"><input type="text" name="mytext1[]">
            <button type="button" class="btn btn-default btn-sm add_fields_button3 addButtonColor">
                <span class="glyphicon glyphicon-plus"></span>&#43; Add
            </button>
            </div>
        </div><br>
        <div class="form-group">
            <label>ADDRESS</label>
            <input type="text" class="form-control " id="inputAddress" placeholder="1234 Main St" required=""><br><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required="">
                <label class="form-check-label" for="gridCheck">
                    I hereby declare that all the above information furnished by me is true to the best of my knowledge and belief.
                </label>
            </div>
            </div>
            <br>
            <div>
                <center>
                <button style="font-size: 20px;">submit</button>
                </center>
            </div>
        </div>
        	
        
        <script type="text/javascript" src="js/jquery-3.3.1.min%20(1).js"></script>
        <script type="text/javascript" src="js/resume_form.js"></script>
    </body>
</html>