<?php
require '../dbcon.php';
if (!isset($_SESSION['adminemail'])) {
	$_SESSION['error'] = 'Login to continue';
	header('location: /admin/');
}
$queryy=mysqli_query($conn,"select t_id,a_category,t_amt,image_path,image_desc from toys");
if(isset($_REQUEST['del']))
{
	$del=$_REQUEST['del'];
	$sql=mysqli_query($conn,"delete from toys where t_id='$del'");
	header('location:/admin/manage.php');
	exit();
} 
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>ToyStore Admin</title>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="https://icons8.com/line-awesome">
<link rel="stylesheet" href="css/admin.css">
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
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/admin2.css" type="text/css">
    <style>
										thead {
											display: table-header-group;
											vertical-align: left;
											border-color: inherit;
											
										}

										</style>
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


	<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Manage toys</h2>
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
                            
							<div class="panel-heading"><h3>Toy Details</h3></div>
                            <br>
							<div class="panel-body">
								<table id="mData" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										
										<tr>
										    <th>Sr No.</th>
											<th>Age category</th>
											<th>Image</th>
											<th>Amount</th>
											<th>Edit</th>
											<th>Delete<th>											
										</tr>
									</thead>
									<tbody>
                                    
<?php 
$i=1;
while($row=mysqli_fetch_array($queryy))
{
?>
										<tr align="center">
											<td><?php echo $row['t_id'];?></td>
											<td><?php echo $row['a_category'];?></td>
											<td><img src="images/<?php echo $row['image_path'];?>" height="100px"widht="100px" alt="Image" /></td>
											<td><?php echo $row['t_amt'];?></td>
                                            <td><a href="edit.php?t_id=<?php echo $row['t_id']; ?>">Edit</a></td>
											<td>&nbsp;&nbsp;<a href="delete.php?del=<?php echo $row['t_id']; ?>" name="submit" ><i class="fa fa-close"></i></a></td>
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

