<?php

require '../dbcon.php';
if(isset($_POST['login']))
{
	$adminemail = $_POST['aemail'];
	$password = md5($_POST['password']);
	
	$sql=mysqli_query($conn,"select * from admin where a_email='$adminemail' and a_password='$password'");

	$r=mysqli_num_rows($sql);

	$result = mysqli_fetch_assoc($sql);
	
	if($r==1){
		$_SESSION['adminemail']=$adminemail;
		header('location:/admin/admin.php');
	} else {
		$_SESSION['error'] = 'Invalid password';
	}
}
?>
<html>
<head>
	
<style>
body{
	background-repeat: no-repeat;
	background-size: cover;	
}
.button{
	background-color:#0040ff;
	color:white;
	border: none;
	cursor: pointer;
	padding: 10px 25px;
    margin-top: 10px;
}
div{
	background-color:f2edec;
	width:350px;
	height:400px;
	margin:0 auto;	
	opacity: 0.8;
}
</style>
<meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "/admin/jquery.js"></script>
</head>
<body style="background: url(/admin/wallpaper.jpeg) no-repeat;background-size: cover">
<br><br>
<br><br>
<form action="/admin/index.php" method="post">
<div align="center" >
<img src="/admin/admin.png" alt="admin" style="position:relative;top:-40px;border-radius: 50%;height:100px">
<h3>Admin Login</h3>
<?php
if(isset($_SESSION['error'])) {
	echo '<p style="color: red">' . $_SESSION['error'] .'</p>';
	unset($_SESSION['error']);
}
?>
<table align="center" cellspacing="20px" cellpadding="10px">
<tr>
<td><input type="text" placeholder="Email Id" border="none" name="aemail" required /></td><br>
</tr>
<tr>
<td><input type="password" placeholder=" Password" name="password" required /></td>
</tr>
<tr>
<td align="center">
<input type="submit" onclick="" name="login"  value="Login"class="button"></button>
</td>
</tr>
</table>
</div>
</form>
</body>
</html>
