<?php
require 'dbcon.php';

/*if (isset($_SESSION["fn"])) {
	$username = $_SESSION["fn"];
        echo "$username"; exit;
	
}
*/
/*if (isset($_SESSION["fname"])) {
	$fname = $_SESSION["fname"];
	//$postcode = (int) $_POST['postcode'];
	//$u = (int)$uid;
        //echo "$uid";
}*/

//session_start();
//include "index.php";

$sql=mysqli_query($conn,"select * from orders ORDER BY o_id desc limit 1");
$row=mysqli_fetch_array($sql);
// var_dump($row);
//die();
$oId=$row['o_id'];
$userid1=$row['user_id'];
$toy1=$row['toy_id'];

//we have tried it
$dateFormat = $row['order_date'];
$createDate = new DateTime($dateFormat);
//echo $createDate;
$strip = $createDate->format('d-m-Y');
//echo $strip;
//$orderDate = date('d-m-y', strtotime($dateFormat));

$sql2=mysqli_query($conn,"select * from toys where t_id=$toy1");
$row2=mysqli_fetch_array($sql2);
$cat=$row2['a_category'];

$sql1=mysqli_query($conn,"select first_name,last_name from userreg where user_id=$userid1");

$row1=mysqli_fetch_array($sql1);
$cfname=$row1['first_name'];
$clname=$row1['last_name'];
//echo $cname; exit;

require 'header.php';

?>
<br><br><br>
<div class="border border-primary container">
<h1 align="center">ToyStore</h1>
<h2 align="center">Invoice</h2>
<center><img src="images/<?php echo $row2['image_path'];?>" width="150" height="150"></center><br> 
<div align="left">
<h4><p align="left">

Address:<br>
ToyStore <br>
Vasai Road(E)<br>
</h4></p>
<p><h4>Name: <?php echo "$cfname";?>&nbsp;<?php echo "$clname";?></h4></p>

<table border="1" align="left" width="100%" style="color: #ffffff;">
<tr>
<td><h4>Order Id</h4></td>
<td><h4>Customer Id</h4></td>
<td><h4>Toy Category</h4></td>
<td><h4>Quantity</h4></td>
<td><h4>Total price</h4></td>
<td><h4>Date</h4></td>

</tr>
<tr>
<td><h4><?php echo $row['o_id']; ?></h4></td>
<td><h4><?php echo $userid1 ?></h4></td>
<td><h4><?php echo $cat ?></h4></td>
<td><h4><?php echo $row['quantity']; ?></h4></td>
<td><h4><?php echo $row['total_amount']; ?></h4></td>
<td><h4><?php echo $row['order_date']; ?></h4></td>

</tr>
</table>
<br><br><br><br><br>
<center><h4><font style="color:red">Note:Please take the copy of this Invoice as Booking Recipt.</font></h4><br>
<button class="no_print" onclick="window.print()">Print this page</button></center><br>
</div>
</div>
<?php 
require 'footer.php';