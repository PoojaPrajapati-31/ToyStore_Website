<?php
require '../dbcon.php';
if (!isset($_SESSION['adminemail'])) {
	$_SESSION['error'] = 'Login to continue';
	header('location: /admin/');
}
if (isset($_POST['logout']))
{
$message = "Logout Successfully !";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location: /admin/adminlogin.php");
}
?>

