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
if (isset($_POST['logout']))
{
$message = "Logout Successfully !";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location: http://localhost/toy/admin/adminlogin.php");
}
?>

