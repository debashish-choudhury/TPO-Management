<!doctype html>
<html lang="en">
<head>  
     <title>TPO MANAGEMENT</title> 
     <!--Import Google Icon Font-->
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
  /* z-index: 1; */
}
    </style>
</head>

<body id="home" class="scrollspy">
    <!-- <nav>
        <ul class="topnav" >
            <li class="logo"><a href="index.php">TPO MANAGEMENT LOGO</a></li>
            <li class="topnav-right"><img id="userLogin" src="img/user.svg"></li>
            <li class="topnav-right"><a href="studentSignin.php">Online Resume</a></li> 
            <li class="topnav-right"><a href="#about">About</a></li>
            <li class="topnav-right"><a href="#contact">Contact</a></li>
            <li class="topnav-right"><a href="#news">News</a></li>
            <li class="topnav-right"><a href="#home">Home</a></li>
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
    </nav> -->

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
        <p class="dropdownLabel">Welcome to our website.</p>
        <a href="signup.php"><input type="button" class="dropdownButtonSignup" value="Sign Up"></a>
        <a href="signin.php"><input type="button" class="dropdownButtonSignin" value="Sign In"></a>
    </div>
    
    <!-- <div class="container" id="section-1-gradient">
        
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

    <header>
      <h1 class="section2header">Chase Your Dreams!!!</h1>
    </header>
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
    
    <section>
    <div class="container">
    <div class="row">
    <div class="col-7">
        <article>
            <h2 style="text-align: center;">Mission</h2>
            <p>
            To inculate within the faculty and the students of APSIT the need and importance of Entrepreneurship Development. To develop and strengthen entrepreneurial qualities in the budding professionals who are interested in starting their own ventures.To enables students to remain self-reliant in their employment. Provide the facilities and trainings for the skill development with formal education.
            </p>
        </article>
    </div>
    <div class="col-5">
        <div class="img-icon">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/Ar70V8c_hOs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
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

<section id="about" class="section section-about center scrollspy" style="z-index: 1;">
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
    <div id="googlemap"></div>
    <div class="container">
      <div class="row">
        <div class="col s12 m6 offset-m6">
          <div class="card-panel z-depth-5">
            <h4>Contact Us</h4>
            <div class="input-field">
              <input type="text" id="name" placeholder="Name">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" id="email" placeholder="Email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" id="phone" placeholder="Phone Number">
              <label for="phone">Phone</label>
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" id="message" placeholder="Message"></textarea>
              <label for="message">Message</label>
            </div>
            <input type="submit" value="Submit" class="btn blue-grey">
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- <footer class="footsy">
        <div class="row">
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
    </footer> -->
    <footer class="section teal draken-2 white-text center">
        <p class="flow-text">TPO MANAGEMENT &copy 2018</p>
          <samp class="center">Designed by APSIT.</samp>
      </footer>
      


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  
  <script>
    $(document).ready(function () {
      // Init Sidenav
      // $('.button-collapse').sideNav();

      // Init Scrollspy
      $('.scrollspy').scrollSpy();

      //sidenav
      const sidenav = document.querySelector('.sidenav');
          M.Sidenav.init(sidenav, {});
          const slider = document.querySelector('.slider');
          M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 500,
            interval: 6000
          });

      const position = [19.2679, 72.9672];
      const centerPosition = [19.2679, 73.0100];

      function showGoogleMaps() {
        // Map positions
        const latLng = new google.maps.LatLng(position[0], position[1]);
        const centerLatLng = new google.maps.LatLng(centerPosition[0], centerPosition[1]);

        // Map options
        const mapOptions = {
          zoom: 14,
          streetViewControl: false,
          scaleControl: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: centerLatLng
        }

        // Create map
        var map = new google.maps.Map(document.getElementById('googlemap'), mapOptions);

        // Show Marker
        marker = new google.maps.Marker({
          position: latLng,
          map: map,
          draggable: false,
          animation: google.maps.Animation.BOUNCE, title:'APSIT',icon:'img/iconapist.png'
        });
        var infowindow = new google.maps.InfoWindow({
            content:'<h5>A P Shah Institute Of Technology</h5>'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
      }

      // Maps event
      google.maps.event.addDomListener(window, 'load', showGoogleMaps);

    });
  </script>
</body>

</html>