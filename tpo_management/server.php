<?php
session_start();
$companyId = "";
$password_2 = "";
$errors = array();

  $db = mysqli_connect('localhost', 'root', '', 'college_tpo');

  if(isset($_POST['cgpa'])) {
    if(isset($_POST['kt'])) {
      if(isset($_POST['submit'])) {
        $CGPA = $_POST['cgpa'];
        $KT = $_POST['kt'];
      }
    }
  }

//signup for company..
if(isset($_POST['companyRegister'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $post = mysqli_real_escape_string($db, $_POST['post']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $companyId = mysqli_real_escape_string($db, $_POST['companyId']);
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    //ensure all fields are filled or not

    if(empty($firstname)) {
        array_push($errors, "Firstname is requried");
    }
    if(empty($lastname)) {
        array_push($errors, "Lastname is requried");
    }
    if(empty($post)) {
        array_push($errors, "Post is requried");
    }
    if(empty($email)) {
        array_push($errors, "email is required");
    }
    if(empty($mobile)) {
        array_push($errors, "mobile is requried");
    }
    if(empty($gender)) {
        array_push($errors, "gender is requried");
    }
    if(empty($companyId)) {
        array_push($errors, "Company Id is requried");
    }
    if(empty($password_1)) {
        array_push($errors, "Password is requried");
    }
    if($password_1 !== $password_2) {
        array_push($errors, "Password do not match");
    }
    //if there is no errors,  save it in database

    if(count($errors) == 0) {
        $password_1 = md5($password_1);
        $sql = "INSERT INTO company_details (firstname, lastname, post, email, mobile, gender, companyId, password) 
        VALUES ('$firstname', '$lastname', '$post', '$email', '$mobile', '$gender', '$companyId', '$password_1')";
        mysqli_query($db, $sql);
        header('location: companySignin.php');

    }

}

    //log campany user in form login page

if (isset($_POST['companySignin'])) {
    $username = "";
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if(empty($username)) {
        array_push($errors, "Username is requried");
    }
    
    if(empty($password)) {
        array_push($errors, "Password is requried");
    }
            
    if (count($errors) == 0) {
        $password = md5($password); //encrypting the password due to security reasons
        $query = "SELECT * FROM company_details WHERE companyId='$username' AND password='$password' ";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) === 1) {
            // log user in
           $_SESSION['username'] = $username;
           header('location: create_drive.php');
       }
        else {
             array_push($errors, "Worng Username/Password combination");
        }
    }
}

//student signUp 
if(isset($_POST['studentRegister'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $branch = mysqli_real_escape_string($db, $_POST['branch']);
    $year = mysqli_real_escape_string($db, $_POST['year']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    //ensure all fields are filled or not
    
    if(empty($firstname)) {
        array_push($errors, "Firstname is requried");
    }
    if(empty($lastname)) {
        array_push($errors, "Lastname is requried");
    }
    if(empty($email)) {
        array_push($errors, "email is required");
    }
    if(empty($mobile)) {
        array_push($errors, "mobile is requried");
    }
    if(empty($gender)) {
        array_push($errors, "gender is requried");
    }
    if(empty($dob)) {
        array_push($errors, "DOB is requried");
    }
    if(empty($branch)) {
        array_push($errors, "Branch is requried");
    }
    if(empty($year)) {
        array_push($errors, "Year is requried");
    }
    if(empty($password_1)) {
        array_push($errors, "Password is requried");
    }
    if($password_1 !== $password_2) {
        array_push($errors, "Password do not match");
    }
    
    //if there is no errors,  save it in database

    if(count($errors) == 0) {
        $password_1 = md5($password_1);
        $sql = "INSERT INTO student_details (firstname, lastname, email, mobile, gender, dob, branch, year, password) 
        VALUES ('$firstname', '$lastname', '$email', '$mobile', '$gender', '$dob', '$branch', '$year', '$password_1')";
        mysqli_query($db, $sql);
        header('location: studDrivePage.php');

    }

}

    //log student user in form login page

if (isset($_POST['studentLogin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if(empty($username)) {
        array_push($errors, "Username is requried");
    }
    
    if(empty($password)) {
        array_push($errors, "Password is requried");
    }
            
    if (count($errors) == 0) {
        $password = md5($password); //encrypting the password due to security reasons
        $query = "SELECT * FROM student_details WHERE firstname='$username' AND password='$password' ";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) === 1) {
            // log user in
           $_SESSION['username'] = $username;
           header('location: studDrivePage.php');
       }
        else {
             array_push($errors, "Worng Username/Password combination");
        }
    }
}


// Login for tpo..
  if (isset($_POST['tpoLogin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if(empty($username)) {
			array_push($errors, "Username is requried");
		}

		if(empty($password)) {
			array_push($errors, "Password is requried");
		}

    if (count($errors) == 0) {
			$password = md5($password); //encrypting the password due to security reasons
			$query = "SELECT * FROM tpo_login WHERE username='$username' AND password='$password' ";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) === 1) {
			 	// log user in
                $_SESSION['username'] = $username;
				header('location: create_drive.php');
			}
      else {
        array_push($errors, 'Worng Username/Password combination');
      }
    }
  }

  

// session destroy logout
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
  }


// create drive submit button



  ?>
