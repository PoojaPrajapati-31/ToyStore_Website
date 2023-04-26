<?php

$conn=mysqli_connect('localhost','root','password');
if(!$conn)
{
	echo 'Not Connected To Server';
}
if(!mysqli_select_db($conn , 'toystore'))
{
	echo 'Database Not Selected';
}

ini_set('display_errors', E_ALL);

session_start();

$username = '';
if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}