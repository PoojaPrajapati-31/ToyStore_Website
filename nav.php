
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php"><span>ToyStore</span></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
              <?php if(isset($_SESSION['username'])==0)
                echo $_SESSION['username']; ?>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="home.php?option=shop">Shop</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="category.php">Category</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php?option=contact">Contact</a>
              </li>
                
              <li class="nav-item">
              <?php 
              if(isset($_SESSION['username'])==1)
              {	 ?>
                <a class="nav-link" href="login.php">Logout</a>
                <?php  }else{
              ?>
                <a class="nav-link" href="login.php">Login</a>
                <?php }?>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="read.php"></a>
                </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->