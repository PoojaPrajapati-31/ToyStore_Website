<?php 
require 'dbcon.php';
require 'header.php';
?>
  

  <?php
$opt = $_GET['option'] ?? 'home';
	
  if($opt == "home")
	{
	include('home.php');
	}
	if($opt == "shop")
	{
	include('shop.php');
	}
	if($opt == "contact")
	{
	include('contact.php');
	}
  if($opt == "category")
	{
	include('category.php');
	}
  if($opt == "login")
	{
	include('login.php');
	}
  if($opt == "about")
	{
	include('about.php');
	}
  if($opt == "18")
  {
  include('0-18age.php');
  }
  if($opt == "36")
  {
    include('18-36age.php');
  }
  if($opt == "3")
  {
    include('3-5year.php');
  }
  if($opt == "5")
  {
    include('5-7year.php');
  }
  if($opt == "7")
  {
    include('7-9year.php');
  }
  if($opt == "9")
  {
    include('9-12year.php');
  }
  if($opt == "12")
  {
    include('12-15year.php');
  }
  if($opt == "15+")
  {
    include('15+year.php');
  }
  require 'footer.php';
?>