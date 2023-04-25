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
?>
<html>
<head>
<style>
body{
	background-repeat: no-repeat;
	background-size: cover;
		
}
button{
	background-color:#0040ff;
	color:white;
	border: none;
	cursor: pointer;
	padding: 10px 25px;
}
div{
	background-color:f2edec;
	width:320px;
	height:420px;
	margin:0 auto;	
}
</style>
<script>

	// function redirectPage()
	// {
	// 	window.location.href = 'http://localhost/project/AdminLogin.php';
	// }
</script>
</head>
<body background="wallpaper.jpeg">
<br><br>
<br><br>
<form>
<div align="center" >

<h3> Set new Password</h3>
<table align="center" cellspacing="15">
<tr>
<td><input type="text" placeholder="Username" border="none" name="username" required></td><br>
</tr>
<tr>
<td><input type="password" placeholder="New Password" required></td>
</tr>
<tr>
<td><input type="password" placeholder="Confirm Password" name="password" required></td>
</tr>
<tr>
<td align="center">
<button>Submit</button>
</td>
</tr>
<tr>
<td align="center">
<!-- <button onclick = "redirectPage();">Back</button> -->
</td>
</tr>
</table>
</div>
</form>
</body>
</html>