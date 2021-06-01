<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Simple website</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="mainfile.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  </head>

  <body id="bg">

<!-- Start Nav Bar --> 
<nav class="navbar">
  <div class="navbar__container">
    <a href="\iwtProject\index.php" id="navbar__logo">Resource Booking System</a>
    <div class="navbar__toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>

    <ul class="navbar__menu">

      <li class="navbar__item">
        <input type="text" placeholder="Search.." id="searchTxt" style="width: 250px;">
      </li>

      <li class="navbar__item">
        <a href="\iwtProject\index.php" class="navbar__links" id="home-page">Home</a>
      </li>
      <li class="navbar__item">
        <a href="\iwtProject\Available Resources.html\AvailableResources.php" class="navbar__links" id="AvailableResources-page">Available Resources</a>
      </li>
      <li class="navbar__item">
        <a href="\iwtProject\Resources.html\Resources.php" class="navbar__links" id="Resources-page">Resources</a>
      </li>
      <li class="navbar__item">
        <a href="\iwtProject\Daily Shedule.html\DailyShedule.php" class="navbar__links" id="DailyShedule-page">Daily Shedule</a>
      </li>
      <li class="navbar__item">
        <a href="\iwtProject\AboutUs.html\AboutUs.php" class="navbar__links" id="AboutUs-page">About Us</a>
      </li>
      <li class="navbar__item">
        <a href="\iwtProject\Contact Us.html\ContactUs.php" class="navbar__links" id="ContactUs-page">Contact Us</a>
      </li>
      <li class="navbar__btn">
        <a href="\iwtProject\Login.html\Login.php" class="button1" id="LogIn" style="width:10rem;">Log In</a>
      </li> 
    </ul>
  </div>
</nav>
<!-- End Nav Bar -->

<!-- Body Start -->
<br>
<h1 style="text-align: center;">Login Page</h1>
<br>

<div id="devCont_top">  
  <div id="devCont_middle"> 
    <div id="devCont_bottom">   
      <div class="topic">

        <!-- Login Start -->
        <br>
        <div class="container">
          <h2 style="text-align: center; font-family: 'Courier New', Courier, monospace; font-style: oblique; font-size: 5rem; display:block; text-shadow: 2px 1px #fff;">L o g i n</h2>
          <p style="text-align: center; font-family: 'Courier New', Courier, monospace; font-size: 3rem; display: block; text-shadow: 1px 1px #000;">Enter Your Login Credentials to log in to the System</p>
          <div id="Login_page" class="center">
            <form style="margin: auto; left: 38%; right: inherit;" method="GET">
              <div class="form-group">
                <label for="usr" style="font-family: 'Courier New', Courier, monospace; font-size: 2rem; display: block; text-shadow: 1px 1px #000;">Name:</label>
                <input type="text" class="form-control" id="usr" style="width:75%;" name="uname">
              </div>
              <div class="form-group">
                <label for="pwd" style="font-family: 'Courier New', Courier, monospace; font-size: 2rem; display: inline-block; text-shadow: 1px 1px #000;">Password:</label>
                <input type="password" class="form-control" id="pwd" style="width:75%" name="pwd">
              </div>
              <br>
              <div style="height: 40px; position: relative; border: none;">
                <div style="margin: 0; position: absolute; top: 60%; left: 15%; right: 26%; -ms-transform: translateY(-50%); transform: translateY(-50%); width: fit-content;">
                  <button class="navbar__btn button1" style="display: flex; box-shadow: 2px 2px 1px 1px #000; align-items: flex-start; cursor: pointer;">Login</button>
                </div> 
                <div style="margin: 0; position: absolute; top: 60%; left: 40%; right: 0%; -ms-transform: translateY(-50%); transform: translateY(-50%); width: fit-content;">
                  <button formaction="\iwtProject\Signe Up Page.html\SigneUpPage.php" class="navbar__btn button1" style="display: flex; box-shadow: 2px 2px 1px 1px #000; align-items: flex-start; cursor: pointer; ">Sigh Up</button>
                </div>
              </div>
              <div>
                
              </div>
              
            </form>
          </div>
        </div>
        <!-- Login End -->

      </div>      
    </div>        
  </div>       
</div>

<br>
<br>

<!-- 
<hr>
<br>


<div id="devCont_middle">         
</div>
        
<br>
<hr>
<br>

<div id="devCont_bottom">         
</div>

<br> -->

<!-- Body End -->



<!-- Footer Start -->
<footer class="site_footer" id="footer" style="font-family: 'Courier New', Courier, monospace; position:absolute; width:100%; height:fit-content;"> <!--1933-->
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6" style="bottom: 0%;">
        <h6 style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">About</h6>
        <p class="text-justify" style="font-family: 'Courier New', Courier, monospace; font-size: larger;">Welcome to newly designed website resource booking system. Resource booking system for the management and schedule of your facilities and resources. This web site is a faster, cleaner, and secure more personal website, especially this web site designed to make your booking experience well. 
        Resource booking that provides organizations with complete over the resources they wish to be able to book. Also, the goal is help user to get more direct bookings easily & contribute to growing their business.
        </p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6 style="font-family: 'Courier New', Courier, monospace; font-size: 1rem;">Categories</h6>
        <ul class="footer-links" style="font-family: 'Courier New', Courier, monospace;">
          <li><a href="\iwtProject\index.php" style="text-decoration: none;">Home</a></li>
          <li><a href="\iwtProject\Available Resources.html\AvailableResources.php" style="text-decoration: none;">Available Resources</a></li>
          <li><a href="\iwtProject\Resources.html\Resources.php" style="text-decoration: none;">Resources</a></li>
          <li><a href="\iwtProject\Daily Shedule.html\DailyShedule.php" style="text-decoration: none;">Daily Shedule</a></li>
          <li><a href="#" style="text-decoration: none;">About Us</a></li>
          <li><a href="\iwtProject\Contact Us.html\ContactUs.php" style="text-decoration: none;">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6 style="font-family: 'Courier New', Courier, monospace; font-size: 1rem;">Quick Links</h6>
        <ul class="footer-links">
          <li><a href="#">Contact Over facebook</a></li>
          <li><a href="#">Contact Over twitter</a></li>
          <li><a href="#">Contact Over Instergram</a></li>
          <li><a href="#">Contact Over Whatsapp</a></li>
          <li><a href="#">Contact Over Massanger</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright_text">Copyright &copy; 2021 All Rights Reserved by 
     <a href="#">Group GLB_3.2_11</a>.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
        </ul>
      </div>
    </div>
  </div>
</footer>


<!-- Footer End -->

  </body>
</html>