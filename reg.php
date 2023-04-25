<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{
	echo 'Not Connected To Server';
}
if(!mysqli_select_db($conn , 'toystore'))
{
	echo 'Database Not Selected';
}

if(isset($_POST['submit']))
{
$first_name = $_POST['f_name'];
$last_name = $_POST['l_name'];
$email_id = $_POST['email'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$address=$_POST['address'];
$city = $_POST['city'];
$username = $_POST['username'];
$password = $_POST['password'];	
$sql="select * from userreg where email='$email_id'";
$sql1=mysqli_query($conn,$sql);	
$r=mysqli_num_rows($sql1);	
if($r==1){
	//echo "Already Exist";
  $message = "Already Exist";
	echo "<script type='text/javascript'>alert('$message');</script>";
  header("location:http://localhost/toy/reg.php"); //reg page
}
else {
	$sql2 = "insert into userreg (first_name,last_name,email,contact,age,address,city,username,password) 
    values ('$first_name','$last_name','$email_id','$contact','$age','$address','$city','$username','$password')";			
    // $sqlResult=mysqli_query($conn,$sql2);	
    if(!mysqli_query($conn,$sql2))
    {
      echo 'Not Inserted';
      echo("Error description: " . mysqli_error($conn));
    }
    else
    {
      $message = "Registration Done Successfully !";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("location:http://localhost/toy/home.php?option=login"); //login page
    }
    
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <title>Login</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src = "jquery.js"></script>	
    <!-- login css-->
    <link rel="stylesheet" href="css/style2.css">   
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

    <!-- header section strats -->
    
          <!---  <header class="header_section"> --->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="http://localhost/toy/home.php?option=home"><span>ToyStore</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="http://localhost/toy/home.php?option=home">Home </a>
              </li>            
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/toy/home.php?option=shop">Shop</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="http://localhost/toy/home.php?option=category">Category</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/toy/home.php?option=contact">Contact</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="http://localhost/toy/home.php?option=login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/toy/home.php?option=about"> About</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
    
}
/* .signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	 */
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;	
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
    font-size:20px;
    font-weight: bold;	
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>

<?php
if(isset($_post['submit']))
{}

?>
<div class="signup-form" style="margin-top:70px">
    <form action="reg.php" method="post">
		<h2>Register</h2>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="f_name" placeholder="First Name" required></div>
				<div class="col"><input type="text" class="form-control" name="l_name" placeholder="Last Name" required></div>
			</div>        	
        </div>
             <div class="form-group">
            <input type="number" class="form-control" name="age" placeholder="Age" required="required">
        </div> 
             <div class="form-group">
  
<input type="numeric" name="contact" maxlength="10" placeholder="Phone number" required> 
        </div> 
        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>
            <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="City" required="required">
        </div>		                        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="username" placeholder="Username" required>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
        </div>      
		<div class="form-group">
            <button type="submit" onclick = "return Validate();" name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div align="center"><a href="http://localhost/toy/home.php?option=login" align="center">Already have an account??</a></div>
</div>

<script>
  function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    }
	function lettersOnly() 
{
            var charCode = event.keyCode;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)

                return true;
            else
                return false;
}
  </script>
</body>
</html>