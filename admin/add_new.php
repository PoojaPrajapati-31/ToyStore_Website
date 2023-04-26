<?php
require '../dbcon.php';
if (!isset($_SESSION['adminemail'])) {
	$_SESSION['error'] = 'Login to continue';
	header('location: /admin/');
}
if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$category = $_POST['category'];
	$detail = $_POST['image_desc'];
	$total = $_POST['price'];
	$vimage1 = $_FILES["img1"]["name"];

	$sql2 = "insert into toys(t_name, a_category ,image_desc, t_amt ,image_path) values ('$name','$category','$detail','$total','$vimage1')";
	move_uploaded_file($_FILES["img1"]["tmp_name"], "images/" . $vimage1);

	if (!mysqli_query($conn, $sql2)) {
		echo 'Not Inserted';
		echo ("Error description: " . mysqli_error($conn));
	} else {
		$message = "Data Submitted Successfully !";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('location:manage.php');
	}
}
?>


<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

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
	<link rel="stylesheet" href="css/admin.css" type="text/css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://icons8.com/line-awesome">
	<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
		}

		.succWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
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

							<div class="page-title">
								<h2>Add Toys</h2><br>
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default">

											<div class="panel-heading">
												<h3>Fill Basic Info</h3><br>
												<div class="panel-body">
													<form method="post" class="form-horizontal" action="add_new.php" enctype="multipart/form-data">
														<div class="form-group">
															<label class="col-sm-2 control-label">Toy name<span style="color:red">*</span></label>
															<div class="col-sm-4">
																<input type="text" name="toyName" class="form-control" required>
															</div>
															<label class="col-sm-2 control-label">Select Category<span style="color:red">*</span></label>
															<div class="col-sm-4">
																<select class="selectpicker" name="category" required>
																	<option value="select"> Select </option>
																	<option value="0-18m">0-18 month</option>
																	<option value="18-36m">18-36 month</option>
																	<option value="3-5y">3-5 year</option>
																	<option value="5-7y">5-7 year</option>
																	<option value="7-9y">7-9 year</option>
																	<option value="9-12y">9-12 year</option>
																	<option value="12-15y">12-15 year</option>
																	<option value="15+y">15+ year</option>
																</select>
																<div class="page-title">
																</div>
															</div>
															<div class="page-title">
																<div class="hr-dashed"></div>
																<div class="form-group">

																	<label class="col-sm-2 control-label">Toy description<span style="color:red">*</span></label>
																	<div class="col-sm-10">
																		<textarea class="form-control" name="image_desc" rows="3" required></textarea>
																	</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-2 control-label">Toy price<span style="color:red">*</span></label>
																	<div class="col-sm-4">
																		<input type="text" name="price" class="form-control" required>
																	</div>
																	<div class="page-title">
																	</div>
																	<div class="hr-dashed"></div>
																	<div class="form-group">
																		<div class="col-sm-12">
																			<h4><b>Upload Image</b></h4>
																		</div>
																	</div>


																	<div class="form-group">
																		<div class="col-sm-4">
																			Image <span style="color:red">*</span><input type="file" name="img1" required>
																		</div>
																	</div>

																	<div class="hr-dashed"></div>
																</div>
															</div>
														</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>

											</form>
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