<?php 
session_start();
// echo $_SESSION['username'];
// ob_start();
if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
} else {
  $username = '';
}
?>
<!DOCTYPE html>
<html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Index </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <div class="hero_area">
  
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="http://localhost/toy/home.php?option=home"><span>ToyStore</span></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">

            <li class="nav-item ">
                <?php 
                if($username)
                { ?> <label><b>Hello <?php echo $_SESSION['username'];?></b></label> 
                <?php  }
                else {?>
                <label></label>
                <?php } ?>
              </li>

              <li class="nav-item ">
                <a class="nav-link" href="home.php?option=home">Home </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="home.php?option=shop">Shop</a>
              </li>

                <li class="nav-item">
                <a class="nav-link" href="home.php?option=category">Category</a>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="home.php?option=contact">Contact</a>
              </li>
                
              <li class="nav-item">
              <?php if($username)
                { ?>
                <a class="nav-link" href="logout.php">Logout</a>
                <?php } else {?>
                <a class="nav-link" href="home.php?option=login">Login</a>
                <?php }?>
                
              </li>
                <li class="nav-item">
                <a class="nav-link" href="home.php?option=about"> About</a>
              </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="read.php"></a>
                </li> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>

<body>

  <?php
$opt = $_GET['option'];
	
  if($opt == "home")
	{
	include('index.php');
	}
	if($opt == "shop")
	{
	include('shop.php');
	}
	if($opt == "contact")
	{
	include('contact.php');
	}
  if($opt == "category")
	{
	include('category.php');
	}
  if($opt == "login")
	{
	include('login.php');
	}
  if($opt == "about")
	{
	include('about.php');
	}
  if($opt == "18")
  {
  include('0-18age.php');
  }
  if($opt == "36")
  {
    include('18-36age.php');
  }
  if($opt == "3")
  {
    include('3-5year.php');
  }
  if($opt == "5")
  {
    include('5-7year.php');
  }
  if($opt == "7")
  {
    include('7-9year.php');
  }
  if($opt == "9")
  {
    include('9-12year.php');
  }
  if($opt == "12")
  {
    include('12-15year.php');
  }
  if($opt == "15+")
  {
    include('15+year.php');
  }
  
?>
<!-- footer code-->
<section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <style>
              h4{
                color:white;
              }
              </style>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/__pooja_._3103">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="about.php">
                About
              </a>
              <a class="" href="shop.php">
                Shop
              </a>
                <a class="" href="category.php">
                    Category
                </a>
              <a class="" href="contact.php">
                Contact
              </a>
                <a class="" href="login.php">
                    Login
                </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end main footer section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="index.php">ToyStore</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
</body>
</html>