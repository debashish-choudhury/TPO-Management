<?php include('server.php');
  if (empty($_SESSION['username'])) {
    header('location: tpoSignin.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student List</title>
    <link rel="stylesheet" type="text/css" href="css/driveCard.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    
    
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/wenzhixin/bootstrap-table/master/src/bootstrap-table.css">
    <script type="text/javascript" src="https://rawgit.com/wenzhixin/bootstrap-table/master/src/bootstrap-table.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery1.js"></script>
    <style>
      #proceed {
        border: 2px solid black;
        background-color:blue;
        color: white;
        height: 35px;
        width: 120px;
        border-radius: 24px;
      }

      #proceed:hover {
        background-color: #191970;
        color: white;
        transition: 0.25s;
      }

    </style>
  </head>
  <body>
  <nav>
        <ul class="topnav" >
            <li class="logo"><a href="">TPO MANAGEMENT LOGO</a></li>
            <li class="topnav-right"><img id="userLogin" src="img/user.svg"></li>
            <li class="topnav-right"><a href="">About</a></li>
            <li class="topnav-right"><a href="">Contact</a></li>
            <li class="topnav-right"><a href="">News</a></li>
            <li class="topnav-right"><a href="">Drive</a></li>
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
        <!-- <?php //if (isset($_SESSION['success'])): ?>
          <div class="error success">
            <h3>
              <?php
               // echo $_SESSION['success'];
                //unset($_SESSION['success']);
               ?>
            </h3>
          </div>
        <?php// endif ?>
        <?php //if (isset($_SESSION['username'])): ?>
          <li class="topnav-right"><a href="create_drive.php?logout='1'">Logout</a></li>
        <?php  //endif ?> -->

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
      <br><br><br><br>
      <h3>List Of Students</h3>
      <div class="container">
        <div class="table-responsive">
                  <table class="table table-bordered">
                    <tr>
                      <!-- <th data-field="dd" data-checkbox="true">
                      </th> -->
                      <th >
                        Moodle ID
                      </th>
                      <th>
                        Student Name
                      </th>
                      <th>
                        CGPA
                      </th>
                      <th>
                        KT's
                      </th>
                      <th>
                        Mobile Number
                      </th>
                      <th>
                        Delete
                      </th>

                    </tr>
          
                      <?php 
                        $sql = "SELECT * FROM students WHERE CGPA>='$CGPA' AND KT<='$KT'";
                        $result = mysqli_query($db, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_array($result)) { ?>
                            <tr id="<?php echo $row['moodle_id']; ?>">
                              <td><?php echo $row['moodle_id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['CGPA']; ?></td>
                              <td><?php echo $row['KT']; ?></td>
                              <td><?php echo $row['mobile_no']; ?></td>
                              <td><input type="checkbox" name="moodle_id[]" class="delete_student" value="<?php echo $row['moodle_id']; ?>"></td>
                            </tr>
                          <?php
                          }
                        }
                       ?> 
                  </table>
                </div>
        </div>
      <button type="button" name="btn-delete" id="btn_delete" class="btn btn-success">Delete</button>                  
    <!-- <input type="submit" id="proceed" name="login" value="Proceed"> -->
    <br><br>
  </center>
  
<!-- <script type="text/javascript"
  src = js/master.js></script> -->
  
  
  <script>
    $(document).ready(function () {
      $('#btn_delete').click(function() {
        if(confirm("Are you sure you want to delete this?")) {
          var id = [];

          $(':checkbox:checked').each(function(i) {
            id[i] = $(this).val();
          });

          if(id.length === 0) {
            alert("Please select atleast one checkbox");
          }
          else {
            $.ajax({
              url:'delete.php',
              method:'POST',
              data:{id:id},
              success:function() {
                for(var i=0; i<id.length; i++) {
                  $('tr#'+id[i]+'').css('background-color', '#ccc');
                  $('tr#'+id[i]+'').fadeOut('slow');
                }
              }
            });
          }
        }
        else {
          return false;
        }
      });
    });
  </script>
  
  </body>
</html>











                       <!-- <?php
//                         //$sql =// "SELECT * FROM students WHERE CGPA>='$CGPA' AND KT<='$KT'";
//                         //$result = //mysqli_query($db, $sql);
//                         //if (mysqli_num_rows($result) > 0) {
//                           //while ($row = mysqli_fetch_array($result)) { ?>
//                             <tr>
//                               <td></td>
//                               <td><?php// echo $row['moodle_id'] ?></td>
//                               <td><?php// echo $row['name'] ?></td>
//                               <td><?php //echo $row['CGPA'] ?></td>
//                               <td><?php //echo $row['KT'] ?></td>
//                               <td><?php //echo $row['mobile_no'] ?></td>
//                             </tr>
//                           <?php
//                           //}
//                         //}
//                        //?> -->
// <!--   <script>
//     //calling ajax
//     var ajax = new XMLHttpRequest();
//     var method = 'GET';
//     var url = "server.php";
//     var asynchronous = true;

//     ajax.open(method, url, asynchronous);
//     //sending ajax request
//     ajax.send();
//     //receiving response from data.php
//     ajax.onreadystatechange = function() {
//       if(this.readyState == 4 && this.status == 200) {
//          //converting json back to array
//          var data = JSON.parse(this.responseText);
//          var html = "";

//         for(var i = 0; i<data.length; i++) {
//           var moodle_id = data[i].moodle_id;
//           var name = data[i].name;
//           var CGPA = data[i].CGPA;
//           var KT = data[i].KT;
//           var mobile_no = data[i].mobile_no;
//           html += "<tr>"
//             html += "<td>""</td>";
//             html += "<td>" + moodle_id + "</td>";
//             html += "<td>" + name + "</td>";
//             html += "<td>" + CGPA + "</td>";
//             html += "<td>" + KT + "</td>";
//             html += "<td>" + mobile_no + "</td>";
//           html += "</tr>"
//         }
//         document.getElementById("data").innerHTML = html;
//       }
//     }
//   </script> -->