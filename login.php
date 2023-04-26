<?php
  require_once 'dbcon.php';

  //session_start(); 
  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    $pass = md5($_POST['pass']);
    $sql="select * from userreg where username='$username' and password='$pass'";
    $sql1=mysqli_query($conn,$sql);
    $r=mysqli_num_rows($sql1);
    $result = mysqli_fetch_assoc($sql1);		
        // $_SESSION['username']=$username;
        // ob_end_flush();
    /* while($uid=mysqli_fetch_array($sql1))
    {
    //$uid=$sql1['u_Id'];
    echo $uid['u_Id'];
    echo $uid['first_name'];
    echo $uid['last_name'];
    $_SESSION['userid']=$uid['u_Id'];
    $_SESSION['fname']=$uid['first_name'];
    $_SESSION['lname']=$uid['last_name'];
    } */
    //echo $uid['u_Id'];
    //echo "$uid";
    // $_SESSION['userid']=$uid;
    // echo $_SESSION['userid'];
    // echo "$uid";
    // $uid=mysqli_query($conn,"select u_id from user where email='$email' and password='$pass'");
    /* $r=mysqli_num_rows($sql1);
    $result = mysqli_fetch_assoc($sql1);	 */
    if($r==1){	
     
      $_SESSION['username']=$username;
        echo "<script>window.alert('Logged in Successfully ');</script>";
        if(isset($_SESSION['username']))
      {
   
      header('location:/index.php?option=category'); 
    ob_end_flush();
      }
      //	 echo $_SESSION['lemail'];
      //  echo  $_SESSION['fname'];
        
      //	header('Location: '.$_SERVER['PHP_SELF']);*/
      // die;
    //ob_end_flush();
  }
  }
  else
      {
          echo mysqli_error($conn);
      }
  ?>

  <html>
  <head>
      <title>Login</title>
      <!-- login css-->
      <link rel="stylesheet" href="css/style.css">   
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
      </head>
      <body>
          <div class="hero_area">
      <div class="hero_bg_box">
        <img src="images/hero-bg.png" alt="">
      </div>

              <!--------account------>
  <div class="account-page">
          <div class="row">
          <div class="col-2">
              <img src="images/image1.png">
              </div>
              <div class="col-2">
              <div class="form-container">
                  <div class="form-btn">

                  <span>Login</span>
                      
                    
                  </div>
                  <form id="login" method="POST" action="login.php">
                  <input type="text" placeholder="username" name='username' required>
                      <input type="password" placeholder="Password" name='pass' required>
                      <button type="submit" class="btn" name="login">User Login</button>
                      <a href="forget.php">Forget Password ?</a><br><br>  
                      <a href="reg.php">Don't have an Account? SignIn</a><br><br><br>
                      <a href="admin/admin.php">Admin login</a>
                  </form>
          </div>
          </div>
          </div>
      </body>
            </html>