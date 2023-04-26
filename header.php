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
        <a class="navbar-brand" href="/index.php?option=home"><span>ToyStore</span></a>

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
                <a class="nav-link" href="index.php?option=home">Home </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="index.php?option=shop">Shop</a>
              </li>

                <li class="nav-item">
                <a class="nav-link" href="index.php?option=category">Category</a>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="index.php?option=contact">Contact</a>
              </li>
                
              <li class="nav-item">
              <?php if($username)
                { ?>
                <a class="nav-link" href="logout.php">Logout</a>
                <?php } else {?>
                <a class="nav-link" href="index.php?option=login">Login</a>
                <?php }?>
                
              </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?option=about"> About</a>
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