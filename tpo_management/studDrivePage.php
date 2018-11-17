<?php include('server.php');
  if (empty($_SESSION['username'])) {
    header('location: index.php');
  }
?>
<html>
<head>
<title>LOGIN FORM</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/driveCard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
     <link rel="stylesheet" type="text/css" href="css/index.css">    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    
    <style>
        
/****************SlideShow*********************/

.slider-text {
    font-size: 50px;
    padding-left: 40px;
    position: absolute;
    width: 20%;
    padding-top: 100px;
    color: white;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}
.slider-text-small {
    font-size: 30px;
    padding-left: 40px;
    position: absolute;
    width: 30%;
    padding-top: 200px;
    color: white;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
    font-weight: 200;
}
.slider {
    height: 550px;
    overflow: hidden;
    padding-top: 4%;
}
.slider figure div {
    width: 20%;
    float: left;
}
.slider figure img {
    margin: 0;
    padding: 0;
    width: 100%;
    float: left;
    top: 0;
}
.slider figure {
    position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    animation: 30s slidy infinite;
}

@keyframes slidy {
    0% { left: 0; }
    20% { left: 0; }
    25% { left: -100%; }
    45% { left: -100%; }
    50% { left: -200%; }
    70% { left: -200%; }
    75% { left: -300%; }
    95% { left: -300%; }
    100% { left: 0%; }
}

#userLogin {
    padding-top: 5px;
}

/****************SlideShow*********************/
#googlemap {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 0;
}

.section-contact {
  position: relative;
}

.section-contact .card-panel {
  position: relative;
}
    </style>
</head>
<body id="home" class="scrollspy">
<div>
<div class="navbar-fixed">
        <nav class="teal">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Training And Placement</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <li>
                  <a href="#home">Home</a>
                </li>
                <li>
                  <a href="#news">News</a>
                </li>
                <li>
                  <a href="#about">About</a>
                </li>
                <li>
                  <a href="#contact">Contact</a>
                </li>
                <li style="">
                    <img id="userLogin" src="img/user.svg" style="height: 30px; width: 30px; top: 5px;">
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <ul class="sidenav" id="mobile-nav">
        <li>
            <a href="#home">Home</a>
        </li>
        <li>
            <a href="#news">News</a>
        </li>
        <li>
            <a href="#about">About</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>
        <li>
            <a href="signin.php">Sign In</a>
        </li>
        <li>
            <a href="signup.php">Sign Up</a>
        </li>
    </ul>

    <div class="arrow-up"></div>
    <div class="dropdownUser" style="z-index:1;">
        <img src="img/dropdownUser.jpg">
        <p class="dropdownLabel">Welcome,<?php echo $_SESSION['username']; ?></p>
        
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
    </div>

    <!-- <h2>Card</h2>
<div class="label header tpoHeader">
    <h5 class="head-title">Total drives</h5>
</div>
<div class="card">
  <img src="images/image2.jpg" class="card-img" alt="image2">
  <div class="container">
    <h4><b>TPO MANAGEMENT</b></h4> 
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, architecto.</p>
  </div>
</div> -->

<section>
    <div style="margin-top:-55px;">
         <div class="slider">
            <figure>
                
                <div class="slide">
                    <!-- <p class="slider-text">Take Your Dream Vacation</p>
                    <p class="slider-text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, tempora.</p> -->
                    <img src="img/success.jpg">
                </div> 
                <div class="slide">
                    <!-- <p class="slider-text">We Work With All Budgets</p>
                    <p class="slider-text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, totam.</p> -->
                    <img src="img/work.jpg">
                </div> 
                <div class="slide">
                    <!--<p class="slider-text">Group & Individual Getaways</p>
                    <p class="slider-text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quae.</p>-->
                    <img src="img/laptop.jpg">
                </div> 
                <div class="slide">
                    <!--<p class="slider-text">Take Your Dream Vacation</p>
                    <p class="slider-text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, tempora.</p>-->
                    <img src="img/hiring.jpg">
                </div> 
            <figure>
        </div>
    </div>
    </section>

    <section class="section section-follow teal darken-2 white-text center">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h4>Follow Apsit</h4>
              <p>Follow us on social media for special offers</p>
              <a href="#" class="white-text">
                <i class="fab fa-facebook fa-4x"></i>
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="#" class="white-text">
                <i class="fab fa-twitter fa-4x"></i>
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="#" class="white-text">
                <i class="fab fa-linkedin fa-4x"></i>
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="#" class="white-text">
                <i class="fab fa-google-plus fa-4x"></i>
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="#" class="white-text">
                <i class="fab fa-pinterest fa-4x"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section id="news" class="scrollspy">
    <div>
        <div class="cards row">
            <div class="col-4">
                <div class="box">
                    <div class="icon">
                        <img style="height: 150px; width: 250px; align-self: center; margin-left:30px" src="img/cape.jpeg">
                    </div>
                    
                    <p>Capgemini SE is a French multinational company and is one of the world's largest IT consulting, outsourcing and professional services companies with over 200,000 employees in over 40 countries, of whom nearly 100,000 are in India. </p>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="icon">
                        <img style="height: 150px; width: 250px; align-self: center; margin-left:40px;" src="img/tcs.jpeg">
                    </div>
                   
                    <p>TCS is one of the largest Indian companies by market capitalization.TCS is now placed among the most valuable IT services brands worldwide. In 2015, TCS ranked 64th overall in the Forbes World's Most Innovative Companies ranking. </p>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="icon">
                        <img style="height: 150px; width: 250px; align-self: center; margin-left:40px" src="img/para.png">
                    </div>
                    
                    <p>Paramatrix Technologies Pvt Ltd is an ISO 9001:2015 certified, IT software development and services company headquartered in Mumbai which is largely focused on developing software applications and technology solutions. </p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <button class="button learnmore">Learn More</button>
            </div>
        </div>
    </div>
    </section>

<section id="about" class="section section-about center scrollspy">
<div class="container">
      <h2>About Apsit</h2>
      <p class="flow-text">A. P. Shah Institute of Technology (APSIT) has started functioning with commitment of imparting state of art technical education so as to inculcate conceptual know-how, analyzing skills, decision making abilities and leadership qualities in the students. APSIT stands committed to the intellectual and moral growth of every student.</p>
      <div class="row">
        <div class="col s12 m6">
          <img src="img/people.jpg" alt="" class="responsive-img circle">
        </div>
        <div class="col s12 m5 offset-m1">
          <br>
          <ul class="collection with-header z-depth-4">
            <li class="collection-header">
              <h5>Services</h5>
            </li>
            <li class="collection-item">
              <i class="material-icons left">check</i> Business Consultation
            </li>
            <li class="collection-item">
              <i class="material-icons left">check</i> Financial Analytics
            </li>
            <li class="collection-item">
              <i class="material-icons left">check</i> Security Services
            </li>
            <li class="collection-item">
              <i class="material-icons left">check</i> Marketing & Advertising
            </li>
            <li class="collection-item">
              <i class="material-icons left">check</i> Internet Services
            </li>
            <li class="collection-item">
              <i class="material-icons left">check</i> Accounting
            </li>
          </ul>
        </div>
      </div>
      </div>
  </section>

  <section id="contact" class="section section-contact center scrollspy">
        <div class="container">
          <div class="row">
            <div class="col s12 m6">
              <div class="card-panel teal white-text center">
                <i class="material-icons">email</i>
                <h5>Contact Us</h5>
                <p>Phone: +91 022-25973737</p>
                <p>Mobile: 7738305400 / 7738940600</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Location</h4></li>
                <li class="collection-item">kasarvadavali Bus Stop</li>
                <li class="collection-item">Survey No. 12, Opp. Hypercity Mall, Ghodbunder Road</li>
                <li class="collection-item">Thane West, Thane, Maharashtra 400615</li>
              </ul>
            </div>
            <div class="col s12 m6">
              <div class="card-panel grey lighten-3">
                <h5>Please fill out this form</h5>
                <div class="input-field">
                  <input type="text" placeholder="Name">
                </div>
                <div class="input-field">
                  <input type="email" placeholder="Email">
                </div>
                <div class="input-field">
                  <input type="number" placeholder="Phone">
                </div>
                <div class="input-field">
                  <input class="materialize-textarea" type="text" placeholder="Enter Message">
                </div>
                <input type="submit" name="" value="Submit" class="btn">
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="section teal draken-2 white-text center">
        <p class="flow-text">TPO MANAGEMENT &copy 2018</p>
          <samp class="center">Designed by APSIT.</samp>
      </footer>
      


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>


 
</body>
</html>