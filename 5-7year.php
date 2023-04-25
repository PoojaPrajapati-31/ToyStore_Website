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

$queryy=mysqli_query($conn,"select t_id,t_name,a_category,t_amt,image_path,image_desc from toys where a_category='5-7y'");

?>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>5-7 year </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    

</head>

<body class="sub_page">
  

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          5-7 year Category
        </h2>
      </div>
      
      <div class="row">
      <?php 
      $result=mysqli_num_rows($queryy);
      if($result !=0){
        $i=1;
        while($row=mysqli_fetch_array($queryy))
        {
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
              <img src="images/<?php echo $row['image_path'];?>" alt="">
              </div>
              <div class="detail-box">
                <a href="">
                <?php echo $row['t_name'];?>
                </a>
                <h6>
                <?php echo $row['t_amt'];?>
                </h6>
                  
                    <a href="toydetails.php?t_id=<?php echo $row['t_id']; ?>"><button>Add</button></a>
                  
              </div>
            </a>
          </div>
        </div>
        <?php
echo "</tr>";
$i++;
  }
}else {
?>

   <h2>Sorry..No Toys Avaible for this Category currently.</h2> 
   <style>
      h2{
        color: white;
      }
   </style>
   <?php } ?>    
      </div>
      <div class="btn-box">
        <a href="http://localhost/toy/home.php?option=category">
          View Category
        </a>
      </div>
    
  </section>

  <!-- end shop section -->


</body>

</html>