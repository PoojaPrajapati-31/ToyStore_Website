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
$t_id = $_GET['t_id'];
$query=mysqli_query($conn,"select * from toys where t_id=$t_id");

$data = mysqli_fetch_array($query); // fetch data

if(isset($_POST['submit'])) // when click on Update button
{
	//$v_type = $_POST['v_type'];
	$category = $_POST['a_category'];
    $t_amt = $_POST['t_amt'];
	$image_desc = $_POST['image_desc'];
	
    $edit = mysqli_query($conn,"update toys set a_category='$category', image_desc='$image_desc', t_amt='$t_amt' where t_id='$t_id'");
    if($edit)
    {
        // mysqli_close($conn); // Close connection
        $message = "Data Updated Successfully..!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:manage.php"); // redirects to all records page
    }
    else
    {
        echo mysqli_error($conn);
    }    
    
    
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>ToyStore Admin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="css/style2.css">
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="https://icons8.com/line-awesome">
<link rel="stylesheet" href="css/admin.css">
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
</head>
<body>
    <div class="container">   
        <br><br>  
        <div class="row">
           <div class="page-header">
            <h1 style="text-align: center;">Edit Toys</h1>      
          </div> 
            <div class="col-md-3"></div>
            <div class="col-md-6">			
			<form method="post">
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Age Category</b></span>
                      <input id="a_category" type="text" class="form-control" 
                      name="a_category" value="<?php echo $data['a_category'] ?>" 
                      placeholder="Enter category">
                    </div>
                    <br>					
					<div class="input-group">
                      <span class="input-group-addon"><b>Price</b></span>
                      <input id="t_amt" type="numeric" class="form-control" 
                      name="t_amt" value="<?php echo $data['t_amt'] ?>" 
                      placeholder="Enter Price">
                    </div>
                    <br>	
					<div class="input-group">
                      <span class="input-group-addon"><b>Description</b></span>
                      <input id="image_desc" type="text" class="form-control" 
                      name="image_desc" value="<?php echo $data['image_desc'] ?>" 
                      placeholder="Enter vehicle description">
                    </div>
                    <br>                     
                    <div class="input-group">
                        <input type="submit"  value="Update" name="submit" class="btn btn-success">
                    </div>                  
                </form>
            </div> 
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>