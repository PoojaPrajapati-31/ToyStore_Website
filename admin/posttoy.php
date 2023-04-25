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
if(isset($_POST['submit']))
{
	
$model = $_POST['model'];
$brandname = $_POST['brand'];
$detail=$_POST['image_desc'];
$total=$_POST['rent_amt'];
$year=$_POST['model_year'];
$reg_no=$_POST['reg_no'];
$vimage1=$_FILES["img1"]["name"];
 // $vimage2=$_FILES["img2"]["name"];
 // $vimage3=$_FILES["img3"]["name"];

$sql2="insert into vehicle(model, brand ,image_desc, rent_amt ,model_year,image_path,reg_no) values ('$model','$brandname','$detail','$total','$year','$vimage1','$reg_no')";
move_uploaded_file($_FILES["img1"]["tmp_name"],"images/".$vimage1);
 // move_uploaded_file($_FILES["img2"]["tmp_name"],"images/".$_FILES["img2"]["name"]);
 // move_uploaded_file($_FILES["img3"]["tmp_name"],"images/".$_FILES["img3"]["name"]);

if(!mysqli_query($conn,$sql2))
{
	echo 'Not Inserted';
	echo("Error description: " . mysqli_error($conn));
}
else
{
$message = "Data Submitted Successfully !";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>
<html lang="en" class="no-js">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>ToyStore Admin</title>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="https://icons8.com/line-awesome">
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
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/style2.css" type="text/css">
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
                    <a href="index.php"><span class="las la-sign-out-alt"></span>
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
					
						<h2 class="page-title">Add Vehicle</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Fill Basic Info</div>
                                    <hr>    
									<div class="panel-body">
<form method="post" class="form-horizontal" action="postbike.php" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Vehicle Model<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="model" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="brand" required>
<option value="select"> Select </option>
		<option value="Honda">Honda</option>
		<option value="Hero">Royal Enfield</option>
		<option value="TVS">Bajaj</option>
		<option value="Suzuki">Suzuki</option>
		<option value="Yahama">Yahama</option>
</select>
</div>
</div>
											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="image_desc" rows="3" required></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Rent amount Per Day<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="rent_amt" class="form-control" required>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="model_year" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Registration No.<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="reg_no" class="form-control" required>
</div>
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