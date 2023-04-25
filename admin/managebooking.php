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
$queryy=mysqli_query($conn,"select * from orders");

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>ToyStore Admin</title>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="https://icons8.com/line-awesome">
   <!-- Admin Stye -->
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/admin2.css">
<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	
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
                    <a href=""><span class="las la-shopping-bag"></span>
                        <span>Manage Booking</span>
                    </a>
                </li>
                <li>
                    <a href="reguser.php"><span class="las la-receipt"></span>
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
						<h2 class="page-title">Manage Order</h2>
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Order Info</h3><div class="page-title"></div>
                            
							<div class="panel-body">
								<table id="mdata" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>o_id</th>
                                            <th>user_id</th>
											<th>toy_id</th>
											<th>f_name</th>
                                            <th>l_name</th>
                                            <th>Address</th>
                                            <th>contact</th>
                                            <th>Email</th>
                                            <th>total_amount</th>
											<th>Order date</th>
											<th>Payment Status</th>
										</tr>
									</thead>
									<tbody>
<?php
$i=1;
while($row=mysqli_fetch_array($queryy))
{
	?>
										<tr>
                                            <td><?php echo $row['o_id'];?></td>&nbsp;
											<td><?php echo $row['user_id'];?></td>
											<td><?php echo $row['toy_id'];?></td>
											<td><?php echo $row['user_firstname'];?></td>
											<td><?php echo $row['user_lastname'];?></td>
                                            <td><?php echo $row['user_address'];?></td>
                                            <td><?php echo $row['user_contact'];?></td>
                                            <td><?php echo $row['user_email'];?></td>
                                            <td><?php echo $row['total_amount'];?></td>
                                            <td><?php echo $row['order_date'];?></td>
											<td><?php echo $row['pay_status'];?></td>
											<td>
											 	<div class="btn-group" style="width: 150px;">
                                            <?php if(isset($row['pay_status']) && $row['pay_status'] == 'paid'){  ?>
                                              <button type="button" class="btn btn-sm btn-info">Paid</button>
                                            <?php } elseif (isset($row['pay_status']) && $row['pay_status'] == 'pending') { ?>
                                              <button type="button" class="btn btn-sm btn-info">Pending</button>
                                            <?php } else { ?>
												<button type="button" class="btn btn-sm btn-info">Payment Status</button>
											<?php } ?> 
                                              
                                            <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              <span class="caret"></span>
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                              <li><a href="status.php?status=paid&id=<?php echo $row['user_id'] ?>">Paid</a></li>
                                              <li><a href="status.php?status=pending&id=<?php echo $row['user_id'] ?>">Pending</a></li>
                                            </ul>
                                          </div>
											</td>
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
