<?php include('server.php');
  if (empty($_SESSION['username'])) {
    header('location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <meta charset="utf-8">
    <title>Drive</title>
    
    <link rel="stylesheet" href="css/create_drive.css">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <script type="text/javascript" src="js/create_drive.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <style>
    nav {
      position: fixed;
    }
    .drive-create {
      background-color: #f2f2f2;
      width: 50%;
      height: 100%;
    }
    .drive-create {
      padding-bottom: 20px;
    }
    </style>
  </head>
  <body>
  
    <nav>
        <ul class="topnav" >
            <li class="logo"><a href="index.php">TPO MANAGEMENT LOGO</a></li>
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
          <li class="logo"><a href="index.php">TPO MANAGEMENT LOGO</a></li>
          <li class="topnav-right" id="signup"><a href="index.php">Home</a></li>
          <li class="topnav-right" id="signin"><a href="">News</a></li> 
          <li class="topnav-right"><a href="compDrivePage.php">Drive</a></li>  
          <li class="topnav-right"><a href="">Contact</a></li> 
          <li class="topnav-right"><a href="">About</a></li>
          <li class="topnav-right"><a href="studentSignin.php">Online Resume</a></li>
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
        <?php if (isset($_SESSION['username'])): ?>
          <li class="topnav-right"><a href="create_drive.php?logout='1'">Logout</a></li>
        <?php endif ?>

      </div>
          <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
</nav>

    <div class="arrow-up"></div>
    <div class="dropdownUser">
      <img src="img/dropdownUser.jpg">
      <p class="dropdownLabel">Welcome, <?php echo $_SESSION['username']; ?></p>
    
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
        <?php if (isset($_SESSION['username'])): ?>
          <a href="create_drive.php?logout='1'"><input type="button" class="dropdownButtonSignin" value="Logout"></a>
        <?php  endif ?>

      </div>
    
    </div>

  
<center>
    <br><br>
    <br><br>
    <h2>Click below to create new drive.</h2>
    <div class="drive-create">
     <button type="button" id="drive_button" name="button" onclick="showdrive()">Create Drive</button>
     <div id="drive" > <h2><b>Drive Creation</b></h2>
     <h2>Rounds</h2>
		<button id="add_round" onclick="Add_Round_Visible()">Add a Round</button><br>
    <input type="text" style="width: 35%;" id="InputRound" placeholder="Enter round name here"/>
    <button onclick="AddRound()" id="InputRoundButton">Add Round</button>
		
    <table id="RoundList">
		  <tr class="add_round_table">
		    <th class="add_round_table">Serial Number</th>
		    <th class="add_round_table">Round Name</th>
     <form method="post" action="student_list.php">
     </tr>
		</table><br>
            
              <b>Name of Company :</b> <input style="width: 35%;" type="text" name="OrgName" placeholder="NAME OF ORGANIZATION">
              <h4>Choose Your Criteria</h4>
              <table>
                <tr>
                <td> <b>CGPA:</b></td></tr>
                  <tr><td></td>
                 <td> <input type="radio" id="CGPAChkBox" name="cgpa" value="6.5" checked></td><td> 6.5 & Above </td</tr>
                 <tr><td></td>
                     <td>  <input type="radio" id="CGPAChkBox" name="cgpa" value="5.5"></td><td> 5.5 & Above</td></tr>
                <tr><td></td>
                  <td>  <input type="radio" id="CGPAChkBox" name="cgpa" value="0"></td><td> No Criteria</td></tr>
                <tr><td> <b> Number's of KT's : </b></td></tr>
                <tr><td></td>
                 <td> <input type="radio"  name="kt" value="0" checked></td><td> 0</td></tr>
                  <tr><td></td>
                 <td> <input type="radio"  name="kt" value="1" checked></td><td> 1</td></tr>
                 <tr><td></td>
                     <td>  <input type="radio"  name="kt" value="2"></td><td> 2</td></tr>
                <tr><td></td>
                  <td>  <input type="radio"  name="kt" value="6"></td><td> 2 & Above</td></tr>
	</table>


		
		
    
  
    <input type="Submit" name="submit" id="drive_submit" value="Submit"/>
  </form>
  </div>
</div>
</center>
<?php  
if(isset($_POST['createdDrive'])) { 
  header('location: compDrivePage.php')?>
  <script>
  </script>
<?php } ?>

</body>
</html>
