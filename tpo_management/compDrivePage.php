<?php //include('server.php');
  if (empty($_SESSION['username'])) {
   // header('location: companySignin.php');
  }
?>
<html>
<head>
<title>LOGIN FORM</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/driveCard.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

<style>

</style>

</head>
<body>
<div>
    <nav>
        <ul class="topnav" >
            <li class="logo"><a href="">TPO MANAGEMENT LOGO</a></li>
            <li class="topnav-right"><img id="userLogin" src="img/user.svg"></li>
            <li class="topnav-right"><a href="">About</a></li>
            <li class="topnav-right"><a href="">Contact</a></li>
            <li class="topnav-right"><a href="">News</a></li>
            <li class="topnav-right"><a href="compDrivePage.php">Drive</a></li>            
            <li class="topnav-right"><a href="index.php">Home</a></li>
            <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>
    <nav>
        <ul class="topnav responsive" id="dropdownClick">
            <li class="logo"><a href="">TPO MANAGEMENT LOGO</a></li>
            <li class="topnav-right" id="signup"><a href="index.php">Home</a></li>
            <li class="topnav-right" id="signin"><a href="">News</a></li>  
            <li class="topnav-right"><a href="">Contact</a></li> 
            <li class="topnav-right"><a href="">About</a></li>
            <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
          <div class="error success">
            <h3>
              <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
               ?>
            </h3>
          </div>
        <?php endif ?>
        <?php //if (isset($_SESSION['username'])): ?>
          <li class="topnav-right"><a href="create_drive.php?logout='1'">Logout</a></li>
        <?php // endif ?>

      </div>
            <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>

    <div class="arrow-up"></div>
    <div class="dropdownUser">
        <img src="img/dropdownUser.jpg">
        <!-- <p class="dropdownLabel">Welcome, <?php //echo $_SESSION['username']; ?></p> -->
        
        <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
          <div class="error success">
            <h3>
              <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
               ?>
            </h3>
          </div>
        <?php endif ?>
        <?php //if (isset($_SESSION['username'])): ?>
          <a href="create_drive.php?logout='1'"><input type="button" class="dropdownButtonSignin" value="Logout"></a>
        <?php  //endif ?>

      </div>
    </div>
    </div>

    <h2>Card</h2>
<div class="label header tpoHeader">
    <h5 class="head-title">Total drives</h5>
</div>
<div class="card">
  <img src="images/image1.jpg" class="card-img" alt="image1">
  <div class="container">
    <h4><b>TPO MANAGEMENT</b></h4> 
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, architecto.</p>
  </div>
</div>
</body>
</html>