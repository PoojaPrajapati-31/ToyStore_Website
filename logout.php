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
// if(isset($_SESSION['lemail']))
// {
session_start();
unset($_SESSION['username']);
session_destroy(); // destroy session
$message = "Logout Successfully !";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location:http://localhost/toy/home.php?option=login");
// }
 // else
 // {
	 // echo "<script type='text/javascript'>alert(".mysqli_error($conn)");</script>";
	// echo("Error description: " . mysqli_error($conn));
 // }
?>
