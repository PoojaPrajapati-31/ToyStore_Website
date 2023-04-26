<?php
require '../dbcon.php';
if (!isset($_SESSION['adminemail'])) {
	$_SESSION['error'] = 'Login to continue';
	header('location: /admin/');
}
$queryy=mysqli_query($conn,"select count(*) from userreg as result");
$result=mysqli_fetch_array($queryy);
$queryy1=mysqli_query($conn,"select count(*) from toys as result1");
$result1=mysqli_fetch_array($queryy1);
$queryy2=mysqli_query($conn,"select count(*) from orders as result2");
$result2=mysqli_fetch_array($queryy2);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>ToyStore Admin</title>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="https://icons8.com/line-awesome">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/style2.css">
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
                    <a href="" class="active"><span class="las la-igloo"></span>
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
                    <a href="reguser.php"><span class="las la-receipt"></span>
                        <span>Reg User</span>
                    </a>
                </li>
                <li>
                    <a href="/index.php?option=login"><span class="las la-sign-out-alt"></span>
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
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?php echo $result[0] ?></h1>
<span a href=""><b>Reg Customers</b></span><br><br><hr><a href="reguser.php" class="block-anchor panel-footer" ><small><b>Full Detail</b> </small></a>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                
                 <div class="card-single">
                    <div>
                        <h1><?php echo $result1[0] ?></h1>
                        <span><b>Listed toys</b></span><br><br><hr><a href="manage.php" class="block-anchor panel-footer" ><small ><b>Full Detail</b> </small></a>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                 <div class="card-single">
                    <div>
                        <h1><?php echo $result2[0] ?></h1>
                        <span><b>Total Orders</b></span><br><br><hr><a href="managebooking.php" class="block-anchor panel-footer" ><small style="color: white;"><b>Full Detail </b></small></a>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
            </div>
              
            

        </main>
    </div>
</body>
</html>






