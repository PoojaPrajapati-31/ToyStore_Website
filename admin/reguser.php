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
$queryy=mysqli_query($conn,"Select * from userreg");
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>ToyStore Admin</title>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="https://icons8.com/line-awesome">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/admin2.css" type="text/css">


</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
           <h2><span class="las la-store-alt"></span><span>ToyStore</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php" class="active"><span class="las la-igloo"></span>
                        <span> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="add_new.php"><span class="lar la-edit"></span>
                        <span>New Items</span>
                    </a>
                </li>
                <li>
                    <a href="manage.php"><span class="las la-clipboard-list"></span>
                        <span>Manage Products</span>
                    </a>
                </li>
                <li>
                    <a href="managebooking.php"><span class="las la-shopping-bag"></span>
                        <span>Manage Booking</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span>
                        <span>Reg User</span>
                    </a>
                </li>
                <li>
                <a href="http://localhost/toy/home.php?option=login"><span class="las la-sign-out-alt"></span>
                        <span>Logout</span>
                    </a>
                </li>                
            </ul>
        </div>
    </div>   
<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
                   Admin Dashboard
                </h2>          
            </header>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<div class="ts-main-content">		
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Registerd User</h2>
                    
<!-- Zero Configuration Table -->
<div class="panel panel-default">
    
<div class="panel-heading"><h3>User Details</h3></div>
<br>
<hr width:2px; color:grey;>
<div class="panel-body">
<table id="mData" class="display table table-striped table-bordered table-hover" 
    cellspacing="0" width="100%">
    <br>
	<thead>
    <tr>
    <th>Sr_no</th> 
    <th>first_name</th>  
    <th>last_name</th>
    <th>email</th>
    <th>contact</th>
    <th>age</th>
    <th>address</th>
    <th>city</th>
    </tr>
    </thead>
<tbody align="center">
<?php
$i=1;
while($row=mysqli_fetch_array($queryy))
{
?>	
<tr>
    <td><?php echo $row['user_id'];?></td>   											
    <td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['last_name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['contact'];?></td>
    <td><?php echo $row['age'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['city'];?></td>
</tr>	
<?php
echo "</tr>";
$i++;
}
?>
	</tbody>
		</table>
		    </div>
				</div>
					</div>
				        </div>
			                </div>
		                        </div>
	                                </div>
	                                    </div>
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
//<?php 
//} 
//?>
